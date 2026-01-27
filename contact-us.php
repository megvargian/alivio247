<?php
include 'header.php';
?>

    <!--Contact Us Section-->
    <div class="pt-24 pb-12">
        <div class="container px-3 mx-auto">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-4xl md:text-5xl font-bold text-center mb-8">Contact Us</h1>
                <p class="text-center text-gray-700 mb-12 text-lg">
                    We're here to assist and glad to answer any questions about our services.
                </p>

                <?php
                // Display success or error messages
                if (isset($_GET['success'])) {
                    echo '<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6 max-w-2xl mx-auto">';
                    echo '<strong>Success!</strong> ' . htmlspecialchars(urldecode($_GET['success']));
                    echo '</div>';
                }
                if (isset($_GET['error'])) {
                    echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6 max-w-2xl mx-auto">';
                    echo '<strong>Error:</strong> ' . htmlspecialchars(urldecode($_GET['error']));
                    echo '</div>';
                }
                ?>

                <div class="grid md:grid-cols-2 gap-8 mb-12">
                    <!-- Contact Information -->
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <h2 class="text-2xl font-bold mb-6">Get In Touch</h2>

                        <div class="bg-blue-50 p-4 rounded-lg mb-6">
                            <h3 class="font-bold text-lg mb-2">Company Name: ALIVIO247</h3>
                        </div>

                        <div class="space-y-6">
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-blue-600 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                <div>
                                    <h3 class="font-semibold mb-2">📧 Email Address:</h3>
                                    <ul class="text-gray-600 space-y-1">
                                        <li>• support@alivio247.com</li>
                                        <li>• alivio247alivio@gmail.com</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-blue-600 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <div>
                                    <h3 class="font-semibold mb-2">📍 Address:</h3>
                                    <div class="text-gray-600">
                                        <p>Shahumyan 16 Street, 79</p>
                                        <p>(formerly Vakhtang Ananyan Street, 79)</p>
                                        <p>Malatia-Sebastia Administrative District</p>
                                        <p>Yerevan, Republic of Armenia</p>
                                        <p><strong>Postal Code:</strong> 0065</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 p-4 bg-gray-50 rounded-lg">
                            <p class="text-sm text-gray-600 leading-relaxed">
                                All official notices, legal correspondence, and communications relating to our services may be directed to the contact details listed above.
                            </p>
                        </div>

                        <div class="mt-6 p-4 bg-green-50 rounded-lg">
                            <p class="text-gray-700 leading-relaxed">
                                Whether you're exploring a partnership, requesting a demo, or need support, feel free to reach out and our team will get back to you promptly.
                            </p>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <h2 class="text-2xl font-bold mb-6">Send Message</h2>
                        <form id="contactForm" action="contact-handler-smtp.php" method="POST">
                            <div class="mb-4">
                                <label class="block text-gray-700 font-semibold mb-2" for="name">Name</label>
                                <input class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                                       type="text" id="name" name="name" required>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 font-semibold mb-2" for="email">Email</label>
                                <input class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                                       type="email" id="email" name="email" required>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 font-semibold mb-2" for="phone">Phone</label>
                                <input class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                                       type="tel" id="phone" name="phone">
                            </div>

                            <div class="mb-6">
                                <label class="block text-gray-700 font-semibold mb-2" for="message">Message</label>
                                <textarea class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                                          id="message" name="message" rows="4" required></textarea>
                            </div>

                            <button type="submit" id="submitBtn"
                                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                <span class="submit-text">Send Message</span>
                                <span class="loading-text hidden">Sending...</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        const submitBtn = document.getElementById('submitBtn');
        const submitText = submitBtn.querySelector('.submit-text');
        const loadingText = submitBtn.querySelector('.loading-text');

        // Show loading state
        submitBtn.disabled = true;
        submitBtn.classList.add('opacity-75');
        submitText.classList.add('hidden');
        loadingText.classList.remove('hidden');
    });

    // Auto-hide success/error messages after 5 seconds
    window.addEventListener('load', function() {
        const alerts = document.querySelectorAll('[class*="bg-green-100"], [class*="bg-red-100"]');
        // alerts.forEach(function(alert) {
        //     setTimeout(function() {
        //         alert.style.opacity = '0';
        //         setTimeout(function() {
        //             alert.remove();
        //         }, 300);
        //     }, 5000);
        // });
    });
    </script>

<?php
include 'footer.php';