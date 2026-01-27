<?php
// SMTP Debug Test Script
// This will show us exactly what GoDaddy's SMTP server responds with

$config = [
    'smtp_host' => 'smtpout.secureserver.net',
    'smtp_port' => 587,
    'username' => 'support@alivio247.com',
    'password' => 'Rd8s2*muRd8s2*mu', // Replace with your actual password
    'from_email' => 'support@alivio247.com',
    'from_name' => 'ALIVIO247 Support'
];

function testSMTPConnection($config) {
    $log = [];

    // Create socket
    $socket = fsockopen($config['smtp_host'], $config['smtp_port'], $errno, $errstr, 30);
    if (!$socket) {
        return ['success' => false, 'error' => "Socket error: $errstr ($errno)", 'log' => $log];
    }

    // Read initial response
    $response = fgets($socket, 256);
    $log[] = "Initial: " . trim($response);

    // EHLO
    fputs($socket, "EHLO " . $_SERVER['HTTP_HOST'] . "\r\n");
    $response = fgets($socket, 256);
    $log[] = "EHLO: " . trim($response);

    // Read all EHLO response lines
    while (substr($response, 3, 1) == '-') {
        $response = fgets($socket, 256);
        $log[] = "EHLO continue: " . trim($response);
    }

    // STARTTLS
    fputs($socket, "STARTTLS\r\n");
    $response = fgets($socket, 256);
    $log[] = "STARTTLS: " . trim($response);

    if (substr($response, 0, 3) == '220') {
        // Enable TLS
        if (stream_socket_enable_crypto($socket, true, STREAM_CRYPTO_METHOD_TLS_CLIENT)) {
            $log[] = "TLS enabled successfully";

            // Send EHLO again after TLS
            fputs($socket, "EHLO " . $_SERVER['HTTP_HOST'] . "\r\n");
            $response = fgets($socket, 256);
            $log[] = "EHLO after TLS: " . trim($response);

            // Read all EHLO response lines after TLS
            while (substr($response, 3, 1) == '-') {
                $response = fgets($socket, 256);
                $log[] = "EHLO after TLS continue: " . trim($response);
            }
        } else {
            $log[] = "TLS failed to enable";
        }
    }

    // Try AUTH PLAIN
    $auth_string = "\0" . $config['username'] . "\0" . $config['password'];
    fputs($socket, "AUTH PLAIN " . base64_encode($auth_string) . "\r\n");
    $response = fgets($socket, 256);
    $log[] = "AUTH PLAIN: " . trim($response);

    fclose($socket);

    return ['success' => true, 'log' => $log];
}

// Run the test
$result = testSMTPConnection($config);
?>

<!DOCTYPE html>
<html>
<head>
    <title>SMTP Debug Test</title>
    <style>
        body { font-family: monospace; background: #f0f0f0; padding: 20px; }
        .log { background: white; border: 1px solid #ccc; padding: 20px; }
        .line { margin-bottom: 5px; }
        .error { color: red; }
        .success { color: green; }
    </style>
</head>
<body>
    <h1>SMTP Debug Test Results</h1>

    <?php if (isset($result['error'])): ?>
        <div class="error">Error: <?php echo htmlspecialchars($result['error']); ?></div>
    <?php endif; ?>

    <div class="log">
        <h2>SMTP Conversation Log:</h2>
        <?php foreach ($result['log'] as $line): ?>
            <div class="line"><?php echo htmlspecialchars($line); ?></div>
        <?php endforeach; ?>
    </div>

    <h2>Instructions:</h2>
    <ol>
        <li>Replace 'your_actual_password_here' with your actual GoDaddy email password</li>
        <li>Access this file from your browser</li>
        <li>Look at the SMTP conversation to see what authentication methods are supported</li>
        <li>Check if AUTH PLAIN is working or if there are other issues</li>
    </ol>
</body>
</html>