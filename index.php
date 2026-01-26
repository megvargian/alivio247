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
                    class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    Start Now
                </button>
            </div>
            <div class="w-full md:w-3/5 py-6 text-center">
                <!-- <img class="w-full md:w-4/5 z-50" src="hero.png" /> -->
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