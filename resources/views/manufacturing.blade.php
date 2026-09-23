<x-layout>
    <x-slot name="title">Manufacturing - Greycode</x-slot>
    <x-slot name="meta_description">Explore our innovative manufacturing solutions that leverage cutting-edge technology to enhance efficiency and productivity.</x-slot>

    <div class="bg-white dark:bg-neutral-800 min-h-screen">
        <section class="container mx-auto px-6 sm:px-10 lg:px-16 py-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div class="px-4" data-aos="fade-up" data-aos-duration="500">
                    <h2 class="text-3xl font-bold dark:text-white">Smart <span class="text-greycode-light-blue">Manufacturing</span></h2>
                    <p class="text-left leading-relaxed max-w-6xl mt-4 dark:text-gray-300">
                        At Greycode, we specialize in providing cutting-edge manufacturing solutions that drive efficiency and innovation. Our expertise spans a wide range of industries, including automotive, aerospace, electronics, and consumer goods. We leverage the latest technologies such as IoT, AI, and robotics to optimize production processes, reduce costs, and enhance product quality.
                    </p>
                    <x-button href="/contact" variant="outline" size="lg" class="uppercase mt-6">Get Started</x-button>
                </div>
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                    <img src="{{ asset('images/smart-manufacturing.png') }}" alt="smart manufacturing" class="w-full max-w-md">
                </div>
            </div>
        </section>

        <section class="text-center py-8 sm:px-10 bg-white dark:bg-neutral-800">
            <h2 class="text-3xl font-bold dark:text-white">What is a <span class="text-greycode-light-blue">smart</span> factory?</h2>
            <p class="mt-4 max-w-6xl mx-auto text-gray-700 dark:text-gray-300 leading-relaxed" data-aos="fade-up" data-aos-duration="500">
                A smart factory is a highly digitized and automated manufacturing facility that uses a network of connected machines, devices, and production systems to collect and analyze data in real-time. The data is then used to optimize production processes, improve efficiency, and make better decisions throughout the entire manufacturing chain. This approach represents a significant shift from traditional manufacturing methods, embracing the advancements of Industry 4.0 to create more responsive, efficient, and intelligent production environments.
            </p>
        </section>

        <section class="container mx-auto px-6 sm:px-10 lg:px-16 py-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div class="px-4" data-aos="fade-up" data-aos-duration="500">
                    <p class="text-left leading-relaxed max-w-4xl mt-4 dark:text-gray-300">
                        Experience the transformative power of industrial robotics as an integral part of our comprehensive IoT solution. With our Setup and Programming Service, you can harness the full potential of precision manufacturing to optimize your operations and drive efficiency.
                    </p>
                </div>
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                    <img src="{{ asset('images/smart-factory.jpg') }}" alt="Industrial robotic arm" class="w-full max-w-md dark:bg-white">
                </div>
            </div>
        </section>

        <section class="container mx-auto px-6 sm:px-8 lg:px-16 py-8 space-y-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div data-aos="fade-up" data-aos-duration="500">
                    <img src="{{ asset('images/automation-drive.png') }}" alt="Automation drive system" class="w-full max-w-md dark:bg-white">
                </div>
                <div class="px-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                    <p class="text-left leading-relaxed max-w-4xl mt-4 dark:text-gray-300">
                        Automation: Drive innovation and operational excellence with our IoT solutions. Our cloud automation platform seamlessly integrates with your devices, empowering you with real-time data and control to elevate your business with smarter automation and actionable insights. Connect, control, and optimize with us.
                    </p>
                </div>
            </div>
        </section>

        <section class="container mx-auto px-6 sm:px-8 lg:px-16 py-8 space-y-8 bg-white dark:bg-neutral-800">
            <h2 class="text-center text-4xl lg:text-5xl font-bold mb-8 dark:text-white">
                Benefits of our solution
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                @php
                    $benefits = [
                        ['title' => 'Seamless Integration', 'desc' => 'Our solution seamlessly integrates with your existing manufacturing systems, ensuring a smooth transition and minimal disruption to your operations.'],
                        ['title' => 'Real-time Data Insights', 'desc' => 'Our integrated surveillance systems, access control, and alarm systems are not only advanced but also manageable remotely, offering immediate alerts and proactive responses.'],
                        ['title' => 'Predictive Maintenance', 'desc' => 'Identify potential equipment issues before they become major problems, saving you time and money on costly repairs.'],
                        ['title' => 'Remote Monitoring', 'desc' => 'Monitor your manufacturing processes from anywhere, allowing you to stay in control and make adjustments on the go, ensuring maximum uptime.'],
                        ['title' => 'Scalability', 'desc' => 'Our Smart Manufacturing Solution is designed to grow with your business, so you can easily scale up or down as needed, without expensive overhauls.'],
                        ['title' => 'Automation & Robotics', 'desc' => 'Harness the power of automation and robotics to streamline repetitive tasks, reduce human error, and increase overall productivity.'],
                    ];
                @endphp

                @foreach($benefits as $index => $benefit)
                <div class="card bg-white dark:bg-neutral-700 w-full h-60 shadow-xl border-2 border-gray-200 dark:border-0 rounded-2xl hover:shadow-2xl dark:shadow-greycode-light-blue transition-all duration-300"
                     data-aos="fade-up" data-aos-duration="500" data-aos-delay="{{ $index * 50 }}">
                    <div class="card-body p-6 flex flex-col justify-between">
                        <div>
                            <h3 class="card-title text-xl font-bold mb-4 text-greycode-dark-blue dark:text-white">{{ $benefit['title'] }}</h3>
                            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">{{ $benefit['desc'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>
    <x-articles />
</x-layout>