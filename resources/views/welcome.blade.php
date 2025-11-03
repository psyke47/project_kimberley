<x-layout>
<section class="text-gray-600 in-dark:text-white body-font min-h-screen flex items-center relative overflow-hidden">
    <!-- Background Layers -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-greycode-light-gray in-dark:bg-gray-800"></div>
        <div 
            class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-100"
            style="background-image: url('{{ asset('images/hero-background.png') }}');"
        ></div>
    </div>

    <!-- Content Container -->
    <div class="container mx-auto px-4 sm:px-6 md:px-8 lg:px-12 xl:px-24 py-8 md:py-12 relative z-10 max-w-full">
        <div class="flex flex-col md:flex-row items-center gap-4 sm:gap-6 md:gap-12 lg:gap-16">
            <!-- Text Content -->
            <div class="flex-1 w-full text-center md:text-left" 
                 data-aos="fade-right" 
                 data-aos-duration="600">
                <h1 class="title-font text-2xl sm:text-3xl md:text-4xl lg:text-[55px] font-medium text-black in-dark:text-white uppercase leading-tight tracking-tight">
                    CONNECT, <br>CONTROL, AND<br>
                    AUTOMATE<br>
                    <span class="text-greycode-light-blue hero-underline">YOUR WORLD</span>
                </h1>
            </div>

            <!-- Hero Image -->
            <div class="w-full max-w-3xl max-w-xs sm:max-w-sm md:max-w-md lg:max-w-3xl flex-shrink-0" 
                 data-aos="fade-left" 
                 data-aos-duration="600"
                 data-aos-delay="150">
                <img 
                    class="w-full h-auto object-contain rounded-lg hover:animate-pulse transform hover:scale-[1.03] transition-transform duration-700" 
                    src="{{ asset('images/Screenshot 2025-09-29 120823.png') }}" 
                    alt="Smart automation dashboard"
                >
            </div>
        </div>
    </div>
</section>

<section class="dark:bg-gray-800 dark:text-white py-8 sm:py-12 md:py-16">
    <h3 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4 text-center mt-10 px-4" 
         data-aos="fade-down" 
         data-aos-duration="600">
        What is <span class="text-greycode-light-blue">IOT</span>
    </h3>
    
    <!-- Image Grid - Now horizontal on all devices -->
    <div class="rounded-4xl p-4 sm:p-6 md:p-8 shadow-3xl mx-auto max-w-[90%] sm:max-w-3xl md:max-w-4xl" 
         style="background: #2C7DE6; background: linear-gradient(289deg, #2c7de6 25%, #7986A2 84%);"
         data-aos="zoom-in" 
         data-aos-duration="800"
         data-aos-delay="150">
        <div class="flex flex-row justify-center items-center gap-3 sm:gap-6 md:gap-8 flex-wrap">
            <!-- Smaller base size for mobile -->
            <img src="{{ asset('images/icons-01.png')}}" 
                 class="w-20 h-20 sm:w-24 sm:h-24 md:w-32 md:h-32 object-contain hover:animate-wiggle transition-transform duration-300" 
                 alt="IoT Icon 1"
                 data-aos="fade-up" 
                 data-aos-delay="300">
            <img src="{{ asset('images/icons-02.png')}}" 
                 class="w-20 h-20 sm:w-24 sm:h-24 md:w-32 md:h-32 object-contain hover:animate-bounce transition-transform duration-300" 
                 alt="IoT Icon 2"
                 data-aos="fade-up" 
                 data-aos-delay="400">
            <img src="{{ asset('images/icons-03.png')}}" 
                 class="w-20 h-20 sm:w-24 sm:h-24 md:w-32 md:h-32 object-contain hover:animate-bounce transition-transform duration-300" 
                 alt="IoT Icon 3"
                 data-aos="fade-up" 
                 data-aos-delay="500">
            <img src="{{ asset('images/icons-04.png')}}" 
                 class="w-20 h-20 sm:w-24 sm:h-24 md:w-32 md:h-32 object-contain hover:animate-wiggle transition-transform duration-300" 
                 alt="IoT Icon 4"
                 data-aos="fade-up" 
                 data-aos-delay="600">
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
    <div class="container mx-auto px-4 sm:px-6 md:px-8 lg:px-12 xl:px-16  relative z-10">
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
                    <a href="/farming" class="inline-flex items-center px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
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
                        src="https://cdn.prod.website-files.com/61e9b480b016367a18c42a6c/61efb069d1f58857d33a514d_MINING).png" 
                        alt="Mining Overview" 
                        class="service-square-image w-full h-64 lg:h-80 object-cover rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105"
                        loading="lazy"
                    >
                    <img 
                        src="https://cdn.prod.website-files.com/61e9b480b016367a18c42a6c/61efb0e4bd4038090837e040_MINING)%202.png" 
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
                    src="{{ asset('images/Untitled-boardb2.png') }}" 
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

