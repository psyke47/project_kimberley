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
            <div class="mission-circle mission-1">
                <div class="circle-content">
                    <div class="text-3xl font-bold text-greycode-light-blue mb-3">1</div>
                    <p class="text-gray-700 text-xs leading-relaxed truncate-text">To create a more insightful and empowered society...</p>
                    <p class="text-gray-700 text-sm leading-relaxed full-text">To create a more insightful and empowered society where technology enables people to build better communities. Connecting people seamlessly to a smarter, safer and more fulfilling world.</p>
                </div>
            </div>
            
            <!-- Mission 2 -->
            <div class="mission-circle mission-2">
                <div class="circle-content">
                    <div class="text-3xl font-bold text-greycode-light-blue mb-3">2</div>
                    <p class="text-gray-700 text-xs leading-relaxed truncate-text">To be the single point of connectivity...</p>
                    <p class="text-gray-700 text-sm leading-relaxed full-text">To be the single point of connectivity for businesses and people, helping them to resolve everyday problems or improve processes to create value and drive growth. We are building a revolutionary new way for people to interact with the world around them.</p>
                </div>
            </div>
            
            <!-- Mission 3 -->
            <div class="mission-circle mission-3">
                <div class="circle-content">
                    <div class="text-3xl font-bold text-greycode-light-blue mb-3">3</div>
                    <p class="text-gray-700 text-xs leading-relaxed truncate-text">To create a world-class IoT platform...</p>
                    <p class="text-gray-700 text-sm leading-relaxed full-text">To create a world-class IoT platform to connect everything, everyone and our experiences. To impact the world by improving the connection between people and their environment.</p>
                </div>
            </div>
            
            <!-- Mission 4 -->
            <div class="mission-circle mission-4">
                <div class="circle-content">
                    <div class="text-3xl font-bold text-greycode-light-blue mb-3">4</div>
                    <p class="text-gray-700 text-xs leading-relaxed truncate-text">To build future infrastructure...</p>
                    <p class="text-gray-700 text-sm leading-relaxed full-text">To build the future infrastructure and enable seamless interoperability between machines, sensors, applications and data by creating a global M2M (machine-to-machine) machine identity registry. Imagine a world where everyone and everything is connected.</p>
                </div>
            </div>
            
            <!-- Mission 5 -->
            <div class="mission-circle mission-5">
                <div class="circle-content">
                    <div class="text-3xl font-bold text-greycode-light-blue mb-3">5</div>
                    <p class="text-gray-700 text-xs leading-relaxed truncate-text">To become the underlying protocol for IoT...</p>
                    <p class="text-gray-700 text-sm leading-relaxed full-text">To become the underlying protocol for the Internet of Things (IoT) and thus a key technology for Smart Cities and the Economy of Things. The amount of information being generated and captured today is unprecedented. Our vision is to not only capture all of your data, but also be able to make sense of it in real-time and action upon it.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.mission-circle {
    position: absolute;
    width: 240px;
    height: 240px;
    top: 50%;
    left: 50%;
    background: linear-gradient(to right, var(--color-greycode-light-blue), var(--color-greycode-gray), black);
    border-radius: 50%;
    padding: 2px;
    transform: translate(-50%, -50%);
    transition: all 0.3s ease;
}

/* Updated rotation positions starting from top left */
.mission-1 { transform: translate(-50%, -50%) rotate(-90deg) translate(200px) rotate(90deg); }
.mission-2 { transform: translate(-50%, -50%) rotate(-18deg) translate(200px) rotate(18deg); }
.mission-3 { transform: translate(-50%, -50%) rotate(54deg) translate(200px) rotate(-54deg); }
.mission-4 { transform: translate(-50%, -50%) rotate(126deg) translate(200px) rotate(-126deg); }
.mission-5 { transform: translate(-50%, -50%) rotate(198deg) translate(200px) rotate(-198deg); }

.circle-content {
    width: 100%;
    height: 100%;
    background: white;
    border-radius: 50%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 1.5rem;
    text-align: center;
    transition: all 0.3s ease;
}

/* Text management */
.truncate-text {
    display: block;
}

.full-text {
    display: none;
}

/* Hover effects */
.mission-circle:hover {
    transform: translate(-50%, -50%) scale(2);
    z-index: 10;
}

.mission-circle:hover .circle-content {
    padding: 1rem;
}

.mission-circle:hover .truncate-text {
    display: none;
}

.mission-circle:hover .full-text {
    display: block;
}
</style>
</x-layout>