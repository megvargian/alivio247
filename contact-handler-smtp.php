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

// === REAL SMTP EMAIL SENDING (NO mail() function) ===
function sendSMTPEmail($to, $subject, $body, $config, $replyTo = '') {
    $log = [];

    // Connect to SMTP server
    $socket = @fsockopen($config['host'], $config['port'], $errno, $errstr, 30);
    if (!$socket) {
        return ['success' => false, 'error' => "Cannot connect to {$config['host']}:{$config['port']} - $errstr ($errno)"];
    }

    $log[] = "Connected to {$config['host']}:{$config['port']}";

    // Read initial response
    $response = fgets($socket, 256);
    $log[] = "Initial: " . trim($response);

    if (substr($response, 0, 3) != '220') {
        fclose($socket);
        return ['success' => false, 'error' => 'Invalid initial response: ' . $response, 'log' => $log];
    }

    // EHLO command
    fputs($socket, "EHLO " . ($_SERVER['HTTP_HOST'] ?? 'localhost') . "\r\n");
    $response = fgets($socket, 256);
    $log[] = "EHLO: " . trim($response);

    // STARTTLS if using TLS
    if ($config['encryption'] === 'tls') {
        fputs($socket, "STARTTLS\r\n");
        $response = fgets($socket, 256);
        $log[] = "STARTTLS: " . trim($response);

        if (substr($response, 0, 3) == '220') {
            // Enable crypto
            if (!stream_socket_enable_crypto($socket, true, STREAM_CRYPTO_METHOD_TLS_CLIENT)) {
                fclose($socket);
                return ['success' => false, 'error' => 'Failed to enable TLS encryption', 'log' => $log];
            }

            // EHLO again after TLS
            fputs($socket, "EHLO " . ($_SERVER['HTTP_HOST'] ?? 'localhost') . "\r\n");
            $response = fgets($socket, 256);
            $log[] = "EHLO after TLS: " . trim($response);
        }
    }

    // AUTH LOGIN
    fputs($socket, "AUTH LOGIN\r\n");
    $response = fgets($socket, 256);
    $log[] = "AUTH LOGIN: " . trim($response);

    if (substr($response, 0, 3) != '334') {
        fclose($socket);
        return ['success' => false, 'error' => 'AUTH LOGIN failed: ' . $response, 'log' => $log];
    }

    // Send username
    fputs($socket, base64_encode($config['username']) . "\r\n");
    $response = fgets($socket, 256);
    $log[] = "Username: " . trim($response);

    if (substr($response, 0, 3) != '334') {
        fclose($socket);
        return ['success' => false, 'error' => 'Username rejected: ' . $response, 'log' => $log];
    }

    // Send password
    fputs($socket, base64_encode($config['password']) . "\r\n");
    $response = fgets($socket, 256);
    $log[] = "Password: " . trim($response);

    if (substr($response, 0, 3) != '235') {
        fclose($socket);
        return ['success' => false, 'error' => 'Authentication failed: ' . $response, 'log' => $log];
    }

    // MAIL FROM
    fputs($socket, "MAIL FROM: <{$config['from_email']}>\r\n");
    $response = fgets($socket, 256);
    $log[] = "MAIL FROM: " . trim($response);

    if (substr($response, 0, 3) != '250') {
        fclose($socket);
        return ['success' => false, 'error' => 'MAIL FROM rejected: ' . $response, 'log' => $log];
    }

    // RCPT TO
    fputs($socket, "RCPT TO: <$to>\r\n");
    $response = fgets($socket, 256);
    $log[] = "RCPT TO: " . trim($response);

    if (substr($response, 0, 3) != '250') {
        fclose($socket);
        return ['success' => false, 'error' => 'RCPT TO rejected: ' . $response, 'log' => $log];
    }

    // DATA
    fputs($socket, "DATA\r\n");
    $response = fgets($socket, 256);
    $log[] = "DATA: " . trim($response);

    if (substr($response, 0, 3) != '354') {
        fclose($socket);
        return ['success' => false, 'error' => 'DATA command rejected: ' . $response, 'log' => $log];
    }

    // Email headers and body
    $email_data = "";
    $email_data .= "From: {$config['from_name']} <{$config['from_email']}>\r\n";
    $email_data .= "To: $to\r\n";
    $email_data .= "Reply-To: " . ($replyTo ?: $config['from_email']) . "\r\n";
    $email_data .= "Subject: $subject\r\n";
    $email_data .= "MIME-Version: 1.0\r\n";
    $email_data .= "Content-Type: text/html; charset=UTF-8\r\n";
    $email_data .= "X-Mailer: ALIVIO247 SMTP Client\r\n";
    $email_data .= "\r\n";
    $email_data .= $body;
    $email_data .= "\r\n.\r\n";

    fputs($socket, $email_data);
    $response = fgets($socket, 256);
    $log[] = "Email sent: " . trim($response);

    if (substr($response, 0, 3) != '250') {
        fclose($socket);
        return ['success' => false, 'error' => 'Email sending failed: ' . $response, 'log' => $log];
    }

    // QUIT
    fputs($socket, "QUIT\r\n");
    $response = fgets($socket, 256);
    $log[] = "QUIT: " . trim($response);

    fclose($socket);

    return ['success' => true, 'error' => '', 'log' => $log];
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
$emailLogs = [];

// 1. Send thank you email to customer
$result1 = sendSMTPEmail($email, $customerSubject, $customerMessage, $smtpConfig);
if ($result1['success']) {
    $emailsSent++;
    $emailLogs[] = "✅ Customer email sent to $email";
} else {
    $emailErrors[] = "❌ Customer email failed: " . $result1['error'];
    $emailLogs[] = "❌ Customer email failed to $email: " . $result1['error'];
}

// 2. Send notification to support email 1
$result2 = sendSMTPEmail($supportEmail1, $supportSubject, $supportMessage, $smtpConfig, $email);
if ($result2['success']) {
    $emailsSent++;
    $emailLogs[] = "✅ Support email sent to $supportEmail1";
} else {
    $emailErrors[] = "❌ Support email 1 failed: " . $result2['error'];
    $emailLogs[] = "❌ Support email failed to $supportEmail1: " . $result2['error'];
}

// 3. Send notification to support email 2
$result3 = sendSMTPEmail($supportEmail2, $supportSubject, $supportMessage, $smtpConfig, $email);
if ($result3['success']) {
    $emailsSent++;
    $emailLogs[] = "✅ Support email sent to $supportEmail2";
} else {
    $emailErrors[] = "❌ Support email 2 failed: " . $result3['error'];
    $emailLogs[] = "❌ Support email failed to $supportEmail2: " . $result3['error'];
}

// === HANDLE RESULTS ===
if ($emailsSent > 0) {
    // At least one email was sent successfully
    $successMsg = urlencode("Thank you for your message! We'll get back to you soon.");
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