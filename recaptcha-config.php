<?php
/**
 * reCAPTCHA Configuration File
 *
 * Instructions:
 * 1. Go to https://www.google.com/recaptcha/admin/create
 * 2. Select reCAPTCHA v2 "I'm not a robot" checkbox
 * 3. Add your domain (e.g., yourdomain.com)
 * 4. Copy your Site Key and Secret Key below
 * 5. Replace the placeholder values with your actual keys
 */

// reCAPTCHA v2 Keys - REPLACE WITH YOUR ACTUAL KEYS
$recaptcha_config = [
    'site_key' => '6LfQbmIsAAAAAFaNOjsyowARumvuHQaUllRCMvCc',     // Replace with your actual Site Key
    'secret_key' => '6LfQbmIsAAAAAPAKNSAdaXnudFbrfLAHLrm4r4bC'   // Replace with your actual Secret Key
];

// For development/testing, you can temporarily disable reCAPTCHA by setting this to true
$recaptcha_disabled = false; // Set to true to disable reCAPTCHA (NOT recommended for production)

return $recaptcha_config;
?>