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
                        <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 2L4 5v6c0 5.55 3.84 10.74 8 12 4.16-1.26 8-6.45 8-12V5l-8-3zm3.6 8.2l-4.2 4.2a1 1 0 01-1.4 0l-1.8-1.8a1 1 0 111.4-1.4l1.1 1.1 3.5-3.5a1 1 0 111.4 1.4z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Insurance</h3>
                    <p class="text-gray-600">Claims processing, policy inquiries, renewal reminders, and customer support assistance.</p>
                </div>

                <div class="bg-gradient-to-br from-teal-50 to-cyan-50 p-8 rounded-2xl text-center hover:shadow-lg transform transition hover:scale-105 duration-300 card-reveal">
                    <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-r from-teal-500 to-cyan-600 rounded-full flex items-center justify-center float-element">
                        <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M2.5 19.5l19-7.5-19-7.5 4.6 7.2-4.6 7.8zM9 13l7 2.8-7.9 3.1 1.9-5.9z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Travel</h3>
                    <p class="text-gray-600">Booking confirmations, travel inquiries, itinerary changes, and customer service support.</p>
                </div>

                <div class="bg-gradient-to-br from-gray-50 to-slate-50 p-8 rounded-2xl text-center hover:shadow-lg transform transition hover:scale-105 duration-300 card-reveal">
                    <div class="w-16 h-16 mx-auto mb-6 bg-gradient-to-r from-gray-500 to-slate-600 rounded-full flex items-center justify-center float-element">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Your Business</h3>
                    <p class="text-gray-600">Custom solutions tailored to your specific industry needs and business processes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Expanded Use Cases Benefits Section -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-white scroll-reveal">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4 text-reveal">How Different Industries Benefit</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto text-reveal">See real-world examples of how Alivio247 transforms customer interactions across various sectors</p>
            </div>

            <div class="grid md:grid-cols-2 gap-12 stagger-children">
                <!-- Healthcare -->
                <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition duration-300 slide-in-left">
                    <div class="flex items-start space-x-4 mb-6">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Healthcare Providers</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Reduce no-shows by 40% with automated appointment reminders. Handle urgent patient inquiries 24/7 while your team focuses on critical care.</p>
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 font-bold mt-1">✓</span>
                            <span class="text-gray-700">Automated appointment scheduling & confirmations</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 font-bold mt-1">✓</span>
                            <span class="text-gray-700">Insurance verification calls</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 font-bold mt-1">✓</span>
                            <span class="text-gray-700">Prescription refill requests & follow-ups</span>
                        </li>
                    </ul>
                </div>

                <!-- Real Estate -->
                <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition duration-300 slide-in-right">
                    <div class="flex items-start space-x-4 mb-6">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-3m2 3l2-3m2 3l2-3m2 3l2-3m2 3l2-3"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Real Estate Agencies</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Qualify leads 24/7 before your agents connect. Schedule property showings and follow up with prospects automatically.</p>
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 font-bold mt-1">✓</span>
                            <span class="text-gray-700">Lead qualification & property inquiries</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 font-bold mt-1">✓</span>
                            <span class="text-gray-700">Showing appointment scheduling</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 font-bold mt-1">✓</span>
                            <span class="text-gray-700">Follow-up calls & property updates</span>
                        </li>
                    </ul>
                </div>

                <!-- Restaurants -->
                <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition duration-300 slide-in-left">
                    <div class="flex items-start space-x-4 mb-6">
                        <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Restaurants & Cafes</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Take reservations without staff involvement. Send reservation reminders and upsell specials to past customers.</p>
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 font-bold mt-1">✓</span>
                            <span class="text-gray-700">Reservation booking & confirmation</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 font-bold mt-1">✓</span>
                            <span class="text-gray-700">Special event & menu inquiry handling</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 font-bold mt-1">✓</span>
                            <span class="text-gray-700">No-show reminder calls</span>
                        </li>
                    </ul>
                </div>

                <!-- E-commerce -->
                <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition duration-300 slide-in-right">
                    <div class="flex items-start space-x-4 mb-6">
                        <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">E-commerce & Retail</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Handle order status inquiries and returns automatically. Reduce support costs while improving customer satisfaction.</p>
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 font-bold mt-1">✓</span>
                            <span class="text-gray-700">Order tracking & status updates</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 font-bold mt-1">✓</span>
                            <span class="text-gray-700">Return & refund processing</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 font-bold mt-1">✓</span>
                            <span class="text-gray-700">Post-purchase follow-up & reviews</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="py-20 bg-white scroll-reveal">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4 text-reveal">Simple, Transparent Pricing</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto text-reveal">Choose the plan that fits your business needs. No hidden fees, cancel anytime.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 stagger-children">
                <!-- Basic Plan -->
                <div class="bg-white border-2 border-gray-200 rounded-2xl p-8 hover:border-blue-500 hover:shadow-xl transition duration-300 card-reveal">
                    <div class="mb-4">
                        <h3 class="text-2xl font-bold text-gray-800">Basic</h3>
                        <p class="text-gray-600 text-sm">24/7 Call Coverage & Visibility</p>
                    </div>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-gray-800">$99</span>
                        <span class="text-gray-600 text-sm">/month</span>
                        <p class="text-gray-600 text-sm mt-2">or <span class="font-semibold">$990/year</span> <span class="text-green-600 font-semibold">• 2 Months Free</span></p>
                    </div>
                    <button onclick="window.location.href='contact-us.php'" class="w-full btn-autocalls bg-gray-100 text-gray-800 font-semibold py-3 rounded-lg hover:bg-gray-200 transition duration-300 mb-8">
                        Contact Sales
                    </button>
                    <p class="text-gray-600 text-sm mb-6">Built for businesses that need constant availability and full call visibility.</p>
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 font-bold">✓</span>
                            <span class="text-gray-700">24/7 Availability</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 font-bold">✓</span>
                            <span class="text-gray-700">Intelligent Call Handling</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 font-bold">✓</span>
                            <span class="text-gray-700">Real-Time Dashboard Access</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 font-bold">✓</span>
                            <span class="text-gray-700">Call Transcripts & Recordings</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 font-bold">✓</span>
                            <span class="text-gray-700">Basic Customer Information Capture</span>
                        </li>
                    </ul>
                </div>

                <!-- Professional Plan (Featured) -->
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 border-2 border-blue-500 rounded-2xl p-8 shadow-lg hover:shadow-2xl transition duration-300 card-reveal relative">
                    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <span class="bg-blue-500 text-white px-4 py-1 rounded-full text-sm font-semibold">Most Popular</span>
                    </div>
                    <div class="mb-4 mt-4">
                        <h3 class="text-2xl font-bold text-gray-800">Professional</h3>
                        <p class="text-gray-600 text-sm">Advanced Engagement & Automation</p>
                    </div>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-blue-600">$249</span>
                        <span class="text-gray-600 text-sm">/month</span>
                        <p class="text-gray-600 text-sm mt-2">or <span class="font-semibold">$2,490/year</span> <span class="text-green-600 font-semibold">• 2 Months Free</span></p>
                    </div>
                    <button onclick="window.location.href='contact-us.php'" class="w-full btn-autocalls bg-gradient-to-r from-blue-500 to-blue-600 text-white font-semibold py-3 rounded-lg hover:from-blue-600 hover:to-blue-700 transition duration-300 mb-8">
                        Start Free Trial
                    </button>
                    <p class="text-gray-600 text-sm mb-6">Everything in Basic, plus automation, analytics, and system connectivity.</p>
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <span class="text-blue-500 font-bold">✓</span>
                            <span class="text-gray-700">Reservation/Appointment Tracking</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-blue-500 font-bold">✓</span>
                            <span class="text-gray-700">SMS Confirmation Messages</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-blue-500 font-bold">✓</span>
                            <span class="text-gray-700">Advanced Customer Information Capture</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-blue-500 font-bold">✓</span>
                            <span class="text-gray-700">Customer Data Analytics</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-blue-500 font-bold">✓</span>
                            <span class="text-gray-700">System Integrations</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-blue-500 font-bold">✓</span>
                            <span class="text-gray-700">Enhanced Reporting</span>
                        </li>
                    </ul>
                </div>

                <!-- Premium Plan -->
                <div class="bg-white border-2 border-gray-200 rounded-2xl p-8 hover:border-purple-500 hover:shadow-xl transition duration-300 card-reveal">
                    <div class="mb-4">
                        <h3 class="text-2xl font-bold text-gray-800">Premium</h3>
                        <p class="text-gray-600 text-sm">Full Operational Control</p>
                    </div>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-gray-800">$349</span>
                        <span class="text-gray-600 text-sm">/month</span>
                        <p class="text-gray-600 text-sm mt-2">or <span class="font-semibold">$3,490/year</span> <span class="text-green-600 font-semibold">• 2 Months Free</span></p>
                    </div>
                    <button onclick="window.location.href='contact-us.php'" class="w-full btn-autocalls border-2 border-purple-500 text-purple-600 font-semibold py-3 rounded-lg hover:bg-purple-50 transition duration-300 mb-8">
                        Schedule Demo
                    </button>
                    <p class="text-gray-600 text-sm mb-6">Everything in Professional, plus deep analytics and priority expansion.</p>
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <span class="text-purple-500 font-bold">✓</span>
                            <span class="text-gray-700">Reservation Management</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-purple-500 font-bold">✓</span>
                            <span class="text-gray-700">Order Processing</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-purple-500 font-bold">✓</span>
                            <span class="text-gray-700">Comprehensive Real-Time Dashboard</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-purple-500 font-bold">✓</span>
                            <span class="text-gray-700">Advanced Reporting & Analytics</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-purple-500 font-bold">✓</span>
                            <span class="text-gray-700">Performance Metrics & Conversion Tracking</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-purple-500 font-bold">✓</span>
                            <span class="text-gray-700">Priority Integration & Feature Expansion</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-16 bg-gray-50 rounded-2xl p-8 text-center scale-up">
                   <h3 class="text-2xl font-bold text-gray-800 mb-4">Questions About Pricing?</h3>
                <div class="grid md:grid-cols-2 gap-8 mt-8 text-left">
                    <div>
                        <h4 class="font-bold text-gray-800 mb-2">Can I switch plans anytime?</h4>
                        <p class="text-gray-600">Yes! Upgrade or downgrade your plan at any time. Changes take effect at the start of your next billing cycle.</p>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 mb-2">Is there a setup fee?</h4>
                        <p class="text-gray-600">No, there are no setup fees. Start with your chosen plan and begin using Alivio247 immediately.</p>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 mb-2">What happens if I exceed my minutes?</h4>
                           <p class="text-gray-600">Overage charges apply at $0.50/minute. We recommend upgrading your plan for consistent high usage.</p>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 mb-2">Do you offer discounts for annual billing?</h4>
                           <p class="text-gray-600">Yes! Pay annually and get 2 months free. That's a 17% savings compared to monthly billing.</p>
                    </div>
                </div>
                   <hr class="my-8">
                   <p class="text-gray-600 text-sm"><span class="font-semibold">Flexibility Option:</span> All plans are available in a 6-month flexibility option, offering one free month while allowing businesses to benefit from discounted pricing without committing to a full annual term.</p>
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