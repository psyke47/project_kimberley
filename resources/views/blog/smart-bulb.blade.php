<x-layout>
    <x-slot name="title">Smart Bulb Tutorial - Greycode</x-slot>
    <x-slot name="meta_description">Learn how to control AC bulbs using Greycode IoT Dev Board and Blynk app with this step-by-step home automation tutorial.</x-slot>

    {{-- Tutorial Content Section --}}
    <section class="bg-white in-dark:bg-gray-800 min-h-screen py-12">
        <div class="container mx-auto px-6 sm:px-8 lg:px-16 max-w-4xl">
            {{-- Article Header --}}
            <div class="mb-8" data-aos="fade-up" data-aos-duration="600">
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 dark:text-white mb-6">
                    Smart Bulb
                </h2>
                
                {{-- Featured Image --}}
                <div class="mb-6" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
                    <img 
                        src="/images/SMART-BULB.png" 
                        alt="Smart Bulb Project"
                        class="w-full rounded-2xl shadow-lg dark:shadow-gray-700 transition-transform duration-300 hover:scale-105"
                        loading="lazy"
                    >
                </div>

                {{-- Article Meta --}}
                <div class="mb-8" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
                    <h4 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Greycode Team</h4>
                    <h5 class="text-lg text-gray-600 dark:text-gray-300">02, June 2025</h5>
                </div>
            </div>

            {{-- Article Content --}}
            <div class="prose prose-lg max-w-none dark:prose-invert" data-aos="fade-up" data-aos-duration="600">
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-8">
                    In this tutorial, you will learn how to control a standard AC bulb using the Greycode Board and a relay module. This is a foundational project in home automation, where microcontrollers like the Greycode Board can remotely control high-voltage appliances (like lights, fans, or sockets) using relays.
                </p>

                {{-- Components Needed --}}
                <h5 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Components Needed</h5>
                <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 space-y-2 mb-8 ml-4">
                    <li>Greycode IoT Dev Board</li>
                    <li>Single-channel Relay Module</li>
                    <li>AC Bulb + Holder</li>
                    <li>230V AC Power Source</li>
                    <li>Jumper Wires</li>
                    <li>C-type USB Cable</li>
                    <li>Breadboard (Optional)</li>
                </ul>

                {{-- Additional Requirements --}}
                <h5 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Additional Requirements</h5>
                <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 space-y-2 mb-8 ml-4">
                    <li>BLYNK IoT Application</li>
                    <li>Internet Connection</li>
                </ul>

                {{-- Part 1: Physical Connection --}}
                <h4 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Part 1: Physical Connection</h4>

                <h5 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Relay Module Pins:</h5>
                <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 space-y-2 mb-4 ml-4">
                    <li><strong>IN</strong> - GPIO 26 (GREYCODE Board)</li>
                    <li><strong>VCC</strong> - 5V (GREYCODE Board)</li>
                    <li><strong>GND</strong> - GND (GREYCODE Board)</li>
                    <li><strong>COM</strong> - Live Wire From AC</li>
                    <li><strong>NO</strong> Live Wire To Bulb</li>
                </ul>
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-6">
                    Neutral wire goes directly to the bulb's other terminal
                </p>

                {{-- Circuit Diagram --}}
                <h5 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Circuit Diagram</h5>
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Use the circuit diagram below as a connection reference.</p>
                <div class="mb-8" data-aos="fade-up" data-aos-duration="600">
                    <img 
                        src="/images/bulbcircuit.png" 
                        alt="Smart Bulb Circuit Diagram"
                        class="w-full rounded-lg shadow-md dark:shadow-gray-700"
                        loading="lazy"
                    >
                </div>

                {{-- Part 2: Blynk Setup --}}
                <h4 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Part 2: Setup Blynk App</h4>

                {{-- Step 1: Blynk Setup --}}
                <h5 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Step 1: Blynk Setup</h5>
                <ol class="list-decimal list-inside text-gray-700 dark:text-gray-300 space-y-4 mb-8 ml-4">
                    <li class="leading-relaxed">
                        Install the Blynk IoT app from the Play Store or App Store.
                    </li>
                    <li class="leading-relaxed">
                        Sign up and visit <a href="https://blynk.cloud" target="_blank" class="text-blue-600 dark:text-blue-400 hover:underline">https://blynk.cloud</a>.
                    </li>
                    <li class="leading-relaxed">
                        Create a new template:
                        <ul class="list-disc list-inside ml-6 mt-2 space-y-1">
                            <li><strong>Name:</strong> LED Control</li>
                            <li><strong>Hardware:</strong> Greycode Dev Board</li>
                            <li><strong>Connection:</strong> Wi-Fi</li>
                        </ul>
                    </li>
                    
                    {{-- Blynk Template Image --}}
                    <div class="my-4" data-aos="fade-up" data-aos-duration="600">
                        <img 
                            src="/images/blynktemplate.png" 
                            alt="Blynk Template Setup"
                            class="w-full rounded-lg shadow-md dark:shadow-gray-700"
                            loading="lazy"
                        >
                    </div>

                    <li class="leading-relaxed">
                        Create a Datastream:
                        <ul class="list-disc list-inside ml-6 mt-2 space-y-1">
                            <li><strong>Type:</strong> Virtual Pin (V0)</li>
                            <li><strong>Data Type:</strong> Integer</li>
                            <li><strong>Min:</strong> 0</li>
                            <li><strong>Max:</strong> 1</li>
                        </ul>
                    </li>

                    {{-- Datastream Images --}}
                    <div class="my-4 space-y-4" data-aos="fade-up" data-aos-duration="600">
                        <img 
                            src="/images/createdatastream.png" 
                            alt="Create Datastream"
                            class="w-full rounded-lg shadow-md dark:shadow-gray-700"
                            loading="lazy"
                        >
                        <img 
                            src="/images/virtualpin.png" 
                            alt="Virtual Pin Setup"
                            class="w-full rounded-lg shadow-md dark:shadow-gray-700"
                            loading="lazy"
                        >
                    </div>

                    <li class="leading-relaxed">Save your template configuration.</li>
                    <li class="leading-relaxed">
                        Copy the following information:
                        <ul class="list-disc list-inside ml-6 mt-2 space-y-1">
                            <li><strong>Template ID</strong></li>
                            <li><strong>Device Name</strong></li>
                            <li><strong>Auth Token</strong></li>
                        </ul>
                    </li>
                </ol>

                {{-- Step 2: Code Setup --}}
                <h5 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Step 2: Code Setup (Visual Studio / PlatformIO)</h5>
                <ol class="list-decimal list-inside text-gray-700 dark:text-gray-300 space-y-4 mb-8 ml-4">
                    <li class="leading-relaxed">
                        Create a new project:
                        <ul class="list-disc list-inside ml-6 mt-2 space-y-1">
                            <li><strong>Name:</strong> BlynkLED</li>
                            <li><strong>Board:</strong> ESP32 Dev Module</li>
                            <li><strong>Framework:</strong> Arduino</li>
                        </ul>
                    </li>
                    <li class="leading-relaxed">
                        Install the Blynk library (via Library Manager).
                    </li>

                    {{-- Library Image --}}
                    <div class="my-4" data-aos="fade-up" data-aos-duration="600">
                        <img 
                            src="/images/library.png" 
                            alt="Blynk Library Installation"
                            class="w-full rounded-lg shadow-md dark:shadow-gray-700"
                            loading="lazy"
                        >
                    </div>
                </ol>

                {{-- Main Code --}}
                <h5 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Main Code</h5>
                <div class="bg-gray-900 text-gray-100 p-6 rounded-lg mb-6 overflow-x-auto">
                    <pre><code class="language-cpp text-sm">
