<x-layout>
    <x-slot name="title">Welcome to Greycode - IoT Solutions</x-slot>
    <x-slot name="meta_description">Discover Greycode, a leading IoT solutions company in South Africa. We specialize in connected technologies, smart automation, and innovative IoT products that transform industries and improve lives.</x-slot>
    <x-slot name="meta_keywords">IoT, Internet of Things, Smart Farming, Manufacturing, Mining, Smart Homes, Connected Technologies, IoT Solutions</x-slot>
    <x-slot name="canonical_url">https://greycode.co.za/</x-slot>
<section class="min-h-screen w-full bg-white dark:bg-black relative flex items-center">
        <div class="absolute inset-0 z-0 bg-white dark:bg-black"
             style="background-image:
                    linear-gradient(to right, rgba(71,85,105,0.15) 1px, transparent 1px),
                    linear-gradient(to bottom, rgba(71,85,105,0.15) 1px, transparent 1px),
                    radial-gradient(circle at 50% 60%, rgba(236,72,153,0.15) 0%, rgba(168,85,247,0.05) 40%, transparent 70%);
                    background-size: 40px 40px, 40px 40px, 100% 100%;">
        </div>
        
        <div class="container mx-auto px-6 md:px-12 relative z-10">
            <div class="flex flex-col md:flex-row items-center justify-center min-h-screen py-12 xs:pt-0 sm:pt-0 xs:gap-8 sm:gap-8">
    <!-- Text Column -->
    <div class="w-full md:w-1/2 lg:w-2/3 text-center md:text-left order-2 md:order-1">
        <h1 class="text-4xl md:text-6xl lg:text-7xl text-black dark:text-white font-bold mb-6">
            CONNECT, <br>
            CONTROL, &<br>
            AUTOMATE<br>
            <span class="text-greycode-light-blue hero-underline">YOUR WORLD</span>
        </h1>
        <p class="text-lg md:text-xl lg:text-2xl text-gray-600 dark:text-gray-400 mb-8">
            Your gateway to cutting-edge IoT solutions for a smarter, more connected life.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
            <a href="#" class="bg-greycode-light-blue hover:bg-greycode-dark-blue text-white font-bold py-3 px-6 rounded-md text-center transition-colors">
                Contact Us
            </a>
            <a href="/" class="bg-black dark:bg-white dark:text-black hover:bg-greycode-dark-blue text-white font-bold py-3 px-6 rounded-md text-center transition-colors">
                Skillshare Program
            </a>
        </div>
    </div>

    <!-- Image Column -->
    <div class="w-full sm:w-full md:w-1/2 lg:w-1/3 mt-12 md:mt-0 flex items-center justify-center order-1 md:order-2 xs:pb-6 sm:pb-6">
        <div class="relative w-full min-h-[220px] sm:min-h-[280px] md:min-h-[360px] lg:min-h-[420px] overflow-hidden rounded-xl">
            <!-- Carousel Images -->
            <div class="carousel-slide absolute inset-0 w-full h-full transition-opacity duration-1000 ease-in-out opacity-100 flex items-center justify-center">
                <img class="w-full h-auto max-h-full object-contain transform hover:scale-105 transition-transform duration-700" 
                     src="{{ asset('images/roboticArm.png') }}" 
                     alt="Robotic arm">
            </div>
            <div class="carousel-slide absolute inset-0 w-full h-full transition-opacity duration-1000 ease-in-out opacity-0 flex items-center justify-center">
                <img class="w-full h-auto max-h-full object-contain transform hover:scale-105 transition-transform duration-700" 
                     src="{{ asset('images/home.png') }}" 
                     alt="Smart Home">
            </div>
            <div class="carousel-slide absolute inset-0 w-full h-full transition-opacity duration-1000 ease-in-out opacity-0 flex items-center justify-center">
                <img class="w-full h-auto max-h-full object-contain transform hover:scale-105 transition-transform duration-700" 
                     src="{{ asset('images/building.png') }}" 
                     alt="Smart Building">
            </div>
        </div>
    </div>
</div>

        </div>
    </section>

{{--Carousel styling--}}
<script>
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.carousel-slide');
            let currentSlide = 0;
            let autoSlideInterval;

            function showSlide(n) {
                // Hide all slides
                slides.forEach(slide => slide.style.opacity = '0');
                
                // Show current slide
                slides[n].style.opacity = '1';
                currentSlide = n;
            }

            function nextSlide() {
                let next = currentSlide + 1;
                if (next >= slides.length) next = 0;
                showSlide(next);
            }

            function startAutoSlide() {
                autoSlideInterval = setInterval(nextSlide, 4000); // Change slide every 4 seconds
            }

            function stopAutoSlide() {
                clearInterval(autoSlideInterval);
            }

            // Pause auto-slide on hover
            const carousel = document.querySelector('.relative.w-full');
            if (carousel) {
                carousel.addEventListener('mouseenter', stopAutoSlide);
                carousel.addEventListener('mouseleave', startAutoSlide);
            }

            // Initialize
            showSlide(0);
            startAutoSlide();
        });
    </script>

