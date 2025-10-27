<x-layout>
    <x-slot name="title">Smart Farming - Greycode</x-slot>
    <x-slot name="meta_description">Discover how our Smart Farming solutions leverage IoT and AI to optimize agricultural practices, enhance crop yields, and promote sustainable farming.</x-slot>

    {{-- White background wrapper --}}  
    <div class="bg-white in-dark:bg-gray-800 min-h-screen">
        <section class="container mx-auto px-6 sm:px-8 lg:px-16 py-8 flex items-center">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div class="px-4 space-y-6" data-aos="fade-right" data-aos-duration="600">
                    <h2 class="text-4xl lg:text-5xl font-bold mb-4 dark:text-white">
                        Smart Farming
                    </h2>
                    <p class="text-gray-700 leading-relaxed dark:text-gray-300">
                        The Grey Code Smart Farming approach is a technology-driven method in agriculture that utilizes various technologies to enhance yield and efficiency. This includes automation in livestock farms and the integration of sensors in crop fields.
                    </p>
                    <button class="gradient-outline-button uppercase mt-6" data-aos="fade-up" data-aos-delay="300">
                        Get Started
                    </button>
                </div>
                <div class="px-4" data-aos="fade-left" data-aos-duration="600" data-aos-delay="200">
                    <img src="{{ asset('images/smart-farming.jpg') }}" alt="smart farming" class="w-full">
                </div>
            </div>
        </section>
        
        <section class="container mx-auto px-6 sm:px-8 lg:px-16 py-8">
            <p class="leading max-w-6xl dark:text-gray-300" data-aos="fade-up" data-aos-duration="600">
                Today, the world's population is above 7.5 billion and it is estimated to reach 9.7 billion by 2050. To feed this amount of people, food production has to increase by 70%. At the same time, global warming and other environmental threats are putting us under a lot of pressure to do farming. Smart farming is the latest trend in modern agricultural technology. As the world's population continues to skyrocket, new techniques are needed to increase agricultural production and make it more efficient. With the innovations in modern technology, smart farming can help farmers to level up their game in an environmentally friendly way.
            </p>
        </section>
        
        <section class="container mx-auto px-6 sm:px-8 lg:px-16 py-8 space-y-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div class="px-4" data-aos="fade-right" data-aos-duration="600">
                    <img src="{{ asset('images/mining_excavator.jpg')}}" alt="smart soil monitoring">
                </div>
                <div class="px-4 space-y-6" data-aos="fade-left" data-aos-duration="600" data-aos-delay="200">
                    <h2 class="text-4xl font-bold dark:text-white">Soil Monitoring</h2>
                    <p class="leading-relaxed dark:text-gray-300">Measure water alkalinity, water salinity, water temperature, Leak detection, water level and irrigation water flow</p>
                </div>
            </div>
        </section>
        
        <section class="container mx-auto px-6 sm:px-8 lg:px-16 py-8 space-y-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div class="px-4 space-y-6" data-aos="fade-right" data-aos-duration="600">
                    <h2 class="text-4xl font-bold dark:text-white">Livestock Monitoring</h2>
                    <p class="dark:text-gray-300">Elevate your livestock management with our remote tracking and monitoring system. This feature enables you to keep a constant, vigilant eye on the health, location, and behavior of your animals.</p>
                </div>
                <div data-aos="fade-left" data-aos-duration="600" data-aos-delay="200">
                    <img src="{{ asset('images/Livestock-Monitoring.jpg')}}" alt="Livestock Monitoring">
                </div>
            </div>
        </section>
        
        <section class="container mx-auto px-6 sm:px-8 lg:px-16 py-8 space-y-8">
            <h2 class="text-center text-4xl lg:text-5xl font-bold mb-8 dark:text-white" 
                data-aos="fade-down" 
                data-aos-duration="600">
                Benefits of our solution
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                <!-- Card 1 -->
                <div class="card bg-white dark:bg-gray-700 w-full h-80 shadow-xl border-2 border-gray-200 dark:border-0 rounded-2xl hover:shadow-2xl dark:shadow-greycode-light-blue transition-all duration-300"
                     data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                    <div class="card-body p-6 flex flex-col justify-between">
                        <div>
                            <h3 class="card-title text-xl font-bold mb-4 text-greycode-dark-blue dark:text-white">Energy Efficiency</h3>
                            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">optimize the use of resources like electricity and water, leading to significant energy savings.</p>
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
                            <h3 class="card-title text-xl font-bold mb-4 text-greycode-dark-blue dark:text-white">Remote Monitoring</h3>
                            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">monitor and control various aspects of the farm remotely. This includes checking the status of crops and livestock and controlling machinery from any location.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="card bg-white dark:bg-gray-700 w-full h-80 shadow-xl border-2 border-gray-200 dark:border-0 rounded-2xl hover:shadow-2xl dark:shadow-greycode-light-blue transition-all duration-300"
                     data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                    <div class="card-body p-6 flex flex-col justify-between">
                        <div>
                            <h3 class="card-title text-xl font-bold mb-4 text-greycode-dark-blue dark:text-white">Increased Crop Yields</h3>
                            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">Our solution is designed to help you identify the optimal conditions for each stage of crop growth, from planting to harvest. This precision approach ensures your crops thrive, resulting in significantly improved yields and a thriving farm</p>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="card bg-white dark:bg-gray-700 w-full h-80 shadow-xl border-2 border-gray-200 dark:border-0 rounded-2xl hover:shadow-2xl dark:shadow-greycode-light-blue transition-all duration-300"
                     data-aos="fade-up" data-aos-duration="500" data-aos-delay="500">
                    <div class="card-body p-6 flex flex-col justify-between">
                        <div>
                            <h3 class="card-title text-xl font-bold mb-4 text-greycode-dark-blue dark:text-white">Improved Quality</h3>
                            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">Through meticulous monitoring of crops and livestock, ensure the production of superior quality produce that commands premium prices,</p>
                        </div>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="card bg-white dark:bg-gray-700 w-full h-80 shadow-xl border-2 border-gray-200 dark:border-0 rounded-2xl hover:shadow-2xl dark:shadow-greycode-light-blue transition-all duration-300"
                     data-aos="fade-up" data-aos-duration="500" data-aos-delay="600">
                    <div class="card-body p-6 flex flex-col justify-between">
                        <div>
                            <h3 class="card-title text-xl font-bold mb-4 text-greycode-dark-blue dark:text-white">Automated Irrigation</h3>
                            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">Implement automated irrigation systems for precise water management, ensuring optimal crop hydration with minimal waste.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layout>