<?php
include 'header.php';
?>

    <!--404 Error Section-->
    <div class="pt-24 pb-12">
        <div class="container px-3 mx-auto">
            <div class="max-w-4xl mx-auto text-center">
                <div class="bg-white rounded-lg shadow-lg p-12 md:p-16">
                    <!-- Large 404 -->
                    <h1 class="text-9xl font-bold text-blue-600 mb-4">404</h1>

                    <!-- Error Message -->
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Page Not Found</h2>
                    <p class="text-gray-600 text-lg mb-8">
                        Oops! The page you're looking for doesn't exist or has been moved.
                    </p>

                    <!-- Illustration -->
                    <div class="mb-8">
                        <svg class="w-64 h-64 mx-auto text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                        <button onclick="window.location.href='index.php'"
                                class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            Go to Homepage
                        </button>
                        <button onclick="window.history.back()"
                                class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-3 px-8 rounded-full shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            Go Back
                        </button>
                    </div>

                    <!-- Helpful Links -->
                    <div class="mt-12 pt-8 border-t border-gray-200">
                        <p class="text-gray-600 mb-4">Here are some helpful links instead:</p>
                        <div class="flex flex-wrap justify-center gap-4">
                            <a href="index.php" class="text-blue-600 hover:text-blue-800 hover:underline">Home</a>
                            <span class="text-gray-400">|</span>
                            <a href="about-us.php" class="text-blue-600 hover:text-blue-800 hover:underline">About Us</a>
                            <span class="text-gray-400">|</span>
                            <a href="contact-us.php" class="text-blue-600 hover:text-blue-800 hover:underline">Contact Us</a>
                            <span class="text-gray-400">|</span>
                            <a href="inbound.php" class="text-blue-600 hover:text-blue-800 hover:underline">Inbound Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
