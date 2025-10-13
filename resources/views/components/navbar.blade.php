<nav class="flex items-center justify-between py-1 px-4 lg:px-20 relative min-h-[60px]" role="navigation">
    <!-- Logo -->
    <a href="/" class="flex items-center">
        <img src="{{ asset('images/Asset 1 1.png') }}" alt="Logo" class="h-8 w-auto object-contain" width="120" height="32" loading="lazy">
    </a>

    <!-- Desktop Navigation -->
    <div class="hidden lg:flex lg:items-center lg:gap-6">
        <ul class="flex items-center gap-6 text-base font-medium">
            <li><a href="/" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300 py-1">Home</a></li>
            <li><a href="/about" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300 py-1">About</a></li>
            <li><a href="/blog" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300 py-1">Blog</a></li>
            <li class="group relative">
    <!-- Services Link with Dropdown Indicator -->
    <a href="#" class="flex items-center text-greycode-light-blue hover:text-gray-400 transition-colors duration-300 py-1">
        Services
        <i class="fas fa-chevron-down ml-1 text-xs transition-transform duration-300 group-hover:rotate-180"></i>
    </a>
    
    <!-- Dropdown Menu -->
    <div class="absolute left-0 top-full mt-2 w-56 bg-white rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 translate-y-2 z-50 border border-gray-200">
        <div class="py-2">
            <!-- Dropdown Item 1 -->
            <a href="#" class="flex items-center px-4 py-3 text-gray-700 hover:bg-greycode-light-blue hover:text-white transition-colors duration-200 group/item">
                <i class="fas fa-tractor mr-3 text-greycode-light-blue group-hover/item:text-white"></i>
                <span>Smart Farming</span>
            </a>
            
            <!-- Dropdown Item 2 -->
            <a href="#" class="flex items-center px-4 py-3 text-gray-700 hover:bg-greycode-light-blue hover:text-white transition-colors duration-200 group/item">
                <i class="fas fa-industry mr-3 text-greycode-light-blue group-hover/item:text-white"></i>
                <span>Manufacturing</span>
            </a>
            
            <!-- Dropdown Item 3 -->
            <a href="#" class="flex items-center px-4 py-3 text-gray-700 hover:bg-greycode-light-blue hover:text-white transition-colors duration-200 group/item">
                <i class="fas fa-oil-well mr-3 text-greycode-light-blue group-hover/item:text-white"></i>
                <span>Mining, Oil & Gas</span>
            </a>
            
            <!-- Dropdown Item 4 -->
            <a href="#" class="flex items-center px-4 py-3 text-gray-700 hover:bg-greycode-light-blue hover:text-white transition-colors duration-200 group/item">
                <i class="fas fa-building mr-3 text-greycode-light-blue group-hover/item:text-white"></i>
                <span>Smart Buildings</span>
            </a>
            
            <!-- Dropdown Item 5 -->
            <a href="#" class="flex items-center px-4 py-3 text-gray-700 hover:bg-greycode-light-blue hover:text-white transition-colors duration-200 group/item">
                <i class="fas fa-receipt mr-3 text-greycode-light-blue group-hover/item:text-white"></i>
                <span>Tracking</span>
            </a>

             <a href="#" class="flex items-center px-4 py-3 text-gray-700 hover:bg-greycode-light-blue hover:text-white transition-colors duration-200 group/item">
                <i class="fas fa-microchip mr-3 text-greycode-light-blue group-hover/item:text-white"></i>
                <span>Prototyping</span>
            </a>
            
            
        </div>
    </div>
</li>
            <li><a href="/careers" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300 py-1">Careers</a></li>
            <li><a href="/contact" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300 py-1">Contact</a></li>
        </ul>
        
        <!-- Education Button -->
        <button class="bg-greycode-light-blue text-white px-4 py-2 font-medium rounded-md hover:bg-gray-800 transition-colors duration-300">Education</button>
    </div>

    <!-- Mobile Menu System -->
    <div class="lg:hidden flex items-center">
        <!-- Hidden Checkbox -->
        @php
            use Illuminate\Support\Str;
            $navbarId = $navbarId ?? 'mobile-menu-toggle-' . (string) Str::uuid();
        @endphp
        <input type="checkbox" id="{{ $navbarId }}" class="hidden peer">
        
        <!-- Menu Button with Toggle Icons -->
        <label for="{{ $navbarId }}" class="cursor-pointer flex items-center">
            <i class="fa-solid fa-bars text-lg hover:text-gray-400 transition-colors duration-300"></i>
            <i class="fa-solid fa-xmark text-lg hover:text-gray-400 transition-colors duration-300 hidden"></i>
        </label>

        <!-- Mobile Menu Dropdown -->
        <div class="absolute top-full left-0 w-full bg-white shadow-lg py-4 hidden peer-checked:block z-50">
            <div class="flex flex-col items-center gap-3 text-base font-medium">
                <a href="/about" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300 py-2 w-full text-center">About</a>
                <a href="/blog" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300 py-2 w-full text-center">Blog</a>
                <a href="/careers" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300 py-2 w-full text-center">Careers</a>
                <a href="/contact" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300 py-2 w-full text-center">Contact</a>
                <button class="bg-greycode-light-blue text-white px-4 py-2 font-medium rounded-md hover:bg-gray-800 transition-colors duration-300 mt-2">Education</button>
            </div>
        </div>
    </div>
