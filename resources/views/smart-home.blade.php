<x-layout>
    <x-slot name="title">Smart Home - Greycode</x-slot>
    <x-slot name="meta_description">Explore our Smart Home Solutions that enhance security, convenience, and energy efficiency through advanced IoT technology.</x-slot>

    {{-- White background wrapper --}}
    <div class="bg-white in-dark:bg-gray-800 min-h-screen">
        <section class="container mx-auto px-6 sm:px-8 lg:px-16 py-8 flex items-center">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div class="px-4 space-y-6" data-aos="fade-right" data-aos-duration="600">
                    <h2 class="text-4xl lg:text-5xl font-bold mb-4 dark:text-white">
                        <span class="text-greycode-light-blue">Smart</span> Home
                    </h2>
                    <p class="text-gray-700 leading-relaxed dark:text-gray-300">
                        Transform your home into a haven of convenience and security with our Smart Home solutions. Experience unparalleled comfort and peace of mind as innovative technologies seamlessly integrate into your daily life. Control lighting, temperature, and security systems effortlessly with your smartphone or voice commands and enjoy personalized settings that adapt to your preferences, ensuring a cozy, safe, and efficient living environment.
                    </p>
                    <button class="gradient-outline-button uppercase mt-6" data-aos="fade-up" data-aos-delay="300">
                        Get Started
                    </button>
                </div>
                <div class="px-4" data-aos="fade-left" data-aos-duration="600" data-aos-delay="200">
                    <img src="{{ asset('images/65f021bb88b9105a4ceb964a_6599da1f1df5a8f2567872aa_smart_home-removebg-preview 1.jpg')}}" alt="smart home" class="w-full">
                </div>
            </div>
        </section>

        <section class="container mx-auto px-6 sm:px-8 lg:px-16 py-8">
            <p class="leading max-w-6xl dark:text-gray-300" data-aos="fade-up" data-aos-duration="600">
                What are smart city solutions? They represent the integration of digital and communication technologies into urban management, designed to enhance urban living. This integration facilitates efficient governance, improves mobility, promotes energy efficiency, and develops advanced infrastructure. Additionally, smart city solutions contribute to environmental sustainability, enable data-driven decision-making, increase public safety, foster inclusive citizen engagement, and streamline effective urban planning.
            </p>
        </section>

        <section class="container mx-auto px-6 sm:px-8 lg:px-16 py-8 space-y-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div class="px-4" data-aos="fade-right" data-aos-duration="600">
                    <img src="{{ asset('images/65f0223229a4a29b4b3497cd_buildings 1.jpg')}}" alt="smart building">
                </div>
                <div class="px-4 space-y-6" data-aos="fade-left" data-aos-duration="600" data-aos-delay="200">
                    <h2 class="text-4xl font-bold dark:text-white"><span class="text-greycode-light-blue">Smart</span> Building</h2>
                    <p class="leading-relaxed dark:text-gray-300">Transform your property into a benchmark of modern building management with our Smart Building solution. Embrace sustainability, increase your property's value, and provide a superior experience for your tenants. Our system offers real-time analytics, automated controls, and advanced security, ensuring a more efficient, comfortable, and safe environment.</p>
                </div>
            </div>
        </section>

        <section class="container mx-auto px-6 sm:px-8 lg:px-16 py-8 space-y-8">
            <h2 class="text-center text-4xl lg:text-5xl font-bold mb-8 dark:text-white" 
                data-aos="fade-down" 
                data-aos-duration="600">
                Benefits of our solution
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 lg:gap-8">
                <!-- Card 1 -->
                <div class="card bg-white dark:bg-gray-700 w-full h-80 shadow-xl border-2 border-gray-200 dark:border-0 rounded-2xl hover:shadow-2xl dark:shadow-greycode-light-blue transition-all duration-300"
                     data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                    <div class="card-body p-6 flex flex-col justify-between">
                        <div>
                            <h3 class="card-title text-xl font-bold mb-4 text-greycode-dark-blue dark:text-white">Energy Efficiency</h3>
                            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">Optimize the use of resources like electricity and water, leading to significant energy savings.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="card bg-white dark:bg-gray-700 w-full h-80 shadow-xl border-2 border-gray-200 dark:border-0 rounded-2xl hover:shadow-2xl dark:shadow-greycode-light-blue transition-all duration-300"
                     data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                    <div class="card-body p-6 flex flex-col justify-between">
                        <div>
                            <h3 class="card-title text-xl font-bold mb-4 text-greycode-dark-blue dark:text-white">Enhanced Security System</h3>
                            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">Our integrated surveillance systems, access control, and alarm systems are not only advanced but also manageable remotely, offering immediate alerts and proactive responses to security issues.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="card bg-white dark:bg-gray-700 w-full h-80 shadow-xl border-2 border-gray-200 dark:border-0 rounded-2xl hover:shadow-2xl dark:shadow-greycode-light-blue transition-all duration-300"
                     data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
                    <div class="card-body p-6 flex flex-col justify-between">
                        <div>
                            <h3 class="card-title text-xl font-bold mb-4 text-greycode-dark-blue dark:text-white">Proactive Building Maintenance</h3>
                            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">Our IoT sensors constantly monitor the building's infrastructure. This enables predictive maintenance, averting breakdowns and prolonging the lifespan of equipment, from elevators to HVAC systems.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="card bg-white dark:bg-gray-700 w-full h-80 shadow-xl border-2 border-gray-200 dark:border-0 rounded-2xl hover:shadow-2xl dark:shadow-greycode-light-blue transition-all duration-300"
                     data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                    <div class="card-body p-6 flex flex-col justify-between">
                        <div>
                            <h3 class="card-title text-xl font-bold mb-4 text-greycode-dark-blue dark:text-white">Remote Monitoring</h3>
                            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">Our platform enables building managers to monitor and control system operations from anywhere, ensuring constant oversight and quick response capabilities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layout>