<?php
// This is now a PHP file, but contains only HTML.
// You can later add dynamic PHP code if needed.
include 'header.php';
?>


    <!--Hero Section-->
    <div class="pt-24">
        <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
            <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
                <p class="uppercase tracking-loose w-full">Don’t make them wait in voicemail</p>
                <h1 class="my-4 text-5xl font-bold leading-tight">AI voice agents for</h1>
                <p id="rotatingText" class="rotating-text"></p>
                <button
                    onclick="window.location.href='inbound.php'"
                    class="mx-auto lg:mx-0 hover:underline text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" style="background: linear-gradient(135deg, #0a3b88, #3f7dde);">
                    Start Now
                </button>
            </div>
            <div class="w-full md:w-3/5 py-6 text-center">
                <!-- <img class="w-full md:w-4/5 z-50" src="hero.png" /> -->
            </div>
        </div>
    </div>

    <!-- Live Demo Section -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-white fade-in-section">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Experience AI Voice Technology</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Voice AI tech is ready to handle phone calls and behave like real people. Be among the first to take advantage 🚀</p>
            </div>

            <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-2xl p-8">
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Try Our AI Agent</h3>
                        <p class="text-gray-600 mb-6">Get a hands-on experience with our AI representative. Fill in your details, and our AI agent will demonstrate how it can handle customer inquiries, book appointments, and provide support.</p>

                        <div class="space-y-4">
                            <div class="flex items-center space-x-3">
                                <div class="w-5 h-5 bg-green-500 rounded-full flex items-center justify-center">
                                    <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <span class="text-gray-700">24/7 Availability</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-5 h-5 bg-green-500 rounded-full flex items-center justify-center">
                                    <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <span class="text-gray-700">Natural Conversations</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-5 h-5 bg-green-500 rounded-full flex items-center justify-center">
                                    <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <span class="text-gray-700">Instant Response</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-blue-50 to-indigo-100 p-6 rounded-xl">
                        <div class="text-center">
                            <div class="w-20 h-20 mx-auto mb-4 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full flex items-center justify-center">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <h4 class="text-lg font-semibold mb-2">Demo AI Agent</h4>
                            <p class="text-sm text-gray-600 mb-4">Alivio247 Representative</p>
                            <button onclick="window.location.href='contact-us.php'" class="w-full bg-gradient-to-r from-blue-600 to-indigo-700 text-white font-semibold py-3 px-6 rounded-lg hover:from-blue-700 hover:to-indigo-800 transform transition hover:scale-105 duration-300">
                                Request Demo Call
                            </button>
                            <p class="text-xs text-gray-500 mt-2">Experience our AI technology firsthand</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section - Automation -->
    <section class="py-20 bg-white scroll-reveal">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12 items-center stagger-children">
                <div class="order-2 lg:order-1">
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 h-64 flex items-center justify-center scale-up">
                        <div class="text-center">
                            <div class="w-24 h-24 mx-auto mb-4 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full flex items-center justify-center float-element">
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <p class="text-gray-600 font-medium">Automate Appointment Booking</p>
                        </div>
                    </div>
                </div>
                <div class="order-1 lg:order-2">
                    <h2 class="text-4xl font-bold text-gray-800 mb-6 text-reveal">Automate appointment booking & reminders</h2>
                    <p class="text-xl text-gray-600 mb-8 text-reveal">Healthcare clinics, beauty salons, dealerships, and other service providers often have to juggle appointment scheduling. AI voice agents can connect with any live calendar and automate all routine calls.</p>

                    <div class="space-y-4 mb-8">
                        <div class="flex items-start space-x-3">
                            <div class="w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center mt-1">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Live calendar integration</h3>
                                <p class="text-gray-600 text-sm">Google Calendar, Office 365, and more</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center mt-1">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Automated reminders</h3>
                                <p class="text-gray-600 text-sm">Reduce no-shows with smart reminders</p>
                            </div>
                        </div>
                    </div>

                    <button onclick="window.location.href='inbound.php'" class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white font-semibold py-4 px-8 rounded-full hover:from-blue-700 hover:to-indigo-800 transform transition hover:scale-105 duration-300">
                        Get Started Today
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section - Customer Support -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-white fade-in-section">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-bold text-gray-800 mb-6">Automate customer support inquiries</h2>
                    <p class="text-xl text-gray-600 mb-8">Instantly answer customer support phone calls - zero waiting time, zero queue, zero customer frustrations. Deploy a complete AI call center for your business.</p>

                    <div class="space-y-4 mb-8">
                        <div class="flex items-start space-x-3">
                            <div class="w-6 h-6 bg-indigo-500 rounded-full flex items-center justify-center mt-1">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">24/7 Availability and parallel calls</h3>
                                <p class="text-gray-600 text-sm">Never miss a customer call again</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="w-6 h-6 bg-indigo-500 rounded-full flex items-center justify-center mt-1">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Real-time interaction with your systems</h3>
                                <p class="text-gray-600 text-sm">Seamless integration with your business tools</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="w-6 h-6 bg-indigo-500 rounded-full flex items-center justify-center mt-1">
                                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Instant knowledge access</h3>
                                <p class="text-gray-600 text-sm">AI trained on your business procedures and documents</p>
                            </div>
                        </div>
                    </div>

                    <button onclick="window.location.href='inbound.php'" class="bg-gradient-to-r from-indigo-600 to-purple-700 text-white font-semibold py-4 px-8 rounded-full hover:from-indigo-700 hover:to-purple-800 transform transition hover:scale-105 duration-300">
                        Get Started Today
                    </button>
                </div>
                <div>
                    <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl p-8 h-64 flex items-center justify-center">
                        <div class="text-center">
                            <div class="w-24 h-24 mx-auto mb-4 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-full flex items-center justify-center">
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </div>
                            <p class="text-gray-600 font-medium">24/7 Customer Support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Use Cases Section -->
    <section class="py-20 bg-white scroll-reveal">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4 text-reveal">Endless use cases</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto text-reveal">Easily create and customize AI voice agents to handle any scenario your business needs—no coding required.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 stagger-children">
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 p-8 rounded-2xl text-center hover:shadow-lg transform transition hover:scale-105 duration-300 card-reveal">
                    <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full flex items-center justify-center float-element">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Healthcare</h3>
                    <p class="text-gray-600">Appointment scheduling, patient reminders, prescription refill requests, and basic health inquiries.</p>
                </div>

                <div class="bg-gradient-to-br from-green-50 to-emerald-50 p-8 rounded-2xl text-center hover:shadow-lg transform transition hover:scale-105 duration-300 card-reveal">
                    <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-r from-green-500 to-emerald-600 rounded-full flex items-center justify-center float-element">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h4a1 1 0 011 1v5m-6 0V9a1 1 0 011-1h4a1 1 0 011 1v13m-6 0h6"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Real Estate</h3>
                    <p class="text-gray-600">Property inquiries, showing appointments, lead qualification, and follow-up calls with prospects.</p>
                </div>

                <div class="bg-gradient-to-br from-purple-50 to-pink-50 p-8 rounded-2xl text-center hover:shadow-lg transform transition hover:scale-105 duration-300 card-reveal">
                    <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-r from-purple-500 to-pink-600 rounded-full flex items-center justify-center float-element">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Education</h3>
                    <p class="text-gray-600">Student enrollment inquiries, class scheduling, parent communication, and event coordination.</p>
                </div>

                <div class="bg-gradient-to-br from-orange-50 to-red-50 p-8 rounded-2xl text-center hover:shadow-lg transform transition hover:scale-105 duration-300 card-reveal">
                    <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-r from-orange-500 to-red-600 rounded-full flex items-center justify-center float-element">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Insurance</h3>
                    <p class="text-gray-600">Claims processing, policy inquiries, renewal reminders, and customer support assistance.</p>
                </div>

                <div class="bg-gradient-to-br from-teal-50 to-cyan-50 p-8 rounded-2xl text-center hover:shadow-lg transform transition hover:scale-105 duration-300 card-reveal">
                    <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-r from-teal-500 to-cyan-600 rounded-full flex items-center justify-center float-element">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Travel</h3>
                    <p class="text-gray-600">Booking confirmations, travel inquiries, itinerary changes, and customer service support.</p>
                </div>

                <div class="bg-gradient-to-br from-gray-50 to-slate-50 p-8 rounded-2xl text-center hover:shadow-lg transform transition hover:scale-105 duration-300 card-reveal">
                    <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-r from-gray-500 to-slate-600 rounded-full flex items-center justify-center float-element">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0H8m8 0v2a2 2 0 01-2 2H10a2 2 0 01-2-2V6m8 0H8m0 0v.01M8 6v12a2 2 0 002 2h4a2 2 0 002-2V6"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Your Business</h3>
                    <p class="text-gray-600">Custom solutions tailored to your specific industry needs and business processes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-20 main-gradient bg-reveal scroll-reveal">
        <div class="container mx-auto px-4 text-center">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl font-bold text-white mb-6 text-reveal">Ready to Transform Your Business Communications?</h2>
                <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto text-reveal">Join hundreds of businesses already using Alivio247 to automate their phone calls and improve customer satisfaction.</p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center stagger-children">
                    <button onclick="window.location.href='inbound.php'" class="btn-autocalls bg-white text-blue-600 font-semibold py-4 px-8 rounded-full hover:bg-blue-50 transform transition hover:scale-105 duration-300 shadow-lg">
                        View Pricing
                    </button>
                    <button onclick="window.location.href='contact-us.php'" class="btn-autocalls border-2 border-white text-white font-semibold py-4 px-8 rounded-full hover:bg-white hover:text-blue-600 transform transition hover:scale-105 duration-300">
                        Contact Sales
                    </button>
                </div>

                <div class="mt-12 grid md:grid-cols-3 gap-8 text-center stagger-children">
                    <div class="scale-up">
                        <h3 class="text-2xl font-bold text-white mb-2 counter">24/7</h3>
                        <p class="text-blue-200">Always Available</p>
                    </div>
                    <div class="scale-up">
                        <h3 class="text-2xl font-bold text-white mb-2 counter">99.9%</h3>
                        <p class="text-blue-200">Uptime Guarantee</p>
                    </div>
                    <div class="scale-up">
                        <h3 class="text-2xl font-bold text-white mb-2 counter">5 Min</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Continue the rest of your HTML as-is -->
    <!-- Sections, SVGs, Pricing, Testimonials, Footer, Scripts... -->

    <script>
        // AutoCalls.ai Style Scroll Effects Controller
        document.addEventListener('DOMContentLoaded', function() {
            // Enhanced Intersection Observer for all scroll effects
            const scrollObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const element = entry.target;

                        // Add reveal animation class (matches CSS)
                        element.classList.add('revealed');

                        // Handle staggered children animations
                        if (element.classList.contains('stagger-children')) {
                            const children = element.querySelectorAll('.card-reveal, .text-reveal, .scale-up, .slide-in-left, .slide-in-right');
                            children.forEach((child, index) => {
                                setTimeout(() => {
                                    child.classList.add('revealed');
                                }, index * 100);
                            });
                        }

                        // Unobserve to prevent re-triggering
                        scrollObserver.unobserve(element);
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });

            // Observe all scroll-reveal elements
            document.querySelectorAll('.scroll-reveal').forEach(el => {
                scrollObserver.observe(el);
            });

            // Observe individual animation elements and containers
            document.querySelectorAll('.text-reveal, .card-reveal, .scale-up, .slide-in-left, .slide-in-right, .bg-reveal, .stagger-children').forEach(el => {
                scrollObserver.observe(el);
            });

            // Counter animation for stats
            const counters = document.querySelectorAll('.counter');
            const counterObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counter = entry.target;
                        const target = counter.innerText;
                        counter.innerText = '0';

                        const updateCounter = () => {
                            const current = parseFloat(counter.innerText);
                            let increment;

                            if (target.includes('%')) {
                                increment = parseFloat(target) / 50;
                            } else if (target.includes('Min')) {
                                increment = 0.2;
                            } else {
                                increment = 1;
                            }

                            if (current < parseFloat(target)) {
                                counter.innerText = Math.ceil(current + increment).toString() + (target.includes('%') ? '%' : target.includes('Min') ? ' Min' : target === '24/7' ? '/7' : '');
                                setTimeout(updateCounter, 30);
                            } else {
                                counter.innerText = target;
                            }
                        };

                        updateCounter();
                        counterObserver.unobserve(counter);
                    }
                });
            }, { threshold: 0.5 });

            counters.forEach(counter => {
                counterObserver.observe(counter);
            });
        });

        // Navigation scroll effects
        var scrollpos = window.scrollY;
        var header = document.getElementById("header");
        var navcontent = document.getElementById("nav-content");
        var navaction = document.getElementById("navAction");
        var brandname = document.getElementById("brandname");
        var toToggle = document.querySelectorAll(".toggleColour");

        var brandlogoWhite = document.getElementById("brandlogo-white");
        var brandlogoColor = document.getElementById("brandlogo-color");

        document.addEventListener("scroll", function() {
            scrollpos = window.scrollY;

            if (scrollpos > 10) {
                header.classList.add("bg-white");
                navaction.classList.remove("bg-white");
                navaction.classList.add("gradient");
                navaction.classList.remove("text-gray-800");
                navaction.classList.add("text-white");

                for (var i = 0; i < toToggle.length; i++) {
                    toToggle[i].classList.add("text-gray-800");
                    toToggle[i].classList.remove("text-white");
                }

                header.classList.add("shadow");
                navcontent.classList.remove("bg-gray-100");
                navcontent.classList.add("bg-white");

                brandlogoWhite.style.display = "none";
                brandlogoColor.style.display = "inline-block";
            } else {
                header.classList.remove("bg-white");
                navaction.classList.remove("gradient");
                navaction.classList.add("bg-white");
            navaction.classList.remove("text-white");
            navaction.classList.add("text-gray-800");

            for (var i = 0; i < toToggle.length; i++) {
                toToggle[i].classList.add("text-white");
                toToggle[i].classList.remove("text-gray-800");
            }

            header.classList.remove("shadow");
            navcontent.classList.remove("bg-white");
            navcontent.classList.add("bg-gray-100");

            brandlogoWhite.style.display = "inline-block";
            brandlogoColor.style.display = "none";
        }
    });

    // Fade-in on scroll functionality
    function fadeInOnScroll() {
        const sections = document.querySelectorAll('.fade-in-section');

        sections.forEach(section => {
            const sectionTop = section.getBoundingClientRect().top;
            const sectionBottom = section.getBoundingClientRect().bottom;
            const viewportHeight = window.innerHeight;

            // Trigger animation when section is 20% visible from the top
            const triggerPoint = viewportHeight * 0.8;

            if (sectionTop < triggerPoint && sectionBottom > 0) {
                section.classList.add('visible');
            }
        });
    }

    // Initialize fade-in functionality
    document.addEventListener('DOMContentLoaded', function() {
        // Add intersection observer for better performance
        if ('IntersectionObserver' in window) {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -20% 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            // Observe all fade-in sections
            document.querySelectorAll('.fade-in-section').forEach(section => {
                observer.observe(section);
            });
        } else {
            // Fallback for older browsers
            fadeInOnScroll();
            document.addEventListener('scroll', fadeInOnScroll);
        }
    });
    </script>

    <script>
    const words = [
        "Healthcare",
        "Real Estate",
        "Education",
        "Insurance",
        "Travel",
        "Fitness Centers",
        "Car Dealerships",
        "Restaurants",
        "Salons",
        "Supermarkets",
        "Event planners",
        "Cleaning services"
    ];

    let wordIndex = 0;
    let charIndex = 0;
    const typingSpeed = 100;
    const pauseBetweenWords = 1500;
    const rotatingText = document.getElementById("rotatingText");

    function typeWord() {
        if (charIndex < words[wordIndex].length) {
            rotatingText.textContent = words[wordIndex].substring(0, charIndex + 1);
            charIndex++;
            setTimeout(typeWord, typingSpeed);
        } else {
            setTimeout(eraseWord, pauseBetweenWords);
        }
    }

    function eraseWord() {
        if (charIndex > 0) {
            rotatingText.textContent = words[wordIndex].substring(0, charIndex - 1) + '\u00A0';
            charIndex--;
            setTimeout(eraseWord, typingSpeed / 2);
        } else {
            wordIndex = (wordIndex + 1) % words.length;
            setTimeout(typeWord, typingSpeed);
        }
    }

    typeWord();
    </script>
<?php
include 'footer.php';