<nav class="flex items-center justify-between py-2 px-4 lg:px-20 relative min-h-[60px]" role="navigation">
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
            
            <!-- Services Dropdown -->
            <li class="group relative">
                <a href="#" class="flex items-center text-greycode-light-blue hover:text-gray-400 transition-colors duration-300 py-1">
                    Services
                    <i class="fas fa-chevron-down ml-1 text-xs transition-transform duration-300 group-hover:rotate-180"></i>
                </a>
                <div class="absolute left-0 top-full mt-2 w-56 bg-white rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                    <div class="py-2">
                        <a href="/smart-farming" class="flex items-center px-4 py-3 text-gray-700 hover:bg-greycode-light-blue hover:text-white transition-colors duration-200">
                            <i class="fas fa-tractor mr-3 text-greycode-light-blue"></i>
                            <span>Smart Farming</span>
                        </a>
                        <a href="/manufacturing" class="flex items-center px-4 py-3 text-gray-700 hover:bg-greycode-light-blue hover:text-white transition-colors duration-200">
                            <i class="fas fa-industry mr-3 text-greycode-light-blue"></i>
                            <span>Manufacturing</span>
                        </a>
                        <a href="/mining-oil-gas" class="flex items-center px-4 py-3 text-gray-700 hover:bg-greycode-light-blue hover:text-white transition-colors duration-200">
                            <i class="fas fa-oil-well mr-3 text-greycode-light-blue"></i>
                            <span>Mining, Oil & Gas</span>
                        </a>
                        <a href="/smart-building" class="flex items-center px-4 py-3 text-gray-700 hover:bg-greycode-light-blue hover:text-white transition-colors duration-200">
                            <i class="fas fa-building mr-3 text-greycode-light-blue"></i>
                            <span>Smart Buildings</span>
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 text-gray-700 hover:bg-greycode-light-blue hover:text-white transition-colors duration-200">
                            <i class="fas fa-receipt mr-3 text-greycode-light-blue"></i>
                            <span>Tracking</span>
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 text-gray-700 hover:bg-greycode-light-blue hover:text-white transition-colors duration-200">
                            <i class="fas fa-microchip mr-3 text-greycode-light-blue"></i>
                            <span>Prototyping</span>
                        </a>
                    </div>
                </div>
            </li>

            <li><a href="#" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300 py-1">Shop</a></li>
            <li><a href="/contact" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300 py-1">Contact</a></li>
        </ul>

        <!-- Education Button -->
        <a href="#"><button class="bg-greycode-light-blue text-white px-4 py-2 font-medium rounded-md hover:bg-gray-800 transition-colors duration-300">Education</button></a>
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
            <i class="fa-solid fa-bars text-lg hover:text-gray-400 transition-colors duration-300 peer-checked:hidden"></i>
            <i class="fa-solid fa-xmark text-lg hover:text-gray-400 transition-colors duration-300 hidden peer-checked:block"></i>
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
    /* Fix for mobile menu toggle icons */
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

    /* Toggle visibility of mobile menu */
    #{{ $navbarId }}:checked ~ .peer-checked:block {
        display: block;
    }
</style>
