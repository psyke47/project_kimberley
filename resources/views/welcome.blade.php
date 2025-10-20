
<x-layout>
    
  <section class="text-gray-600 body-font lg:min-h-screen flex items-center relative overflow-hidden">
    <!-- Background Container -->
    <div class="absolute inset-0 z-0">
        <!-- Background Color -->
        <div class="absolute inset-0 bg-greycode-light-gray"></div>
        <!-- Right-Aligned Background Image -->
        <div class="absolute inset-y-0 right-0 w-1/2 bg-cover bg-center bg-no-repeat opacity-25"
             style="background-image: url('{{ asset('images/Untitled-1_0004_Layer-4.png') }}');">
        </div>
    </div>

    <!-- Content -->
    <div class="container mx-auto flex md:px-24 md:flex-row flex-col items-center relative z-10">
        <div class="lg:flex-grow mt-5 md:mt-0 md:w-2/5 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font text-4xl lg:text-[55px] lg:pl-20 sm:text-4xl mb-4 font-medium text-black uppercase leading-tight">
                CONNECT, CONTROL, AND<br>
                AUTOMATE<br>
                <span class="text-greycode-light-blue hero-underline">YOUR WORLD</span>
            </h1>
        </div>
        <div class="lg:max-w-3xl lg:w-full mb-5 md:mb-0 md:w-3/5 relative z-20">
            <img class="w-full h-auto object-contain rounded-lg hover:animate-pulse transform hover:scale-105 transition-transform duration-300" 
                 alt="hero" 
                 src="{{ asset('images/Screenshot 2025-09-29 120823.png') }}">
        </div>
    </div>
</section>
<section>
  <h3 class="text-5xl font-bold mb-4 text-center mt-10">What is <span class="text-greycode-light-blue">IOT</span></h3>
  {{-- Photo needs to be inserted here --}}
  <div class="rounded-4xl p-8 shadow-3xl mx-auto max-w-4xl" style="background: #2C7DE6; background: linear-gradient(289deg, #2c7de6 25%, #7986A2 84%);">
    <div class="flex justify-center items-center space-x-8">
        <!-- Your 4 image placeholders -->
        <img src="{{ asset('images/icons-01.png')}}" class="w-32 h-32 object-contain hover:animate-wiggle" alt="Placeholder 1">
        <img src="{{ asset('images/icons-02.png')}}" class="w-32 h-32 object-contain hover:animate-bounce" alt="Placeholder 2">
        <img src="{{ asset('images/icons-03.png')}}" class="w-32 h-32 object-contain hover:animate-bounce" alt="Placeholder 3">
        <img src="{{ asset('images/icons-04.png')}}" class="w-32 h-32 object-contain hover:animate-wiggle" alt="Placeholder 4">
    </div>
  </div>
  <div class="container mx-auto px-5 py-5 lg:px-40">
    <p class="text-lg mt-5 mb-8 text-center max-w-4xl mx-auto"> The Internet of Things or IoT refers to a network of devices wherein a variety of machines, buildings and other things are connected. These devices are capable of sending & receiving data from each other without requiring human-to-human or human-to-computer interaction.</p>
  </div>
