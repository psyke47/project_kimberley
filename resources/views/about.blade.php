<x-layout>
    <section>
        <div class="container mx-auto px-4 py-16">
            <h1 class="text-4xl font-bold mb-6 text-left text-gray-800"><span class="text-greycode-light-blue">We are </span>building a <br><span class="text-greycode-light-blue">revolutionary</span> new way for <br><span class="text-greycode-light-blue">people</span> to interact with the <br>world around them.</h1>
            <p>Greycode is an Internet of things solution company based in South Africa, composed of a team of designers, engineers and makers. We ae focused on IOT as a service and also developing IoT hardware and software. We leverage our experience in electronics, mechatronics, computer science engineering, sensor technologies, embedded design and systems integration to build innovative connected solutions. we also gather all these new and disruptive trends from sensors, analytics, networks and software to deliver the most-advanced and cost effective solutions for any application.</p>
        </div>
    </section>
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold mb-16 text-left text-gray-800">
            <span class="text-greycode-light-blue">Our </span>Mission
        </h2>
        
        <div class="relative h-[800px] lg:h-[600px]">
            <!-- Mission 1 - Top Left -->
            <div class="mission-item mission-1">
                <div class="mission-content">
                    <div class="text-3xl font-bold text-greycode-light-blue mb-3">1</div>
                    <p class="text-gray-700 text-sm leading-relaxed">To create a more insightful and empowered society where technology enables people to build better communities. Connecting people seamlessly to a smarter, safer and more fulfilling world.</p>
                </div>
            </div>
            
            <!-- Mission 2 -->
            <div class="mission-item mission-2">
                <div class="mission-content">
                    <div class="text-3xl font-bold text-greycode-light-blue mb-3">2</div>
                    <p class="text-gray-700 text-sm leading-relaxed">To be the single point of connectivity for businesses and people, helping them to resolve everyday problems or improve processes to create value and drive growth. We are building a revolutionary new way for people to interact with the world around them.</p>
                </div>
            </div>
            
            <!-- Mission 3 -->
            <div class="mission-item mission-3">
                <div class="mission-content">
                    <div class="text-3xl font-bold text-greycode-light-blue mb-3">3</div>
                    <p class="text-gray-700 text-sm leading-relaxed">To create a world-class IoT platform to connect everything, everyone and our experiences. To impact the world by improving the connection between people and their environment.</p>
                </div>
            </div>
            
            <!-- Mission 4 -->
            <div class="mission-item mission-4">
                <div class="mission-content">
                    <div class="text-3xl font-bold text-greycode-light-blue mb-3">4</div>
                    <p class="text-gray-700 text-sm leading-relaxed">To build the future infrastructure and enable seamless interoperability between machines, sensors, applications and data by creating a global M2M (machine-to-machine) machine identity registry. Imagine a world where everyone and everything is connected.</p>
                </div>
            </div>
            
            <!-- Mission 5 -->
            <div class="mission-item mission-5">
                <div class="mission-content">
                    <div class="text-3xl font-bold text-greycode-light-blue mb-3">5</div>
                    <p class="text-gray-700 text-sm leading-relaxed">To become the underlying protocol for the Internet of Things (IoT) and thus a key technology for Smart Cities and the Economy of Things. The amount of information being generated and captured today is unprecedented. Our vision is to not only capture all of your data, but also be able to make sense of it in real-time and action upon it.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
:root {
    --color-greycode-light-blue: #3B82F6;
    --color-greycode-gray: #6B7280;
}

.mission-item {
    position: absolute;
    width: 280px;
    height: 280px;
    top: 50%;
    left: 50%;
    background: linear-gradient(to right, var(--color-greycode-light-blue), var(--color-greycode-gray), black);
    border-radius: 50%;
    padding: 2px;
    transform: translate(-50%, -50%);
    transition: all 0.4s ease;
    cursor: pointer;
    z-index: 1;
}

/* Position missions in a circle */
.mission-1 { transform: translate(-50%, -50%) rotate(-90deg) translate(220px) rotate(90deg); }
.mission-2 { transform: translate(-50%, -50%) rotate(-18deg) translate(220px) rotate(18deg); }
.mission-3 { transform: translate(-50%, -50%) rotate(54deg) translate(220px) rotate(-54deg); }
.mission-4 { transform: translate(-50%, -50%) rotate(126deg) translate(220px) rotate(-126deg); }
.mission-5 { transform: translate(-50%, -50%) rotate(198deg) translate(220px) rotate(-198deg); }

.mission-content {
    width: 100%;
    height: 100%;
    background: white;
    border-radius: 50%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 2rem;
    text-align: center;
    transition: all 0.4s ease;
    overflow: hidden;
    box-sizing: border-box;
}

/* Hover effects - transform to rectangle */
.mission-item:hover {
    border-radius: 20px;
    width: 320px;
    height: 320px;
    z-index: 10;
    transform: translate(-50%, -50%) scale(1.1);
}

.mission-item:hover .mission-content {
    border-radius: 18px;
    padding: 1.5rem;
    text-align: left;
    justify-content: flex-start;
    overflow-y: auto;
}

/* Custom scrollbar */
.mission-item:hover .mission-content::-webkit-scrollbar {
    width: 4px;
}

.mission-item:hover .mission-content::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 10px;
}

.mission-item:hover .mission-content::-webkit-scrollbar-thumb {
    background: var(--color-greycode-light-blue);
    border-radius: 10px;
}

/* Ensure text is properly visible */
.mission-item:hover .mission-content p {
    margin-top: 0.5rem;
}
</style>
</x-layout>