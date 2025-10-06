<nav class="flex items-center justify-between py-1 px-9 relative">
    <!-- Logo placeholder on the left -->
    <a href="/" class="flex items-center">    
        <div class="h-16 w-16 bg-gray-300 rounded flex items-center justify-center">
            <span class="text-gray-600 font-bold">LOGO</span>
        </div>
    </a>

    <!-- Desktop Navigation - Now grouped with button on the right -->
    <div class="hidden lg:flex lg:items-center lg:gap-10">
        <ul class="flex items-center gap-10 text-lg font-medium">
            <li><a href="" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300">About</a></li>
            <li><a href="#" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300">Blog</a></li>
            <li><a href="#" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300">Careers</a></li>
            <li><a href="#" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300">Contact</a></li>
        </ul>
        
        <!-- Education Button -->
        <button class="bg-black text-white px-4 py-2 font-medium rounded-md hover:bg-gray-800 transition-colors duration-300">Education</button>
    </div>

    <!-- Mobile Menu System -->
    <div class="lg:hidden">
        <!-- Hidden Checkbox -->
        <input type="checkbox" id="mobile-menu-toggle" class="hidden">
        
        <!-- Menu Button with Toggle Icons -->
        <label for="mobile-menu-toggle" class="cursor-pointer">
            <i class="fa-solid fa-bars fa-2x hover:text-gray-400 transition-colors duration-300"></i>
            <i class="fa-solid fa-xmark fa-2x hover:text-gray-400 transition-colors duration-300 hidden"></i>
        </label>

        <!-- Mobile Menu Dropdown -->
        <div class="absolute top-full left-0 w-full bg-white shadow-lg py-4 hidden transition-all duration-300 ease-in-out">
            <div class="flex flex-col items-center gap-4 text-lg font-medium">
                <a href="" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300 py-2">About</a>
                <a href="#" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300 py-2">Blog</a>
                <a href="#" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300 py-2">Careers</a>
                <a href="#" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300 py-2">Contact</a>
                <button class="bg-black text-white px-4 py-2 font-medium rounded-md hover:bg-gray-800 transition-colors duration-300 mt-2">Education</button>
            </div>
        </div>
    </div>
</nav>

<style>
    /* Toggle mobile menu visibility */
    #mobile-menu-toggle:checked ~ div {
        display: block;
    }

    /* Toggle between hamburger and close icons */
    #mobile-menu-toggle:checked ~ label .fa-bars {
        display: none;
    }
    
    #mobile-menu-toggle:checked ~ label .fa-xmark {
        display: block;
    }
</style>


