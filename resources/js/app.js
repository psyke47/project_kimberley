import './bootstrap';

// Dark mode toggle functionality with light mode as default
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

        // Set initial theme based on user preference ONLY (no system preference)
        const userTheme = localStorage.getItem('user-theme');
        
        if (userTheme === 'dark') {
            // User previously chose dark mode
            document.documentElement.classList.add('dark');
            themeToggleLightIcons.forEach(icon => icon.classList.remove('hidden'));
            themeToggleDarkIcons.forEach(icon => icon.classList.add('hidden'));
        } else {
            // Light mode is default - ensure no dark class and show moon icon
            document.documentElement.classList.remove('dark');
            themeToggleLightIcons.forEach(icon => icon.classList.add('hidden'));
            themeToggleDarkIcons.forEach(icon => icon.classList.remove('hidden'));
            
            // Set light mode in localStorage if not set (for first-time visitors)
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

        // Simple mobile menu toggle
        const menuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = menuButton.querySelector('i');
        
        // Mobile services dropdown elements
        const servicesToggle = document.getElementById('mobile-services-toggle');
        const servicesDropdown = document.getElementById('mobile-services-dropdown');
        const servicesChevron = document.getElementById('mobile-services-chevron');

        // Main mobile menu toggle
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
                // Also close services dropdown when closing main menu
                servicesDropdown.classList.add('hidden');
                servicesChevron.classList.remove('fa-chevron-up');
                servicesChevron.classList.add('fa-chevron-down');
            }
        });

        // Mobile services dropdown toggle
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

        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!menuButton.contains(event.target) && !mobileMenu.contains(event.target)) {
                mobileMenu.classList.add('hidden');
                menuIcon.classList.remove('fa-xmark');
                menuIcon.classList.add('fa-bars');
                // Also close services dropdown
                servicesDropdown.classList.add('hidden');
                servicesChevron.classList.remove('fa-chevron-up');
                servicesChevron.classList.add('fa-chevron-down');
            }
        });

        // Close services dropdown when clicking on a service link
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
