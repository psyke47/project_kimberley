<x-layout>
  <section class="text-gray-600 body-font h-screen flex items-center" style="background-image: url('{{ asset('images/Untitled-1_0006_Layer-2.png') }}'); background-size: cover; background-position: center;">
    <div class="container mx-auto flex md:px-24 md:flex-row flex-col items-center">
      <div class="lg:flex-grow mt-5 md:mt-0 md:w-1.5/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
         <h1 class="title-font text-4xl lg:text-[70px] lg:pl-24 sm:text-4xl mb-4 font-medium text-black uppercase">
        CONNECT, CONTROL, AND<br>
        AUTOMATE<br>
        <span class="text-blue-600">YOUR WORLD</span>
         </h1>
      </div>
      <div class="lg:max-w-lg lg:w-full mb-5 md:mb-0 md:w-1/2 w-3/6">
        <img class="object-cover object-center rounded hover:animate-pulse" alt="hero" src="{{ asset('images/Screenshot 2025-09-29 120823.png') }}">
      </div>
    </div>
  </section>
<section>
  <h3 class="text-3xl font-bold mb-4 text-center mt-10">What is <span class="text-greycode-light-blue">IOT</span></h3>
  {{-- Photo needs to be inserted here --}}
  <div class="icon-background rounded-2xl p-8 shadow-lg mx-auto max-w-4xl">
    <div class="flex justify-center items-center space-x-8">
        <!-- Your 4 image placeholders -->
        <img src="{{ asset('images/icons-01.png')}}" class="w-32 h-32 object-contain hover:animate-wiggle" alt="Placeholder 1">
        <img src="{{ asset('images/icons-02.png')}}" class="w-32 h-32 object-contain hover:animate-bounce" alt="Placeholder 2">
        <img src="{{ asset('images/icons-03.png')}}" class="w-32 h-32 object-contain animate-bounce" alt="Placeholder 3">
        <img src="{{ asset('images/icons-04.png')}}" class="w-32 h-32 object-contain animate-wiggle" alt="Placeholder 4">
    </div>
  </div>
  <div class="container mx-auto px-5 py-5 lg:px-40">
    <p class="text-lg mt-5 mb-8 text-center mx-5"> The Internet of Things or IoT refers to a network of devices wherein a variety of machines, buildings and other things are connected. These devices are capable of sending & receiving data from each other without requiring human-to-human or human-to-computer interaction.</p>s
  </div>
</section>
<section class="justify-center text-center">
  <div class="container mx-auto px-4">
    <h3 class="text-3xl font-bold mb-4 text-center mt-10">Our <span class="text-greycode-light-blue">Services</span></h3>
    <p class="text-lg mt-5 mb-8 text-center mx-5">We provide world class, end to end solutions for the Internet of Things IoT, our Connected Technologies, Sensors and Platforms enable new solutions for government & enterprise customers, energy management & efficiency, smart cities, connected homes , buildings and more</p>
      <div class="flex justify-center space-x-8 p-4">
        <a href="#" class="gradient-text hover:text-blue-600">SMARTER FARMER</a>
          <span class="separator"></span>
        <a href="#" class="gradient-text hover:text-blue-600">MANUFACTURING</a>
          <span class="separator"></span>
        <a href="#" class="gradient-text hover:text-blue-600">MINING, OIL & GAS</a>
          <span class="separator"></span>
        <a href="#" class="gradient-text hover:text-blue-600">SMART BUILDINGS</a>
          <span class="separator"></span>
        <a href="#" class="gradient-text hover:text-blue-600">TRACKING</a>
  </div>
  <div>
    <button class="gradient-outline-button capitalize">View More</button>
  </div>
    <div class="flex justify-center gap-10 mt-5">
      <img src="{{ asset('images/Screenshot 2025-09-29 151719.png')}}" 
         alt="First placeholder image"
         class="rounded-xl">
        <img src="{{ asset('images/Screenshot 2025-09-29 151733.png')}}" 
         alt="Second placeholder image"
         class="rounded-xl">
    </div>
    <h4 class="text-center text-2xl p-7">Let's feed the future</h4>
    <p class="text-center p-7 lg:px-40">Today, smart farming has become a reality. With the help of IoT technology and advanced machine learning algorithms, farmers can now monitor the health of their crops</p>
    <button class="cursor-pointer bg-gradient-to-b from-indigo-500 to-indigo-600 shadow-[0px_4px_32px_0_rgba(99,102,241,.70)] px-6 py-3 rounded-xl border-[1px] border-slate-500 text-white font-medium group">
      <div class="relative overflow-hidden">
    <p
      class="group-hover:-translate-y-7 duration-[1.125s] ease-[cubic-bezier(0.19,1,0.22,1)]">
      See More
    </p>
    <p class="absolute top-7 left-0 group-hover:top-0 duration-[1.125s] ease-[cubic-bezier(0.19,1,0.22,1)] uppercase">See More</p>
  </div>
