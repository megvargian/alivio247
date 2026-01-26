<?php
include 'header.php';
?>

    <!--Contact Us Section-->
    <div class="pt-24 pb-12">
        <div class="container px-3 mx-auto">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-4xl md:text-5xl font-bold text-center mb-8">Contact Us</h1>
                <p class="text-center text-gray-700 mb-12 text-lg">
                    Have questions? We'd love to hear from you. Send us a message and we'll respond as soon as possible.
                </p>

                <div class="grid md:grid-cols-2 gap-8 mb-12">
                    <!-- Contact Information -->
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <h2 class="text-2xl font-bold mb-6">Get In Touch</h2>

                        <div class="space-y-4">
                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-blue-600 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                <div>
                                    <h3 class="font-semibold">Email</h3>
                                    <p class="text-gray-600">support@alivio247.com</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-blue-600 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                <div>
                                    <h3 class="font-semibold">Phone</h3>
                                    <p class="text-gray-600">+1 (555) 123-4567</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <svg class="w-6 h-6 text-blue-600 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <div>
                                    <h3 class="font-semibold">Address</h3>
                                    <p class="text-gray-600">123 Business Street<br>Suite 100<br>City, State 12345</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <h2 class="text-2xl font-bold mb-6">Send Message</h2>
                        <form id="contactForm" action="inbound.php" method="POST">
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

                            <button type="submit"
                                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include 'footer.php';