</section>
<section class="relative overflow-hidden">
    <!-- Background Container -->
    <div class="absolute inset-0 z-0">
        <!-- Background Color -->
        <div class="absolute inset-0 bg-greycode-light-gray"></div>
        <!-- Background Image -->
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-50"
             style="background-image: url('{{ asset('images/Untitled-1_0006_Layer-2.png') }}');">
        </div>
    </div>

    <!-- Content -->
    <div class="container mx-auto px-4 py-16 relative z-10">
        <h3 class="text-5xl font-bold mb-4 text-center mt-10">Our <span class="text-greycode-light-blue hero-underline">Services</span></h3>
        <p class="text-lg mt-5 mb-8 text-center max-w-4xl mx-auto">
            We provide world class, end to end solutions for the Internet of Things IoT, our Connected Technologies, Sensors and Platforms enable new solutions for government & enterprise customers, energy management & efficiency, smart cities, connected homes , buildings and more
        </p>
        
        <!-- Service Links -->
        <div class="flex justify-center space-x-8 p-4 flex-wrap">
            <a href="/smart-farming" class="gradient-text hover:text-blue-600 hover:scale-120">SMARTER FARMING</a>
            <span class="separator"></span>
            <a href="/manufacturing" class="gradient-text hover:text-blue-600 hover:scale-120">MANUFACTURING</a>
            <span class="separator"></span>
            <a href="/mining-oil-gas" class="gradient-text hover:text-blue-600 hover:scale-120">MINING, OIL & GAS</a>
            <span class="separator"></span>
            <a href="/smart-building" class="gradient-text hover:text-blue-600 hover:scale-120">SMART BUILDINGS</a>
            <span class="separator"></span>
            <a href="#" class="gradient-text hover:text-blue-600 hover:scale-120">TRACKING</a>
        </div>
        
        <!-- View More Button -->
        <div class="text-center mt-8">
            <button class="gradient-outline-button capitalize px-8 py-3">View More</button>
        </div>

        <!-- Images -->
        <div class="flex justify-center gap-10 mt-12 flex-wrap">
            <img src="{{ asset('images/Screenshot 2025-09-29 151719.png')}}" 
                 alt="First placeholder image"
                 class="rounded-xl w-full max-w-md">
            <img src="{{ asset('images/Screenshot 2025-09-29 151733.png')}}" 
                 alt="Second placeholder image"
                 class="rounded-xl w-full max-w-md">
        </div>

        <!-- Let's feed the future section -->
        <div class="text-center mt-12">
            <h4 class="text-2xl p-7 font-semibold">Let's feed the future</h4>
            <p class="text-lg p-7 lg:px-40 max-w-4xl mx-auto leading-relaxed">
                Today, smart farming has become a reality. With the help of IoT technology and advanced machine learning algorithms, farmers can now monitor the health of their crops
            </p>
        </div>

        <!-- See More Button -->
        <div class="text-center mt-6">
            <button class="gradient-outline-button capitalize px-8 py-3">See More</button>
        </div>
    </div>
</section>
<section class="flex flex-col items-center justify-center text-center mt-10 mb-10">
  <h3 class="text-5xl font-bold mb-4 text-center mt-10">
    Success <span class="text-greycode-light-blue">Stories</span>
  </h3>
  <p class="text-lg mb-8">Get to know more about the work we do.</p>
  
  <div class="flex flex-wrap justify-center gap-8 max-w-7xl mx-auto">
    <!-- Card 1 -->
    <div class="card bg-base-100 w-96 shadow-md shadow-greycode-light-blue">
      <figure class="px-10 pt-10">
        <img
          src="{{ asset('images/pexels-nc-farm-bureau-mark-2889442.jpg') }}"
          alt="Shoes"
          class="rounded-xl" />
      </figure>
      <div class="card-body items-center text-center p-3">
        <h2 class="card-title text-lg my-2.5 font-semibold text-greycode-light-blue">Smart Farming</h2>
        <p>Rather than relying on old-fashioned and imprecise tools like their own eyes and noses, farmers have begun using IoT sensors...</p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="card bg-base-100 w-96 shadow-md shadow-greycode-light-blue">
      <figure class="px-10 pt-10">
        <img
          src="{{ asset('images/pexels-life-of-pix-2391.jpg') }}"
          alt="Manufacturing"
          class="rounded-xl" />
      </figure>
      <div class="card-body items-center text-center p-3">
        <h2 class="card-title text-lg  my-2.5 font-semibold text-greycode-light-blue">Manufacturing</h2>
        <p>IoT solutions in manufacturing improve efficiency and reduce downtime through predictive maintenance...</p>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="card bg-base-100 w-96 shadow-md shadow-greycode-light-blue">
      <figure class="px-10 pt-10">
        <img
          src="{{ asset('images/pexels-sevenstormphotography-443383.jpg') }}"
          alt="Buildings"
          class="rounded-xl" />
      </figure>
      <div class="card-body items-center text-center p-3">
        <h2 class="card-title text-lg  my-2.5 font-semibold text-greycode-light-blue">Smart Buildings</h2>
        <p>Intelligent building management systems optimize energy consumption and enhance security...</p>
      </div>
    </div>
  </div>
