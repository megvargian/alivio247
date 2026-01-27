<?php
// Contact Form Handler for ALIVIO247
// This script handles form submissions and sends emails to both the customer and support

// Enable error reporting for debugging (remove in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

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

// Email configuration
$supportEmail1 = 'support@alivio247.com';
$supportEmail2 = 'alivio247alivio@gmail.com';
$fromName = 'ALIVIO247 Contact Form';
$replyTo = $email;

// Email headers
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Date and time for emails
$currentDateTime = date('F j, Y \a\t g:i A');

// --- EMAIL 1: Thank You Email to Customer ---
$customerSubject = "Thank you for contacting ALIVIO247";
$customerHeaders = $headers;
$customerHeaders .= "From: $fromName <$supportEmail1>" . "\r\n";
$customerHeaders .= "Reply-To: $supportEmail1" . "\r\n";

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
        .footer { background-color: #6b7280; color: white; padding: 15px; text-align: center; font-size: 12px; }
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

            <p>Whether you're exploring a partnership, requesting a demo, or need support, our team is here to help you find the perfect solution for your business communication needs.</p>

            <p><strong>What happens next?</strong></p>
            <ul>
                <li>Our team will review your inquiry within 2 business hours</li>
                <li>You'll receive a personalized response from one of our experts</li>
                <li>We'll schedule a consultation if requested</li>
            </ul>

            <p>In the meantime, feel free to explore more about our AI-powered communication solutions.</p>

            <p>Best regards,<br>
            <strong>The ALIVIO247 Team</strong></p>
        </div>
        <div class='footer'>
            <p>ALIVIO247 | Shahumyan 16 Street, 79, Yerevan, Republic of Armenia, 0065</p>
            <p>support@alivio247.com | alivio247alivio@gmail.com</p>
        </div>
    </div>
</body>
</html>
";

// --- EMAIL 2: Notification Email to Support Team ---
$supportSubject = "New Contact Form Submission - ALIVIO247";
$supportHeaders = $headers;
$supportHeaders .= "From: $fromName <$supportEmail1>" . "\r\n";
$supportHeaders .= "Reply-To: $replyTo" . "\r\n";

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
        .urgent { background-color: #fef2f2; border-left: 4px solid #dc2626; padding: 15px; margin: 20px 0; }
        .message-box { background-color: #f0f9ff; border-left: 4px solid #2563eb; padding: 15px; margin: 20px 0; }
    </style>
</head>
<body>
    <div class='container'>
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
                <table style='width: 100%; border-collapse: collapse;'>
                    <tr><td style='padding: 8px; font-weight: bold; width: 100px;'>Name:</td><td style='padding: 8px;'>$name</td></tr>
                    <tr><td style='padding: 8px; font-weight: bold;'>Email:</td><td style='padding: 8px;'><a href='mailto:$email'>$email</a></td></tr>
                    <tr><td style='padding: 8px; font-weight: bold;'>Phone:</td><td style='padding: 8px;'>" . ($phone ? "<a href='tel:$phone'>$phone</a>" : 'Not provided') . "</td></tr>
                </table>
            </div>

            <div class='message-box'>
                <h3>📝 Customer Message</h3>
                <p style='white-space: pre-wrap; background: white; padding: 15px; border-radius: 5px; border: 1px solid #e5e7eb;'>$message</p>
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

            <p><strong>Quick Actions:</strong></p>
            <p>
                <a href='mailto:$email?subject=Re: Your ALIVIO247 Inquiry&body=Hello $name,%0A%0AThank you for your interest in ALIVIO247.'
                   style='background-color: #2563eb; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; margin-right: 10px;'>
                   📧 Reply to Customer
                </a>
                " . ($phone ? "<a href='tel:$phone' style='background-color: #059669; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;'>📞 Call Customer</a>" : "") . "
            </p>
        </div>
    </div>
</body>
</html>
";

// Send emails
$emailsSent = 0;
$emailErrors = [];

// Send thank you email to customer
if (mail($email, $customerSubject, $customerMessage, $customerHeaders)) {
    $emailsSent++;
} else {
    $emailErrors[] = "Failed to send thank you email to customer";
}

// Send notification to support email 1
if (mail($supportEmail1, $supportSubject, $supportMessage, $supportHeaders)) {
    $emailsSent++;
} else {
    $emailErrors[] = "Failed to send notification to $supportEmail1";
}

// Send notification to support email 2
if (mail($supportEmail2, $supportSubject, $supportMessage, $supportHeaders)) {
    $emailsSent++;
} else {
    $emailErrors[] = "Failed to send notification to $supportEmail2";
}

// Redirect based on results
if ($emailsSent > 0) {
    // At least one email was sent successfully
    $successMsg = urlencode("Thank you for your message! We'll get back to you soon.");
    header("Location: contact-us.php?success=$successMsg");
} else {
    // No emails were sent
    $errorMsg = urlencode("Sorry, there was an error sending your message. Please try again or contact us directly.");
    header("Location: contact-us.php?error=$errorMsg");
}
exit;
?>