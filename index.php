<?php
// This is now a PHP file, but contains only HTML.
// You can later add dynamic PHP code if needed.
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
      Tailwind Starter Template - Landing Page Template: Tailwind Toolbox
    </title>
    <meta name="description" content="Simple landind page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <style>
      .gradient {
        background: linear-gradient(90deg, #0a3b88 0%, #4d8def 100%);
      }
    </style>
    <style>
      .rotating-text {
        font-size: 2.5rem;
        font-family: 'Courier New', Courier, monospace;
        font-weight: bold;
        border-right: 2px solid #000;
        white-space: nowrap;
        overflow: hidden;
        min-height: 3rem;
      }
      @media (max-width: 768px) {
        .rotating-text {
          font-size: 2rem;
          text-align: center;
          display: block;
          margin: 0 auto;
        }
      }
      @keyframes blink {
        0%, 50%, 100% { border-color: black; }
        25%, 75% { border-color: transparent; }
      }
      .rotating-text {
        animation: blink 1s step-end infinite;
      }
    </style>
  </head>
  <body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
   <!--Nav-->
<nav id="header" class="fixed w-full z-30 top-0 text-white">
  <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
    <div class="pl-4 flex items-center">
      <a class="toggleColour flex items-center no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
        <img id="brandlogo-white"
             src="https://raw.githubusercontent.com/HasmigBaba/MobileTire/refs/heads/main/alivio%20whitee.png"
             class="h-10 mr-2"
             alt="Alivio White Logo">
        <img id="brandlogo-color"
             src="https://raw.githubusercontent.com/HasmigBaba/MobileTire/refs/heads/main/Alivio%20colorrr.png"
             class="h-10 mr-2"
             style="display:none;"
             alt="Alivio Color Logo">
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
        <li class="mr-3">
         <a class="inline-block py-2 px-4 text-black font-bold no-underline" href="https://www.alivio247.com">Home</a>
        </li>
        <li class="mr-3">
          <a class="inline-block text-black no-underline hover:text-gray-800 py-2 px-4" href="#">Industries</a>
        </li>
        <li class="mr-3">
          <a class="inline-block text-black no-underline hover:text-gray-800 py-2 px-4" href="#">Pricing</a>
        </li>
      </ul>
      <button id="navAction"
        onclick="window.location.href='https://dashboard.alivio247.com/'"
        class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
    Dashboard
</button>

    </div>
  </div>
  <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
</nav>

<!--Hero Section-->
<div class="pt-24">
  <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
    <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
      <p class="uppercase tracking-loose w-full">Don’t make them wait in voicemail</p>
      <h1 class="my-4 text-5xl font-bold leading-tight">AI voice agents for</h1>
      <p id="rotatingText" class="rotating-text"></p>
      <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
        Start Now
      </button>
    </div>
    <div class="w-full md:w-3/5 py-6 text-center">
      <img class="w-full md:w-4/5 z-50" src="hero.png" />
    </div>
  </div>
</div>

<!-- Continue the rest of your HTML as-is -->
<!-- Sections, SVGs, Pricing, Testimonials, Footer, Scripts... -->

<script>
  // JS code for scroll effects, nav toggle, rotating text
  var scrollpos = window.scrollY;
  var header = document.getElementById("header");
  var navcontent = document.getElementById("nav-content");
  var navaction = document.getElementById("navAction");
  var brandname = document.getElementById("brandname");
  var toToggle = document.querySelectorAll(".toggleColour");

  var brandlogoWhite = document.getElementById("brandlogo-white");
  var brandlogoColor = document.getElementById("brandlogo-color");

  document.addEventListener("scroll", function () {
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
</script>

<script>
  var navMenuDiv = document.getElementById("nav-content");
  var navMenu = document.getElementById("nav-toggle");

  document.onclick = check;
  function check(e) {
    var target = (e && e.target) || (event && event.srcElement);
    if (!checkParent(target, navMenuDiv)) {
      if (checkParent(target, navMenu)) {
        if (navMenuDiv.classList.contains("hidden")) {
          navMenuDiv.classList.remove("hidden");
        } else {
          navMenuDiv.classList.add("hidden");
        }
      } else {
        navMenuDiv.classList.add("hidden");
      }
    }
  }
  function checkParent(t, elm) {
    while (t.parentNode) {
      if (t == elm) {
        return true;
      }
      t = t.parentNode;
    }
    return false;
  }
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
</body>
</html>
