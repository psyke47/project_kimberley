<x-layout>
    <x-slot name="title">Smoke Detector System Tutorial - Greycode</x-slot>
    <x-slot name="meta_description">Learn how to build a smart smoke detection system using Greycode IoT Dev Board, MQ-2 sensor, and LCD display for mine safety applications.</x-slot>

    {{-- Tutorial Content Section --}}
    <section class="bg-white in-dark:bg-gray-800 min-h-screen py-12">
        <div class="container mx-auto px-6 sm:px-8 lg:px-16 max-w-4xl">
            {{-- Article Header --}}
            <div class="mb-8" data-aos="fade-up" data-aos-duration="600">
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 dark:text-white mb-6">
                    Smoke Detector System Tutorial
                </h2>
                
                {{-- Featured Image --}}
                <div class="mb-6" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
                    <img 
                        src="/images/GasSensor.png" 
                        alt="Smoke Detector System"
                        class="w-full rounded-2xl shadow-lg dark:shadow-gray-700 transition-transform duration-300 hover:scale-105"
                        loading="lazy"
                    >
                </div>

                {{-- Article Meta --}}
                <div class="mb-8" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
                    <h4 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Greycode Team</h4>
                    <h5 class="text-lg text-gray-600 dark:text-gray-300">04, July 2025</h5>
                </div>
            </div>

            {{-- Article Content --}}
            <div class="prose prose-lg max-w-none dark:prose-invert" data-aos="fade-up" data-aos-duration="600">
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-8">
                    In the depths of a mine, safety is everything. Even a small spark can turn into a deadly hazard if smoke goes undetected. With simple tools and a bit of code, we can build a smart smoke detection system that saves lives. In this project, we'll build a smoke detection alarm system using the Greycode IoT Dev Board microcontroller.
                </p>

                {{-- Components Needed --}}
                <h4 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">1. Components Needed</h4>
                <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 space-y-3 mb-8 ml-4">
                    <li>Greycode IoT Dev Board</li>
                    <li>MQ-2 Smoke Sensor</li>
                    <li>I2C 16x2 LCD</li>
                    <li>Active Buzzer</li>
                    <li>LED Red</li>
                    <li>220 Ohms Resister</li>
                    <li>Jumper Wire</li>
                    <li>C-type USB Cable</li>
                    <li>Breadboard (Optional)</li>
                </ul>

                {{-- Circuit Diagram --}}
                <h4 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">2. Circuit Diagram</h4>
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Use the circuit diagram below as a connection reference.</p>
                <div class="mb-8" data-aos="fade-up" data-aos-duration="600">
                    <img 
                        src="/images/SmokeCircuit.jpg" 
                        alt="Smoke Detector Circuit Diagram"
                        class="w-full rounded-lg shadow-md dark:shadow-gray-700"
                        loading="lazy"
                    >
                </div>

                {{-- Wiring Guide --}}
                <h4 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">3. Wiring Guide</h4>

                <h5 class="text-xl font-bold text-gray-900 dark:text-white mb-4">MQ-2 Smoke Sensor:</h5>
                <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 space-y-2 mb-6 ml-4">
                    <li><strong>Analog Out</strong> - GPIO 34 (GREYCODE Board)</li>
                    <li><strong>VCC</strong> - 5V (GREYCODE Board)</li>
                    <li><strong>GND</strong> - GND (GREYCODE Board)</li>
                </ul>

                <h5 class="text-xl font-bold text-gray-900 dark:text-white mb-4">LED:</h5>
                <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 space-y-2 mb-6 ml-4">
                    <li><strong>Anode</strong> - GPIO 25 (GREYCODE Board), Connect via 220 Ohms Resistor</li>
                    <li><strong>Cathode</strong> - GND (GREYCODE Board)</li>
                </ul>

                <h5 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Buzzer</h5>
                <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 space-y-2 mb-6 ml-4">
                    <li><strong>Positive</strong> - GPIO 26 (GREYCODE Board)</li>
                    <li><strong>Negative</strong> - GND (GREYCODE Board)</li>
                </ul>

                <h5 class="text-xl font-bold text-gray-900 dark:text-white mb-4">LCD</h5>
                <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 space-y-2 mb-8 ml-4">
                    <li><strong>SDA</strong> - GPIO 21 (GREYCODE Board)</li>
                    <li><strong>SCL</strong> - GPIO 22 (GREYCODE Board)</li>
                    <li><strong>VCC</strong> - 5V (GREYCODE Board)</li>
                    <li><strong>GND</strong> - GND (GREYCODE Board)</li>
                </ul>

                {{-- Visual Studio Code Setup --}}
                <h4 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">4. Creating a New Project in Visual Studio Code (PlatformIO)</h4>
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-6">
                    To get started with coding your ESP32 smoke detector project, follow these steps in Visual Studio Code using the PlatformIO extension:
                </p>

                <ol class="list-decimal list-inside text-gray-700 dark:text-gray-300 space-y-4 mb-8 ml-4">
                    <li class="leading-relaxed">
                        <strong>Open Visual Studio Code</strong>
                        <ul class="list-disc list-inside ml-6 mt-2">
                            <li>Launch VS Code from your desktop or start menu.</li>
                        </ul>
                    </li>
                    <li class="leading-relaxed">
                        <strong>Open Platform IO Home</strong>
                        <ul class="list-disc list-inside ml-6 mt-2">
                            <li>On the <strong>left sidebar</strong>, click the <strong>PlatformIO alien icon (🐙)</strong> to open the PlatformIO Home menu.</li>
                        </ul>
                    </li>
                    <li class="leading-relaxed">
                        <strong>Click "New Project"</strong>
                        <ul class="list-disc list-inside ml-6 mt-2">
                            <li>You'll see a welcome screen. Click the <strong>"New Project"</strong> button</li>
                        </ul>
                    </li>
                    <li class="leading-relaxed">
                        <strong>Enter Project Details</strong>
                        <ul class="list-disc list-inside ml-6 mt-2">
                            <li><strong>Name:</strong> Type your project name, e.g ESP32 Smoke Detector</li>
                            <li><strong>Board:</strong> In the drop-down list, select your ESP32 board (usually <strong>"ESP32 Dev Module"</strong> under the "espressif32" platform)</li>
                            <li><strong>Framework:</strong> Select <strong>Arduino</strong></li>
                        </ul>
                    </li>
                    <li class="leading-relaxed">
                        <strong>Click "Finish"</strong>
                        <ul class="list-disc list-inside ml-6 mt-2">
                            <li>PlatformIO will now generate a new project folder with all necessary files (like platformio.ini, main.cpp, etc.)</li>
                        </ul>
                    </li>
                    <li class="leading-relaxed">
                        <strong>Waiting for Indexing</strong>
                        <ul class="list-disc list-inside ml-6 mt-2">
                            <li>VS Code might take a few seconds to install board support and index your libraries.</li>
                        </ul>
                    </li>
                </ol>

                <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-8">
                    Once done, you're ready to start coding inside the <code class="bg-gray-100 dark:bg-gray-700 px-2 py-1 rounded">src/main.cpp</code> file.
                </p>

                {{-- Install Libraries --}}
                <h4 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">5. Install Libraries</h4>
                <div class="mb-8" data-aos="fade-up" data-aos-duration="600">
                    <img 
                        src="/images/1.jpg" 
                        alt="Library Installation"
                        class="w-full rounded-lg shadow-md dark:shadow-gray-700"
                        loading="lazy"
                    >
                </div>

                {{-- Find LCD I2C Address --}}
                <h4 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">6. Find LCD I2C Address</h4>
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                    Each I2C device (like the LCD) has a unique hexadecimal address that the ESP32 chip uses to talk to it (like a street address). But not all LCDs have the same address — some use 0x27, others 0x3F, etc.
                </p>
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-6">
                    To avoid communication issues, we scan for the correct address using a simple sketch. Run this sketch first to find your LCD's address.
                </p>

                {{-- I2C Scanner Code --}}
                <div class="bg-gray-900 text-gray-100 p-6 rounded-lg mb-6 overflow-x-auto">
                    <pre><code class="language-cpp text-sm">