<section class="py-16 bg-gray-50 dark:bg-gray-800 dark:text-white">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-12" data-aos="fade-down" data-aos-duration="600">
            <h2 class="text-5xl font-bold text-gray-900 dark:text-white mb-4">Our <span class="text-greycode-light-blue">Articles</span> </h2>
            <p class="text-xl text-gray-600 dark:text-white max-w-2xl mx-auto">
                Stay updated with the latest insights, trends, and innovations in IoT technology
            </p>
        </div>

        <!-- Carousel Container -->
        <div class="relative">
            <!-- Navigation Buttons -->
            <div class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10">
                <button class="bg-white rounded-full dark:bg-gray-800 p-3 shadow-lg hover:bg-gray-100 transition-colors carousel-prev">
                    <i class="fas fa-chevron-left text-greycode-light-blue"></i>
                </button>
            </div>
            <div class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10">
                <button class="bg-white rounded-full dark:bg-gray-800 p-3 shadow-lg hover:bg-gray-100 transition-colors carousel-next">
                    <i class="fas fa-chevron-right text-greycode-light-blue"></i>
                </button>
            </div>

            <!-- Carousel Track -->
            <div class="flex overflow-x-auto snap-x snap-mandatory scrollbar-hide space-x-4 md:space-x-6 pb-8 -mx-4 px-4" 
                 id="articles-carousel">
                
                <!-- Article Card 1 -->
                <div class="flex-shrink-0 w-80 md:w-96 snap-start bg-white dark:bg-gray-800 dark:shadow-xl dark:shadow-greycode-light-blue rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-105"
                     data-aos="fade-up" data-aos-duration="500">
                    <div class="h-48 bg-gradient-to-br from-greycode-light-blue to-greycode-mid-blue flex items-center justify-center">
                        <div class="text-white text-center p-4">
                            <i class="fas fa-microchip text-4xl mb-2"></i>
                            <h3 class="text-lg font-semibold">IoT Technology</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-greycode-light-blue mb-3">The Future of Smart Cities</h3>
                        <p class="text-gray-600 mb-4 leading-relaxed dark:text-white">
                            How IoT is transforming urban infrastructure and creating more efficient, sustainable cities for tomorrow.
                        </p>
                        <div class="flex items-center justify-between text-sm text-gray-500 mb-4 dark:text-white">
                            <span>Oct 15, 2025</span>
                            <span>•</span>
                            <span>Sarah Chen</span>
                        </div>
                        <a href="#" class="inline-flex items-center text-greycode-light-blue dark:text-white font-semibold hover:text-greycode-dark-blue transition-colors">
                            Read More
                            <i class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>

                <!-- Article Card 2 -->
                <div class="flex-shrink-0 w-80 md:w-96 snap-start bg-white dark:bg-gray-800 dark:shadow-xl dark:shadow-greycode-light-blue rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-105"
                     data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                    <div class="h-48 bg-gradient-to-br from-greycode-gray to-black flex items-center justify-center">
                        <div class="text-white text-center p-4">
                            <i class="fas fa-industry text-4xl mb-2"></i>
                            <h3 class="text-lg font-semibold">Manufacturing</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Industrial IoT Revolution</h3>
                        <p class="text-gray-600 dark:text-white mb-4 leading-relaxed">
                            Transforming traditional manufacturing with smart sensors, predictive maintenance, and real-time monitoring.
                        </p>
                        <div class="flex items-center justify-between text-sm text-gray-500 dark:text-white mb-4">
                            <span>Oct 12, 2025</span>
                            <span>•</span>
                            <span>Mike Rodriguez</span>
                        </div>
                        <a href="#" class="inline-flex items-center text-greycode-light-blue dark:text-white font-semibold hover:text-greycode-dark-blue transition-colors">
                            Read More
                            <i class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>

                <!-- Article Card 3 -->
                <div class="flex-shrink-0 w-80 md:w-96 snap-start bg-white dark:bg-gray-800 dark:shadow-xl dark:shadow-greycode-light-blue rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-105"
                     data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                    <div class="h-48 bg-gradient-to-br from-green-500 to-green-700 flex items-center justify-center">
                        <div class="text-white text-center p-4">
                            <i class="fas fa-seedling text-4xl mb-2"></i>
                            <h3 class="text-lg font-semibold">Smart Farming</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Precision Agriculture</h3>
                        <p class="text-gray-600 dark:text-white mb-4 leading-relaxed">
                            How IoT sensors and data analytics are revolutionizing crop management and yield optimization.
                        </p>
                        <div class="flex items-center justify-between text-sm text-gray-500 dark:text-white mb-4">
                            <span>Oct 8, 2025</span>
                            <span>•</span>
                            <span>Dr. Emily Watson</span>
                        </div>
                        <a href="#" class="inline-flex items-center text-greycode-light-blue dark:text-white font-semibold hover:text-greycode-dark-blue transition-colors">
                            Read More
                            <i class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>

                <!-- Article Card 4 -->
                <div class="flex-shrink-0 w-80 md:w-96 snap-start bg-white dark:bg-gray-800 dark:shadow-xl dark:shadow-greycode-light-blue rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-105"
                     data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
                    <div class="h-48 bg-gradient-to-br from-purple-500 to-purple-700 flex items-center justify-center">
                        <div class="text-white text-center p-4">
                            <i class="fas fa-graduation-cap text-4xl mb-2"></i>
                            <h3 class="text-lg font-semibold">Education</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">IoT in Modern Education</h3>
                        <p class="text-gray-600 dark:text-white mb-4 leading-relaxed">
                            Preparing the next generation of innovators with hands-on IoT technology and development boards.
                        </p>
                        <div class="flex items-center justify-between text-sm text-gray-500 dark:text-white mb-4">
                            <span>Oct 5, 2025</span>
                            <span>•</span>
                            <span>Prof. James Wilson</span>
                        </div>
                        <a href="#" class="inline-flex items-center text-greycode-light-blue dark:text-white font-semibold hover:text-greycode-dark-blue transition-colors">
                            Read More
                            <i class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>

                <!-- Article Card 5 -->
                <div class="flex-shrink-0 w-80 md:w-96 snap-start bg-white dark:bg-gray-800 dark:shadow-xl dark:shadow-greycode-light-blue rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-105"
                     data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                    <div class="h-48 bg-gradient-to-br from-orange-500 to-orange-700 flex items-center justify-center">
                        <div class="text-white text-center p-4">
                            <i class="fas fa-building text-4xl mb-2"></i>
                            <h3 class="text-lg font-semibold">Smart Buildings</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Intelligent Building Management</h3>
                        <p class="text-gray-600 dark:text-white mb-4 leading-relaxed">
                            Creating energy-efficient, secure, and comfortable environments through IoT integration.
                        </p>
                        <div class="flex items-center justify-between text-sm text-gray-500 dark:text-white mb-4">
                            <span>Oct 1, 2025</span>
                            <span>•</span>
                            <span>Lisa Thompson</span>
                        </div>
                        <a href="#" class="inline-flex items-center text-greycode-light-blue dark:text-white font-semibold hover:text-greycode-dark-blue transition-colors">
                            Read More
                            <i class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Navigation Dots -->
            <div class="flex justify-center space-x-2 mt-8">
                <button class="w-3 h-3 rounded-full bg-gray-300 hover:bg-greycode-light-blue transition-colors carousel-dot active" data-slide="0"></button>
                <button class="w-3 h-3 rounded-full bg-gray-300 hover:bg-greycode-light-blue transition-colors carousel-dot" data-slide="1"></button>
                <button class="w-3 h-3 rounded-full bg-gray-300 hover:bg-greycode-light-blue transition-colors carousel-dot" data-slide="2"></button>
                <button class="w-3 h-3 rounded-full bg-gray-300 hover:bg-greycode-light-blue transition-colors carousel-dot" data-slide="3"></button>
                <button class="w-3 h-3 rounded-full bg-gray-300 hover:bg-greycode-light-blue transition-colors carousel-dot" data-slide="4"></button>
            </div>
        </div>

        <!-- View All Articles Button -->
        <div class="text-center mt-12" data-aos="fade-up" data-aos-duration="600">
            <a href="#" class="inline-flex items-center bg-greycode-light-blue text-white px-8 py-3 rounded-lg font-semibold hover:bg-greycode-mid-blue transition-colors duration-300">
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
</x-layout>