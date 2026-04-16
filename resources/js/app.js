import './bootstrap';

/* // Dark mode toggle functionality with light mode as default
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
 */

// GSAP ScrollTrigger and SplitType Animation
gsap.registerPlugin(ScrollTrigger)

    // Get the section and heading
    const section = document.querySelector('.sticky-section')
    const heading = document.querySelector('.reveal-type')
    
    // Split the text into characters
    const text = new SplitType(heading, { types: 'chars' })
    
    // Get colors from data attributes
    const bg = heading.dataset.bgColor
    const fg = heading.dataset.fgColor
    
    // Calculate total animation duration based on number of characters
    const totalChars = text.chars.length
    const staggerTime = 0.02
    const charDuration = 0.3
    const totalDuration = (totalChars * staggerTime) + charDuration
    
    // Create a ScrollTrigger to pin the section while animating
    ScrollTrigger.create({
        trigger: section,
        start: "top top", // When top of section hits top of viewport
        end: "+=100%", // Scroll distance needed for animation
        pin: true,
        pinSpacing: false,
        scrub: 1,
        markers: false, // Set to false for production
        onEnter: () => {
            console.log("Entering pinned section")
        },
        onLeave: () => {
            console.log("Leaving pinned section - animation complete")
        }
    })
    
    // Create the character color animation
    gsap.fromTo(text.chars, 
        {
            color: bg,
        },
        {
            color: fg,
            duration: charDuration,
            stagger: staggerTime,
            ease: "none",
            scrollTrigger: {
                trigger: section,
                start: "top 20%", // Start when section is 20% from top
                end: `+=${window.innerHeight}`, // End after scrolling one viewport height
                scrub: true,
                toggleActions: "play play reverse reverse",
                markers: false // Set to false for production
            }
        }
    )
    
    // Optional: Add a progress indicator
    const progressIndicator = document.createElement('div')
    progressIndicator.style.cssText = `
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: rgba(0,0,0,0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        z-index: 1000;
    `
    document.body.appendChild(progressIndicator)
    
    // Update progress indicator
    ScrollTrigger.create({
        trigger: section,
        start: "top 20%",
        end: `+=${window.innerHeight}`,
        onUpdate: (self) => {
            const progress = Math.round(self.progress * 100)
            progressIndicator.textContent = `${progress}%`
            progressIndicator.style.background = `rgba(44, 125, 230, ${0.1 + (progress/100 * 0.9)})`
        }
    })

    // Initialize Lenis for smooth scrolling
    const lenis = new Lenis({
        duration: 1.2,
        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
        smoothWheel: true,
    })

    function raf(time) {
        lenis.raf(time)
        requestAnimationFrame(raf)
    }
    
    requestAnimationFrame(raf)
    
    // Refresh ScrollTrigger after Lenis is initialized
    setTimeout(() => {
        ScrollTrigger.refresh()
    }, 100)