<?php
// Email Configuration for ALIVIO247 Contact Form
// Instructions for cPanel setup

/*
=== CPANEL EMAIL SETUP INSTRUCTIONS ===

1. CREATE EMAIL ACCOUNTS (if not already created):
   - Go to cPanel > Email Accounts
   - Create support@alivio247.com if it doesn't exist
   - Make sure alivio247alivio@gmail.com is properly configured

2. PHP MAIL FUNCTION SETUP:
   - Most cPanel hosts have PHP mail() function enabled by default
   - The contact-handler.php script uses PHP's built-in mail() function
   - This should work out of the box on most cPanel hosting

3. TESTING THE CONTACT FORM:
   - Upload all files to your cPanel public_html directory
   - Visit your website/contact-us.php
   - Fill out and submit the form
   - Check both email addresses for received emails

4. TROUBLESHOOTING:
   - If emails aren't being sent, check cPanel > Email Deliverability
   - Make sure your domain has proper SPF/DKIM records
   - Check cPanel > Email Routing (should be set to Local Mail Exchanger)
   - Check server mail logs in cPanel > Errors for any mail-related issues

5. ADVANCED CONFIGURATION (if needed):
   - If basic mail() function doesn't work, you can use SMTP
   - Uncomment the SMTP configuration below and install PHPMailer

6. EMAIL TESTING:
   - Use the test script below to verify email functionality
*/

// === BASIC CONFIGURATION (Used by contact-handler.php) ===
define('SUPPORT_EMAIL_1', 'support@alivio247.com');
define('SUPPORT_EMAIL_2', 'alivio247alivio@gmail.com');
define('FROM_NAME', 'ALIVIO247 Contact Form');
define('COMPANY_NAME', 'ALIVIO247');
define('COMPANY_ADDRESS', 'Shahumyan 16 Street, 79, Yerevan, Republic of Armenia, 0065');

// === SMTP CONFIGURATION (Advanced - if basic mail() doesn't work) ===
/*
// Uncomment these if you need to use SMTP instead of basic mail() function
define('USE_SMTP', true);
define('SMTP_HOST', 'mail.yourdomain.com');  // Your cPanel mail server
define('SMTP_USERNAME', 'support@alivio247.com');
define('SMTP_PASSWORD', 'your_email_password');
define('SMTP_PORT', 587);  // Usually 587 for TLS or 465 for SSL
define('SMTP_SECURE', 'tls');  // 'tls' or 'ssl'
*/

// === EMAIL TEST FUNCTION ===
function testEmailSetup() {
    $testEmail = 'test@example.com';  // Replace with your test email
    $subject = 'ALIVIO247 Email Test';
    $message = 'This is a test email from ALIVIO247 contact form system.';
    $headers = "From: " . FROM_NAME . " <" . SUPPORT_EMAIL_1 . ">\r\n";
    $headers .= "Reply-To: " . SUPPORT_EMAIL_1 . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if (mail($testEmail, $subject, $message, $headers)) {
        echo "✅ Test email sent successfully!";
    } else {
        echo "❌ Failed to send test email. Check your server configuration.";
    }
}

// Uncomment the line below and visit this file directly to test email
// testEmailSetup();

// === DEPLOYMENT CHECKLIST ===
/*
□ Upload contact-handler.php to your website root
□ Upload updated contact-us.php to your website root
□ Upload this config file (email-config.php) to your website root
□ Test the contact form with a real email address
□ Verify both support emails receive the notification
□ Verify the customer receives the thank you email
□ Check spam folders if emails are not received
□ Set up proper SPF/DKIM records in cPanel for better deliverability
*/

?>

<!-- HTML Test Interface (visit email-config.php directly to see this) -->
<!DOCTYPE html>
<html>
<head>
    <title>ALIVIO247 Email Configuration Test</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 50px auto; padding: 20px; }
        .test-box { background: #f0f9ff; border: 1px solid #0ea5e9; padding: 20px; margin: 20px 0; border-radius: 5px; }
        .success { background: #f0fdf4; border-color: #22c55e; color: #166534; }
        .error { background: #fef2f2; border-color: #ef4444; color: #991b1b; }
        button { background: #2563eb; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; }
        button:hover { background: #1d4ed8; }
    </style>
</head>
<body>
    <h1>🔧 ALIVIO247 Email Configuration</h1>

    <div class="test-box">
        <h3>Current Configuration:</h3>
        <p><strong>Support Email 1:</strong> <?php echo SUPPORT_EMAIL_1; ?></p>
        <p><strong>Support Email 2:</strong> <?php echo SUPPORT_EMAIL_2; ?></p>
        <p><strong>From Name:</strong> <?php echo FROM_NAME; ?></p>
    </div>

    <div class="test-box">
        <h3>📧 Test Email Function</h3>
        <p>Click the button below to test if PHP mail() function is working:</p>
        <button onclick="testEmail()">Send Test Email</button>
        <div id="testResult"></div>
    </div>

    <div class="test-box">
        <h3>✅ Setup Checklist</h3>
        <ol>
            <li>Create email account support@alivio247.com in cPanel</li>
            <li>Verify alivio247alivio@gmail.com is accessible</li>
            <li>Test the contact form on your website</li>
            <li>Check email deliverability settings in cPanel</li>
            <li>Set up SPF and DKIM records for better delivery</li>
        </ol>
    </div>

    <script>
    function testEmail() {
        // This would require AJAX implementation for a proper test
        // For now, it's just a placeholder
        document.getElementById('testResult').innerHTML =
            '<p style="color: #2563eb; margin-top: 10px;">Please uncomment testEmailSetup() function call in email-config.php and refresh this page to run the test.</p>';
    }
    </script>
</body>
</html>