<x-layout>
    <x-slot name="title">Manufacturing - Greycode</x-slot>
    <x-slot name="meta_description">Explore our innovative manufacturing solutions that leverage cutting-edge technology to enhance efficiency and productivity.</x-slot>

    {{-- White background wrapper ---}}
    <div class="bg-white min-h-screen">
        {{-- <div class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-25"
             style="background-image: url('{{ asset('images/Untitled-1_0004_Layer-4.png') }}');">
        </div> --}}
        <section class="container mx-auto px-6 sm:px-8 lg:px-16 py-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div class="px-4">
                    <div>
                        <h2 class="text-3xl font-bold">Smart <span class="text-greycode-light-blue">Manufacturing </span></h2>
                    </div>
                    <p class="text-left leading-relaxed max-w-6xl mt-4">
                    At Greycode, we specialize in providing cutting-edge manufacturing solutions that drive efficiency and innovation. Our expertise spans a wide range of industries, including automotive, aerospace, electronics, and consumer goods. We leverage the latest technologies such as IoT, AI, and robotics to optimize production processes, reduce costs, and enhance product quality.
                    </p>
                    <button class="gradient-outline-button uppercase mt-6">
                    VIEW MORE
                    </button>
        
                </div>
                <div>
                    <img src="{{ asset('images/65ef78725c29b6479e3ff090_65bbbb29126775e630778387_659ecd54c756ab40f2d3471e_V8  engiene  design .png')}}" alt="smart manufacturing" class="w-full max-w-md">
                </div>
            </div>
        </section>
        <section class="text-center py-8">
            <h2 class="text-3xl font-bold">What is a <span class="text-greycode-light-blue">smart</span> factory?</h2>
            <p class="mt-4 max-w-6xl mx-auto text-gray-700 leading-relaxed">
                A smart factory is a highly digitized and automated manufacturing facility that uses a network of connected machines, devices, and production systems to collect and analyze data in real-time. The data is then used to optimize production processes, improve efficiency, and make better decisions throughout the entire manufacturing chain.This approach represents a significant shift from traditional manufacturing methods, embracing the advancements of Industry 4.0 to create more responsive, efficient, and intelligent production environments.            </p>
        </section>
        <section class="container mx-auto px-6 sm:px-8 lg:px-16 py-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div class="px-4">
                    <p class="ext-left leading-relaxed max-w-4xl mt-4">Experience the transformative power of industrial robotics as an integral part of our comprehensive IoT solution. With our Setup and Programming Service, you can harness the full potential of precision manufacturing to optimize your operations and drive efficiency.</p>
                </div>
                <div>
                    <img src="{{ asset('images/65ef7d22a71338a90fc18256_659ee4e10508a048514e887f_industrial robort -p-500 1.png')}}" alt="Industrial robotic arm in a modern manufacturing facility, positioned against a clean, technological background. The sleek, articulated arm represents advanced automation capabilities in smart manufacturing" class="w-full max-w-md">
                </div>
            </div>
        </section>
        <section class="container mx-auto px-6 sm:px-8 lg:px-16 py-8 space-y-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div clas="px-4">
                    <img src="{{ asset('images/65f021bb88b9105a4ceb964a_6599da1f1df5a8f2567872aa_smart_home-removebg-preview 1.png')}}" alt="">
                </div>
                <div class="px-4">
                    <p class="text-left leading-relaxed max-w-4xl mt-4">
                        Automation: Drive innovation and operational excellence with our IoT solutions. Our cloud automation platform seamlessly integrates with your devices, empowering you with real-time data and control to elevate your business with smarter automation and actionable insights. Connect, control, and optimize with us.
                    </p>
                </div>
            </div>
        </section>
        <section class="container mx-auto px-6 sm:px-8 lg:px-16 py-8 space-y-8">
    <h2 class="text-center text-4xl lg:text-5xl font-bold mb-8">Benefits of our solution</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
        <!-- Card 1 -->
        <div class="card bg-white w-full h-80 shadow-xl border-2 border-gray-200 rounded-2xl hover:shadow-2xl transition-all duration-300">
            <div class="card-body p-6 flex flex-col justify-between">
                <div>
                    <h3 class="card-title text-xl font-bold mb-4 text-greycode-dark-blue">Seamless Integration</h3>
                    <p class="text-gray-600 leading-relaxed">Our solution seamlessly integrates with your existing manufacturing systems, ensuring a smooth transition and minimal disruption to your operations.</p>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="card bg-white w-full h-80 shadow-xl border-2 border-gray-200 rounded-2xl hover:shadow-2xl transition-all duration-300">
            <div class="card-body p-6 flex flex-col justify-between">
                <div>
                    <h3 class="card-title text-xl font-bold mb-4 text-greycode-dark-blue">Real-time Data Insights</h3>
                    <p class="text-gray-600 leading-relaxed">Our integrated surveillance systems, access control, and alarm systems are not only advanced but also manageable remotely, offering immediate alerts and proactive responses.</p>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="card bg-white w-full h-80 shadow-xl border-2 border-gray-200 rounded-2xl hover:shadow-2xl transition-all duration-300">
            <div class="card-body p-6 flex flex-col justify-between">
                <div>
                    <h3 class="card-title text-xl font-bold mb-4 text-greycode-dark-blue">Predictive Maintenance</h3>
                    <p class="text-gray-600 leading-relaxed">Identify potential equipment issues before they become major problems, saving you time and money on costly repairs.</p>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="card bg-white w-full h-80 shadow-xl border-2 border-gray-200 rounded-2xl hover:shadow-2xl transition-all duration-300">
            <div class="card-body p-6 flex flex-col justify-between">
                <div>
                    <h3 class="card-title text-xl font-bold mb-4 text-greycode-dark-blue">Remote Monitoring</h3>
                    <p class="text-gray-600 leading-relaxed">Monitor your manufacturing processes from anywhere, allowing you to stay in control and make adjustments on the go, ensuring maximum uptime.</p>
                </div>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="card bg-white w-full h-80 shadow-xl border-2 border-gray-200 rounded-2xl hover:shadow-2xl transition-all duration-300">
            <div class="card-body p-6 flex flex-col justify-between">
                <div>
                    <h3 class="card-title text-xl font-bold mb-4 text-greycode-dark-blue">Scalability</h3>
                    <p class="text-gray-600 leading-relaxed">Our Smart Manufacturing Solution is designed to grow with your business, so you can easily scale up or down as needed, without expensive overhauls.</p>
                </div>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="card bg-white w-full h-80 shadow-xl border-2 border-gray-200 rounded-2xl hover:shadow-2xl transition-all duration-300">
            <div class="card-body p-6 flex flex-col justify-between">
                <div>
                    <h3 class="card-title text-xl font-bold mb-4 text-greycode-dark-blue">Automation & Robotics</h3>
                    <p class="text-gray-600 leading-relaxed">Harness the power of automation and robotics to streamline repetitive tasks, reduce human error, and increase overall productivity.</p>
                </div>
            </div>
        </div>
    </div>
</section>
    </div>
</x-layout>