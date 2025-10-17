<x-layout>
    <x-slot name="title">Success Stories - Greycode</x-slot>
    <x-slot name="meta_description">Read success stories from individuals who have benefited from our programs and services.</x-slot>

    {{-- White background wrapper --}}
    <div class="bg-white min-h-screen">
        <section class="container mx-auto px-6 sm:px-8 lg:px-16 py-8">
            <div>
                <h2 class="text-3xl font-bold"><span class="text-greycode-light-blue">Success </span>Stories</h2>
            </div>
            <p class="text-left leading-relaxed max-w-3xl mt-4">
                We've helped some incredible clients along their journeys to success. Check out our case studies to see some examples of how we've helped them get there—and maybe get some ideas for your own project!
            </p>
            <button class="gradient-outline-button uppercase mt-6">
                VIEW MORE
            </button>
        </section>

        <section class="container mx-auto px-6 sm:px-8 lg:px-16 py-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div>
                    <img src="/images/Screenshot 2025-09-29 151805.png" alt="asset tracking" class="w-full max-w-lg rounded-2xl shadow-lg">
                </div>
                <div class="px-4">
                    <h3 class="text-3xl font-semibold mb-4">Asset <span class="text-greycode-light-blue">Tracking</span></h3>
                    <p class="mb-4 text-gray-700 leading-relaxed">Our IOT (Internet of Things) solution offers end-to-end asset tracking. Our solution enables our customers to have a complete and accurate picture of the location and condition of their valuable assets worldwide and in real time.</p>
                </div>
            </div>
        </section>

        <section class="container mx-auto px-6 sm:px-8 lg:px-16 py-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div class="order-2 lg:order-1">
                    <div class="mb-4">
                        <h2 class="text-3xl font-bold">Smart <span class="text-greycode-light-blue">Farm</span></h2>
                    </div>
                    <p class="text-gray-700 leading-relaxed">Rather than relying on old-fashioned and imprecise tools like their own eyes and noses, farmers have begun using IoT sensors to monitor everything from soil conditions to humidity levels. They're also using IoT devices to track livestock and even monitor their own bodies and health.</p>
                </div>
                <div class="order-1 lg:order-2">
                    <img src="/images/Screenshot 2025-09-29 151752.png" alt="smart farm" class="w-full max-w-lg rounded-2xl shadow-lg">
                </div>
            </div>
        </section>
    </div>
</x-layout>