#include &lt;Arduino.h&gt;
#include &lt;Wire.h&gt;

void setup() {
  // Initialize I2C communication on SDA = 21, SCL = 22
  Wire.begin(21, 22);

  // Start serial communication at 115200 baud
  Serial.begin(115200);
  Serial.println("I2C Scanner Initialized");
}

void loop() {
  byte error, address;

  Serial.println("Scanning for I2C devices...");

  // Loop through all possible I2C addresses
  for (address = 1; address &lt; 127; address++) {
    Wire.beginTransmission(address);
    error = Wire.endTransmission();

    // If no error, a device responded at this address
    if (error == 0) {
      Serial.print("I2C device found at address 0x");
      Serial.println(address, HEX);
    }
  }

  delay(5000); // Optional: wait a second before next scan
}
                    </code></pre>
                </div>

                <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-4">Look for something like:</p>
                <div class="mb-8" data-aos="fade-up" data-aos-duration="600">
                    <img 
                        src="/images/4.jpg" 
                        alt="I2C Address Output"
                        class="w-full rounded-lg shadow-md dark:shadow-gray-700"
                        loading="lazy"
                    >
                </div>

                {{-- Full Function Code --}}
                <h4 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">7. Full Function Code</h4>
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-4">
                    This section gives you a complete working code that you can upload directly to your ESP32. It reads data from the MQ-2 smoke sensor, checks if the smoke level is high, turns on the LED and buzzer if needed, and displays the sensor value on the LCD.
                </p>
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-6">
                    This code brings all the components (sensor, display, buzzer, LED) together into one functional system.
                </p>

                {{-- Main Smoke Detector Code --}}
                <div class="bg-gray-900 text-gray-100 p-6 rounded-lg mb-8 overflow-x-auto">
                    <pre><code class="language-cpp text-sm">