<section class="dark:bg-gray-800 dark:text-white py-8 sm:py-12 md:py-16">
    <h3 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4 text-center mt-10 px-4" 
         data-aos="fade-down" 
         data-aos-duration="600">
        What is <span class="text-greycode-light-blue">IOT</span>
    </h3>
    
    <!-- Image Grid -->
    <div class="rounded-4xl p-4 sm:p-6 md:p-8 shadow-3xl mx-auto max-w-[90%] sm:max-w-2xl md:max-w-4xl" 
         style="background: #2C7DE6; background: linear-gradient(289deg, #2c7de6 25%, #7986A2 84%);"
         data-aos="zoom-in" 
         data-aos-duration="800"
         data-aos-delay="150">
        <div class="grid grid-cols-2 sm:flex sm:flex-row justify-center items-center gap-3 sm:gap-6 md:gap-8 flex-wrap">
            <!-- Smaller base size for mobile -->
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/icons-01.png')}}"
                     class="w-20 h-20 sm:w-24 sm:h-24 md:w-32 md:h-32 object-contain hover:animate-wiggle transition-transform duration-300"
                     alt="IoT Icon 1"
                     data-aos="fade-up"
                     data-aos-delay="300">
                     <p class="text-sm text-white text-center">Sensors capture data</p>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/icons-02.png')}}"
                     class="w-20 h-20 sm:w-24 sm:h-24 md:w-32 md:h-32 object-contain hover:animate-wiggle transition-transform duration-300"
                     alt="IoT Icon 2"
                     data-aos="fade-up"
                     data-aos-delay="400">
                     <p class="text-sm text-white text-center">Share data</p>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/icons-03.png')}}"
                     class="w-20 h-20 sm:w-24 sm:h-24 md:w-32 md:h-32 object-contain hover:animate-wiggle transition-transform duration-300"
                     alt="IoT Icon 3"
                     data-aos="fade-up"
                     data-aos-delay="500">
                    <p class="text-sm text-white text-center">Process data</p>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/icons-04.png')}}"
                     class="w-20 h-20 sm:w-24 sm:h-24 md:w-32 md:h-32 object-contain hover:animate-wiggle transition-transform duration-300"
                     alt="IoT Icon 4"
                     data-aos="fade-up"
                     data-aos-delay="600">
                    <p class="text-sm text-white text-center">Act on data</p>
            </div>
        </div>
    </div>

    <!-- Text Content -->
    <div class="container mx-auto px-4 sm:px-6 md:px-8 lg:px-40 mt-8 sm:mt-12">
        <p class="text-sm sm:text-base md:text-lg leading-5 sm:leading-6 md:leading-7 mt-5 mb-8 text-center max-w-3xl sm:max-w-4xl mx-auto px-4"
           data-aos="fade-up" 
           data-aos-delay="700"
           data-aos-duration="500">
            The Internet of Things or IoT refers to a network of devices wherein a variety of machines, buildings and other things are connected. These devices are capable of sending & receiving data from each other without requiring human-to-human or human-to-computer interaction.
        </p>
    </div>
</section>

