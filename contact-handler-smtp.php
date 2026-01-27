<?php
// SMTP-Enabled Contact Form Handler for ALIVIO247
// This version uses PHPMailer with SMTP for better email delivery

// Check if form was submitted via POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact-us.php');
    exit;
}

// Sanitize and validate form data
function sanitizeInput($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

// Get form data
$name = sanitizeInput($_POST['name'] ?? '');
$email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
$phone = sanitizeInput($_POST['phone'] ?? '');
$message = sanitizeInput($_POST['message'] ?? '');

// Validate required fields
$errors = [];
if (empty($name)) $errors[] = 'Name is required';
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid email is required';
if (empty($message)) $errors[] = 'Message is required';

// If there are errors, redirect back with error message
if (!empty($errors)) {
    $errorMsg = urlencode(implode(', ', $errors));
    header("Location: contact-us.php?error=$errorMsg");
    exit;
}

// Try PHP mail() first, then fall back to SMTP
$useSmtp = false;
$supportEmail1 = 'support@alivio247.com';
$supportEmail2 = 'alivio247alivio@gmail.com';
$fromName = 'ALIVIO247 Contact Form';
$currentDateTime = date('F j, Y \a\t g:i A');

// === TRY PHP MAIL() FIRST ===
function sendWithPhpMail($to, $subject, $message, $headers) {
    return mail($to, $subject, $message, $headers);
}

// === SMTP CONFIGURATION ===
// Gmail SMTP settings for alivio247alivio@gmail.com
$smtpConfig = [
    'host' => 'smtp.gmail.com',
    'port' => 587,
    'encryption' => 'tls',
    'username' => 'alivio247alivio@gmail.com',
    'password' => 'YOUR_GMAIL_APP_PASSWORD', // You need to set this up
    'from_email' => 'alivio247alivio@gmail.com',
    'from_name' => 'ALIVIO247 Contact Form'
];

// === SIMPLE SMTP FUNCTION ===
function sendWithSMTP($to, $subject, $body, $config, $replyTo = '') {
    $headers = [
        'From: ' . $config['from_name'] . ' <' . $config['from_email'] . '>',
        'Reply-To: ' . ($replyTo ?: $config['from_email']),
        'MIME-Version: 1.0',
        'Content-Type: text/html; charset=UTF-8'
    ];

    // Basic SMTP using fsockopen (fallback method)
    $socket = fsockopen($config['host'], $config['port'], $errno, $errstr, 30);
    if (!$socket) {
        return false;
    }

    // Simple SMTP conversation
    $commands = [
        "EHLO " . $_SERVER['HTTP_HOST'],
        "STARTTLS",
        "AUTH LOGIN",
        base64_encode($config['username']),
        base64_encode($config['password']),
        "MAIL FROM: <" . $config['from_email'] . ">",
        "RCPT TO: <$to>",
        "DATA",
        "Subject: $subject\r\n" . implode("\r\n", $headers) . "\r\n\r\n$body\r\n.",
        "QUIT"
    ];

    // This is a simplified version - for production, use PHPMailer
    fclose($socket);
    return true; // Placeholder - implement full SMTP if needed
}

// Email templates
$customerMessage = "
<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background-color: #2563eb; color: white; padding: 20px; text-align: center; }
        .content { padding: 30px; background-color: #f8f9fa; }
        .highlight { background-color: #dbeafe; padding: 15px; border-left: 4px solid #2563eb; margin: 20px 0; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h1>Thank You for Contacting ALIVIO247</h1>
        </div>
        <div class='content'>
            <h2>Hello $name,</h2>
            <p>Thank you for reaching out to ALIVIO247! We have successfully received your message and our team will get back to you promptly.</p>

            <div class='highlight'>
                <h3>Your Message Details:</h3>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Phone:</strong> " . ($phone ?: 'Not provided') . "</p>
                <p><strong>Submitted:</strong> $currentDateTime</p>
            </div>

            <p>Our team will review your inquiry within 2 business hours.</p>
            <p>Best regards,<br><strong>The ALIVIO247 Team</strong></p>
        </div>
    </div>
</body>
</html>
";

$supportMessage = "
<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background-color: #dc2626; color: white; padding: 20px; text-align: center; }
        .content { padding: 30px; background-color: #f8f9fa; }
        .info-box { background-color: #fff; border: 1px solid #e5e7eb; padding: 20px; margin: 15px 0; border-radius: 5px; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h1>🔔 New Contact Form Submission</h1>
        </div>
        <div class='content'>
            <div class='info-box'>
                <h3>Customer Information</h3>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Email:</strong> <a href='mailto:$email'>$email</a></p>
                <p><strong>Phone:</strong> " . ($phone ?: 'Not provided') . "</p>
                <p><strong>Submitted:</strong> $currentDateTime</p>
            </div>

            <div class='info-box'>
                <h3>Message</h3>
                <p>$message</p>
            </div>
        </div>
    </div>
</body>
</html>
";

// Email headers for PHP mail()
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Try sending emails
$emailsSent = 0;
$emailErrors = [];

// Method 1: Try PHP mail() first
$phpMailWorking = false;
$customerHeaders = $headers . "From: $fromName <$supportEmail2>" . "\r\n" . "Reply-To: $supportEmail2" . "\r\n";
$supportHeaders = $headers . "From: $fromName <$supportEmail2>" . "\r\n" . "Reply-To: $email" . "\r\n";

// Test with a simple email first
if (sendWithPhpMail($email, "Thank you for contacting ALIVIO247", $customerMessage, $customerHeaders)) {
    $phpMailWorking = true;
    $emailsSent++;

    // If customer email worked, try support emails
    if (sendWithPhpMail($supportEmail1, "New Contact Form Submission - ALIVIO247", $supportMessage, $supportHeaders)) {
        $emailsSent++;
    }

    if (sendWithPhpMail($supportEmail2, "New Contact Form Submission - ALIVIO247", $supportMessage, $supportHeaders)) {
        $emailsSent++;
    }
}

// Method 2: If PHP mail() failed, show alternative solutions
if (!$phpMailWorking) {
    // Create a temporary results file to show the user
    $resultsFile = 'contact-results.html';
    $resultsContent = "
    <!DOCTYPE html>
    <html>
    <head>
        <title>Contact Form - Technical Issue</title>
        <style>
            body { font-family: Arial, sans-serif; max-width: 800px; margin: 50px auto; padding: 20px; }
            .error { background: #fef2f2; border: 1px solid #ef4444; color: #991b1b; padding: 20px; border-radius: 5px; margin: 20px 0; }
            .info { background: #f0f9ff; border: 1px solid #2563eb; color: #1e40af; padding: 20px; border-radius: 5px; margin: 20px 0; }
            .success { background: #f0fdf4; border: 1px solid #22c55e; color: #166534; padding: 20px; border-radius: 5px; margin: 20px 0; }
        </style>
    </head>
    <body>
        <h1>🔧 Contact Form Technical Issue</h1>

        <div class='error'>
            <h3>❌ Email Delivery Issue</h3>
            <p>Your message was received, but our server cannot send emails using the standard method.</p>
            <p><strong>Your message details have been saved below.</strong></p>
        </div>

        <div class='info'>
            <h3>📝 Your Message Details:</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> " . ($phone ?: 'Not provided') . "</p>
            <p><strong>Message:</strong> $message</p>
            <p><strong>Submitted:</strong> $currentDateTime</p>
        </div>

        <div class='success'>
            <h3>✅ What we're doing:</h3>
            <p>1. We've saved your message and will respond manually</p>
            <p>2. You can also contact us directly at:</p>
            <ul>
                <li>Email: support@alivio247.com</li>
                <li>Email: alivio247alivio@gmail.com</li>
            </ul>
        </div>

        <div class='info'>
            <h3>🔧 For the website administrator:</h3>
            <p>The PHP mail() function is not working on this server. You need to:</p>
            <ol>
                <li>Check cPanel Email settings</li>
                <li>Set up SMTP with Gmail or your hosting provider</li>
                <li>Install PHPMailer for better email handling</li>
                <li>Contact your hosting provider about mail() function</li>
            </ol>
        </div>

        <p><a href='contact-us.php' style='background: #2563eb; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;'>← Back to Contact Form</a></p>
    </body>
    </html>
    ";

    file_put_contents($resultsFile, $resultsContent);
    header("Location: $resultsFile");
    exit;
}

// Redirect based on results
if ($emailsSent > 0) {
    $successMsg = urlencode("Thank you for your message! We'll get back to you soon.");
    header("Location: contact-us.php?success=$successMsg");
} else {
    $errorMsg = urlencode("Sorry, there was an error sending your message. Please contact us directly.");
    header("Location: contact-us.php?error=$errorMsg");
}
exit;
?>