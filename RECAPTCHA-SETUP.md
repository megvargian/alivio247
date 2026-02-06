# reCAPTCHA Security Setup Guide

## 🛡️ Overview
reCAPTCHA protection has been added to your contact form to prevent spam and bot submissions. This guide will help you complete the setup.

## 📋 What Was Added

### Files Modified:
1. **contact-us.php** - Added reCAPTCHA widget to the contact form
2. **contact-handler-smtp.php** - Added server-side reCAPTCHA verification
3. **recaptcha-config.php** - Configuration file for your reCAPTCHA keys
4. **test-recaptcha.php** - Test page to verify your setup

### Security Features Added:
- ✅ **Client-side validation** - Form won't submit without reCAPTCHA completion
- ✅ **Server-side verification** - Backend validates reCAPTCHA with Google
- ✅ **Spam protection** - Blocks automated bot submissions
- ✅ **User-friendly errors** - Clear messages for failed verification
- ✅ **Easy key management** - Centralized configuration file

## 🚀 Setup Instructions

### Step 1: Get Your reCAPTCHA Keys
1. Visit: https://www.google.com/recaptcha/admin/create
2. **Label**: Enter "ALIVIO247 Contact Form" (or any name you prefer)
3. **reCAPTCHA type**: Select "reCAPTCHA v2" → "I'm not a robot" Checkbox
4. **Domains**: Add your website domain (e.g., `yourdomain.com`, `www.yourdomain.com`)
5. Accept the Terms of Service
6. Click **Submit**
7. Copy your **Site Key** and **Secret Key**

### Step 2: Configure Your Keys
1. Open `recaptcha-config.php` in your code editor
2. Replace the placeholder values:
   ```php
   'site_key' => 'YOUR_ACTUAL_SITE_KEY_HERE',
   'secret_key' => 'YOUR_ACTUAL_SECRET_KEY_HERE'
   ```

### Step 3: Test Your Setup
1. Visit: `http://yourdomain.com/test-recaptcha.php`
2. Complete the reCAPTCHA checkbox
3. Click "Test reCAPTCHA"
4. You should see a green success message

### Step 4: Test Your Contact Form
1. Visit your contact form: `http://yourdomain.com/contact-us.php`
2. Fill out the form and complete the reCAPTCHA
3. Submit the form - it should work normally
4. Try submitting without completing reCAPTCHA - it should show an error

## 🔧 Troubleshooting

### "Setup Required" Message
- You haven't replaced the placeholder keys in `recaptcha-config.php`
- Make sure your keys don't say "YOUR_SITE_KEY_HERE"

### "reCAPTCHA verification failed"
- **Invalid keys**: Double-check your Site Key and Secret Key
- **Domain mismatch**: Make sure you added the correct domain in Google reCAPTCHA
- **Network issues**: Check if your server can reach Google's API

### reCAPTCHA Widget Not Showing
- **JavaScript blocked**: Check if Google's reCAPTCHA script is loading
- **Invalid Site Key**: Verify your Site Key is correct
- **Console errors**: Check browser developer tools for JavaScript errors

### Form Still Accepting Spam
- **reCAPTCHA bypassed**: Make sure server-side verification is working
- **Keys not configured**: Ensure you've updated the configuration file
- **Cache issues**: Clear any caching if you're using a caching plugin

## 🎯 How It Works

### User Experience:
1. User fills out contact form
2. User must check "I'm not a robot" box
3. Form submits only after reCAPTCHA completion
4. Normal email processing continues

### Security Process:
1. **Frontend**: JavaScript prevents form submission without reCAPTCHA
2. **Backend**: PHP verifies reCAPTCHA response with Google
3. **Validation**: Only verified submissions are processed
4. **Protection**: Bots and automated spam are blocked

## 📁 File Structure
```
alivio247/
├── contact-us.php (modified - form with reCAPTCHA)
├── contact-handler-smtp.php (modified - server verification)
├── recaptcha-config.php (new - configuration)
├── test-recaptcha.php (new - testing page)
└── RECAPTCHA-SETUP.md (this guide)
```

## 🔒 Security Notes

- **Keep your Secret Key private** - Never expose it in client-side code
- **Use HTTPS** - reCAPTCHA requires secure connections in production
- **Regular monitoring** - Check Google reCAPTCHA admin panel for analytics
- **Domain restrictions** - Only add domains you control to your reCAPTCHA

## ✅ Success Indicators

Your reCAPTCHA is working correctly when:
- ✅ reCAPTCHA widget appears on your contact form
- ✅ Form won't submit without completing reCAPTCHA
- ✅ Test page shows "Success! reCAPTCHA verification passed"
- ✅ Contact form emails are still being sent normally
- ✅ No spam submissions getting through

## 📞 Support

If you encounter issues:
1. Use the test page (`test-recaptcha.php`) to diagnose problems
2. Check the troubleshooting section above
3. Verify your keys in Google reCAPTCHA admin panel
4. Ensure your domain is correctly configured

---

**Important**: Remove or secure the `test-recaptcha.php` file after testing to prevent unauthorized testing of your reCAPTCHA configuration.