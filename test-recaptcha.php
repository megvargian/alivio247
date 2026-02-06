<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reCAPTCHA Test - ALIVIO247</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body class="bg-gray-100 min-h-screen py-12">
    <div class="max-w-md mx-auto bg-white rounded-lg shadow-lg p-8">
        <h1 class="text-2xl font-bold mb-6 text-center">reCAPTCHA Test</h1>

        <?php
        $recaptcha_config = include 'recaptcha-config.php';
        $recaptcha_site_key = $recaptcha_config['site_key'];
        $recaptcha_secret_key = $recaptcha_config['secret_key'];

        // Check if keys are still placeholder values
        if ($recaptcha_site_key === 'YOUR_SITE_KEY_HERE' || $recaptcha_secret_key === 'YOUR_SECRET_KEY_HERE') {
            echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">';
            echo '<strong>Setup Required:</strong><br>';
            echo '1. Get your reCAPTCHA keys from <a href="https://www.google.com/recaptcha/admin/create" target="_blank" class="underline">Google reCAPTCHA</a><br>';
            echo '2. Update the keys in recaptcha-config.php';
            echo '</div>';
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $recaptcha_response = $_POST['g-recaptcha-response'] ?? '';

            if (!empty($recaptcha_response)) {
                // Verify reCAPTCHA
                $url = 'https://www.google.com/recaptcha/api/siteverify';
                $data = [
                    'secret' => $recaptcha_secret_key,
                    'response' => $recaptcha_response,
                    'remoteip' => $_SERVER['REMOTE_ADDR'] ?? ''
                ];

                $options = [
                    'http' => [
                        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                        'method' => 'POST',
                        'content' => http_build_query($data)
                    ]
                ];

                $context = stream_context_create($options);
                $result = file_get_contents($url, false, $context);
                $response_data = json_decode($result, true);

                if ($response_data['success']) {
                    echo '<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">';
                    echo '<strong>✅ Success!</strong> reCAPTCHA verification passed. Your setup is working correctly!';
                    echo '</div>';
                } else {
                    echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">';
                    echo '<strong>❌ Failed!</strong> reCAPTCHA verification failed.<br>';
                    echo 'Errors: ' . implode(', ', $response_data['error-codes'] ?? ['unknown']);
                    echo '</div>';
                }
            } else {
                echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">';
                echo '<strong>Error:</strong> Please complete the reCAPTCHA verification.';
                echo '</div>';
            }
        }
        ?>

        <form method="POST" class="space-y-6">
            <div>
                <label class="block text-gray-700 font-semibold mb-2">Test Message:</label>
                <input type="text" name="test_message" value="This is a test submission"
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" readonly>
            </div>

            <div class="g-recaptcha" data-sitekey="<?php echo htmlspecialchars($recaptcha_site_key); ?>"></div>

            <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg focus:outline-none focus:shadow-outline">
                Test reCAPTCHA
            </button>
        </form>

        <div class="mt-8 p-4 bg-gray-50 rounded-lg text-sm">
            <h3 class="font-bold mb-2">Instructions:</h3>
            <ol class="list-decimal list-inside space-y-1 text-gray-600">
                <li>Get your reCAPTCHA keys from <a href="https://www.google.com/recaptcha/admin/create" target="_blank" class="text-blue-600 underline">Google reCAPTCHA</a></li>
                <li>Update recaptcha-config.php with your actual keys</li>
                <li>Complete the reCAPTCHA above and click "Test reCAPTCHA"</li>
                <li>If successful, your contact form is protected!</li>
            </ol>
        </div>

        <div class="mt-4 text-center">
            <a href="contact-us.php" class="text-blue-600 hover:underline">← Back to Contact Form</a>
        </div>
    </div>
</body>
</html>