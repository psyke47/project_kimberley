<nav class="flex items-center justify-between py-2 px-4 lg:px-20 sticky top-0 z-50 min-h-[60px] bg-white dark:bg-gray-800 transition-colors duration-300" role="navigation">
    <!-- Logo -->
    <a href="/" class="flex items-center">
    <!-- Light mode logo -->
        <img src="{{ asset('images/Asset 1 1.png') }}" alt="Logo" 
            class="h-8 w-auto object-contain dark:hidden" 
            width="120" height="32" loading="lazy">
    <!-- Dark mode logo (white version) -->
        <img src="{{ asset('images/greycode-white-logo.png') }}" alt="Logo" 
            class="h-8 w-auto object-contain hidden dark:block" 
            width="120" height="32" loading="lazy">
    </a>

    <!-- Desktop Navigation -->
    <div class="hidden lg:flex lg:items-center lg:gap-6">
        <ul class="flex items-center gap-6 text-base font-medium">
            <li><a href="/" class="text-greycode-light-blue dark:text-white hover:text-gray-400 transition-colors duration-300 py-1 dark:text-blue-400 dark:hover:text-blue-300">Home</a></li>
            <li><a href="/about" class="text-greycode-light-blue dark:text-white hover:text-gray-400 transition-colors duration-300 py-1 dark:text-blue-400 dark:hover:text-blue-300">About</a></li>
            <li><a href="/blog" class="text-greycode-light-blue dark:text-white hover:text-gray-400 transition-colors duration-300 py-1 dark:text-blue-400 dark:hover:text-blue-300">Blog</a></li>
            
            <!-- Services Dropdown -->
            <li class="group relative">
                <a href="#" class="flex items-center text-greycode-light-blue dark:text-white hover:text-gray-400 transition-colors duration-300 py-1 dark:text-blue-400 dark:hover:text-blue-300">
                    Services
                    <i class="fas fa-chevron-down ml-1 text-xs transition-transform duration-300 group-hover:rotate-180"></i>
                </a>
                <div class="absolute left-0 top-full mt-2 w-56 bg-white rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 dark:bg-gray-800 dark:border dark:border-gray-700">
                    <div class="py-2">
                        <a href="/smart-farming" class="flex items-center px-4 py-3 text-gray-700 hover:bg-greycode-light-blue hover:text-white transition-colors duration-200 dark:text-gray-300 dark:hover:bg-blue-600">
                            <i class="fas fa-tractor mr-3 text-greycode-light-blue dark:text-blue-400 dark:group-hover:text-white"></i>
                            <span>Smart Farming</span>
                        </a>
                        <a href="/manufacturing" class="flex items-center px-4 py-3 text-gray-700 hover:bg-greycode-light-blue hover:text-white transition-colors duration-200 dark:text-gray-300 dark:hover:bg-blue-600">
                            <i class="fas fa-industry mr-3 text-greycode-light-blue dark:text-blue-400 dark:group-hover:text-white"></i>
                            <span>Manufacturing</span>
                        </a>
                        <a href="/mining-oil-gas" class="flex items-center px-4 py-3 text-gray-700 hover:bg-greycode-light-blue hover:text-white transition-colors duration-200 dark:text-gray-300 dark:hover:bg-blue-600">
                            <i class="fas fa-oil-well mr-3 text-greycode-light-blue dark:text-blue-400 dark:group-hover:text-white"></i>
                            <span>Mining, Oil & Gas</span>
                        </a>
                        <a href="/smart-home" class="flex items-center px-4 py-3 text-gray-700 hover:bg-greycode-light-blue hover:text-white transition-colors duration-200 dark:text-gray-300 dark:hover:bg-blue-600">
                            <i class="fas fa-house-chimney mr-3 text-greycode-light-blue dark:text-blue-400 dark:group-hover:text-white"></i>
                            <span>Smart Homes</span>
                        </a>
                        <a href="/smart-building" class="flex items-center px-4 py-3 text-gray-700 hover:bg-greycode-light-blue hover:text-white transition-colors duration-200 dark:text-gray-300 dark:hover:bg-blue-600">
                            <i class="fas fa-building mr-3 text-greycode-light-blue dark:text-blue-400 dark:group-hover:text-white"></i>
                            <span>Smart Buildings</span>
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 text-gray-700 hover:bg-greycode-light-blue hover:text-white transition-colors duration-200 dark:text-gray-300 dark:hover:bg-blue-600">
                            <i class="fas fa-receipt mr-3 text-greycode-light-blue dark:text-blue-400 dark:group-hover:text-white"></i>
                            <span>Tracking</span>
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 text-gray-700 hover:bg-greycode-light-blue hover:text-white transition-colors duration-200 dark:text-gray-300 dark:hover:bg-blue-600">
                            <i class="fas fa-microchip mr-3 text-greycode-light-blue dark:text-blue-400 dark:group-hover:text-white"></i>
                            <span>Prototyping</span>
                        </a>
                    </div>
                </div>
            </li>

            <li><a href="#" class="text-greycode-light-blue dark:text-white hover:text-gray-400 transition-colors duration-300 py-1 dark:text-blue-400 dark:hover:text-blue-300">Shop</a></li>
            <li><a href="/contact" class="text-greycode-light-blue dark:text-white hover:text-gray-400 transition-colors duration-300 py-1 dark:text-blue-400 dark:hover:text-blue-300">Contact</a></li>
        </ul>

        <!-- Dark Mode Toggle -->
        <button id="theme-toggle" type="button" class="py-1.5 px-3 m-1 text-center bg-transparent dark:bg-transparent  rounded-md text-greycode-light-blue hover:bg-gray-800 transition-colors duration-300 dark:bg-blue-600 dark:hover:bg-blue-700">
            <svg id="theme-toggle-dark-icon" class="w-5 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
            </svg>
            <svg id="theme-toggle-light-icon" class="w-5 h-6 hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
            </svg>
        </button>

        <!-- Education Button -->
        <a href="https://courses.greycode.co.za/courses/"><button class="bg-greycode-light-blue text-white px-4 py-2 font-medium rounded-md hover:bg-gray-800 transition-colors duration-300 dark:bg-blue-600 dark:hover:bg-blue-700">Education</button></a>
    </div>

    <!-- Mobile Menu System -->
    <div class="lg:hidden flex items-center gap-4">
        <!-- Dark Mode Toggle for Mobile -->
        <button id="theme-toggle-mobile" type="button" class="py-1.5 px-3 text-center bg-greycode-light-blue border border-gray-300 rounded-md text-white hover:bg-gray-800 transition-colors duration-300 dark:bg-blue-600 dark:hover:bg-blue-700">
            <svg id="theme-toggle-dark-icon-mobile" class="w-5 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
            </svg>
            <svg id="theme-toggle-light-icon-mobile" class="w-5 h-6 hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
            </svg>
        </button>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-button" class="cursor-pointer flex items-center">
            <i class="fa-solid fa-bars text-lg text-greycode-light-blue in-dark:text-white hover:text-gray-400 transition-colors duration-300 dark:text-blue-400 dark:hover:text-blue-300"></i>
        </button>

        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu" class="absolute top-full left-0 w-full bg-white shadow-lg py-4 hidden z-50 dark:bg-gray-800 transition-colors duration-300">
            <div class="flex flex-col items-center gap-3 text-base font-medium">
                <a href="/" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300 py-2 w-full text-center dark:text-blue-400 dark:hover:text-blue-300">Home</a>
                <a href="/about" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300 py-2 w-full text-center dark:text-blue-400 dark:hover:text-blue-300">About</a>
                <a href="/blog" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300 py-2 w-full text-center dark:text-blue-400 dark:hover:text-blue-300">Blog</a>
                
                <!-- Mobile Services Dropdown -->
                <div class="w-full text-center">
                    <button id="mobile-services-toggle" class="flex items-center justify-center w-full text-greycode-light-blue hover:text-gray-400 transition-colors duration-300 py-2 dark:text-blue-400 dark:hover:text-blue-300">
                        Services
                        <i class="fas fa-chevron-down ml-2 text-xs transition-transform duration-300" id="mobile-services-chevron"></i>
                    </button>
                    <div id="mobile-services-dropdown" class="hidden bg-gray-50 mx-4 rounded-lg mt-2 overflow-hidden dark:bg-gray-700 transition-colors duration-300">
                        <a href="/smart-farming" class="block text-greycode-light-blue hover:bg-greycode-light-blue hover:text-white transition-colors duration-200 py-3 px-4 border-b border-gray-200 dark:border-gray-600 dark:text-blue-400 dark:hover:bg-blue-600">Smart Farming</a>
                        <a href="/manufacturing" class="block text-greycode-light-blue hover:bg-greycode-light-blue hover:text-white transition-colors duration-200 py-3 px-4 border-b border-gray-200 dark:border-gray-600 dark:text-blue-400 dark:hover:bg-blue-600">Manufacturing</a>
                        <a href="/mining-oil-gas" class="block text-greycode-light-blue hover:bg-greycode-light-blue hover:text-white transition-colors duration-200 py-3 px-4 border-b border-gray-200 dark:border-gray-600 dark:text-blue-400 dark:hover:bg-blue-600">Mining, Oil & Gas</a>
                        <a href="/smart-home" class="block text-greycode-light-blue hover:bg-greycode-light-blue hover:text-white transition-colors duration-200 py-3 px-4 border-b border-gray-200 dark:border-gray-600 dark:text-blue-400 dark:hover:bg-blue-600">Smart Homes</a>
                        <a href="/smart-building" class="block text-greycode-light-blue hover:bg-greycode-light-blue hover:text-white transition-colors duration-200 py-3 px-4 border-b border-gray-200 dark:border-gray-600 dark:text-blue-400 dark:hover:bg-blue-600">Smart Buildings</a>
                        <a href="#" class="block text-greycode-light-blue hover:bg-greycode-light-blue hover:text-white transition-colors duration-200 py-3 px-4 border-b border-gray-200 dark:border-gray-600 dark:text-blue-400 dark:hover:bg-blue-600">Tracking</a>
                        <a href="#" class="block text-greycode-light-blue hover:bg-greycode-light-blue hover:text-white transition-colors duration-200 py-3 px-4 dark:text-blue-400 dark:hover:bg-blue-600">Prototyping</a>
                    </div>
                </div>

                <a href="#" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300 py-2 w-full text-center dark:text-blue-400 dark:hover:text-blue-300">Shop</a>
                <a href="/contact" class="text-greycode-light-blue hover:text-gray-400 transition-colors duration-300 py-2 w-full text-center dark:text-blue-400 dark:hover:text-blue-300">Contact</a>
                <a href="#"><button class="bg-greycode-light-blue text-white px-4 py-2 font-medium rounded-md hover:bg-gray-800 transition-colors duration-300 mt-2 dark:bg-blue-600 dark:hover:bg-blue-700">Education</button></a>
            </div>
        </div>
    </div>