<section class="relative overflow-hidden dark:bg-gray-800 dark:text-white py-4 sm:pt-8">
    <!-- Background Container -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-greycode-light-gray dark:bg-gray-800"></div>
        {{-- <div 
            class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-50"
            style="background-image: url('{{ asset('images/Untitled-1_0006_Layer-2.png') }}');"
        ></div> --}}
    </div>

    <!-- Content -->
    <div class="container mx-auto px-8 sm:px-6 md:px-8 lg:px-12 xl:px-16  relative z-10">
        <h3 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4 text-center mt-6 sm:mt-10" 
            data-aos="fade-down" 
            data-aos-duration="600">
            Our <span class="text-greycode-light-blue hero-underline">Services</span>
        </h3>

        <p class="text-base sm:text-lg md:text-xl mt-4 sm:mt-5 mb-8 text-center max-w-3xl sm:max-w-4xl mx-auto leading-relaxed"
           data-aos="fade-up" 
           data-aos-delay="200"
           data-aos-duration="500">
            We provide world class, end to end solutions for the Internet of Things IoT, our Connected Technologies, Sensors and Platforms enable new solutions for government & enterprise customers, energy management & efficiency, smart cities, connected homes, buildings and more
        </p>

        <!-- Service Links - Horizontal on all screens -->
        {{-- <div class="flex flex-wrap justify-center items-center gap-x-4 gap-y-2 sm:gap-x-6 py-4"
             data-aos="fade-up" 
             data-aos-delay="300"
             data-aos-duration="500">
            <a href="/smart-farming" class="gradient-text dark:text-white hover:text-blue-600 hover:scale-105 transition-transform duration-200 text-sm sm:text-base font-medium whitespace-nowrap">
                SMARTER FARMING
            </a>
            <span class="separator text-gray-400 dark:text-gray-500">•</span>
            <a href="/manufacturing" class="gradient-text hover:text-blue-600 hover:scale-105 transition-transform duration-200 text-sm sm:text-base font-medium whitespace-nowrap">
                MANUFACTURING
            </a>
            <span class="separator text-gray-400 dark:text-gray-500">•</span>
            <a href="/mining-oil-gas" class="gradient-text hover:text-blue-600 hover:scale-105 transition-transform duration-200 text-sm sm:text-base font-medium whitespace-nowrap">
                MINING, OIL & GAS
            </a>
            <span class="separator text-gray-400 dark:text-gray-500">•</span>
            <a href="/smart-building" class="gradient-text hover:text-blue-600 hover:scale-105 transition-transform duration-200 text-sm sm:text-base font-medium whitespace-nowrap">
                SMART BUILDINGS
            </a>
            <span class="separator text-gray-400 dark:text-gray-500">•</span>
            <a href="#" class="gradient-text hover:text-blue-600 hover:scale-105 transition-transform duration-200 text-sm sm:text-base font-medium whitespace-nowrap">
                TRACKING
            </a>
        </div> --}}

        {{-- Service Tabs Component --}}
    <div x-data="{
        activeTab: 'farming',
        tabs: [
        { id: 'farming', label: 'Smarter Farming', href: '/farming' },
        { id: 'manufacturing', label: 'Manufacturing', href: '/manufacturing' },
        { id: 'mining', label: 'Mining, Oil & Gas', href: '/mining' },
        { id: 'smart-buildings', label: 'Smart Homes', href: '/smart-homes' },
        {{-- { id: 'tracking', label: 'Tracking', href: '/tracking' } --}}
    ]
    }" class="service-tabs w-full max-w-full mx-auto px-4 sm:px-6 lg:px-8 py-12 overflow-hidden">
    
    {{-- Tab Navigation --}}
    <div class="service-tabs-menu flex flex-wrap gap-4 lg:gap-6 mb-8 lg:mb-12 border-b border-greycode-mid-blue dark:border-gray-700 pb-4" role="tablist">
        <template x-for="tab in tabs" :key="tab.id">
            <button
                @click="activeTab = tab.id"
                :class="{
                    'text-greycode-light-blue dark:text-blue-400 border-blue-600 dark:border-blue-400': activeTab === tab.id,
                    'gradient-text dark:text-gray-400 border-transparent hover:text-gray-900 dark:hover:text-white': activeTab !== tab.id
                }"
                class="service-tab-link px-4 py-3 text-base font-semibold border-b-2 transition-all duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 rounded-t-lg"
                :id="`tab-${tab.id}`"
                role="tab"
                :aria-selected="activeTab === tab.id"
                :aria-controls="`panel-${tab.id}`"
            >
                <h5 class="text-lg font-bold" x-text="tab.label"></h5>
            </button>
        </template>
    </div>

    {{-- Tab Content --}}
    <div class="w-tab-content">
        {{-- Smarter Farming Tab --}}
        <div 
            x-show="activeTab === 'farming'" 
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform translate-y-4"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 transform translate-y-0"
            x-transition:leave-end="opacity-0 transform translate-y-4"
            class="service-tab-pane"
            id="panel-farming"
            role="tabpanel"
            aria-labelledby="tab-farming"
        >
            <div class="service-tab-content flex flex-col lg:flex-row gap-8 lg:gap-12 items-center">
                <div class="service-tab-content-left flex-1" data-aos="fade-right">
                    <h5 class="text-2xl lg:text-3xl font-bold text-gray-900 dark:text-white mb-4">
                        Let's feed the future
                    </h5>
                    <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                        Today, smart farming has become a reality. With the help of IoT technology and advanced machine learning algorithms, farmers can now monitor the health of their crops.
                    </p>
                    <a href="/smart-farming" class="inline-flex items-center px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        View More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
                <div class="home-v3-services-image-grid flex-1 grid grid-cols-2 gap-4" data-aos="fade-left" data-aos-delay="200">
                    <img 
                        src="/images/Screenshot 2025-09-29 151719.png" 
                        alt="Farming Image" 
                        class="service-square-image w-full h-64 lg:h-80 object-cover rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105"
                        loading="lazy"
                    >
                    <img 
                        src="/images/Screenshot 2025-09-29 151733.png" 
                        alt="Smart Farming Visualization" 
                        class="service-square-image w-full h-64 lg:h-80 object-cover rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105"
                        loading="lazy"
                    >
                </div>
            </div>
        </div>

        {{-- Manufacturing Tab --}}
        <div 
            x-show="activeTab === 'manufacturing'" 
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform translate-y-4"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 transform translate-y-0"
            x-transition:leave-end="opacity-0 transform translate-y-4"
            class="service-tab-pane"
            id="panel-manufacturing"
            role="tabpanel"
            aria-labelledby="tab-manufacturing"
        >
            <div class="service-tab-content flex flex-col lg:flex-row gap-8 lg:gap-12 items-center">
                <div class="service-tab-content-left flex-1" data-aos="fade-right">
                    <h5 class="text-2xl lg:text-3xl font-bold text-gray-900 dark:text-white mb-4">
                        Let's make cool things
                    </h5>
                    <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                        Today's manufacturers are seeking agility. IoT enables increased mobility, fast decision-making, and higher yields across factory systems.
                    </p>
                    <a href="/manufacturing" class="inline-flex items-center px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        View More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
                <div class="home-v3-services-image-grid flex-1 grid grid-cols-2 gap-4" data-aos="fade-left" data-aos-delay="200">
                    <img 
                        src="/images/manufacturing-1.png" 
                        alt="Manufacturing Image" 
                        class="service-square-image w-full h-64 lg:h-80 object-cover rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105"
                        loading="lazy"
                    >
                    <img 
                        src="/images/manufaccting-2.png" 
                        alt="Factory View" 
                        class="service-square-image w-full h-64 lg:h-80 object-cover rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105"
                        loading="lazy"
                    >
                </div>
            </div>
        </div>

        {{-- Mining, Oil & Gas Tab --}}
        <div 
            x-show="activeTab === 'mining'" 
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform translate-y-4"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 transform translate-y-0"
            x-transition:leave-end="opacity-0 transform translate-y-4"
            class="service-tab-pane"
            id="panel-mining"
            role="tabpanel"
            aria-labelledby="tab-mining"
        >
            <div class="service-tab-content flex flex-col lg:flex-row gap-8 lg:gap-12 items-center">
                <div class="service-tab-content-left flex-1" data-aos="fade-right">
                    <h5 class="text-2xl lg:text-3xl font-bold text-gray-900 dark:text-white mb-4">
                        We <strong class="text-blue-600 dark:text-blue-400">digging</strong>
                    </h5>
                    <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                        Create a complete overview of your operation, digitize it, and optimize for safety, efficiency, and real-time insights.
                    </p>
                    <a href="/mining-oil-gas" class="inline-flex items-center px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        View More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
                <div class="home-v3-services-image-grid flex-1 grid grid-cols-2 gap-4" data-aos="fade-left" data-aos-delay="200">
                    <img 
                        src="images/mining-oil1.png" 
                        alt="Mining Overview" 
                        class="service-square-image w-full h-64 lg:h-80 object-cover rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105"
                        loading="lazy"
                    >
                    <img 
                        src="images/mining-oil2.png" 
                        alt="Mining Operation" 
                        class="service-square-image w-full h-64 lg:h-80 object-cover rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105"
                        loading="lazy"
                    >
                </div>
            </div>
        </div>

        {{-- Smart Buildings Tab --}}
        <div 
            x-show="activeTab === 'smart-buildings'" 
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform translate-y-4"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 transform translate-y-0"
            x-transition:leave-end="opacity-0 transform translate-y-4"
            class="service-tab-pane"
            id="panel-smart-buildings"
            role="tabpanel"
            aria-labelledby="tab-smart-buildings"
        >
            <div class="service-tab-content flex flex-col lg:flex-row gap-8 lg:gap-12 items-center">
                <div class="service-tab-content-left flex-1" data-aos="fade-right">
                    <h5 class="text-2xl lg:text-3xl font-bold text-gray-900 dark:text-white mb-6">
                        Smart Living
                    </h5>
                    <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed mb-4">
                        Efficient building management to optimize energy, water, security, and occupancy — unlocking better smart living experiences.
                    </p>
                    
                    <a href="/smart-home" class="inline-flex items-center px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        View More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
                <div class="home-v3-services-image-grid flex-1 grid grid-cols-2 gap-4" data-aos="fade-left" data-aos-delay="200">
                    <img 
                        src="/images/smart-home1.png" 
                        alt="Smart Building Image" 
                        class="service-square-image w-full h-64 lg:h-80 object-cover rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105"
                        loading="lazy"
                    >
                    <img 
                        src="/images/smart-home2.png" 
                        alt="Interior Smart Control" 
                        class="service-square-image w-full h-64 lg:h-80 object-cover rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105"
                        loading="lazy"
                    >
                </div>
            </div>
        </div>

        {{-- Tracking Tab --}}
        <div 
            x-show="activeTab === 'tracking'" 
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform translate-y-4"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 transform translate-y-0"
            x-transition:leave-end="opacity-0 transform translate-y-4"
            class="service-tab-pane"
            id="panel-tracking"
            role="tabpanel"
            aria-labelledby="tab-tracking"
        >
            <div class="service-tab-content flex flex-col lg:flex-row gap-8 lg:gap-12 items-center">
                <div class="service-tab-content-left flex-1" data-aos="fade-right">
                    <h5 class="text-2xl lg:text-3xl font-bold text-gray-900 dark:text-white mb-4">
                        Let's find your assets
                    </h5>
                    <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                        Track and manage mobile assets with real-time GPS, predictive analytics, and centralized dashboards for complete visibility.
                    </p>
                    <a href="/contact" class="inline-flex items-center px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        View More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
                <div class="home-v3-services-image-grid flex-1 grid grid-cols-2 gap-4" data-aos="fade-left" data-aos-delay="200">
                    <img 
                        src="/images/0/14400875/61efbf248aee48b4faeeebf3_location.png" 
                        alt="Asset Location" 
                        class="service-square-image w-full h-64 lg:h-80 object-cover rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105"
                        loading="lazy"
                    >
                    <img 
                        src="/images/0/14400834/61efba7b26f04cb2b4a57d45_GPS12.png" 
                        alt="GPS Module Visual" 
                        class="service-square-image w-full h-64 lg:h-80 object-cover rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105"
                        loading="lazy"
                    >
                </div>
            </div>
        </div>
    </div>
    </div>

        <!-- View More Button -->
        {{-- <div class="text-center mt-8" data-aos="fade-up" data-aos-delay="400">
            <button class="gradient-outline-button capitalize px-6 py-2.5 sm:px-8 sm:py-3 text-sm sm:text-base">
                View More
            </button>
        </div> --}}

        <!-- Images - Responsive Pair -->
        {{-- <div class="flex flex-col sm:flex-row justify-center gap-6 sm:gap-8 mt-10 sm:mt-12">
            <img 
                src="{{ asset('images/Screenshot 2025-09-29 151719.png')}}" 
                alt="Smart farming and IoT solutions"
                class="rounded-xl w-full sm:w-auto max-w-md"
                data-aos="fade-right" 
                data-aos-delay="500"
                data-aos-duration="600"
            >
            <img 
                src="{{ asset('images/Screenshot 2025-09-29 151733.png')}}" 
                alt="Connected agriculture technology"
                class="rounded-xl w-full sm:w-auto max-w-md"
                data-aos="fade-left" 
                data-aos-delay="500"
                data-aos-duration="600"
            >
        </div> --}}

        <!-- Let's Feed the Future -->
        {{-- <div class="text-center mt-12 sm:mt-16" data-aos="fade-up" data-aos-delay="600">
            <h4 class="text-xl sm:text-2xl font-semibold px-4 py-4 sm:py-6">
                Let's feed the future
            </h4>
            <p class="text-base sm:text-lg px-4 sm:px-6 md:px-12 lg:px-40 max-w-4xl mx-auto leading-relaxed">
                Today, smart farming has become a reality. With the help of IoT technology and advanced machine learning algorithms, farmers can now monitor the health of their crops
            </p>
        </div>

        <!-- See More Button -->
        <div class="text-center mt-8" data-aos="fade-up" data-aos-delay="700">
            <button class="gradient-outline-button capitalize px-6 py-2.5 sm:px-8 sm:py-3 text-sm sm:text-base">
                See More
            </button>
        </div> --}}
    </div>