</section>
<section class="py-16">
    <div class="container mx-auto px-4">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h3 class="text-5xl font-bold mb-4 text-center mt-10">Learn, Build & <span class="text-greycode-light-blue">Innovate</span> </h3>
            <p class="text-xl text-gray-600">The GREYCODE IoT Development Board</p>
        </div>

        <!-- Diagonal Layout Container -->
        <div class="relative min-h-[700px] flex items-center justify-center">
            <!-- Top Right Paragraph -->
            <div class="absolute top-0 right-0 w-1/2 lg:w-1/3 p-6 rounded-2xl shadow-lg z-10 transform -translate-y-4">
                <p class="text-gray-700 leading-relaxed">
                    This board is a premium, all-in-one solution engineered for demanding IoT and connected applications. 
                    It features high-speed dual-core processing (240MHz), robust multi-connectivity (Wi-Fi, Bluetooth, 
                    and 4G LTE/CAT-M1/NB-IoT support), and seamless data transmission.
                </p>
            </div>

            <!-- Centered Diagonal Image - Much Larger -->
            <div class="relative z-0 transform rotate-0 scale-125">
                <img 
                    src="{{ asset('images/greycode-board.png') }}" 
                    alt="IoT Development Board" 
                    class="w-80 h-80 lg:w-96 lg:h-96 xl:w-[500px] xl:h-[500px] object-contain mx-auto filter drop-shadow-2xl"
                >
            </div>

            <!-- Bottom Left Paragraph -->
            <div class="absolute bottom-0 left-0 w-1/2 lg:w-1/3 p-6 rounded-2xl shadow-lg z-10 transform translate-y-4">
                <p class="text-gray-700 leading-relaxed">
                    Designed for reliability in remote deployments, it includes GPS tracking and solar/battery power 
                    options for uninterrupted operation. With advanced power management and rugged durability, this 
                    board is ideal for industrial automation, smart agriculture, and asset monitoring—built to excel 
                    in harsh environments with zero compromises.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="py-16 icon-background">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row items-center gap-12">
            <!-- Image Column (One Third) -->
            <div class="w-full lg:w-1/3">
                <img 
                    src="{{ asset('images/Untitled-boardb2.png') }}" 
                    alt="Section Image" 
                    class="w-full h-auto rounded-2xl shadow-lg object-cover"
                >
            </div>
            
            <!-- Content Column (Two Thirds) -->
            <div class="w-full lg:w-2/3">
                <h2 class="text-5xl md:text-5xl font-bold text-white">
                    Do you have an <span class="text-black">idea</span>? <br>Let’s <span class="text-black">Prototype</span> it.
                </h2>
                <p class="text-lg text-greycode-light-gray mb-8 leading-relaxed">
                    Low code application development. Get from sensors to business logic in minutes.
                </p>
                <button class="bg-greycode-light-blue text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors duration-300 transform hover:scale-105">
                    View More
                </button>
            </div>
        </div>
    </div>
</section>
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-5xl font-bold text-gray-900 mb-4">Our <span class=text-greycode-light-blue>Articles</span> </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Stay updated with the latest insights, trends, and innovations in IoT technology
            </p>
        </div>

        <!-- Carousel Container -->
        <div class="relative">
          <!-- Add before the carousel track -->
<div class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10">
    <button class="bg-white rounded-full p-3 shadow-lg hover:bg-gray-100 transition-colors">
        <i class="fas fa-chevron-left text-greycode-light-blue"></i>
    </button>