</nav>

<script>
    // Dark mode toggle functionality with user choice only
    document.addEventListener('DOMContentLoaded', function() {
        // Theme toggle elements
        const themeToggleBtns = [
            document.getElementById('theme-toggle'),
            document.getElementById('theme-toggle-mobile')
        ];
        
        const themeToggleDarkIcons = [
            document.getElementById('theme-toggle-dark-icon'),
            document.getElementById('theme-toggle-dark-icon-mobile')
        ];
        
        const themeToggleLightIcons = [
            document.getElementById('theme-toggle-light-icon'),
            document.getElementById('theme-toggle-light-icon-mobile')
        ];

        // Set initial theme based on user preference ONLY
        const userTheme = localStorage.getItem('user-theme');
        
        if (userTheme === 'dark') {
            // User previously chose dark mode
            document.documentElement.classList.add('dark');
            themeToggleLightIcons.forEach(icon => icon.classList.remove('hidden'));
            themeToggleDarkIcons.forEach(icon => icon.classList.add('hidden'));
        } else {
            // Light mode is default - ensure no dark class
            document.documentElement.classList.remove('dark');
            themeToggleLightIcons.forEach(icon => icon.classList.add('hidden'));
            themeToggleDarkIcons.forEach(icon => icon.classList.remove('hidden'));
            
            // Set light mode in localStorage for first-time visitors
            if (!userTheme) {
                localStorage.setItem('user-theme', 'light');
            }
        }

        // Theme toggle function
        function toggleTheme() {
            if (document.documentElement.classList.contains('dark')) {
                // Switching to light mode
                document.documentElement.classList.remove('dark');
                localStorage.setItem('user-theme', 'light');
                
                // Update all icons - show moon (dark icon), hide sun (light icon)
                themeToggleLightIcons.forEach(icon => icon.classList.add('hidden'));
                themeToggleDarkIcons.forEach(icon => icon.classList.remove('hidden'));
            } else {
                // Switching to dark mode
                document.documentElement.classList.add('dark');
                localStorage.setItem('user-theme', 'dark');
                
                // Update all icons - show sun (light icon), hide moon (dark icon)
                themeToggleLightIcons.forEach(icon => icon.classList.remove('hidden'));
                themeToggleDarkIcons.forEach(icon => icon.classList.add('hidden'));
            }
        }

        // Add click event to all theme toggle buttons
        themeToggleBtns.forEach(btn => {
            if (btn) {
                btn.addEventListener('click', toggleTheme);
            }
        });

        // Mobile menu functionality (unchanged)
        const menuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = menuButton.querySelector('i');
        
        const servicesToggle = document.getElementById('mobile-services-toggle');
        const servicesDropdown = document.getElementById('mobile-services-dropdown');
        const servicesChevron = document.getElementById('mobile-services-chevron');

        menuButton.addEventListener('click', function() {
            const isHidden = mobileMenu.classList.contains('hidden');
            
            if (isHidden) {
                mobileMenu.classList.remove('hidden');
                menuIcon.classList.remove('fa-bars');
                menuIcon.classList.add('fa-xmark');
            } else {
                mobileMenu.classList.add('hidden');
                menuIcon.classList.remove('fa-xmark');
                menuIcon.classList.add('fa-bars');
                servicesDropdown.classList.add('hidden');
                servicesChevron.classList.remove('fa-chevron-up');
                servicesChevron.classList.add('fa-chevron-down');
            }
        });

        servicesToggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const isHidden = servicesDropdown.classList.contains('hidden');
            
            if (isHidden) {
                servicesDropdown.classList.remove('hidden');
                servicesChevron.classList.remove('fa-chevron-down');
                servicesChevron.classList.add('fa-chevron-up');
            } else {
                servicesDropdown.classList.add('hidden');
                servicesChevron.classList.remove('fa-chevron-up');
                servicesChevron.classList.add('fa-chevron-down');
            }
        });

        document.addEventListener('click', function(event) {
            if (!menuButton.contains(event.target) && !mobileMenu.contains(event.target)) {
                mobileMenu.classList.add('hidden');
                menuIcon.classList.remove('fa-xmark');
                menuIcon.classList.add('fa-bars');
                servicesDropdown.classList.add('hidden');
                servicesChevron.classList.remove('fa-chevron-up');
                servicesChevron.classList.add('fa-chevron-down');
            }
        });

        const serviceLinks = servicesDropdown.querySelectorAll('a');
        serviceLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
                menuIcon.classList.remove('fa-xmark');
                menuIcon.classList.add('fa-bars');
                servicesDropdown.classList.add('hidden');
                servicesChevron.classList.remove('fa-chevron-up');
                servicesChevron.classList.add('fa-chevron-down');
            });
        });
    });
</script>