</section>

<section class="flex flex-col items-center justify-center text-center mb-10 dark:bg-gray-800 dark:text-white">
  <h3 class="text-5xl font-bold mb-4 text-center" data-aos="fade-down" data-aos-duration="600">
    Success <span class="text-greycode-light-blue">Stories</span>
  </h3>
  <p class="text-lg mb-8" data-aos="fade-up" data-aos-delay="150" data-aos-duration="500">Get to know more about the work we do.</p>
  
  <div class="flex flex-wrap justify-center gap-8 max-w-7xl mx-auto">
    <!-- Card 1 -->
    <div class="card bg-base-100 w-96 shadow-md shadow-greycode-light-blue" data-aos="fade-right" data-aos-delay="250" data-aos-duration="600">
      <figure class="px-10 pt-10">
        <img
          src="{{ asset('images/pexels-nc-farm-bureau-mark-2889442.jpg') }}"
          alt="Shoes"
          class="rounded-xl" />
      </figure>
      <div class="card-body items-center text-center p-3">
        <h2 class="card-title text-lg my-2.5 font-semibold text-greycode-light-blue">Smart Farming</h2>
        <p>Rather than relying on old-fashioned and imprecise tools like their own eyes and noses, farmers have begun using IoT sensors...</p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="card bg-base-100 w-96 shadow-md shadow-greycode-light-blue" data-aos="fade-up" data-aos-delay="350" data-aos-duration="600">
      <figure class="px-10 pt-10">
        <img
          src="{{ asset('images/pexels-life-of-pix-2391.jpg') }}"
          alt="Manufacturing"
          class="rounded-xl" />
      </figure>
      <div class="card-body items-center text-center p-3">
        <h2 class="card-title text-lg  my-2.5 font-semibold text-greycode-light-blue">Manufacturing</h2>
        <p>IoT solutions in manufacturing improve efficiency and reduce downtime through predictive maintenance...</p>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="card bg-base-100 w-96 shadow-md shadow-greycode-light-blue" data-aos="fade-left" data-aos-delay="450" data-aos-duration="600">
      <figure class="px-10 pt-10">
        <img
          src="{{ asset('images/pexels-sevenstormphotography-443383.jpg') }}"
          alt="Buildings"
          class="rounded-xl" />
      </figure>
      <div class="card-body items-center text-center p-3">
        <h2 class="card-title text-lg  my-2.5 font-semibold text-greycode-light-blue">Smart Buildings</h2>
        <p>Intelligent building management systems optimize energy consumption and enhance security...</p>
      </div>
    </div>
  </div>
  <div class="mt-8 " data-aos="fade-up" data-aos-delay="600" data-aos-duration="500">
    <a href="/success-stories" class="inline-block ">
        <button class="btn bg-blue-600 hover:bg-blue-700 px-6 py-3 text-white font-semibold rounded-lg transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">Read More</button>
    </a>
  </div>
