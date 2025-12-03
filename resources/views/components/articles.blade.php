<section class="py-16 bg-gray-50 dark:bg-gray-800 dark:text-white scroll-px-10">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-12" data-aos="fade-down" data-aos-duration="600">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">Our <span class="text-greycode-light-blue">Articles</span></h2>
            <p class="text-lg sm:text-xl text-gray-600 dark:text-white max-w-2xl mx-auto">
                Stay updated with the latest insights, trends, and innovations in IoT technology
            </p>
        </div>

        <!-- Carousel Container -->
        <div class="relative">
            <!-- Navigation Buttons -->
            <div class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10 hidden md:block">
                <button class="bg-white rounded-full dark:bg-gray-800 p-3 shadow-lg hover:bg-gray-100 transition-colors carousel-prev">
                    <i class="fas fa-chevron-left text-greycode-light-blue"></i>
                </button>
            </div>
            <div class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10 hidden md:block">
                <button class="bg-white rounded-full dark:bg-gray-800 p-3 shadow-lg hover:bg-gray-100 transition-colors carousel-next">
                    <i class="fas fa-chevron-right text-greycode-light-blue"></i>
                </button>
            </div>

            <!-- Carousel Track -->
            <div class="flex overflow-x-auto snap-x snap-mandatory scrollbar-hide space-x-4 md:space-x-6 pb-8 -mx-4 px-4" 
                 id="articles-carousel">
                
                @php
                    $articles = [
                        /* [
                            'title' => 'Bluetooth Speaker Tutorial',
                            'excerpt' => 'Build a fully functional Bluetooth speaker with custom 3D printed enclosure using Greycode IoT Dev Board.',
                            'image' => '/images/IMG_0132.png',
                            'url' => route('blog.bluetooth-speaker'),
                            'category' => 'education',
                            'category_label' => 'Education',
                            'author' => 'Prudy N Singo',
                            'date' => 'April 17, 2023',
                            'read_time' => '8 min read'
                        ],
                        [
                            'title' => 'Smoke Detector System',
                            'excerpt' => 'Learn to build a smart smoke detection system for industrial safety using MQ-2 sensor and LCD display.',
                            'image' => '/images/GasSensor.png',
                            'url' => route('blog.smoke-detector'),
                            'category' => 'education',
                            'category_label' => 'Education',
                            'author' => 'Greycode Team',
                            'date' => 'July 4, 2025',
                            'read_time' => '6 min read'
                        ],
                        [
                            'title' => 'Smart Bulb Home Automation',
                            'excerpt' => 'Control AC bulbs remotely using Greycode Board and Blynk app with this home automation tutorial.',
                            'image' => '/images/SMART-BULB.png',
                            'url' => route('blog.smart-bulb'),
                            'category' => 'education',
                            'category_label' => 'Education',
                            'author' => 'Greycode Team',
                            'date' => 'June 2, 2025',
                            'read_time' => '7 min read'
                        ],
                        [
                            'title' => 'Radar System Tutorial',
                            'excerpt' => 'Create a beginner radar system using ultrasonic sensor and servo motor with real-time monitoring.',
                            'image' => '/images/RadarSystem.png',
                            'url' => route('blog.radar-system'),
                            'category' => 'education',
                            'category_label' => 'Education',
                            'author' => 'Akhona Mshike',
                            'date' => 'October 6, 2025',
                            'read_time' => '10 min read'
                        ], */
                        [
                            'title' => 'IoT in Mining Industry',
                            'excerpt' => 'Explore how IoT technology is revolutionizing mining with smart monitoring and safety solutions.',
                            'image' => 'https://cdn.prod.website-files.com/61e9b480b01636a456c42a80/65a5626243e860984ea9372f_thumb_3667_news_standard.jpeg',
                            'url' => route('blog.iot-mining'),
                            'category' => 'industry',
                            'category_label' => 'Industry',
                            'author' => 'Nathan Lumbu',
                            'date' => 'March 10, 2022',
                            'read_time' => '6 min read'
                        ],
                        [
                            'title' => 'Healthcare IoT Impact',
                            'excerpt' => 'Discover how Internet of Things is transforming healthcare with improved patient monitoring and personalized care.',
                            'image' => 'https://cdn.prod.website-files.com/61e9b480b01636a456c42a80/65c609bc765b7b309d0d4291_IoT%20in%20Healthcare.jpg',
                            'url' => route('blog.healthcare-iot'),
                            'category' => 'industry',
                            'category_label' => 'Industry',
                            'author' => 'Tuka Wright',
                            'date' => 'October 27, 2025',
                            'read_time' => '5 min read'
                        ],
                        [
                            'title' => 'Energy IoT Solutions',
                            'excerpt' => 'Learn how IoT technology is optimizing energy grid management and renewable energy integration.',
                            'image' => 'https://cdn.prod.website-files.com/61e9b480b01636a456c42a80/65e7176807d17908891a38ca_lightbulb-1875247-1920_ver_1%20(1).jpg',
                            'url' => route('blog.energy-in-iot'),
                            'category' => 'industry',
                            'category_label' => 'Industry',
                            'author' => 'Greycode Team',
                            'date' => 'November 15, 2024',
                            'read_time' => '4 min read'
                        ],
                        [
                            'title' => 'Youth Unemployment & Innovation',
                            'excerpt' => 'Exploring President Ramaphosa\'s initiative to remove work experience requirements and how innovation can solve youth unemployment.',
                            'image' => 'https://cdn.prod.website-files.com/61e9b480b01636a456c42a80/65fbdd34fd3ca0bccf0283d3_65bbacd150760203bab3724e_doug-linstedt-jEEYZsaxbH4-unsplash.jpg',
                            'url' => route('blog.youth-unemployment'),
                            'category' => 'articles',
                            'category_label' => 'Articles',
                            'author' => 'Mutshidzi Mapila',
                            'date' => 'March 24, 2024',
                            'read_time' => '5 min read'
                        ]
                    ];
                @endphp

                @foreach($articles as $index => $article)
                <div class="flex-shrink-0 w-[280px] sm:w-80 md:w-96 snap-start bg-white dark:bg-gray-800 dark:shadow-xl dark:shadow-greycode-light-blue rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:scale-105"
                     data-aos="fade-up" data-aos-duration="500" data-aos-delay="{{ $index * 100 }}">
                    <!-- Article Image -->
                    <div class="h-48 bg-gray-200 dark:bg-gray-700 overflow-hidden">
                        <img src="{{ $article['image'] }}" 
                             alt="{{ $article['title'] }}" 
                             class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                    </div>
                    
                    <!-- Category Badge -->
                    <div class="px-6 pt-4">
                        <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full 
                            @if($article['category'] === 'education') bg-purple-100 text-purple-800 dark:bg-purple-900 dark:text-purple-200
                            @elseif($article['category'] === 'industry') bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-200
                            @else bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200
                            @endif">
                            {{ $article['category_label'] }}
                        </span>
                    </div>

                    <div class="p-6 pt-4">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 line-clamp-2">{{ $article['title'] }}</h3>
                        <p class="text-gray-600 mb-4 leading-relaxed dark:text-gray-300 line-clamp-3">
                            {{ $article['excerpt'] }}
                        </p>
                        <div class="flex items-center justify-between text-sm text-gray-500 mb-4 dark:text-gray-400 flex-wrap gap-2">
                            <span class="text-xs sm:text-sm">{{ $article['date'] }}</span>
                            <span class="hidden sm:inline">•</span>
                            <span class="text-xs sm:text-sm">{{ $article['read_time'] }}</span>
                            <span class="hidden sm:inline">•</span>
                            <span class="text-xs sm:text-sm truncate max-w-[100px] sm:max-w-none">{{ $article['author'] }}</span>
                        </div>
                        <a href="{{ $article['url'] }}" class="inline-flex items-center text-greycode-light-blue dark:text-blue-400 font-semibold hover:text-greycode-dark-blue transition-colors">
                            Read More
                            <i class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Navigation Dots -->
            <div class="flex justify-center space-x-2 mt-8">
                @foreach($articles as $index => $article)
                <button class="w-3 h-3 rounded-full bg-gray-300 hover:bg-greycode-light-blue transition-colors carousel-dot {{ $index === 0 ? 'active bg-greycode-light-blue' : '' }}" data-slide="{{ $index }}"></button>
                @endforeach
            </div>
        </div>

        <!-- View All Articles Button -->
        <div class="text-center mt-12" data-aos="fade-up" data-aos-duration="600">
            <a href="{{ route('blog.index') }}" class="inline-flex items-center bg-greycode-light-blue text-white px-6 sm:px-8 py-3 rounded-lg font-semibold hover:bg-greycode-mid-blue transition-colors duration-300">
                View All Articles
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>