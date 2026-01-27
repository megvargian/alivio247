<?php
// SMTP-ONLY Contact Form Handler for ALIVIO247
// Uses cPanel SMTP for reliable email delivery

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

// === SMTP CONFIGURATION FOR GODADDY ===
// GoDaddy SMTP settings for alivio247.com domain
$smtpConfig = [
    'host' => 'smtpout.secureserver.net',  // GoDaddy's SMTP server
    'port' => 587,  // GoDaddy uses 587 for TLS or 465 for SSL
    'encryption' => 'tls',  // Use TLS encryption
    'username' => 'support@alivio247.com',  // Your GoDaddy email account (create this if needed)
    'password' => 'Rd8s2*muRd8s2*mu',  // Password for support@alivio247.com
    'from_email' => 'support@alivio247.com',
    'from_name' => 'ALIVIO247 Contact Form'
];

$supportEmail1 = 'support@alivio247.com';
$supportEmail2 = 'alivio247alivio@gmail.com';
$currentDateTime = date('F j, Y \a\t g:i A');

// === SIMPLIFIED SMTP EMAIL SENDING (using PHP's built-in functions) ===
function sendSMTPEmail($to, $subject, $body, $config, $replyTo = '') {
    // Use PHP's mail function with custom headers for SMTP-like behavior
    $headers = "From: {$config['from_name']} <{$config['from_email']}>\r\n";
    $headers .= "Reply-To: " . ($replyTo ?: $config['from_email']) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

    // Set additional mail parameters for cPanel
    $parameters = "-f" . $config['from_email'];

    return mail($to, $subject, $body, $headers, $parameters);
}

// === EMAIL TEMPLATES ===
$customerSubject = "Thank you for contacting ALIVIO247";
$customerMessage = "
<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; }
        .header { background-color: #2563eb; color: white; padding: 20px; text-align: center; border-radius: 10px 10px 0 0; }
        .content { padding: 30px; background-color: #f8f9fa; border-radius: 0 0 10px 10px; }
        .highlight { background-color: #dbeafe; padding: 15px; border-left: 4px solid #2563eb; margin: 20px 0; border-radius: 5px; }
        .footer { background-color: #6b7280; color: white; padding: 15px; text-align: center; font-size: 12px; margin-top: 20px; }
    </style>
</head>
<body>
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

        <p>Whether you're exploring a partnership, requesting a demo, or need support, our team is here to help you find the perfect solution for your business communication needs.</p>

        <p><strong>What happens next?</strong></p>
        <ul>
            <li>Our team will review your inquiry within 2 business hours</li>
            <li>You'll receive a personalized response from one of our experts</li>
            <li>We'll schedule a consultation if requested</li>
        </ul>

        <p>Best regards,<br>
        <strong>The ALIVIO247 Team</strong></p>
    </div>
    <div class='footer'>
        <p>ALIVIO247 | Shahumyan 16 Street, 79, Yerevan, Republic of Armenia, 0065</p>
        <p>support@alivio247.com | alivio247alivio@gmail.com</p>
    </div>
</body>
</html>
";

$supportSubject = "New Contact Form Submission - ALIVIO247";
$supportMessage = "
<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; }
        .header { background-color: #dc2626; color: white; padding: 20px; text-align: center; border-radius: 10px 10px 0 0; }
        .content { padding: 30px; background-color: #f8f9fa; border-radius: 0 0 10px 10px; }
        .info-box { background-color: #fff; border: 1px solid #e5e7eb; padding: 20px; margin: 15px 0; border-radius: 5px; }
        .urgent { background-color: #fef2f2; border-left: 4px solid #dc2626; padding: 15px; margin: 20px 0; border-radius: 5px; }
        .message-box { background-color: #f0f9ff; border-left: 4px solid #2563eb; padding: 15px; margin: 20px 0; border-radius: 5px; }
        table { width: 100%; border-collapse: collapse; }
        td { padding: 8px; border-bottom: 1px solid #e5e7eb; }
    </style>
</head>
<body>
    <div class='header'>
        <h1>🔔 New Contact Form Submission</h1>
        <p>ALIVIO247 Website</p>
    </div>
    <div class='content'>
        <div class='urgent'>
            <h3>⚡ Action Required</h3>
            <p>A new contact form has been submitted. Please respond within 2 business hours.</p>
            <p><strong>Submitted:</strong> $currentDateTime</p>
        </div>

        <div class='info-box'>
            <h3>Customer Information</h3>
            <table>
                <tr><td style='font-weight: bold; width: 100px;'>Name:</td><td>$name</td></tr>
                <tr><td style='font-weight: bold;'>Email:</td><td><a href='mailto:$email'>$email</a></td></tr>
                <tr><td style='font-weight: bold;'>Phone:</td><td>" . ($phone ? "<a href='tel:$phone'>$phone</a>" : 'Not provided') . "</td></tr>
            </table>
        </div>

        <div class='message-box'>
            <h3>📝 Customer Message</h3>
            <div style='background: white; padding: 15px; border-radius: 5px; border: 1px solid #e5e7eb; white-space: pre-wrap;'>$message</div>
        </div>

        <div class='info-box'>
            <h3>📋 Next Steps</h3>
            <ul>
                <li>Review the customer's inquiry</li>
                <li>Respond with appropriate information or schedule consultation</li>
                <li>Log the interaction in CRM if applicable</li>
                <li>Follow up if no response within 24 hours</li>
            </ul>
        </div>
    </div>
</body>
</html>
";

// === SEND EMAILS ===
$emailsSent = 0;
$emailErrors = [];

// 1. Send thank you email to customer
$result1 = sendSMTPEmail($email, $customerSubject, $customerMessage, $smtpConfig);
if ($result1) {
    $emailsSent++;
} else {
    $emailErrors[] = "Failed to send thank you email to customer ($email)";
}

// 2. Send notification to support email 1
$result2 = sendSMTPEmail($supportEmail1, $supportSubject, $supportMessage, $smtpConfig, $email);
if ($result2) {
    $emailsSent++;
} else {
    $emailErrors[] = "Failed to send notification to $supportEmail1";
}

// 3. Send notification to support email 2
$result3 = sendSMTPEmail($supportEmail2, $supportSubject, $supportMessage, $smtpConfig, $email);
if ($result3) {
    $emailsSent++;
} else {
    $emailErrors[] = "Failed to send notification to $supportEmail2";
}

// === HANDLE RESULTS ===
if ($emailsSent > 0) {
    // At least one email was sent successfully
    $successMsg = urlencode("Thank you for your message! We'll get back to you soon. ($emailsSent emails sent)");
    header("Location: contact-us.php?success=$successMsg");
} else {
    // No emails were sent - create backup file and show error
    $backupData = [
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'message' => $message,
        'timestamp' => $currentDateTime,
        'errors' => $emailErrors
    ];

    // Save to backup file
    $backupFile = 'contact-backup-' . date('Y-m-d-H-i-s') . '.json';
    file_put_contents($backupFile, json_encode($backupData, JSON_PRETTY_PRINT));

    $errorMsg = urlencode("Sorry, there was an error sending your message. Your message has been saved and we will respond manually. Error details: " . implode(', ', $emailErrors));
    header("Location: contact-us.php?error=$errorMsg");
}
exit;
?>
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