#define BLYNK_TEMPLATE_ID "TMPL2RepqsLwr"
#define BLYNK_TEMPLATE_NAME "Blink LED/Bulb"
#define BLYNK_AUTH_TOKEN "6HlsOi4LFaPrH4vFrtVlsFy0HNMfcbXG"

#include &lt;WiFi.h&gt;
#include &lt;BlynkSimpleEsp32.h&gt;

#define RELAY_PIN 2

char auth[] = BLYNK_AUTH_TOKEN;
char ssid[] = "Peace C33";
char pass[] = "12345678";

BLYNK_WRITE(V0) {
  int state = param.asInt();
  digitalWrite(RELAY_PIN, state);
  Serial.println(state ? "Relay ON" : "Relay OFF");
}

void setup() {
  Serial.begin(115200);
  pinMode(RELAY_PIN, OUTPUT);
  digitalWrite(RELAY_PIN, LOW); // Relay is OFF by default
  Blynk.begin(auth, ssid, pass);
}

void loop() {
  Blynk.run();
}
                    </code></pre>
                </div>

                <div class="bg-yellow-50 dark:bg-yellow-900/20 border-l-4 border-yellow-400 p-4 mb-8">
                    <p class="text-yellow-700 dark:text-yellow-300">
                        <strong>Important:</strong> Make sure to replace the template ID, token, and Wi-Fi credentials with your own from Blynk.
                    </p>
                </div>

                {{-- Step 3: Upload and Monitor --}}
                <h5 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Step 3: Upload and Monitor</h5>
                <ol class="list-decimal list-inside text-gray-700 dark:text-gray-300 space-y-2 mb-8 ml-4">
                    <li>Connect your Greycode board via USB-C.</li>
                    <li>Click Build (✓) then Upload (→).</li>
                    <li>Open the Serial Monitor to confirm connection logs and relay status.</li>
                </ol>

                {{-- WiFi Connection Image --}}
                {{-- <div class="mb-8" data-aos="fade-up" data-aos-duration="600">
                    <img 
                        src="/images/connectingwifi.png" 
                        alt="WiFi Connection Status"
                        class="w-full rounded-lg shadow-md dark:shadow-gray-700"
                        loading="lazy"
                    >
                </div> --}}

                {{-- Step 4: Mobile App Setup --}}
                <h5 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Step 4: Mobile App Setup</h5>
                <ol class="list-decimal list-inside text-gray-700 dark:text-gray-300 space-y-4 mb-8 ml-4">
                    <li class="leading-relaxed">Create a device in Blynk using your template.</li>

                    {{-- Device Setup Images --}}
                    <div class="my-4 space-y-4" data-aos="fade-up" data-aos-duration="600">
                        <img 
                            src="/images/setupdevice.png" 
                            alt="Device Setup"
                            class="w-full rounded-lg shadow-md dark:shadow-gray-700"
                            loading="lazy"
                        >
                        <img 
                            src="/images/newdevice.png" 
                            alt="New Device Creation"
                            class="w-full rounded-lg shadow-md dark:shadow-gray-700"
                            loading="lazy"
                        >
                    </div>

                    <li class="leading-relaxed">Add a Button widget and link it to <strong>V0</strong>.</li>
                    <li class="leading-relaxed">Set the mode to <strong>Switch</strong>.</li>
                </ol>

                {{-- Widget Setup Images --}}
                <div class="mb-8 space-y-4" data-aos="fade-up" data-aos-duration="600">
                    <img 
                        src="/images/widgetsettings.png" 
                        alt="Widget Settings"
                        class="w-full rounded-lg shadow-md dark:shadow-gray-700"
                        loading="lazy"
                    >
                    <img 
                        src="/images/minmax.png" 
                        alt="Min Max Settings"
                        class="w-full rounded-lg shadow-md dark:shadow-gray-700"
                        loading="lazy"
                    >
                </div>

                {{-- Manual Testing --}}
                <h5 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Manual Testing</h5>
                <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 space-y-2 mb-8 ml-4">
                    <li>You can modify the code to blink the bulb ON for 3 seconds, OFF for 3 seconds as a test.</li>
                    <li>Using the Blynk app, toggle the button to turn the bulb ON/OFF instantly.</li>
                </ul>

                {{-- Conclusion --}}
                <h5 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Conclusion</h5>
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-6">
                    You've successfully created a smart bulb setup using the Greycode IoT Board and Blynk. With this knowledge, you can control any AC appliance, schedule routines, or even integrate voice control.
                </p>

                <div class="bg-blue-50 dark:bg-blue-900/20 border-l-4 border-blue-400 p-4 mb-8">
                    <p class="text-blue-700 dark:text-blue-300 font-semibold">
                        <strong>Next Challenge:</strong> Expand the project to control four bulbs independently!
                    </p>
                </div>

                {{-- Troubleshooting Tips --}}
                <h5 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Troubleshooting Tips</h5>
                <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 space-y-2 mb-8 ml-4">
                    <li>
                        <strong>No Wi-Fi connection?</strong> Check the code to see if Wi-Fi credentials are correct and ensure that your Wi-Fi is stable.
                    </li>
                </ul>

                {{-- Call to Action --}}
                <h5 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Start Your Own Project Now</h5>
                <div class="bg-green-50 dark:bg-green-900/20 rounded-lg p-6 mb-8">
                    <ul class="list-disc list-inside text-gray-700 dark:text-gray-300">
                        <li class="mb-2">
                            Click <a href="https://linktr.ee/greycodeskillshare" target="_blank" class="text-green-600 dark:text-green-400 font-semibold hover:underline">Here</a> to watch the tutorial on Our Social Media Pages.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Comment Section --}}
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