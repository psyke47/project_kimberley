<x-layout>
    <x-slot name="title">Bluetooth Speaker Tutorial - Greycode</x-slot>
    <x-slot name="meta_description">Learn how to build a custom Bluetooth speaker using Greycode IoT Dev Board, amplifier module, and 3D printed enclosure.</x-slot>

    {{-- Tutorial Content Section --}}
    <section class="bg-white in-dark:bg-gray-800 min-h-screen py-12">
        <div class="container mx-auto px-6 sm:px-8 lg:px-16 max-w-4xl">
            {{-- Article Header --}}
            <div class="mb-8" data-aos="fade-up" data-aos-duration="600">
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 dark:text-white mb-6">
                    Bluetooth Speaker
                </h2>
                
                {{-- Featured Image --}}
                <div class="mb-6" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
                    <img 
                        src="/images/IMG_0132.png" 
                        alt="Bluetooth Speaker Project"
                        class="w-full rounded-2xl shadow-lg dark:shadow-gray-700 transition-transform duration-300 hover:scale-105"
                        loading="lazy"
                    >
                </div>

                {{-- Article Meta --}}
                <div class="mb-8" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
                    <h4 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Prudy N Singo</h4>
                    <h5 class="text-lg text-gray-600 dark:text-gray-300">17, April 2025</h5>
                </div>
            </div>

            {{-- Article Content --}}
            <div class="prose prose-lg max-w-none dark:prose-invert" data-aos="fade-up" data-aos-duration="600">
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-8">
                    In this tutorial, you'll learn how to build a fully functional Bluetooth speaker by integrating the Greycode IoT Dev Board as the Bluetooth receiver, an amplifier module to boost the audio signal, and a speaker to deliver clear sound—all encased in a custom cover for a polished and portable design.
                </p>

                {{-- Components Needed --}}
                <h5 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Components Needed</h5>
                <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 space-y-2 mb-8 ml-4">
                    <li>Greycode IoT Dev Board</li>
                    <li>Amplifier Module (PAM8403)</li>
                    <li>Potentiometer (MAX 98357A)</li>
                    <li>2X Speaker (3W–4 ohms)</li>
                    <li>Jumper Wires</li>
                    <li>C-type USB Cable</li>
                </ul>

                {{-- Step 1: Circuit Diagram --}}
                <h5 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Step 1: Circuit Diagram</h5>
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Use the circuit diagram below as a connection reference.</p>
                <div class="mb-8" data-aos="fade-up" data-aos-duration="600">
                    <img 
                        src="/images/circuit.jpg" 
                        alt="Bluetooth Speaker Circuit Diagram"
                        class="w-full rounded-lg shadow-md dark:shadow-gray-700"
                        loading="lazy"
                    >
                </div>

                {{-- Step 2: Assemble Components --}}
                <h5 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Step 2: Assemble the Components</h5>
                <ol class="list-decimal list-inside text-gray-700 dark:text-gray-300 space-y-3 mb-4 ml-4">
                    <li>Mount the Greycode IoT Dev Board at the back of your 3D printed speaker cover.</li>
                    <li>Place the amplifier module and potentiometer inside the speaker cover.</li>
                    <li>Attach wires to the speaker terminals.</li>
                    <li>Use jumper wires to connect all components according to the circuit diagram.</li>
                </ol>
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-8">
                    Ensure connections are secure. Avoid soldering for testing; solder permanently later.
                </p>

                {{-- Step 3: Code --}}
                <h5 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Step 3: Code for Bluetooth Speaker</h5>
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Install the Visual Studio Code IDE and load the Bluetooth speaker code into the Greycode IoT Dev Board.</p>
                <div class="mb-8" data-aos="fade-up" data-aos-duration="600">
                    <img 
                        src="/images/code.jpg" 
                        alt="Bluetooth Speaker Code"
                        class="w-full rounded-lg shadow-md dark:shadow-gray-700"
                        loading="lazy"
                    >
                </div>

                {{-- Step 4: Upload Code --}}
                <h5 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Step 4: Upload the Code</h5>
                <ol class="list-decimal list-inside text-gray-700 dark:text-gray-300 space-y-2 mb-8 ml-4">
                    <li>Select the Espressif ESP32 Dev Module for the chip in PlatformIO (VS Code).</li>
                    <li>Connect the Greycode IoT Dev Board via USB.</li>
                    <li>Select the correct board and port, then upload the code.</li>
                </ol>

                {{-- Step 5: Test Speaker --}}
                <h5 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Step 5: Test the Speaker</h5>
                <ol class="list-decimal list-inside text-gray-700 dark:text-gray-300 space-y-2 mb-8 ml-4">
                    <li>Turn on the Greycode IoT Dev Board and amplifier module.</li>
                    <li>Pair your phone with "Greycode".</li>
                    <li>Play music from your device to test sound output.</li>
                </ol>

                {{-- Step 6: Assemble Cover --}}
                <h5 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Step 6: Assemble the Cover</h5>
                <ol class="list-decimal list-inside text-gray-700 dark:text-gray-300 space-y-6 mb-8 ml-4">
                    <li class="leading-relaxed">
                        Place the amplifier inside the speaker cover.
                        <div class="mt-4" data-aos="fade-up" data-aos-duration="600">
                            <img 
                                src="/images/empty.jpg" 
                                alt="Empty Speaker Enclosure"
                                class="w-full rounded-lg shadow-md dark:shadow-gray-700"
                                loading="lazy"
                            >
                        </div>
                    </li>
                    <li class="leading-relaxed">
                        Mount the speakers and potentiometer on the front cover, then attach it to the main cover.
                        <div class="mt-4" data-aos="fade-up" data-aos-duration="600">
                            <img 
                                src="/images/cover.jpg" 
                                alt="Speaker Cover Assembly"
                                class="w-full rounded-lg shadow-md dark:shadow-gray-700"
                                loading="lazy"
                            >
                        </div>
                    </li>
                    <li class="leading-relaxed">
                        Secure all components and attach the speaker legs to their designated spots.
                        <div class="mt-4" data-aos="fade-up" data-aos-duration="600">
                            <img 
                                src="/images/built.jpg" 
                                alt="Completed Speaker Build"
                                class="w-full rounded-lg shadow-md dark:shadow-gray-700"
                                loading="lazy"
                            >
                        </div>
                    </li>
                </ol>

                {{-- Troubleshooting Tips --}}
                <h5 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Troubleshooting Tips</h5>
                <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 space-y-2 mb-8 ml-4">
                    <li>
                        <strong>No Bluetooth connection?</strong> Check the code and ensure Bluetooth is enabled.
                    </li>
                    <li>
                        <strong>No sound?</strong> Verify connections to the amplifier and speaker.
                    </li>
                </ul>

                {{-- Call to Action --}}
                <h5 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Start Your Own Project Now</h5>
                <div class="bg-blue-50 dark:bg-blue-900/20 rounded-lg p-6 mb-8">
                    <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 space-y-3 mb-4">
                        <li>
                            Click <a href="https://youtu.be/r1sUMzkzXuY?si=vFJmLg1n4l4I3pI1" target="_blank" class="text-blue-600 dark:text-blue-400 font-semibold hover:underline">Here</a> to watch the full tutorial on YouTube.
                        </li>
                        <li>
                            For the 3D Files, click the <strong>Download</strong> button below:
                        </li>
                    </ul>
                    
                    {{-- Download Section --}}
                    <div class="mt-4" data-aos="fade-up" data-aos-duration="600">
                        <img 
                            src="/images/20250422_102005.jpg" 
                            alt="3D Files Preview"
                            class="w-full rounded-lg shadow-md dark:shadow-gray-700 mb-4"
                            loading="lazy"
                        >
                        <a href="/components/SpeakerCover.zip" download 
                           class="inline-flex items-center px-6 py-3 bg-greycode-light-blue text-white font-semibold rounded-lg hover:bg-greycode-dark-blue transition-colors duration-200 shadow-md hover:shadow-lg">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            Download 3D Files
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if(isset($post))
        <x-comment-section :model="$post" :comments="$comments" />
    @elseif(isset($commentableId) && isset($commentableType))
        <x-comment-section 
            :commentableId="$commentableId" 
            :commentableType="$commentableType" 
            :comments="$comments" 
        />
    @else
        {{-- Fallback for static pages --}}
        <x-comment-section 
            commentableId="1" 
            commentableType="App\Models\Page" 
            :comments="$comments ?? collect()" 
        />
    @endif
</x-layout>