</nav>

<style>
    /* Fix for menu toggle icons */
    #{{ $navbarId }}:checked + label .fa-bars {
        display: none;
    }
    
    #{{ $navbarId }}:checked + label .fa-xmark {
        display: block;
    }
    
    /* Ensure the hidden checkbox doesn't take space */
    #{{ $navbarId }} {
        position: absolute;
        opacity: 0;
    }
</style>
{{-- <nav class="flex items-center justify-between py-2 px-9 relative">
    <!-- Logo - Fixed height -->
    <a href="/" class="flex items-center">
        <img src="{{ asset('images/Asset 1 1.png') }}" alt="Logo" class="h-12 w-auto object-contain">
    </a>

    <!-- Desktop Navigation -->
    <div class="hidden lg:flex lg:items-center lg:gap-8">
        <ul class="flex items-center gap-8 text-lg font-medium">
            <li><a href="" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300">About</a></li>
            <li><a href="#" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300">Blog</a></li>
            <li><a href="#" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300">Careers</a></li>
            <li><a href="#" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300">Contact</a></li>
        </ul>
        
        <!-- Education Button -->
        <button class="bg-greycode-light-blue text-white px-4 py-2 font-medium rounded-md hover:bg-gray-800 transition-colors duration-300">Education</button>
    </div>

    <!-- Mobile Menu System -->
    <div class="lg:hidden flex items-center">
        <!-- Hidden Checkbox -->
        <input type="checkbox" id="mobile-menu-toggle" class="hidden peer">
        
        <!-- Menu Button with Toggle Icons -->
        <label for="mobile-menu-toggle" class="cursor-pointer flex items-center">
            <i class="fa-solid fa-bars fa-xl hover:text-gray-400 transition-colors duration-300 peer-checked:hidden"></i>
            <i class="fa-solid fa-xmark fa-xl hover:text-gray-400 transition-colors duration-300 hidden peer-checked:block"></i>
        </label>

        <!-- Mobile Menu Dropdown -->
        <div class="absolute top-full left-0 w-full bg-white shadow-lg py-4 hidden peer-checked:block z-50">
            <div class="flex flex-col items-center gap-3 text-lg font-medium">
                <a href="" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300 py-1">About</a>
                <a href="#" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300 py-1">Blog</a>
                <a href="#" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300 py-1">Careers</a>
                <a href="#" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300 py-1">Contact</a>
                <button class="bg-black text-white px-4 py-2 font-medium rounded-md hover:bg-gray-800 transition-colors duration-300 mt-1">Education</button>
            </div>
        </div>
    </div>
</nav> --}}

{{-- <nav class="flex items-center justify-between py-1 px-9 relative">
    <!-- Corrected Logo -->
    <a href="/" class="flex items-center">
    <div class="h-16 flex items-center justify-center">
      <img src="{{ asset('images/Asset 1 1.png') }}" alt="Logo" class="h-30 w-30 object-contain">
    </div>
    </a>

    <!-- Desktop Navigation - Now grouped with button on the right -->
    <div class="hidden lg:flex lg:items-center lg:gap-10">
        <ul class="flex items-center gap-10 text-xl font-medium">
            <li><a href="" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300">About</a></li>
            <li><a href="#" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300">Blog</a></li>
            <li><a href="#" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300">Careers</a></li>
            <li><a href="#" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300">Contact</a></li>
        </ul>
        
        <!-- Education Button -->
        <button class="bg-greycode-light-blue text-white px-4 py-2 font-medium rounded-md hover:bg-gray-800 transition-colors duration-300">Education</button>
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


 --}}