</div>
<div class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10">
    <button class="bg-white rounded-full p-3 shadow-lg hover:bg-gray-100 transition-colors">
        <i class="fas fa-chevron-right text-greycode-light-blue"></i>
    </button>
</div>
            <!-- Carousel Track -->
            <div class="flex overflow-x-auto snap-x snap-mandatory scrollbar-hide space-x-6 pb-8 -mx-4 px-4" 
                 id="articles-carousel">
                
                <!-- Article Card 1 -->
                <div class="flex-shrink-0 w-80 snap-start bg-white rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-105">
                    <div class="h-48 bg-gradient-to-br from-greycode-light-blue to-greycode-mid-blue flex items-center justify-center">
                        <div class="text-white text-center p-4">
                            <i class="fas fa-microchip text-4xl mb-2"></i>
                            <h3 class="text-lg font-semibold">IoT Technology</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">The Future of Smart Cities</h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">
                            How IoT is transforming urban infrastructure and creating more efficient, sustainable cities for tomorrow.
                        </p>
                        <div class="flex items-center justify-between text-sm text-gray-500 mb-4">
                            <span>Oct 15, 2025</span>
                            <span>•</span>
                            <span>Sarah Chen</span>
                        </div>
                        <a href="#" class="inline-flex items-center text-greycode-light-blue font-semibold hover:text-greycode-dark-blue transition-colors">
                            Read More
                            <i class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>

                <!-- Article Card 2 -->
                <div class="flex-shrink-0 w-80 snap-start bg-white rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-105">
                    <div class="h-48 bg-gradient-to-br from-greycode-gray to-black flex items-center justify-center">
                        <div class="text-white text-center p-4">
                            <i class="fas fa-industry text-4xl mb-2"></i>
                            <h3 class="text-lg font-semibold">Manufacturing</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Industrial IoT Revolution</h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">
                            Transforming traditional manufacturing with smart sensors, predictive maintenance, and real-time monitoring.
                        </p>
                        <div class="flex items-center justify-between text-sm text-gray-500 mb-4">
                            <span>Oct 12, 2025</span>
                            <span>•</span>
                            <span>Mike Rodriguez</span>
                        </div>
                        <a href="#" class="inline-flex items-center text-greycode-light-blue font-semibold hover:text-greycode-dark-blue transition-colors">
                            Read More
                            <i class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>

                <!-- Article Card 3 -->
                <div class="flex-shrink-0 w-80 snap-start bg-white rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-105">
                    <div class="h-48 bg-gradient-to-br from-green-500 to-green-700 flex items-center justify-center">
                        <div class="text-white text-center p-4">
                            <i class="fas fa-seedling text-4xl mb-2"></i>
                            <h3 class="text-lg font-semibold">Smart Farming</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Precision Agriculture</h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">
                            How IoT sensors and data analytics are revolutionizing crop management and yield optimization.
                        </p>
                        <div class="flex items-center justify-between text-sm text-gray-500 mb-4">
                            <span>Oct 8, 2025</span>
                            <span>•</span>
                            <span>Dr. Emily Watson</span>
                        </div>
                        <a href="#" class="inline-flex items-center text-greycode-light-blue font-semibold hover:text-greycode-dark-blue transition-colors">
                            Read More
                            <i class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>

                <!-- Article Card 4 -->
                <div class="flex-shrink-0 w-80 snap-start bg-white rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-105">
                    <div class="h-48 bg-gradient-to-br from-purple-500 to-purple-700 flex items-center justify-center">
                        <div class="text-white text-center p-4">
                            <i class="fas fa-graduation-cap text-4xl mb-2"></i>
                            <h3 class="text-lg font-semibold">Education</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">IoT in Modern Education</h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">
                            Preparing the next generation of innovators with hands-on IoT technology and development boards.
                        </p>
                        <div class="flex items-center justify-between text-sm text-gray-500 mb-4">
                            <span>Oct 5, 2025</span>
                            <span>•</span>
                            <span>Prof. James Wilson</span>
                        </div>
                        <a href="#" class="inline-flex items-center text-greycode-light-blue font-semibold hover:text-greycode-dark-blue transition-colors">
                            Read More
                            <i class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>

                <!-- Article Card 5 -->
                <div class="flex-shrink-0 w-80 snap-start bg-white rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-105">
                    <div class="h-48 bg-gradient-to-br from-orange-500 to-orange-700 flex items-center justify-center">
                        <div class="text-white text-center p-4">
                            <i class="fas fa-building text-4xl mb-2"></i>
                            <h3 class="text-lg font-semibold">Smart Buildings</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Intelligent Building Management</h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">
                            Creating energy-efficient, secure, and comfortable environments through IoT integration.
                        </p>
                        <div class="flex items-center justify-between text-sm text-gray-500 mb-4">
                            <span>Oct 1, 2025</span>
                            <span>•</span>
                            <span>Lisa Thompson</span>
                        </div>
                        <a href="#" class="inline-flex items-center text-greycode-light-blue font-semibold hover:text-greycode-dark-blue transition-colors">
                            Read More
                            <i class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Navigation Dots (Optional) -->
            <div class="flex justify-center space-x-2 mt-8">
                <button class="w-3 h-3 rounded-full bg-gray-300 hover:bg-greycode-light-blue transition-colors" data-slide="0"></button>
                <button class="w-3 h-3 rounded-full bg-gray-300 hover:bg-greycode-light-blue transition-colors" data-slide="1"></button>
                <button class="w-3 h-3 rounded-full bg-gray-300 hover:bg-greycode-light-blue transition-colors" data-slide="2"></button>
                <button class="w-3 h-3 rounded-full bg-gray-300 hover:bg-greycode-light-blue transition-colors" data-slide="3"></button>
                <button class="w-3 h-3 rounded-full bg-gray-300 hover:bg-greycode-light-blue transition-colors" data-slide="4"></button>
            </div>
        </div>

        <!-- View All Articles Button -->
        <div class="text-center mt-12">
            <a href="#" class="inline-flex items-center bg-greycode-light-blue text-white px-8 py-3 rounded-lg font-semibold hover:bg-greycode-mid-blue transition-colors duration-300">
                View All Articles
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<style>
/* Hide scrollbar for Chrome, Safari and Opera */
.scrollbar-hide::-webkit-scrollbar {
    display: none;
}

