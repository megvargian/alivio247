<?php
// GoDaddy Email Credential Tester
// This will help you test different email accounts and passwords

// IMPORTANT: UPDATE THESE SETTINGS BASED ON YOUR GODADDY ACCOUNT
$test_configs = [
    // Test 1: Current support@alivio247.com
    [
        'name' => 'support@alivio247.com (current)',
        'smtp_host' => 'smtpout.secureserver.net',
        'smtp_port' => 587,
        'username' => 'support@alivio247.com',
        'password' => 'Rd8s2*muRd8s2*mu', // UPDATE THIS
        'description' => 'Current configuration'
    ],

    // Test 2: Try with different GoDaddy SMTP settings
    [
        'name' => 'support@alivio247.com (SSL)',
        'smtp_host' => 'smtpout.secureserver.net',
        'smtp_port' => 465,
        'username' => 'support@alivio247.com',
        'password' => 'Rd8s2*muRd8s2*mu', // UPDATE THIS
        'description' => 'Using SSL port 465'
    ],

    // Test 3: Try with info@ account if it exists
    [
        'name' => 'info@alivio247.com',
        'smtp_host' => 'smtpout.secureserver.net',
        'smtp_port' => 587,
        'username' => 'info@alivio247.com',
        'password' => 'YOUR_INFO_PASSWORD_HERE', // UPDATE THIS
        'description' => 'Alternative info account'
    ],

    // Test 4: Try with alternative server settings
    [
        'name' => 'Alternative server',
        'smtp_host' => 'relay-hosting.secureserver.net',
        'smtp_port' => 25,
        'username' => 'support@alivio247.com',
        'password' => 'Rd8s2*muRd8s2*mu', // UPDATE THIS
        'description' => 'Alternative GoDaddy SMTP server'
    ]
];

