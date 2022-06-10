<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <!-- Styles -->
    <link rel="stylesheet"
      href="{{ mix('css/app.css') }}">
      
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="font-poppins" x-data="{ navbarOpen: false, scrolledTop : false, scrollPoint: 0 }" @scroll.window="window.pageYOffset > scrollPoint ? scrolledTop = true : scrolledTop = false; scrollPoint = window.pageYOffset;" :class="{'overflow-hidden': navbarOpen, 'overflow-auto': !navbarOpen}">
    <header 
    :class="{'-translate-y-full': scrolledTop, 'translate-y-0': !scrolledTop ,'bg-army bg-opacity-25 backdrop-blur-xl drop-shadow-lg !h-[4rem]': (scrollPoint!==0)}"
    class="transition-all duration-500 fixed flex justify-between items-center px-4 md:px-14 w-full h-16 md:h-24">
        <a href="#" class="px-4 py-2 rounded">
            <img src="{{ asset('img/logo-white.png') }}" alt="Logo" class="h-4">
        </a>
        <nav class="">
            <button class="md:hidden" @click="navbarOpen = !navbarOpen">
                <svg xmlns="http://www.w3.org   /2000/svg" class="h-8 w-8 text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd" />
                  </svg>
            </button>
            <ul 
            class="fixed right-0 left-0 min-h-screen space-y-4 p-4 mt-3 transform translate-x-full transition duration-200 md:mt-0 md:relative md:flex md:min-h-0 md:space-y-0 md:space-x-6 md:p-0 md:translate-x-0 md:bg-transparent"
            :class="{'translate-x-full' : !navbarOpen, 'translate-x-0 bg-gradient-to-bl from-army to-dark-army' : navbarOpen}"
            >
                <li>
                    <a href="#" class="text-sm text-white hover:text-cream hover:subpixel-antialiased">Home</a>
                </li>
                <li>
                    <a href="#experience" class="text-sm text-white hover:text-cream hover:subpixel-antialiased">Experience</a>
                </li>
                <li>
                    <a href="#about" class="text-sm text-white hover:text-cream hover:subpixel-antialiased">About</a>
                </li>
                <li>
                    <a href="#contact" class="text-sm text-white hover:text-cream hover:subpixel-antialiased">Contact</a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="flex flex-col">
        <div class="flex w-full h-screen">
            <div class="bg-gradient-to-bl from-army to-dark-army w-full">
                <div class="flex justify-center h-full px-8">
                    <div class="text-lg text-white p-24 self-center translate-y-full opacity-0 duration-1000" x-intersect="$el.classList.add('opacity-100','!translate-y-0')">Welcome!</div>
                </div>
            </div>
        </div>
        <div class="flex w-full h-screen justify-center" id="experience">
            <div class="text-lg text-army p-24 self-center translate-x-full opacity-0 duration-1000" x-intersect="$el.classList.add('opacity-100','!translate-x-0')">Experience!</div>
        </div>
        <div class="flex w-full h-screen" id="about">
            <div class="bg-gradient-to-bl from-light-army to-army w-full bg-blend-">
                <div class="flex justify-center h-full px-8">
                    <div class="text-lg text-white p-24 self-center translate-y-full opacity-0 duration-1000" x-intersect="$el.classList.add('opacity-100','!translate-y-0')">About Me!</div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>