{{-- <header>
  <nav class="bg-white bg-opacity-0 top-0 left-0 right-0 bottom-0 border-b border-white border-opacity-10">
    <div class="comtainer mx-auto px-4 py-2 sm:px-2 lg:px-8">
    <div class="logo flex items-center justify-between h-16">
      Greycode
      </div>
      {{-- Desktop Menu --}}
      {{-- <div class="items-center justify-between w-full md:flex md:w-auto md:order-1">
        <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border-b-gray-500 bg-gray-700 roundedl-lg md:space-x-8 md:flex-row md:mt-0 md:border-0 ">
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:p-0" aria-current="page">About</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:p-0">Blog</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:p-0">Careers</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:p-0">Contact</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:p-0 border border-white px-4 hover:bg-white hover:text-black transition">Education</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
</header>
 --}}





































{{--  --}}
{{-- <header class="mb-2 px-4 shadow">
  <div class="relative mx-auto flex max-w-screen-lg flex-col py-4 sm:flex-row sm:items-center sm:justify-between">
    <a class="flex items-center text-2xl font-black" href="/">
      <span class="mr-2 text-3xl text-blue-600">
        <img src="https://cdn.prod.website-files.com/61e9b480b016367a18c42a6c/66cceefe380970b59ab5474c_Logo%20symbol%20white.PNG" loading="lazy" width="107" sizes="(max-width: 991px) 107.00000762939453px, (max-width: 1279px) 10vw, (max-width: 1439px) 8vw, 98.51786041259766px" alt="" srcset="https://cdn.prod.website-files.com/61e9b480b016367a18c42a6c/66cceefe380970b59ab5474c_Logo%20symbol%20white-p-500.png 500w, https://cdn.prod.website-files.com/61e9b480b016367a18c42a6c/66cceefe380970b59ab5474c_Logo%20symbol%20white-p-800.png 800w, https://cdn.prod.website-files.com/61e9b480b016367a18c42a6c/66cceefe380970b59ab5474c_Logo%20symbol%20white-p-1080.png 1080w, https://cdn.prod.website-files.com/61e9b480b016367a18c42a6c/66cceefe380970b59ab5474c_Logo%20symbol%20white-p-1600.png 1600w, https://cdn.prod.website-files.com/61e9b480b016367a18c42a6c/66cceefe380970b59ab5474c_Logo%20symbol%20white-p-2000.png 2000w, https://cdn.prod.website-files.com/61e9b480b016367a18c42a6c/66cceefe380970b59ab5474c_Logo%20symbol%20white-p-2600.png 2600w, https://cdn.prod.website-files.com/61e9b480b016367a18c42a6c/66cceefe380970b59ab5474c_Logo%20symbol%20white.PNG 2732w" class="logo">
      </span>
      <span>Greycode</span>
    </a>
    <input class="peer hidden" type="checkbox" id="navbar-open" />
    <label class="absolute right-0 mt-1 cursor-pointer text-xl sm:hidden" for="navbar-open">
      <span class="sr-only">Toggle Navigation</span>
      <svg xmlns="http://www.w3.org/2000/svg" width="0.88em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 448 512"><path fill="currentColor" d="M0 96c0-17.7 14.3-32 32-32h384c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32h384c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zm448 160c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32h384c17.7 0 32 14.3 32 32z" /></svg>
    </label>
    <nav aria-label="Header Navigation" class="peer-checked:block hidden pl-2 py-6 sm:block sm:py-0">
      <ul class="flex flex-col gap-y-4 sm:flex-row sm:gap-x-8">
        <li class=""><a class="text-gray-600 hover:text-blue-600" href="#">About</a></li>
        <li class=""><a class="text-gray-600 hover:text-blue-600" href="#">Blog</a></li>
        <li class=""><a class="text-gray-600 hover:text-blue-600" href="#">Careers</a></li>
        <li class=""><a class="text-gray-600 hover:text-blue-600" href="#">Contact</a></li>
        <li class="mt-2 sm:mt-0"><a class="rounded-xl border-2 border-blue-600 px-6 py-2 font-medium text-blue-600 hover:bg-blue-600 hover:text-white" href="#">Login</a></li>
      </ul>
    
    </nav>
  </div>
</header> --}}


{{-- nav 
    x-data="{ isOpen: false, isScrolled: false }" 
    @scroll.window="isScrolled = window.pageYOffset > 50"
    class="fixed top-0 left-0 w-full z-50 transition-all duration-300 ease-in-out"
    x-bind:class="isScrolled ? 'bg-white shadow-lg py-2' : 'py-4'"
>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between">
            
            <!-- Left: Logo -->
            <div class="flex-shrink-0">
                <a href="#" class="text-xl font-bold text-gray-900">
                    <!-- Placeholder Logo -->
                    <div class="w-10 h-10 bg-gray-900 rounded flex items-center justify-center">
                        <span class="text-white text-sm font-bold">LOGO</span>
                    </div>
                </a>
            </div>

            <!-- Center: Navigation Links - Desktop -->
            <div class="hidden md:flex items-center space-x-4">
                @foreach(['About', 'Blog', 'Careers', 'Contact'] as $link)
                    <a 
                        href="#" 
                        class="px-4 py-2 border border-black bg-black text-white text-sm font-medium rounded-md transition-all duration-200 hover:bg-white hover:text-black"
                        x-bind:class="isScrolled ? 'border-gray-300 bg-white text-gray-900 hover:bg-gray-100 hover:border-black' : ''"
                    >
                        {{ $link }}
                    </a>
                @endforeach
            </div>

            <!-- Right: CTA Button - Desktop -->
            <div class="hidden md:block">
                <a 
                    href="#" 
                    class="px-6 py-2 bg-black text-white text-sm font-medium rounded-md border border-black transition-all duration-200 hover:bg-white hover:text-black"
                    x-bind:class="isScrolled ? 'bg-white text-gray-900 border-gray-300 hover:bg-black hover:text-white hover:border-black' : ''"
                >
                    Education
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button 
                    @click="isOpen = !isOpen"
                    class="p-2 rounded-md text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-black"
                    x-bind:class="isScrolled ? 'bg-gray-50' : ''"
                >
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div 
            x-show="isOpen" 
            @click.away="isOpen = false"
            class="md:hidden mt-4 pb-4"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
        >
            <div class="space-y-2">
                @foreach(['About', 'Blog', 'Careers', 'Contact'] as $link)
                    <a 
                        href="#" 
                        class="block px-4 py-3 border border-black bg-black text-white text-base font-medium rounded-md text-center transition-colors duration-200 hover:bg-white hover:text-black"
                        x-bind:class="isScrolled ? 'border-gray-300 bg-white text-gray-900 hover:bg-gray-100 hover:border-black' : ''"
                    >
                        {{ $link }}
                    </a>
                @endforeach
                <a 
                    href="#" 
                    class="block px-4 py-3 bg-black text-white text-base font-medium rounded-md border border-black text-center transition-colors duration-200 hover:bg-white hover:text-black"
                    x-bind:class="isScrolled ? 'bg-white text-gray-900 border-gray-300 hover:bg-black hover:text-white hover:border-black' : ''"
                >
                    Education
                </a>
            </div>
        </div>
    </div>
</>

<!-- Spacer to prevent content from being hidden behind fixed nav -->
<div class="h-20"></div> --}}

{{-- <nav x-data="{ open: false }" class="bg-white border-b shadow-sm" role="banner">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      <div class="flex items-center">
        <a href="{{ url('/') }}" class="flex-shrink-0">
          <img src="https://cdn.prod.website-files.com/61e9b480b016367a18c42a6c/659bdaa64adc36bf9c4b02d4_Untitled%20design%20(5).png"
               alt="Logo"
               class="h-8 w-auto">
        </a>
        <div class="hidden md:flex md:ml-10 md:space-x-6">
          <a href="/about-page"
             class="px-1 py-2 text-sm font-medium transition-colors
                    {{ request()->is('about-page') ? 'text-gray-900 border-b-2 border-indigo-600' : 'text-gray-600 hover:text-gray-900' }}">
            About
          </a>

          <a href="/blog"
             class="px-1 py-2 text-sm font-medium transition-colors
                    {{ request()->is('blog*') ? 'text-gray-900 border-b-2 border-indigo-600' : 'text-gray-600 hover:text-gray-900' }}">
            Blog
          </a>

          <a href="/careers"
             class="px-1 py-2 text-sm font-medium transition-colors
                    {{ request()->is('careers*') ? 'text-gray-900 border-b-2 border-indigo-600' : 'text-gray-600 hover:text-gray-900' }}">
            Careers
          </a>
        </div>
      </div>

      <div class="hidden md:flex items-center space-x-4">
        <a href="/contact"
           class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md
                  bg-indigo-600 text-white hover:bg-indigo-700 focus:outline-none">
          Get Started
        </a>
      </div>

      <div class="-mr-2 flex md:hidden">
        <button @click="open = !open" type="button"
                class="inline-flex items-center justify-center p-2 rounded-md text-gray-500 hover:text-gray-900
                       focus:outline-none focus:ring-2 focus:ring-indigo-500">
          <span class="sr-only">Open main menu</span>
          <svg x-show="!open" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
               stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
          <svg x-show="open" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
               stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>
      </div>
    </div>
  </div>

  <div x-show="open" x-cloak class="md:hidden">
    <div class="pt-2 pb-3 space-y-1">
      <a href="/about-page"
         class="block px-4 py-2 text-base font-medium {{ request()->is('about-page') ? 'text-indigo-700 bg-indigo-50' : 'text-gray-700 hover:bg-gray-50' }}">
        About
      </a>
      <a href="/blog"
         class="block px-4 py-2 text-base font-medium {{ request()->is('blog*') ? 'text-indigo-700 bg-indigo-50' : 'text-gray-700 hover:bg-gray-50' }}">
        Blog
      </a>
      <a href="/careers"
         class="block px-4 py-2 text-base font-medium {{ request()->is('careers*') ? 'text-indigo-700 bg-indigo-50' : 'text-gray-700 hover:bg-gray-50' }}">
        Careers
      </a>
    </div>
    <div class="pt-4 pb-4 border-t">
      <div class="px-4">
        <a href="/contact"
           class="block w-full text-center px-4 py-2 rounded-md bg-indigo-600 text-white font-medium hover:bg-indigo-700">
          Get Started
        </a>
      </div>
    </div>
  </div>
</nav> --}}
