<x-layout>
    <x-slot name="title">Smart Mining - Greycode</x-slot>
    <x-slot name="meta_description">Harness the power of IoT, AI, and automation to make mining operations safer, more efficient, and more environmentally responsible.</x-slot>

    <div class="bg-white dark:bg-neutral-800">
        <section class="container mx-auto px-6 sm:px-8 lg:px-16 py-8 flex items-center">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div class="px-4 space-y-6" data-aos="fade-up" data-aos-duration="500">
                    <h2 class="text-4xl lg:text-5xl font-bold mb-4 dark:text-white"><span class="text-greycode-light-blue">Smart</span> Mining</h2>
                    <p class="text-gray-700 leading-relaxed dark:text-gray-300">
                        Harness the power of IoT, AI, and automation to make mining operations safer, more efficient, and more environmentally responsible while improving productivity and sustainability.
                    </p>
                    <x-button href="/contact" variant="outline" size="lg" class="uppercase mt-6">Get Started</x-button>
                </div>
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                    <img src="{{ asset('images/smart-mining-hero.png') }}" alt="smart mining" class="w-full max-w-md">
                </div>
            </div>
        </section>

        <section class="container mx-auto px-6 sm:px-8 lg:px-16 py-8">
            <div class="px-6 sm:px-8 lg:px-16 py-8 bg-greycode-light-gray dark:bg-neutral-700 rounded-4xl opacity-90"
                 data-aos="fade-up" data-aos-duration="500">
                <p class="leading text-black dark:text-gray-300">
                    What is smart mining? Smart mining is an innovative approach to resource extraction that leverages cutting-edge technologies like the Internet of Things (IoT), Artificial Intelligence (AI), automation, and data analytics to significantly improve efficiency, safety, and environmental sustainability in mining operations. This modern methodology transforms traditional mining practices by automating processes, optimizing decision-making through real-time data analysis, and ensuring higher safety standards through remote and autonomous operations.
                </p>
            </div>
        </section>

        <section class="container mx-auto px-6 sm:px-8 lg:px-16 py-8 space-y-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div class="px-4" data-aos="fade-up" data-aos-duration="500">
                    <img src="{{ asset('images/mining-safety1.png') }}" alt="mining safety" class="w-full max-w-md dark:bg-white">
                </div>
                <div class="px-4 space-y-6" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                    <p class="leading max-w-4xl dark:text-gray-300">
                        Equipped with wearable sensors, environmental detectors, and advanced analytics, our solution not only keeps a watchful eye on crucial factors like air quality, temperature, and gas levels but also tracks miners' locations. In the event of an emergency, our system instantly sends alerts, enabling swift responses to mitigate risks.
                    </p>
                </div>
            </div>
        </section>

        <section class="container mx-auto px-6 sm:px-8 lg:px-16 py-8 space-y-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div class="px-4 space-y-6" data-aos="fade-up" data-aos-duration="500">
                    <p class="leading max-w-4xl dark:text-gray-300">
                        Fleet Management: With our solution, harness the power of real-time tracking to monitor diagnostic data, pinpoint precise locations, and optimize the performance of trucks and haulage equipment, effectively reducing congestion and minimizing wait times.
                    </p>
                </div>
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                    <img src="{{ asset('images/smart-mining.png') }}" alt="mining fleet" class="w-full max-w-md">
                </div>
            </div>
        </section>

        <section class="container mx-auto px-6 sm:px-8 lg:px-16 py-8 space-y-8 bg-white dark:bg-neutral-800">
            <h2 class="text-center text-4xl lg:text-5xl font-bold mb-8 dark:text-white">Benefits of our solution</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                @php
                    $benefits = [
                        ['title' => 'Seamless Integration', 'desc' => 'Our solution seamlessly integrates with your existing manufacturing systems, ensuring a smooth transition and minimal disruption to your operations.'],
                        ['title' => 'Real-time Data Insights', 'desc' => 'Our integrated surveillance systems, access control, and alarm systems are not only advanced but also manageable remotely, offering immediate alerts and proactive responses.'],
                        ['title' => 'Predictive Maintenance', 'desc' => 'Identify potential equipment issues before they become major problems, saving you time and money on costly repairs.'],
                    ];
                @endphp

                @foreach($benefits as $index => $benefit)
                <div class="card bg-white dark:bg-neutral-700 w-full h-60 shadow-xl border-2 border-gray-200 dark:border-0 rounded-2xl hover:shadow-2xl dark:shadow-greycode-light-blue transition-all duration-300"
                     data-aos="fade-up" data-aos-duration="500" data-aos-delay="{{ $index * 50 }}">
                    <div class="card-body p-6 flex flex-col justify-between">
                        <div>
                            <h3 class="card-title text-xl font-bold mb-4 text-greycode-dark-blue dark:text-white">{{ $benefit['title'] }}</h3>
                            <p class="text-gray-600 leading-relaxed dark:text-gray-300">{{ $benefit['desc'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>
    <x-articles />
</x-layout>