/* Hide scrollbar for IE, Edge and Firefox */
.scrollbar-hide {
    -ms-overflow-style: none;  /* IE and Edge */
    scrollbar-width: none;  /* Firefox */
}

/* Smooth scrolling */
#articles-carousel {
    scroll-behavior: smooth;
}
</style>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.getElementById('articles-carousel');
    const prevButton = document.querySelector('.absolute.left-0 button');
    const nextButton = document.querySelector('.absolute.right-0 button');
    const dots = document.querySelectorAll('[data-slide]');
    
    const cardWidth = 320; // w-80 = 320px + gap (24px) = 344px
    const scrollAmount = 344; // card width + space-x-6 (24px)

    // Next button functionality
    nextButton.addEventListener('click', function() {
        carousel.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    });

    // Previous button functionality
    prevButton.addEventListener('click', function() {
        carousel.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
    });

    // Navigation dots functionality
    dots.forEach(dot => {
        dot.addEventListener('click', function() {
            const slideIndex = parseInt(this.getAttribute('data-slide'));
            carousel.scrollTo({ 
                left: slideIndex * scrollAmount, 
                behavior: 'smooth' 
            });
        });
    });

    // Optional: Update active dot based on scroll position
    carousel.addEventListener('scroll', function() {
        const activeIndex = Math.round(carousel.scrollLeft / scrollAmount);
        dots.forEach((dot, index) => {
            dot.classList.toggle('bg-greycode-light-blue', index === activeIndex);
            dot.classList.toggle('bg-gray-300', index !== activeIndex);
        });
    });
});
</script>
</x-layout>