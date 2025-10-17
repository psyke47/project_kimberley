<x-layout>
    <x-slot name="title">Smart Farming - Greycode</x-slot>
    <x-slot name="meta_description">Discover how our Smart Farming solutions leverage IoT and AI to optimize agricultural practices, enhance crop yields, and promote sustainable farming.</x-slot>

    {{-- White background wrapper --}}  
    <div class="bg-white min-h-screen">
        <section class="container mx-auto px-6 sm:px-8 lg:px-16 py-8 flex items-center">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div class="px-4 space-y-6">
                    <h2 class="text-4xl lg:text-5xl font-bold mb-4">
                        Smart Farming
                    </h2>
                    <p class="text-gray-700 leading-relaxed">
                        The Grey Code Smart Farming approach is a technology-driven method in agriculture that utilizes various technologies to enhance yield and efficiency. This includes automation in livestock farms and the integration of sensors in crop fields.
                    </p>
                    <button class="gradient-outline-button uppercase mt-6">
                        Get Started
                    </button>
                </div>
                <div class="px-4">
                    <img src="{{ asset('images/65973c8bb5f529de9b164ffe_smart farming 2-p-800.png') }}">
                </div>
            </div>
        </section>
        <section class="container mx-auto px-6 sm:px-8 lg:px-16 py-8">
            <p class="leading max-w-6xl">Today, the world’s population is above 7.5 billion and it is estimated to reach 9.7 billion by 2050. To feed this amount of people, food production has to increase by 70%. At the same time, global warming and other environmental threats are putting us under a lot of pressure to do farming. Smart farming is the latest trend in modern agricultural technology. As the world's population continues to skyrocket, new techniques are needed to increase agricultural production and make it more efficient. With the innovations in modern technology, smart farming can help farmers to level up their game in an environmentally friendly way.</p>
        </section>
        <section class="container mx-auto px-6 sm:px-8 lg:px-16 py-8 space-y-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div class="px-4">
                    <img src="{{ asset('images/659c2e52688c6d225291f386_mining_excavator-removebg-preview.png')}}" alt="">
                </div>
                <div class="px-4 space-y-6">
                    <h2 class="text-4xl font-bold">Soil Monitoring </h2>
                    <p class="leading-relaxed">Measure water alkalinity, water salinity, water temperature, Leak detection, water level and irrigation water flow</p>
                </div>
            </div>
        </section>
        <section class="container mx-auto px-6 sm:px-8 lg:px-16 py-8 space-y-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div class="px-4 space-y-6">
                    <h2 class="text-4xl font-bold">Livestock Monitoring</h2>
                    <p>Elevate your livestock management with our remote tracking and monitoring system. This feature enables you to keep a constant, vigilant eye on the health, location, and behavior of your animals.</p>
                </div>
                <div>
                    <img src="{{ asset('images/659960e26966bff8546a31cc_cow-p-500.png')}}" alt="">
                </div>
            </div>
        </section>
    </div>
</x-layout>