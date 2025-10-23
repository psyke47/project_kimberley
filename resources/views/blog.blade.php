<x-layout>
    <section class="bg-greycode-mid-blue relative overflow-hidden">
    <!-- Fade effect at the bottom -->
    <div class="absolute bottom-0 left-0 w-full h-16  pointer-events-none"></div>
    
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-6 space-x-8">
            <!-- Education -->
            <div class="flex-1 text-center group relative">
                <a href="#" class="text-white hover:text-greycode-dark-blue transition-colors duration-300 text-xl font-medium flex items-center justify-center space-x-2 py-3">
                    <span>Education</span>
                    <i class="fas fa-chevron-down text-sm mt-0.5 transition-transform duration-300 group-hover:rotate-180"></i>
                </a>
            </div>

            <!-- Smart Buildings -->
            <div class="flex-1 text-center group relative">
                <a href="#" class="text-white hover:text-greycode-dark-blue transition-colors duration-300 text-xl font-medium flex items-center justify-center space-x-2 py-3">
                    <span>Smart Buildings</span>
                    <i class="fas fa-chevron-down text-sm mt-0.5 transition-transform duration-300 group-hover:rotate-180"></i>
                </a>
            </div>

            <!-- Smart Farming -->
            <div class="flex-1 text-center group relative">
                <a href="#" class="text-white hover:text-greycode-dark-blue transition-colors duration-300 text-xl font-medium flex items-center justify-center space-x-2 py-3">
                    <span>Smart Farming</span>
                    <i class="fas fa-chevron-down text-sm mt-0.5 transition-transform duration-300 group-hover:rotate-180"></i>
                </a>
            </div>

            <!-- Smart Manufacturing -->
            <div class="flex-1 text-center group relative">
                <a href="#" class="text-white hover:text-greycode-dark-blue transition-colors duration-300 text-xl font-medium flex items-center justify-center space-x-2 py-3">
                    <span>Smart Manufacturing</span>
                    <i class="fas fa-chevron-down text-sm mt-0.5 transition-transform duration-300 group-hover:rotate-180"></i>
                </a>
            </div>

            <!-- Smart Mining -->
            <div class="flex-1 text-center group relative">
                <a href="#" class="text-white hover:text-greycode-dark-blue transition-colors duration-300 text-xl font-medium flex items-center justify-center space-x-2 py-3">
                    <span>Smart Mining</span>
                    <i class="fas fa-chevron-down text-sm mt-0.5 transition-transform duration-300 group-hover:rotate-180"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="container mx-auto px-4 py-8">
    <!-- Main blog container with rounded corners -->
    <div class="bg-white dark:bg-gray-800 dark:text-white dark:shadow-white rounded-2xl shadow-lg p-6 md:p-8">
        <div class="flex flex-col lg:flex-row gap-8">
            
            <!-- Left Column - Headline Article -->
            <div class="lg:w-2/3">
                <!-- Headline Article Image -->
                <img src="{{ asset('images/pexels-mart-production-7088524.jpg') }}" alt="Headline Article" class="w-full h-64 md:h-80 object-cover rounded-xl mb-4">
                
                <!-- Blog Name -->
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mb-3">Youth Unemployment in Africa: Part 1 - The Removal of Work Experience</h2>
                
                <!-- Date and Author -->
                <div class="flex items-center text-gray-600 dark:text-white mb-4">
                    <span class="mr-4">September 4, 2024</span>
                    <span>Mutshidzi Mapila</span>
                </div>
                
                <!-- Horizontal Line -->
                <hr class="my-6 border-gray-300 dark:border-greycode-light-blue">
                
                <!-- Read More Link -->
                <a href="#" class="text-greycode-light-blue hover:text-greycode-dark-blue font-semibold transition-colors duration-300">Read More →</a>
            </div>
            
            <!-- Right Column - Latest Articles -->
            <div class="lg:w-1/3">
                <!-- Top Horizontal Line -->
                <hr class="border-black dark:border-white mb-4">
                
                <!-- Latest Heading -->
                <h3 class="text-3xl font-bold text-greycode-light-blue text-center my-4">Latest</h3>
                
                <!-- Bottom Horizontal Line -->
                <hr class="border-black-400 dark:border-greycode-light-blue mt-4 mb-6">
                
                <!-- Stacked Articles -->
                <div class="space-y-6">
                    
                    <!-- Article 1 -->
                    <div class="flex items-start gap-4 pb-6 border-b border-black dark:border-white">
                        <img src="{{ asset('images/article1.jpg') }}" alt="Article 1" class="w-20 h-20 object-cover rounded-lg flex-shrink-0">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white mb-1">The Importance of IoT in the Energy Sector</h4>
                            <div class="text-sm text-gray-600 dark:text-white">
                                <span>Greycode Team</span>
                                <span class="mx-2">|</span>
                                <span>Oct 5, 2025</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Article 2 -->
                    <div class="flex items-start gap-4 pb-6 border-b border-black dark:border-white">
                        <img src="{{ asset('images/article2.jpg') }}" alt="Article 2" class="w-20 h-20 object-cover rounded-lg flex-shrink-0">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white mb-1">The Importance of IoT in the Energy Sector</h4>
                            <div class="text-sm text-gray-600 dark:text-white">
                                <span>Greycode Team</span>
                                <span class="mx-2">|</span>
                                <span>Oct 3, 2025</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Article 3 -->
                    <div class="flex items-start gap-4">
                        <img src="{{ asset('images/article3.jpg') }}" alt="Article 3" class="w-20 h-20 object-cover rounded-lg flex-shrink-0">
                        <div>
                            <h4 class="font-semibold text-gray-900 dark:text-white mb-1">The Importance of IoT in the Energy Sector</h4>
                            <div class="text-sm text-gray-600 dark:text-white">
                                <span>Greycode Team</span>
                                <span class="mx-2">|</span>
                                <span>Oct 1, 2025</span>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</section>
{{-- <x-comment-section /> --}}
<section class="bg-black py-8 text-white">
    <div class="container mx-auto px-4 py-6 lg:px-40">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="flex flex-col justify-center">
                <h5 class="text-4xl font-semibold lg:pr-30 lg:pl-24"><span class="text-greycode-light-blue">Subscribe</span> to get more content News and opinion on everything Internet of Things</h5>
            </div>
            <div>
                <form action="" method="POST">
                    @csrf
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="bg-white border border-gray-300 rounded-md px-4 py-2 w-full focus:outline-none focus:ring-2 focus:ring-greycode-light-blue mb-4">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="bg-white border border-gray-300 rounded-md px-4 py-2 w-full focus:outline-none focus:ring-2 focus:ring-greycode-light-blue mb-4">
                <div>
                    <button class="bg-greycode-light-blue text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors duration-300 transform hover:scale-105 capitalize">Subscribe</button>
                </div>
            </form>
        </div>
    </div>
</section>
</x-layout>

{{-- In your blog view --}}
{{-- <section class="w-full max-w-4xl mx-auto">
    <h2 class="text-2xl font-bold text-gray-900 mb-6">Comments ({{ $comments->count() }})</h2>
    
    <div class="space-y-6">
        @foreach($comments as $comment)
            @include('components.comment', ['comment' => $comment])
        @endforeach
    </div>
</section> --}}