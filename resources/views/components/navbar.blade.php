<nav class="flex items-center justify-between py-1 px-4 lg:px-20 relative min-h-[60px]">
    <!-- Logo -->
    <a href="/" class="flex items-center">
        <img src="{{ asset('images/Asset 1 1.png') }}" alt="Logo" class="h-8 w-auto object-contain">
    </a>

    <!-- Desktop Navigation -->
    <div class="hidden lg:flex lg:items-center lg:gap-6">
        <ul class="flex items-center gap-6 text-base font-medium">
            <li><a href="" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300 py-1">About</a></li>
            <li><a href="#" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300 py-1">Blog</a></li>
            <li><a href="#" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300 py-1">Careers</a></li>
            <li><a href="#" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300 py-1">Contact</a></li>
        </ul>
        
        <!-- Education Button -->
        <button class="bg-greycode-light-blue text-white px-3 py-1.5 text-sm font-medium rounded-md hover:bg-gray-800 transition-colors duration-300">Education</button>
    </div>

    <!-- Mobile Menu System -->
    <div class="lg:hidden flex items-center">
        <!-- Hidden Checkbox -->
        <input type="checkbox" id="mobile-menu-toggle" class="hidden peer">
        
        <!-- Menu Button with Toggle Icons -->
        <label for="mobile-menu-toggle" class="cursor-pointer flex items-center">
            <i class="fa-solid fa-bars text-lg hover:text-gray-400 transition-colors duration-300 peer-checked:hidden"></i>
            <i class="fa-solid fa-xmark text-lg hover:text-gray-400 transition-colors duration-300 hidden peer-checked:block"></i>
        </label>

        <!-- Mobile Menu Dropdown -->
        <div class="absolute top-full left-0 w-full bg-white shadow-lg py-2 hidden peer-checked:block z-50">
            <div class="flex flex-col items-center gap-2 text-base font-medium">
                <a href="" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300 py-1">About</a>
                <a href="#" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300 py-1">Blog</a>
                <a href="#" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300 py-1">Careers</a>
                <a href="#" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300 py-1">Contact</a>
                <button class="bg-black text-white px-3 py-1.5 text-sm font-medium rounded-md hover:bg-gray-800 transition-colors duration-300 mt-1">Education</button>
            </div>
        </div>
    </div>
</nav>
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