</button>
  </div>
</section>
<section class="flex flex-col items-center justify-center text-center mt-10 mb-10">
  <h3 class="text-5xl font-bold mb-4">
    Success Stories
  </h3>
  <p class="text-lg mb-8">Get to know more about the work we do.</p>
  
  <div class="flex flex-wrap justify-center gap-8 max-w-7xl mx-auto">
    <!-- Card 1 -->
    <div class="card bg-base-100 w-96 shadow-xl">
      <figure class="px-10 pt-10">
        <img
          src="{{ asset('images/pexels-mart-production-7088524.jpg') }}"
          alt="Shoes"
          class="rounded-xl" />
      </figure>
      <div class="card-body items-center text-center">
        <h2 class="card-title">Smart Farming</h2>
        <p>Rather than relying on old-fashioned and imprecise tools like their own eyes and noses, farmers have begun using IoT sensors...</p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="card bg-base-100 w-96 shadow-xl">
      <figure class="px-10 pt-10">
        <img
          src="{{ asset('images/your-image-2.jpg') }}"
          alt="Manufacturing"
          class="rounded-xl" />
      </figure>
      <div class="card-body items-center text-center">
        <h2 class="card-title">Manufacturing</h2>
        <p>IoT solutions in manufacturing improve efficiency and reduce downtime through predictive maintenance...</p>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="card bg-base-100 w-96 shadow-xl">
      <figure class="px-10 pt-10">
        <img
          src="{{ asset('images/your-image-3.jpg') }}"
          alt="Buildings"
          class="rounded-xl" />
      </figure>
      <div class="card-body items-center text-center">
        <h2 class="card-title">Smart Buildings</h2>
        <p>Intelligent building management systems optimize energy consumption and enhance security...</p>
      </div>
    </div>
  </div>
</section>
<section class="py-16">
    <div class="container mx-auto px-4">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h3 class="text-4xl font-bold mb-4">Learn, Build & Innovate</h3>
            <p class="text-xl text-gray-600">The GREYCODE IoT Development Board</p>
        </div>

        <!-- Diagonal Layout Container -->
        <div class="relative min-h-[700px] flex items-center justify-center">
            <!-- Top Right Paragraph -->
            <div class="absolute top-0 right-0 w-1/2 lg:w-1/3 bg-white p-6 rounded-2xl shadow-lg z-10 transform -translate-y-4">
                <p class="text-gray-700 leading-relaxed">
                    This board is a premium, all-in-one solution engineered for demanding IoT and connected applications. 
                    It features high-speed dual-core processing (240MHz), robust multi-connectivity (Wi-Fi, Bluetooth, 
                    and 4G LTE/CAT-M1/NB-IoT support), and seamless data transmission.
                </p>
            </div>

            <!-- Centered Diagonal Image - Much Larger -->
            <div class="relative z-0 transform rotate-315 scale-125">
                <img 
                    src="{{ asset('images/Sample-removebg-preview.png') }}" 
                    alt="IoT Development Board" 
                    class="w-80 h-80 lg:w-96 lg:h-96 xl:w-[500px] xl:h-[500px] object-contain mx-auto filter drop-shadow-2xl"
                >
            </div>

            <!-- Bottom Left Paragraph -->
            <div class="absolute bottom-0 left-0 w-1/2 lg:w-1/3 bg-white p-6 rounded-2xl shadow-lg z-10 transform translate-y-4">
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
                <h2 class="text-4xl md:text-5xl font-bold text-white">
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

</x-layout>