#include &lt;Arduino.h&gt;
#include &lt;Wire.h&gt;
#include &lt;LiquidCrystal_I2C.h&gt;

// Pin configuration
const int smokeSensorPin = 34;   // Analog input pin for smoke sensor
const int ledPin = 25;           // Digital output pin for LED
const int buzzerPin = 26;        // Digital output pin for buzzer

// Smoke threshold value
const int smokeThreshold = 400;  // Adjust based on your sensor's sensitivity

// Initialize LCD: address 0x27, 16 columns x 2 rows
LiquidCrystal_I2C lcd(0x27, 16, 2);

void setup() {
  // Initialize serial communication (optional for debugging)
  Serial.begin(9600);

  // Set pin modes
  pinMode(ledPin, OUTPUT);
  pinMode(buzzerPin, OUTPUT);

  // Initialize LCD
  lcd.init();
  lcd.backlight();
  lcd.setCursor(0, 0);
  lcd.print("Smoke Monitor");
  delay(2000);
  lcd.clear();
}

void loop() {
  // Read analog value from smoke sensor
  int smokeValue = analogRead(smokeSensorPin);

  // Print smoke value to Serial Monitor (for debugging)
  Serial.print("Smoke Value: ");
  Serial.println(smokeValue);

  // Display smoke value on LCD
  lcd.setCursor(0, 0);
  lcd.print("Smoke: ");
  lcd.print(smokeValue);
  lcd.print("    "); // Clear leftover characters

  // Check if smoke level exceeds threshold
  if (smokeValue &gt; smokeThreshold) {
    digitalWrite(ledPin, HIGH);
    digitalWrite(buzzerPin, HIGH);
    lcd.setCursor(0, 1);
    lcd.print("!! Smoke Detected !!");
  } else {
    digitalWrite(ledPin, LOW);
    digitalWrite(buzzerPin, LOW);
    lcd.setCursor(0, 1);
    lcd.print("Status: Normal     ");
  }

  delay(500); // Delay for stability
}
                    </code></pre>
                </div>

                {{-- Code Explanation --}}
                <h4 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">8. Code Explanation</h4>
                <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 space-y-6 mb-8 ml-4">
                    <li class="leading-relaxed">
                        <strong>PinMode() and digitalWrite()</strong>
                        <ul class="list-disc list-inside ml-6 mt-2 space-y-1">
                            <li>We need to <strong>control hardware components</strong> (like the LED and buzzer) using ESP32.</li>
                            <li>pinMode() sets the pin as an <strong>OUTPUT</strong> so it can send a voltage.</li>
                            <li>digitalWrite() turns them <strong>ON (HIGH)</strong> or <strong>OFF (LOW)</strong> depending on smoke level.</li>
                        </ul>
                    </li>
                    <li class="leading-relaxed">
                        <strong>analogRead(smokeSensorPin)</strong>
                        <ul class="list-disc list-inside ml-6 mt-2 space-y-1">
                            <li>The MQ-2 smoke sensor gives an <strong>analog voltage</strong> based on the amount of smoke it detects</li>
                            <li>analogRead() reads this values (0-4095 on Greycode IoT Dev Board).</li>
                            <li>Higher value = more smoke.</li>
                        </ul>
                    </li>
                    <li class="leading-relaxed">
                        <strong>smokeThreshold</strong>
                        <ul class="list-disc list-inside ml-6 mt-2 space-y-1">
                            <li>We use this value to <strong>decide when to sound the alarm.</strong></li>
                            <li>If the smoke value is greater than 800 → it means the air might be smoky or polluted → trigger alarm.</li>
                            <li>You can adjust this number based on real-life tests (calibration).</li>
                        </ul>
                    </li>
                    <li class="leading-relaxed">
                        <strong>LCD (lcd.print(...))</strong>
                        <ul class="list-disc list-inside ml-6 mt-2 space-y-1">
                            <li>The LCD shows the <strong>real-time smoke value</strong> so the user can see <strong>how much smoke is present.</strong></li>
                            <li>This is helpful even if the alarm isn't triggered — it provides feedback</li>
                            <li>We keep it simple: <strong>only showing the number,</strong> not words like "DANGER".</li>
                        </ul>
                    </li>
                    <li class="leading-relaxed">
                        <strong>delay(500)</strong>
                        <ul class="list-disc list-inside ml-6 mt-2 space-y-1">
                            <li>Waits <strong>half a second</strong> between readings</li>
                            <li>This avoids flickering or spamming the screen too quickly</li>
                        </ul>
                    </li>
                </ul>

                {{-- Upload the Code --}}
                <h4 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">9. Upload the Code</h4>
                <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 space-y-2 mb-8 ml-4">
                    <li>Plug Greycode IoT Dev Board into USB</li>
                    <li>Click <strong>PlatformIO: Upload</strong> (checkmark icon)</li>
                </ul>

                {{-- Calibrating Threshold --}}
                <h4 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">10. Calibrating Threshold</h4>
                <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 space-y-2 mb-8 ml-4">
                    <li>Run the code</li>
                    <li>Note readings in clean air (~300)</li>
                    <li>Expose sensor to smoke (~1200)</li>
                    <li>Set threshold slightly above clean-air value (~800)</li>
                </ul>

                {{-- Troubleshooting LCD --}}
                <h4 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">11. Troubleshooting LCD</h4>
                <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 space-y-2 mb-8 ml-4">
                    <li>Blank display → check I2C address</li>
                    <li>Garbage characters → adjust contrast (potentiometer on I2C backpack)</li>
                    <li>No output → check connections (SDA/SCL)</li>
                </ul>
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