</section>

<section class="py-12 sm:py-16 dark:bg-gray-800 dark:text-white">
    <div class="container mx-auto px-4 sm:px-6 md:px-8">
        <!-- Header Section -->
        <div class="text-center mb-8 sm:mb-12" data-aos="fade-down" data-aos-duration="600">
            <h3 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4 mt-6 sm:mt-10">
                Learn, Build & <span class="text-greycode-light-blue">Innovate</span>
            </h3>
            <p class="text-lg sm:text-xl text-gray-600 dark:text-white">
                The GREYCODE IoT Development Board
            </p>
        </div>

        <!-- Mobile Layout (stacked) -->
        <div class="block md:hidden space-y-8">
            <!-- First Text Block -->
            <div class="bg-white/5 backdrop-blur-sm p-6 rounded-2xl shadow-lg" data-aos="fade-up" data-aos-duration="500">
                <p class="text-gray-700 dark:text-white leading-relaxed text-sm sm:text-base">
                    This board is a premium, all-in-one solution engineered for demanding IoT and connected applications. 
                    It features high-speed dual-core processing (240MHz), robust multi-connectivity (Wi-Fi, Bluetooth, 
                    and 4G LTE/CAT-M1/NB-IoT support), and seamless data transmission.
                </p>
            </div>

            <!-- Central Image -->
            <div class="text-center py-8" data-aos="zoom-in" data-aos-duration="600">
                <img 
                    src="{{ asset('images/greycode-board.png') }}" 
                    alt="GREYCODE IoT Development Board" 
                    class="w-64 h-64 sm:w-80 sm:h-80 object-contain mx-auto filter drop-shadow-2xl"
                >
            </div>

            <!-- Second Text Block -->
            <div class="bg-white/5 backdrop-blur-sm p-6 rounded-2xl shadow-lg" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                <p class="text-gray-700 dark:text-white leading-relaxed text-sm sm:text-base">
                    Designed for reliability in remote deployments, it includes GPS tracking and solar/battery power 
                    options for uninterrupted operation. With advanced power management and rugged durability, this 
                    board is ideal for industrial automation, smart agriculture, and asset monitoring—built to excel 
                    in harsh environments with zero compromises.
                </p>
            </div>
        </div>

        <!-- Desktop/Tablet Diagonal Layout -->
        <div class="hidden md:block relative min-h-[500px] lg:min-h-[700px] flex items-center justify-center">
            <!-- Top Right Paragraph -->
            <div class="absolute top-0 right-0 w-1/2 lg:w-2/5 xl:w-1/3 p-4 lg:p-6 bg-white/5 backdrop-blur-sm rounded-2xl shadow-lg z-10 transform -translate-y-2 lg:-translate-y-4"
                 data-aos="fade-left" 
                 data-aos-duration="600"
                 data-aos-delay="200">
                <p class="text-gray-700 dark:text-white leading-relaxed text-sm lg:text-base">
                    This board is a premium, all-in-one solution engineered for demanding IoT and connected applications. 
                    It features high-speed dual-core processing (240MHz), robust multi-connectivity (Wi-Fi, Bluetooth, 
                    and 4G LTE/CAT-M1/NB-IoT support), and seamless data transmission.
                </p>
            </div>

            <!-- Centered Diagonal Image -->
            <div class="relative z-0 transform" data-aos="zoom-in" data-aos-duration="700">
                <img 
                    src="{{ asset('images/greycode-board.png') }}" 
                    alt="GREYCODE IoT Development Board" 
                    class="w-64 h-64 md:w-80 md:h-80 lg:w-96 lg:h-96 xl:w-[500px] xl:h-[500px] object-contain mx-auto filter drop-shadow-2xl"
                >
            </div>

            <!-- Bottom Left Paragraph -->
            <div class="absolute bottom-0 left-0 w-1/2 lg:w-2/5 xl:w-1/3 p-4 lg:p-6 bg-white/5 backdrop-blur-sm rounded-2xl shadow-lg z-10 transform translate-y-2 lg:translate-y-4"
                 data-aos="fade-right" 
                 data-aos-duration="600"
                 data-aos-delay="200">
                <p class="text-gray-700 dark:text-white leading-relaxed text-sm lg:text-base">
                    Designed for reliability in remote deployments, it includes GPS tracking and solar/battery power 
                    options for uninterrupted operation. With advanced power management and rugged durability, this 
                    board is ideal for industrial automation, smart agriculture, and asset monitoring—built to excel 
                    in harsh environments with zero compromises.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-16 icon-background">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row items-center gap-12">
            <!-- Image Column (One Third) -->
            <div class="w-full lg:w-1/3" data-aos="fade-right" data-aos-duration="600">
                <img 
                    src="{{ asset('images/prototype-board.png') }}" 
                    alt="Section Image" 
                    class="w-full h-auto rounded-2xl shadow-lg object-cover"
                >
            </div>
            
            <!-- Content Column (Two Thirds) -->
            <div class="w-full lg:w-2/3" data-aos="fade-left" data-aos-duration="600" data-aos-delay="200">
                <h2 class="text-5xl md:text-5xl font-bold text-white">
                    Do you have an <span class="text-black">idea</span>? <br>Let's <span class="text-black">Prototype</span> it.
                </h2>
                <p class="text-lg text-greycode-light-gray mb-8 leading-relaxed">
                    Low code application development. Get from sensors to business logic in minutes.
                </p>
                <button class="bg-greycode-light-blue text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors duration-300 transform hover:scale-105">
                    View More
                </button>
            </div>
        </div>
    </div>