function testAuth($config) {
    $log = [];

    // Create socket
    $socket = fsockopen($config['smtp_host'], $config['smtp_port'], $errno, $errstr, 30);
    if (!$socket) {
        return ['success' => false, 'error' => "Connection failed: $errstr ($errno)", 'log' => $log];
    }

    // Read initial response
    $response = fgets($socket, 256);
    $log[] = "Connect: " . trim($response);

    if (substr($response, 0, 3) != '220') {
        fclose($socket);
        return ['success' => false, 'error' => 'Server not ready: ' . $response, 'log' => $log];
    }

    // EHLO
    fputs($socket, "EHLO alivio247.com\r\n");
    $response = fgets($socket, 256);
    $log[] = "EHLO: " . trim($response);

    // Read all EHLO lines
    while (substr($response, 3, 1) == '-') {
        $response = fgets($socket, 256);
        $log[] = "EHLO+: " . trim($response);
    }

    // STARTTLS (if using port 587)
    if ($config['smtp_port'] == 587) {
        fputs($socket, "STARTTLS\r\n");
        $response = fgets($socket, 256);
        $log[] = "STARTTLS: " . trim($response);

        if (substr($response, 0, 3) == '220') {
            if (stream_socket_enable_crypto($socket, true, STREAM_CRYPTO_METHOD_TLS_CLIENT)) {
                $log[] = "TLS: Enabled successfully";

                // EHLO again after TLS
                fputs($socket, "EHLO alivio247.com\r\n");
                $response = fgets($socket, 256);
                $log[] = "EHLO2: " . trim($response);

                while (substr($response, 3, 1) == '-') {
                    $response = fgets($socket, 256);
                    $log[] = "EHLO2+: " . trim($response);
                }
            } else {
                $log[] = "TLS: Failed to enable";
            }
        }
    }

    // Try AUTH PLAIN
    $auth_string = "\0" . $config['username'] . "\0" . $config['password'];
    fputs($socket, "AUTH PLAIN " . base64_encode($auth_string) . "\r\n");
    $response = fgets($socket, 256);
    $log[] = "AUTH PLAIN: " . trim($response);

    $auth_success = (substr($response, 0, 3) == '235');

    if (!$auth_success) {
        // Try AUTH LOGIN as fallback
        fputs($socket, "AUTH LOGIN\r\n");
        $response = fgets($socket, 256);
        $log[] = "AUTH LOGIN: " . trim($response);

        if (substr($response, 0, 3) == '334') {
            fputs($socket, base64_encode($config['username']) . "\r\n");
            $response = fgets($socket, 256);
            $log[] = "LOGIN user: " . trim($response);

            if (substr($response, 0, 3) == '334') {
                fputs($socket, base64_encode($config['password']) . "\r\n");
                $response = fgets($socket, 256);
                $log[] = "LOGIN pass: " . trim($response);

                $auth_success = (substr($response, 0, 3) == '235');
            }
        }
    }

    fclose($socket);

    return ['success' => $auth_success, 'log' => $log];
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>GoDaddy SMTP Credential Tester</title>
    <style>
        body { font-family: monospace; background: #f0f0f0; padding: 20px; margin: 0; }
        .container { max-width: 1200px; margin: 0 auto; }
        .test-result { background: white; border: 2px solid #ddd; margin-bottom: 20px; border-radius: 8px; overflow: hidden; }
        .test-header { padding: 15px; font-weight: bold; font-size: 18px; }
        .success { border-color: #22c55e; }
        .success .test-header { background: #22c55e; color: white; }
        .failure { border-color: #ef4444; }
        .failure .test-header { background: #ef4444; color: white; }
        .test-content { padding: 15px; }
        .log-line { margin: 3px 0; padding: 5px; background: #f8f9fa; border-left: 3px solid #6b7280; }
        .error-line { border-left-color: #ef4444; background: #fef2f2; }
        .success-line { border-left-color: #22c55e; background: #f0fdf4; }
        .instructions { background: #dbeafe; padding: 20px; border-radius: 8px; margin-bottom: 20px; }
        .warning { background: #fbbf24; color: #92400e; padding: 15px; border-radius: 8px; margin-bottom: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔧 GoDaddy SMTP Credential Tester</h1>

        <div class="warning">
            <strong>⚠️ SECURITY WARNING:</strong> This file contains your email passwords. Delete it after testing!
        </div>

        <div class="instructions">
            <h2>📋 Before Running This Test:</h2>
            <ol>
                <li><strong>Update passwords</strong> in the test configurations above</li>
                <li><strong>Verify email accounts exist</strong> in your GoDaddy cPanel</li>
                <li><strong>Check account settings</strong> in GoDaddy Email & Office Dashboard</li>
                <li><strong>Ensure SMTP is enabled</strong> for your domain</li>
            </ol>
        </div>

        <?php foreach ($test_configs as $config): ?>
            <div class="test-result <?php
                $result = testAuth($config);
                echo $result['success'] ? 'success' : 'failure';
            ?>">
                <div class="test-header">
                    <?php echo $result['success'] ? '✅' : '❌'; ?>
                    <?php echo htmlspecialchars($config['name']); ?>
                    <div style="font-weight: normal; font-size: 14px; margin-top: 5px;">
                        <?php echo htmlspecialchars($config['description']); ?>
                    </div>
                </div>
                <div class="test-content">
                    <strong>Settings:</strong><br>
                    Host: <?php echo htmlspecialchars($config['smtp_host']); ?><br>
                    Port: <?php echo htmlspecialchars($config['smtp_port']); ?><br>
                    User: <?php echo htmlspecialchars($config['username']); ?><br><br>

                    <strong>SMTP Conversation:</strong><br>
                    <?php foreach ($result['log'] as $line): ?>
                        <div class="log-line <?php
                            if (strpos($line, '535') !== false || strpos($line, 'failed') !== false) echo 'error-line';
                            if (strpos($line, '235') !== false || strpos($line, 'success') !== false) echo 'success-line';
                        ?>">
                            <?php echo htmlspecialchars($line); ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>

        <div class="instructions">
            <h2>🔍 What To Do Next:</h2>
            <ul>
                <li><strong>If ALL tests fail:</strong> Check if the email accounts exist in GoDaddy cPanel</li>
                <li><strong>If passwords are wrong:</strong> Reset passwords in GoDaddy Email & Office</li>
                <li><strong>If connection fails:</strong> Contact GoDaddy support about SMTP access</li>
                <li><strong>If one test succeeds:</strong> Use those settings in your contact form</li>
            </ul>

            <h3>GoDaddy Account Check:</h3>
            <ol>
                <li>Log into your GoDaddy account</li>
                <li>Go to "Email & Office" section</li>
                <li>Check if support@alivio247.com and info@alivio247.com exist</li>
                <li>Verify passwords and reset if needed</li>
                <li>Check SMTP/IMAP settings are enabled</li>
            </ol>
        </div>
    </div>
</body>
</html>