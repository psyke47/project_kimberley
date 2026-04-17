<x-layout>
    <x-slot name="title">Welcome to Greycode - IoT Solutions</x-slot>
    <x-slot name="meta_description">Discover Greycode, a leading IoT solutions company in South Africa. We specialize in
        connected technologies, smart automation, and innovative IoT products that transform industries and improve
        lives.</x-slot>
    <x-slot name="meta_keywords">IoT, Internet of Things, Smart Farming, Manufacturing, Mining, Smart Homes, Connected
        Technologies, IoT Solutions</x-slot>
    <x-slot name="canonical_url">https://greycode.co.za/</x-slot>

    {{-- Hero Section (excluded from heading animation rule) --}}
    <section class="min-h-[70vh] xl:min-h-screen w-full bg-white dark:bg-black relative flex items-center overflow-hidden">
        <div class="absolute inset-0 z-0 bg-white dark:bg-black"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:pl-8 relative z-10">
            <div class="flex flex-col md:flex-row items-center justify-center gap-6 md:gap-8 lg:gap-12 py-6 sm:py-8 md:py-4 lg:py-6 pb-12 sm:pb-16 md:pb-4">
                <!-- Text Column -->
                <div class="w-full md:w-1/2 text-center md:text-left order-2 md:order-1">
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl text-black dark:text-white font-bold mb-4 sm:mb-6">
                        CONNECT, <br>
                        CONTROL, &<br>
                        AUTOMATE<br>
                        <span class="text-greycode-light-blue hero-underline">YOUR WORLD</span>
                    </h1>
                    <p class="text-base sm:px-6 lg:px-0 sm:text-lg md:text-xl lg:text-2xl text-gray-600 dark:text-gray-400 mb-6 sm:mb-8">
                        Your gateway to cutting-edge IoT solutions for a smarter, more connected life.
                    </p>
                    <div class="flex flex-row gap-3 sm:gap-4 justify-center md:justify-start">
                        <a href="/contact" class="bg-greycode-light-blue hover:bg-black text-white font-bold py-2.5 px-5 sm:py-3 sm:px-6 rounded-md text-center text-sm sm:text-base transition-all duration-300 whitespace-nowrap hover:scale-105 hover:shadow-lg hover:-translate-y-1 hover:shadow-greycode-light-blue">
                            Contact Us
                        </a>
                        <a href="https://courses.greycode.co.za" target="_blank" rel="noopener noreferrer" class="bg-black dark:bg-white dark:text-black hover:bg-greycode-light-blue text-white font-bold py-2.5 px-5 sm:py-3 sm:px-6 rounded-md text-center text-sm sm:text-base transition-all duration-300 hover:text-white whitespace-nowrap hover:scale-105 hover:shadow-lg hover:-translate-y-1 hover:shadow-black">
                            <span class="mr-2"><i class="fas fa-graduation-cap"></i></span>
                            Skillshare
                        </a>
                    </div>
                </div>
                <!-- Image Column -->
                <div class="w-full md:w-1/2 flex items-center justify-center order-1 md:order-2">
                    <div class="relative w-full flex justify-center md:justify-end">
                        <img class="w-4/5 sm:w-2/5 md:w-full lg:w-[140%] xl:w-[130%] h-auto object-contain md:object-cover md:object-left"
                            src="{{ asset('images/Hand Services2x.png') }}" alt="Greycode Services" fetchpriority="high">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- What is IoT Section (heading no animation, consistent child animations) --}}
    <section class="bg-greycode-light-gray dark:bg-transparent dark:text-white py-8 sm:py-12 md:py-16">
        <h3 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4 text-center my-4 px-4">
            What is <span class="text-greycode-light-blue">IOT</span>
        </h3>

        <div class="rounded-4xl p-4 sm:p-6 md:p-8 shadow-3xl mx-auto max-w-[90%] sm:max-w-2xl md:max-w-4xl"
            style="background: #2C7DE6; background: linear-gradient(289deg, #2c7de6 25%, #7986A2 84%);"
            data-aos="fade-up" data-aos-duration="500">
            <div class="grid grid-cols-2 sm:flex sm:flex-row justify-center items-center gap-3 sm:gap-6 md:gap-8 flex-wrap">
                <div class="flex flex-col items-center" data-aos="fade-up" data-aos-delay="0">
                    <img src="{{ asset('images/icons-01.png') }}" class="w-20 h-20 sm:w-24 sm:h-24 md:w-32 md:h-32 object-contain hover:animate-wiggle transition-transform duration-300" alt="IoT Icon 1">
                    <p class="text-sm text-white text-center">Sensors capture data</p>
                </div>
                <div class="flex flex-col items-center" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('images/icons-02.png') }}" class="w-20 h-20 sm:w-24 sm:h-24 md:w-32 md:h-32 object-contain hover:animate-wiggle transition-transform duration-300" alt="IoT Icon 2">
                    <p class="text-sm text-white text-center">Share data</p>
                </div>
                <div class="flex flex-col items-center" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('images/icons-03.png') }}" class="w-20 h-20 sm:w-24 sm:h-24 md:w-32 md:h-32 object-contain hover:animate-wiggle transition-transform duration-300" alt="IoT Icon 3">
                    <p class="text-sm text-white text-center">Process data</p>
                </div>
                <div class="flex flex-col items-center" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('images/icons-04.png') }}" class="w-20 h-20 sm:w-24 sm:h-24 md:w-32 md:h-32 object-contain hover:animate-wiggle transition-transform duration-300" alt="IoT Icon 4">
                    <p class="text-sm text-white text-center">Act on data</p>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 md:px-8 lg:px-40 mt-8 sm:mt-12">
            <p class="text-sm sm:text-base md:text-lg leading-5 sm:leading-6 md:leading-7 mt-5 mb-8 text-center max-w-3xl sm:max-w-4xl mx-auto px-4"
                data-aos="fade-up" data-aos-delay="400" data-aos-duration="500">
                The Internet of Things or IoT refers to a network of devices wherein a variety of machines, buildings
                and other things are connected. These devices are capable of sending & receiving data from each other
                without requiring human-to-human or human-to-computer interaction.
            </p>
        </div>
    </section>

    {{-- Our Services Section (fixed scrolling issue, heading no animation) --}}
    <section class="relative overflow-hidden dark:bg-transparent dark:text-white py-4 sm:pt-8">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-white dark:bg-transparent"></div>
        </div>

        <div class="container mx-auto px-8 sm:px-6 md:px-8 lg:px-12 xl:px-16 relative z-10">
            <h3 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4 text-center mt-6 sm:mt-10">
                Our <span class="text-greycode-light-blue hero-underline">Services</span>
            </h3>

            <p class="text-base sm:text-lg md:text-xl mt-4 sm:mt-5 mb-8 text-center max-w-3xl sm:max-w-4xl mx-auto leading-relaxed"
                data-aos="fade-up" data-aos-duration="500">
                We provide world class, end to end solutions for the Internet of Things IoT, our Connected Technologies,
                Sensors and Platforms enable new solutions for government & enterprise customers, energy management &
                efficiency, smart cities, connected homes, buildings and more
            </p>

            <div x-data="{
                activeTab: 'farming',
                tabs: [
                    { id: 'farming', label: 'Smarter Farming', href: '/smart-farming' },
                    { id: 'manufacturing', label: 'Manufacturing', href: '/manufacturing' },
                    { id: 'mining', label: 'Mining, Oil & Gas', href: '/mining-oil-gas' },
                    { id: 'smart-buildings', label: 'Smart Homes', href: '/smart-home' },
                ]
            }" class="service-tabs w-full max-w-full mx-auto px-2 sm:px-6 lg:px-8 py-8 lg:py-12 overflow-visible">
                {{-- Tab Navigation --}}
                <div class="service-tabs-menu grid grid-cols-2 sm:flex sm:flex-wrap justify-center gap-2 sm:gap-4 lg:gap-6 mb-8 lg:mb-12 border-b border-greycode-mid-blue dark:border-gray-700 pb-4" role="tablist">
                    <template x-for="tab in tabs" :key="tab.id">
                        <button @click="activeTab = tab.id"
                            :class="{
                                'text-greycode-light-blue dark:text-blue-400 border-b-2 border-greycode-light-blue dark:border-blue-400 bg-blue-50/50 dark:bg-blue-900/20': activeTab === tab.id,
                                'gradient-text dark:text-gray-400 border-b-2 border-transparent hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-800/50': activeTab !== tab.id
                            }"
                            class="service-tab-link px-3 sm:px-4 py-3 text-sm sm:text-base font-semibold transition-all duration-500 ease-out focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 rounded-t-lg"
                            :id="`tab-${tab.id}`" role="tab" :aria-selected="activeTab === tab.id"
                            :aria-controls="`panel-${tab.id}`">
                            <h5 class="text-sm sm:text-lg font-bold" x-text="tab.label"></h5>
                        </button>
                    </template>
                </div>

                {{-- Tab Content Container (stable height, no absolute causing scroll issues) --}}
                <div class="w-tab-content relative min-h-[400px] sm:min-h-[450px] lg:min-h-[520px]">
                    {{-- Smarter Farming Tab --}}
                    <div x-show="activeTab === 'farming'"
                        x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 transform translate-x-4"
                        x-transition:enter-end="opacity-100 transform translate-x-0"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 transform translate-x-0"
                        x-transition:leave-end="opacity-0 transform -translate-x-4"
                        class="service-tab-pane absolute inset-0"
                        id="panel-farming" role="tabpanel" aria-labelledby="tab-farming">
                        <div class="service-tab-content flex flex-col lg:flex-row gap-6 lg:gap-12 items-center h-full">
                            <div class="service-tab-content-left flex-1" data-aos="fade-up" data-aos-duration="500">
                                <h5 class="text-xl lg:text-3xl font-bold text-gray-900 dark:text-white mb-3 lg:mb-4">Let's feed the future</h5>
                                <p class="text-sm lg:text-lg text-gray-600 dark:text-gray-300 leading-relaxed mb-4 lg:mb-6">
                                    Today, smart farming has become a reality. With the help of IoT technology and advanced machine learning algorithms, farmers can now monitor the health of their crops.
                                </p>
                                <a href="/smart-farming" class="inline-flex items-center px-4 lg:px-6 py-2 lg:py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-all duration-300 shadow-md hover:shadow-xl transform hover:-translate-y-1 text-sm lg:text-base">
                                    View More
                                    <svg class="w-3 h-3 lg:w-4 lg:h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="home-v3-services-image-grid flex-1 grid grid-cols-2 gap-3 lg:gap-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                                <img src="/images/Screenshot 2025-09-29 151719.png" alt="Farming Image" class="service-square-image w-full h-40 sm:h-48 lg:h-80 object-cover rounded-xl shadow-md hover:shadow-xl transition-all duration-500 transform hover:scale-[1.02]" loading="lazy">
                                <img src="/images/Screenshot 2025-09-29 151733.png" alt="Smart Farming Visualization" class="service-square-image w-full h-40 sm:h-48 lg:h-80 object-cover rounded-xl shadow-md hover:shadow-xl transition-all duration-500 transform hover:scale-[1.02]" loading="lazy">
                            </div>
                        </div>
                    </div>

                    {{-- Manufacturing Tab --}}
                    <div x-show="activeTab === 'manufacturing'"
                        x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 transform translate-x-4"
                        x-transition:enter-end="opacity-100 transform translate-x-0"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 transform translate-x-0"
                        x-transition:leave-end="opacity-0 transform -translate-x-4"
                        class="service-tab-pane absolute inset-0"
                        id="panel-manufacturing" role="tabpanel" aria-labelledby="tab-manufacturing">
                        <div class="service-tab-content flex flex-col lg:flex-row gap-6 lg:gap-12 items-center h-full">
                            <div class="service-tab-content-left flex-1" data-aos="fade-up" data-aos-duration="500">
                                <h5 class="text-xl lg:text-3xl font-bold text-gray-900 dark:text-white mb-3 lg:mb-4">Let's make cool things</h5>
                                <p class="text-sm lg:text-lg text-gray-600 dark:text-gray-300 leading-relaxed mb-4 lg:mb-6">
                                    Today's manufacturers are seeking agility. IoT enables increased mobility, fast decision-making, and higher yields across factory systems.
                                </p>
                                <a href="/manufacturing" class="inline-flex items-center px-4 lg:px-6 py-2 lg:py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-all duration-300 shadow-md hover:shadow-xl transform hover:-translate-y-1 text-sm lg:text-base">
                                    View More
                                    <svg class="w-3 h-3 lg:w-4 lg:h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="home-v3-services-image-grid flex-1 grid grid-cols-2 gap-3 lg:gap-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                                <img src="/images/manufacturing-1.png" alt="Manufacturing Image" class="service-square-image w-full h-40 sm:h-48 lg:h-80 object-cover rounded-xl shadow-md hover:shadow-xl transition-all duration-500 transform hover:scale-[1.02]" loading="lazy">
                                <img src="/images/manufaccting-2.png" alt="Factory View" class="service-square-image w-full h-40 sm:h-48 lg:h-80 object-cover rounded-xl shadow-md hover:shadow-xl transition-all duration-500 transform hover:scale-[1.02]" loading="lazy">
                            </div>
                        </div>
                    </div>

                    {{-- Mining, Oil & Gas Tab --}}
                    <div x-show="activeTab === 'mining'"
                        x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 transform translate-x-4"
                        x-transition:enter-end="opacity-100 transform translate-x-0"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 transform translate-x-0"
                        x-transition:leave-end="opacity-0 transform -translate-x-4"
                        class="service-tab-pane absolute inset-0"
                        id="panel-mining" role="tabpanel" aria-labelledby="tab-mining">
                        <div class="service-tab-content flex flex-col lg:flex-row gap-6 lg:gap-12 items-center h-full">
                            <div class="service-tab-content-left flex-1" data-aos="fade-up" data-aos-duration="500">
                                <h5 class="text-xl lg:text-3xl font-bold text-gray-900 dark:text-white mb-3 lg:mb-4">We <strong class="text-blue-600 dark:text-blue-400">digging</strong></h5>
                                <p class="text-sm lg:text-lg text-gray-600 dark:text-gray-300 leading-relaxed mb-4 lg:mb-6">
                                    Create a complete overview of your operation, digitize it, and optimize for safety, efficiency, and real-time insights.
                                </p>
                                <a href="/mining-oil-gas" class="inline-flex items-center px-4 lg:px-6 py-2 lg:py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-all duration-300 shadow-md hover:shadow-xl transform hover:-translate-y-1 text-sm lg:text-base">
                                    View More
                                    <svg class="w-3 h-3 lg:w-4 lg:h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="home-v3-services-image-grid flex-1 grid grid-cols-2 gap-3 lg:gap-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                                <img src="images/mining-oil1.png" alt="Mining Overview" class="service-square-image w-full h-40 sm:h-48 lg:h-80 object-cover rounded-xl shadow-md hover:shadow-xl transition-all duration-500 transform hover:scale-[1.02]" loading="lazy">
                                <img src="images/mining-oil2.png" alt="Mining Operation" class="service-square-image w-full h-40 sm:h-48 lg:h-80 object-cover rounded-xl shadow-md hover:shadow-xl transition-all duration-500 transform hover:scale-[1.02]" loading="lazy">
                            </div>
                        </div>
                    </div>

                    {{-- Smart Buildings Tab --}}
                    <div x-show="activeTab === 'smart-buildings'"
                        x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 transform translate-x-4"
                        x-transition:enter-end="opacity-100 transform translate-x-0"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 transform translate-x-0"
                        x-transition:leave-end="opacity-0 transform -translate-x-4"
                        class="service-tab-pane absolute inset-0"
                        id="panel-smart-buildings" role="tabpanel" aria-labelledby="tab-smart-buildings">
                        <div class="service-tab-content flex flex-col lg:flex-row gap-6 lg:gap-12 items-center h-full">
                            <div class="service-tab-content-left flex-1" data-aos="fade-up" data-aos-duration="500">
                                <h5 class="text-xl lg:text-3xl font-bold text-gray-900 dark:text-white mb-3 lg:mb-6">Smart Living</h5>
                                <p class="text-sm lg:text-lg text-gray-600 dark:text-gray-300 leading-relaxed mb-4">
                                    Efficient building management to optimize energy, water, security, and occupancy — unlocking better smart living experiences.
                                </p>
                                <a href="/smart-home" class="inline-flex items-center px-4 lg:px-6 py-2 lg:py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-all duration-300 shadow-md hover:shadow-xl transform hover:-translate-y-1 text-sm lg:text-base">
                                    View More
                                    <svg class="w-3 h-3 lg:w-4 lg:h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="home-v3-services-image-grid flex-1 grid grid-cols-2 gap-3 lg:gap-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                                <img src="/images/smart-home1.png" alt="Smart Building Image" class="service-square-image w-full h-40 sm:h-48 lg:h-80 object-cover rounded-xl shadow-md hover:shadow-xl transition-all duration-500 transform hover:scale-[1.02]" loading="lazy">
                                <img src="/images/smart-home2.png" alt="Interior Smart Control" class="service-square-image w-full h-40 sm:h-48 lg:h-80 object-cover rounded-xl shadow-md hover:shadow-xl transition-all duration-500 transform hover:scale-[1.02]" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Success Stories Section (heading no animation) --}}
    <section class="flex flex-col items-center justify-center text-center py-10 bg-transparent dark:bg-transparent dark:text-white">
        <h3 class="text-5xl font-bold mb-4 text-center">
            Success <span class="text-greycode-light-blue">Stories</span>
        </h3>
        <p class="text-lg mb-8" data-aos="fade-up" data-aos-duration="500">Get to know more about the work we do.</p>

        <div class="flex flex-wrap justify-center gap-8 max-w-7xl mx-auto">
            <div class="card bg-base-100 w-96 shadow-md shadow-greycode-light-blue" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0">
                <figure class="px-10 pt-10">
                    <img src="{{ asset('images/pexels-nc-farm-bureau-mark-2889442.jpg') }}" alt="Smart Farming" class="rounded-xl" />
                </figure>
                <div class="card-body items-center text-center p-3">
                    <h2 class="card-title text-lg my-2.5 font-semibold text-greycode-light-blue">Smart Farming</h2>
                    <p>Rather than relying on old-fashioned and imprecise tools like their own eyes and noses, farmers have begun using IoT sensors...</p>
                </div>
            </div>

            <div class="card bg-base-100 w-96 shadow-md shadow-greycode-light-blue" data-aos="fade-up" data-aos-duration="500" data-aos-delay="150">
                <figure class="px-10 pt-10">
                    <img src="{{ asset('images/pexels-life-of-pix-2391.jpg') }}" alt="Manufacturing" class="rounded-xl" />
                </figure>
                <div class="card-body items-center text-center p-3">
                    <h2 class="card-title text-lg my-2.5 font-semibold text-greycode-light-blue">Manufacturing</h2>
                    <p>IoT solutions in manufacturing improve efficiency and reduce downtime through predictive maintenance...</p>
                </div>
            </div>

            <div class="card bg-base-100 w-96 shadow-md shadow-greycode-light-blue" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
                <figure class="px-10 pt-10">
                    <img src="{{ asset('images/pexels-sevenstormphotography-443383.jpg') }}" alt="Smart Buildings" class="rounded-xl" />
                </figure>
                <div class="card-body items-center text-center p-3">
                    <h2 class="card-title text-lg my-2.5 font-semibold text-greycode-light-blue">Smart Buildings</h2>
                    <p>Intelligent building management systems optimize energy consumption and enhance security...</p>
                </div>
            </div>
        </div>
        <div class="mt-8" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
            <a href="/success-stories" class="inline-block">
                <button class="btn bg-blue-600 hover:bg-blue-700 px-6 py-3 text-white font-semibold rounded-lg transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">Read More</button>
            </a>
        </div>
    </section>

    {{-- Learn, Build & Innovate Section (heading no animation) --}}
    <section class="relative py-12 sm:py-16 overflow-hidden text-black dark:text-white">
        <div class="relative z-10">
            <div class="container mx-auto px-4 sm:px-6 md:px-8 relative z-10">
                <div class="text-center text-black dark:text-white mb-8 sm:mb-12">
                    <h3 class="text-4xl sm:text-5xl md:text-6xl font-bold mb-4 mt-6 sm:mt-10">
                        Learn, Build & <span class="text-greycode-light-blue">Innovate</span>
                    </h3>
                    <p class="text-lg sm:text-xl text-black dark:text-white/90">
                        The GREYCODE IoT Development Board
                    </p>
                </div>

                <div class="space-y-12 max-w-5xl mx-auto">
                    <div class="p-6" data-aos="fade-up" data-aos-duration="500">
                        <p class="text-black dark:text-white leading-relaxed text-lg md:text-xl">
                            This board is a premium, all-in-one solution engineered for demanding IoT and connected applications.
                            It features high-speed dual-core processing (240MHz), robust multi-connectivity (Wi-Fi, Bluetooth,
                            and 4G LTE/CAT-M1/NB-IoT support), and seamless data transmission.
                        </p>
                    </div>

                    <div class="text-center" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                        <img src="{{ asset('images/greycode-board.png') }}" alt="GREYCODE IoT Development Board"
                            class="w-64 h-64 sm:w-80 sm:h-80 md:w-96 md:h-96 object-contain mx-auto filter drop-shadow-2xl">
                    </div>

                    <div class="p-6" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                        <p class="text-black dark:text-white leading-relaxed text-lg md:text-xl">
                            Designed for reliability in remote deployments, it includes GPS tracking and solar/battery power
                            options for uninterrupted operation. With advanced power management and rugged durability, this
                            board is ideal for industrial automation, smart agriculture, and asset monitoring—built to excel
                            in harsh environments with zero compromises.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Prototype Section (excluded, keep as is) --}}
    <section class="py-16 icon-background">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="w-full lg:w-1/3" data-aos="fade-right" data-aos-duration="300">
                    <img src="{{ asset('images/prototype-board.png') }}" alt="Section Image" class="w-full h-auto rounded-2xl shadow-lg object-cover">
                </div>
                <div class="w-full lg:w-2/3" data-aos="fade-left" data-aos-duration="300" data-aos-delay="150">
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

    {{-- Articles Carousel Section (heading no animation) --}}
    <section class="py-16 bg-gray-50 dark:bg-gray-800 dark:text-white scroll-px-10">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">Our <span class="text-greycode-light-blue">Articles</span></h2>
                <p class="text-lg sm:text-xl text-gray-600 dark:text-white max-w-2xl mx-auto">
                    Stay updated with the latest insights, trends, and innovations in IoT technology
                </p>
            </div>

            <div class="relative" x-data="articleCarousel()" x-init="init()">
                <div class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10 hidden md:block">
                    <button @click="prev" class="bg-white rounded-full dark:bg-gray-800 p-3 shadow-lg hover:bg-gray-100 transition-colors">
                        <i class="fas fa-chevron-left text-greycode-light-blue"></i>
                    </button>
                </div>
                <div class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10 hidden md:block">
                    <button @click="next" class="bg-white rounded-full dark:bg-gray-800 p-3 shadow-lg hover:bg-gray-100 transition-colors">
                        <i class="fas fa-chevron-right text-greycode-light-blue"></i>
                    </button>
                </div>

                <div class="overflow-x-auto snap-x snap-mandatory scrollbar-hide scroll-smooth pb-8 -mx-4 px-4 md:mx-0 md:px-0"
                    id="articles-carousel" x-ref="carousel" @scroll.debounce="updateActiveDot">
                    <div class="flex gap-4 md:gap-6 w-max">
                        @php
                            $articles = [
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
                        <div class="snap-start w-[85vw] max-w-[380px] sm:w-80 md:w-96 bg-white dark:bg-gray-800 dark:shadow-xl dark:shadow-greycode-light-blue rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-[1.02] flex-shrink-0"
                            data-aos="fade-up" data-aos-duration="500" data-aos-delay="{{ $index * 50 }}">
                            <div class="h-48 bg-gray-200 dark:bg-gray-700 overflow-hidden">
                                <img src="{{ $article['image'] }}" alt="{{ $article['title'] }}" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" loading="lazy">
                            </div>
                            <div class="px-6 pt-4">
                                <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full 
                                    @if($article['category'] === 'education') bg-purple-100 text-purple-800 dark:bg-purple-900 dark:text-purple-200
                                    @elseif($article['category'] === 'industry') bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-200
                                    @else bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200 @endif">
                                    {{ $article['category_label'] }}
                                </span>
                            </div>
                            <div class="p-6 pt-4">
                                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 line-clamp-2">{{ $article['title'] }}</h3>
                                <p class="text-gray-600 mb-4 leading-relaxed dark:text-gray-300 line-clamp-3">{{ $article['excerpt'] }}</p>
                                <div class="flex items-center justify-between text-sm text-gray-500 mb-4 dark:text-gray-400 flex-wrap gap-2">
                                    <span class="text-xs sm:text-sm">{{ $article['date'] }}</span>
                                    <span class="hidden sm:inline">•</span>
                                    <span class="text-xs sm:text-sm">{{ $article['read_time'] }}</span>
                                    <span class="hidden sm:inline">•</span>
                                    <span class="text-xs sm:text-sm truncate max-w-[100px] sm:max-w-none">{{ $article['author'] }}</span>
                                </div>
                                <a href="{{ $article['url'] }}" class="inline-flex items-center text-greycode-light-blue dark:text-blue-400 font-semibold hover:text-greycode-dark-blue transition-colors group">
                                    Read More
                                    <i class="fas fa-arrow-right ml-2 text-sm group-hover:translate-x-1 transition-transform"></i>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="flex justify-center space-x-2 mt-8">
                    @foreach($articles as $index => $article)
                    <button @click="goToSlide({{ $index }})" 
                        class="w-3 h-3 rounded-full transition-all duration-300"
                        :class="activeDot === {{ $index }} ? 'bg-greycode-light-blue w-6' : 'bg-gray-300 hover:bg-greycode-light-blue'"
                        data-slide="{{ $index }}"></button>
                    @endforeach
                </div>
            </div>

            <div class="text-center mt-12" data-aos="fade-up" data-aos-duration="500">
                <a href="{{ route('blog.index') }}" class="inline-flex items-center bg-greycode-light-blue text-white px-6 sm:px-8 py-3 rounded-lg font-semibold hover:bg-greycode-mid-blue transition-colors duration-300">
                    View All Articles
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    {{-- Ready to Get in Touch Section (excluded, keep as is) --}}
    <section class="sticky-section bg-white dark:bg-gray-800 min-h-screen flex flex-col items-center justify-center px-6 py-12">
        <h2 class="text-black text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold relative overflow-hidden w-full reveal-type text-center"
            data-bg-color="#DCDCDC" data-fg-color="#2C7DE6">Ready to Get in Touch?</h2>
        <div class="mt-10">
            <a href="/contact" class="inline-block px-8 py-4 text-lg font-semibold text-white bg-greycode-light-blue rounded-lg shadow-lg hover:shadow-2xl transform transition-all duration-300 hover:-translate-y-1 hover:scale-105 active:scale-95">Contact Us</a>
        </div>
    </section>

    {{-- Empty content section (maybe intentional) --}}
    <section class="content-section bg-white dark:bg-gray-800">
        <div class="h-screen flex items-center justify-center"></div>
    </section>
</x-layout>

<script>
    function articleCarousel() {
        return {
            activeDot: 0,
            carousel: null,
            cardWidth: 0,
            init() {
                this.carousel = this.$refs.carousel;
                this.calculateCardWidth();
                this.updateActiveDot();
                window.addEventListener('resize', () => {
                    this.calculateCardWidth();
                    this.updateActiveDot();
                });
            },
            calculateCardWidth() {
                const card = this.carousel.querySelector('.snap-start');
                if (card) {
                    const style = window.getComputedStyle(card);
                    const marginRight = parseFloat(style.marginRight) || 0;
                    this.cardWidth = card.offsetWidth + marginRight;
                }
            },
            updateActiveDot() {
                const scrollLeft = this.carousel.scrollLeft;
                const index = Math.round(scrollLeft / this.cardWidth);
                this.activeDot = Math.min(index, {{ count($articles) - 1 }});
            },
            goToSlide(index) {
                this.carousel.scrollTo({ left: index * this.cardWidth, behavior: 'smooth' });
                this.activeDot = index;
            },
            next() {
                const nextIndex = Math.min(this.activeDot + 1, {{ count($articles) - 1 }});
                this.goToSlide(nextIndex);
            },
            prev() {
                const prevIndex = Math.max(this.activeDot - 1, 0);
                this.goToSlide(prevIndex);
            }
        }
    }
</script>

<style>
    /* Hide scrollbar */
    .scrollbar-hide::-webkit-scrollbar { display: none; }
    .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
    #articles-carousel { scroll-behavior: smooth; -webkit-overflow-scrolling: touch; }
    .snap-x { scroll-snap-type: x mandatory; }
    .snap-start { scroll-snap-align: start; }

    @media (max-width: 639px) {
        .w-\[85vw\] { width: 85vw; }
        #articles-carousel { padding-left: 7.5vw; padding-right: 7.5vw; margin-left: 0; margin-right: 0; }
    }

    /* Service tabs smoothness */
    .service-tab-pane { will-change: transform, opacity; backface-visibility: hidden; }
    .service-square-image { transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94); }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof AOS !== 'undefined') {
            AOS.init({ duration: 500, once: true });
        }
    });
</script>