</section>
<!-- placeholder for articles section -->
<section class="py-16 bg-gray-50 dark:bg-gray-800 dark:text-white scroll-px-10">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-12" data-aos="fade-down" data-aos-duration="600">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">Our <span class="text-greycode-light-blue">Articles</span></h2>
            <p class="text-lg sm:text-xl text-gray-600 dark:text-white max-w-2xl mx-auto">
                Stay updated with the latest insights, trends, and innovations in IoT technology
            </p>
        </div>

        <!-- Carousel Container -->
        <div class="relative">
            <!-- Navigation Buttons -->
            <div class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10 hidden md:block">
                <button class="bg-white rounded-full dark:bg-gray-800 p-3 shadow-lg hover:bg-gray-100 transition-colors carousel-prev">
                    <i class="fas fa-chevron-left text-greycode-light-blue"></i>
                </button>
            </div>
            <div class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10 hidden md:block">
                <button class="bg-white rounded-full dark:bg-gray-800 p-3 shadow-lg hover:bg-gray-100 transition-colors carousel-next">
                    <i class="fas fa-chevron-right text-greycode-light-blue"></i>
                </button>
            </div>

            <!-- Carousel Track -->
            <div class="flex overflow-x-auto snap-x snap-mandatory scrollbar-hide space-x-4 md:space-x-6 pb-8 -mx-4 px-4" 
                 id="articles-carousel">
                
                @php
                    $articles = [
                        /* [
                            'title' => 'Bluetooth Speaker Tutorial',
                            'excerpt' => 'Build a fully functional Bluetooth speaker with custom 3D printed enclosure using Greycode IoT Dev Board.',
                            'image' => '/images/IMG_0132.png',
                            'url' => route('blog.bluetooth-speaker'),
                            'category' => 'education',
                            'category_label' => 'Education',
                            'author' => 'Prudy N Singo',
                            'date' => 'April 17, 2023',
                            'read_time' => '8 min read'
                        ],
                        [
                            'title' => 'Smoke Detector System',
                            'excerpt' => 'Learn to build a smart smoke detection system for industrial safety using MQ-2 sensor and LCD display.',
                            'image' => '/images/GasSensor.png',
                            'url' => route('blog.smoke-detector'),
                            'category' => 'education',
                            'category_label' => 'Education',
                            'author' => 'Greycode Team',
                            'date' => 'July 4, 2025',
                            'read_time' => '6 min read'
                        ],
                        [
                            'title' => 'Smart Bulb Home Automation',
                            'excerpt' => 'Control AC bulbs remotely using Greycode Board and Blynk app with this home automation tutorial.',
                            'image' => '/images/SMART-BULB.png',
                            'url' => route('blog.smart-bulb'),
                            'category' => 'education',
                            'category_label' => 'Education',
                            'author' => 'Greycode Team',
                            'date' => 'June 2, 2025',
                            'read_time' => '7 min read'
                        ],
                        [
                            'title' => 'Radar System Tutorial',
                            'excerpt' => 'Create a beginner radar system using ultrasonic sensor and servo motor with real-time monitoring.',
                            'image' => '/images/RadarSystem.png',
                            'url' => route('blog.radar-system'),
                            'category' => 'education',
                            'category_label' => 'Education',
                            'author' => 'Akhona Mshike',
                            'date' => 'October 6, 2025',
                            'read_time' => '10 min read'
                        ], */
                        [
                            'title' => 'IoT in Mining Industry',
                            'excerpt' => 'Explore how IoT technology is revolutionizing mining with smart monitoring and safety solutions.',
                            'image' => 'https://cdn.prod.website-files.com/61e9b480b01636a456c42a80/65a5626243e860984ea9372f_thumb_3667_news_standard.jpeg',
                            'url' => route('blog.iot-mining'),
                            'category' => 'industry',
                            'category_label' => 'Industry',
                            'author' => 'Nathan Lumbu',
                            'date' => 'March 10, 2022',
                            'read_time' => '6 min read'
                        ],
                        [
                            'title' => 'Healthcare IoT Impact',
                            'excerpt' => 'Discover how Internet of Things is transforming healthcare with improved patient monitoring and personalized care.',
                            'image' => 'https://cdn.prod.website-files.com/61e9b480b01636a456c42a80/65c609bc765b7b309d0d4291_IoT%20in%20Healthcare.jpg',
                            'url' => route('blog.healthcare-iot'),
                            'category' => 'industry',
                            'category_label' => 'Industry',
                            'author' => 'Tuka Wright',
                            'date' => 'October 27, 2025',
                            'read_time' => '5 min read'
                        ],
                        [
                            'title' => 'Energy IoT Solutions',
                            'excerpt' => 'Learn how IoT technology is optimizing energy grid management and renewable energy integration.',
                            'image' => 'https://cdn.prod.website-files.com/61e9b480b01636a456c42a80/65e7176807d17908891a38ca_lightbulb-1875247-1920_ver_1%20(1).jpg',
                            'url' => route('blog.energy-in-iot'),
                            'category' => 'industry',
                            'category_label' => 'Industry',
                            'author' => 'Greycode Team',
                            'date' => 'November 15, 2024',
                            'read_time' => '4 min read'
                        ],
                        [
                            'title' => 'Youth Unemployment & Innovation',
                            'excerpt' => 'Exploring President Ramaphosa\'s initiative to remove work experience requirements and how innovation can solve youth unemployment.',
                            'image' => 'https://cdn.prod.website-files.com/61e9b480b01636a456c42a80/65fbdd34fd3ca0bccf0283d3_65bbacd150760203bab3724e_doug-linstedt-jEEYZsaxbH4-unsplash.jpg',
                            'url' => route('blog.youth-unemployment'),
                            'category' => 'articles',
                            'category_label' => 'Articles',
                            'author' => 'Mutshidzi Mapila',
                            'date' => 'March 24, 2024',
                            'read_time' => '5 min read'
                        ]
                    ];
                @endphp

                @foreach($articles as $index => $article)
                <div class="flex-shrink-0 w-[280px] sm:w-80 md:w-96 snap-start bg-white dark:bg-gray-800 dark:shadow-xl dark:shadow-greycode-light-blue rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-105"
                     data-aos="fade-up" data-aos-duration="500" data-aos-delay="{{ $index * 100 }}">
                    <!-- Article Image -->
                    <div class="h-48 bg-gray-200 dark:bg-gray-700 overflow-hidden">
                        <img src="{{ $article['image'] }}" 
                             alt="{{ $article['title'] }}" 
                             class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                    
                    <!-- Category Badge -->
                    <div class="px-6 pt-4">
                        <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full 
                            @if($article['category'] === 'education') bg-purple-100 text-purple-800 dark:bg-purple-900 dark:text-purple-200
                            @elseif($article['category'] === 'industry') bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-200
                            @else bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200
                            @endif">
                            {{ $article['category_label'] }}
                        </span>
                    </div>

                    <div class="p-6 pt-4">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 line-clamp-2">{{ $article['title'] }}</h3>
                        <p class="text-gray-600 mb-4 leading-relaxed dark:text-gray-300 line-clamp-3">
                            {{ $article['excerpt'] }}
                        </p>
                        <div class="flex items-center justify-between text-sm text-gray-500 mb-4 dark:text-gray-400 flex-wrap gap-2">
                            <span class="text-xs sm:text-sm">{{ $article['date'] }}</span>
                            <span class="hidden sm:inline">•</span>
                            <span class="text-xs sm:text-sm">{{ $article['read_time'] }}</span>
                            <span class="hidden sm:inline">•</span>
                            <span class="text-xs sm:text-sm truncate max-w-[100px] sm:max-w-none">{{ $article['author'] }}</span>
                        </div>
                        <a href="{{ $article['url'] }}" class="inline-flex items-center text-greycode-light-blue dark:text-blue-400 font-semibold hover:text-greycode-dark-blue transition-colors">
                            Read More
                            <i class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Navigation Dots -->
            <div class="flex justify-center space-x-2 mt-8">
                @foreach($articles as $index => $article)
                <button class="w-3 h-3 rounded-full bg-gray-300 hover:bg-greycode-light-blue transition-colors carousel-dot {{ $index === 0 ? 'active bg-greycode-light-blue' : '' }}" data-slide="{{ $index }}"></button>
                @endforeach
            </div>
        </div>

        <!-- View All Articles Button -->
        <div class="text-center mt-12" data-aos="fade-up" data-aos-duration="600">
            <a href="{{ route('blog.index') }}" class="inline-flex items-center bg-greycode-light-blue text-white px-6 sm:px-8 py-3 rounded-lg font-semibold hover:bg-greycode-mid-blue transition-colors duration-300">
                View All Articles
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>


