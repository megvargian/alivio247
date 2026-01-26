<!DOCTYPE html>
<html lang="en">

<head>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9567457665716133"
        crossorigin="anonymous"></script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Alivio 24/7</title>
    <link rel="icon" href="https://raw.githubusercontent.com/megvargian/alivio247/refs/heads/main/Alivio%20colorrr.png"
        type="image/png">
    <meta name="description" content="Simple landind page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <link rel="stylesheet" href="./style.css">
</head>

<body class="leading-normal tracking-normal text-black gradient" style="font-family: 'Source Sans Pro', sans-serif;">
    <!--Nav-->
    <nav id="header" class="fixed w-full z-30 top-0 text-black main-gradient">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
            <div class="pl-4 flex items-center">
                <a class="toggleColour flex items-center no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
                    href="/">
                    <img id="brandlogo-white"
                        src="https://raw.githubusercontent.com/HasmigBaba/MobileTire/refs/heads/main/alivio%20whitee.png"
                        class="h-10 mr-2" alt="Alivio White Logo">
                    <img id="brandlogo-color"
                        src="https://raw.githubusercontent.com/HasmigBaba/MobileTire/refs/heads/main/Alivio%20colorrr.png"
                        class="h-10 mr-2" style="display:none;" alt="Alivio Color Logo">
                    <span id="brandname">Alivio 24/7</span>
                </a>
            </div>

            <div class="block lg:hidden pr-4">
                <button id="nav-toggle"
                    class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>

            <div id="nav-content"
                class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-gray-100 lg:bg-transparent text-black p-4 lg:p-0 z-20">
                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    <!-- <li class="mr-3">
                        <a class="inline-block py-2 px-4 text-black font-bold no-underline"
                            href="https://www.alivio247.com">Home</a>
                    </li> -->
                    <!-- <li class="mr-3">
                        <a class="inline-block text-black no-underline hover:text-gray-800 py-2 px-4"
                            href="#">Industries</a>
                    </li> -->
                    <li class="mr-3 dropdown">
                        <a class="inline-block text-black no-underline hover:text-gray-800 py-2 px-4 cursor-pointer"
                            onclick="toggleMobileDropdown(event)">
                            Pricing
                            <svg class="inline-block w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <div class="dropdown-content">
                            <a href="inbound.php">Inbound</a>
                            <a href="#" class="text-gray-400 cursor-not-allowed">Outbound (Coming Soon)</a>
                        </div>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-black no-underline hover:text-gray-800 py-2 px-4"
                            href="about-us.php">About Us</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-black no-underline hover:text-gray-800 py-2 px-4"
                            href="contact-us.php">Contact Us</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-black no-underline hover:text-gray-800 py-2 px-4"
                            href="terms-and-conditions.php">Terms</a>
                    </li>
                </ul>
                <button id="navAction" onclick="window.location.href='https://dashboard.alivio247.com/'"
                    class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    Dashboard
                </button>

            </div>
        </div>
        <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>

    <script>
    // Toggle dropdown on mobile
    function toggleMobileDropdown(event) {
        if (window.innerWidth < 1024) {
            event.preventDefault();
            const dropdown = event.target.closest('.dropdown');
            dropdown.classList.toggle('mobile-open');
        }
    }
    </script>
<?php