<style>
/* Ensure no horizontal overflow */
html, body {
    overflow-x: hidden;
    max-width: 100%;
}
/* Hide scrollbar for Chrome, Safari and Opera */
.scrollbar-hide::-webkit-scrollbar {
    display: none;
}

/* Hide scrollbar for IE, Edge and Firefox */
.scrollbar-hide {
    -ms-overflow-style: none;  /* IE and Edge */
    scrollbar-width: none;  /* Firefox */
}

/* Smooth scrolling */
#articles-carousel {
    scroll-behavior: smooth;
}

/* Responsive card sizes */
@media (max-width: 640px) {
    #articles-carousel .flex-shrink-0 {
        width: 280px; /* Smaller cards on mobile */
    }
}
</style>
<style>
.service-tabs {
    scroll-behavior: smooth;
}

.service-tab-link {
    position: relative;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.service-tab-link:hover:not([aria-selected="true"]) {
    transform: translateY(-2px);
}

.service-tab-pane {
    min-height: 400px;
}

@media (max-width: 768px) {
    .service-tabs-menu {
        overflow-x: auto;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
    }
    
    .service-tab-link {
        white-space: nowrap;
        flex-shrink: 0;
    }
    
    .home-v3-services-image-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
}
</style>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.getElementById('articles-carousel');
    const prevButton = document.querySelector('.carousel-prev');
    const nextButton = document.querySelector('.carousel-next');
    const dots = document.querySelectorAll('.carousel-dot');
    
    // Calculate scroll amount based on screen size
    function getScrollAmount() {
        if (window.innerWidth < 640) {
            return 284; // 280px card + 4px gap for mobile
        } else {
            return 400; // 384px card + 16px gap for desktop (w-96 = 384px)
        }
    }

    // Next button functionality
    nextButton.addEventListener('click', function() {
        carousel.scrollBy({ left: getScrollAmount(), behavior: 'smooth' });
    });

    // Previous button functionality
    prevButton.addEventListener('click', function() {
        carousel.scrollBy({ left: -getScrollAmount(), behavior: 'smooth' });
    });

    // Navigation dots functionality
    dots.forEach(dot => {
        dot.addEventListener('click', function() {
            const slideIndex = parseInt(this.getAttribute('data-slide'));
            carousel.scrollTo({ 
                left: slideIndex * getScrollAmount(), 
                behavior: 'smooth' 
            });
        });
    });

    // Update active dot based on scroll position
    carousel.addEventListener('scroll', function() {
        const scrollAmount = getScrollAmount();
        const activeIndex = Math.round(carousel.scrollLeft / scrollAmount);
        
        dots.forEach((dot, index) => {
            const isActive = index === activeIndex;
            dot.classList.toggle('bg-greycode-light-blue', isActive);
            dot.classList.toggle('bg-gray-300', !isActive);
            dot.classList.toggle('active', isActive);
        });
    });

    // Handle window resize
    window.addEventListener('resize', function() {
        // Recalculate scroll position on resize
        const activeDot = document.querySelector('.carousel-dot.active');
        if (activeDot) {
            const slideIndex = parseInt(activeDot.getAttribute('data-slide'));
            carousel.scrollTo({ 
                left: slideIndex * getScrollAmount(), 
                behavior: 'auto' 
            });
        }
    });
});
</script>
<script>
        // Initialize AOS animations
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                once: true
            });
            
            // Image carousel functionality
            let currentSlide = 0;
            const slides = document.querySelectorAll('.carousel-slide');
            const totalSlides = slides.length;
            
            function showNextSlide() {
                // Hide current slide
                slides[currentSlide].classList.remove('active');
                
                // Move to next slide
                currentSlide = (currentSlide + 1) % totalSlides;
                
                // Show next slide
                slides[currentSlide].classList.add('active');
            }
            
            // Change slide every 4 seconds
            setInterval(showNextSlide, 4000);
        });
    </script>
</x-layout>