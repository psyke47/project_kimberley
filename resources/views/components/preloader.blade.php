{{-- Enhanced Responsive Preloader Component --}}
<div id="preloader" class="fixed inset-0 z-50 flex items-center justify-center bg-white transition-opacity duration-500">
    <div class="text-center w-full max-w-sm sm:max-w-md md:max-w-lg lg:max-w-xl px-4 sm:px-6">
        {{-- Responsive Preloader Image Container --}}
        <div class="mb-6 sm:mb-8 md:mb-10 lg:mb-12">
            <div class="mx-auto rounded-full animate-pulse flex items-center justify-center">
                <img 
                    src="{{ asset('images/greycode-white-logo.png') }}" 
                    alt="Loading..." 
                    class="aspect-[15/4] w-40 sm:w-48 md:w-64 lg:w-72 xl:w-96 animate-pulse filter brightness-0 object-contain"
                    loading="eager"
                    {{-- Exact 15:4 ratio: width = 375, height = 100 (375 / 100 = 15 / 4) --}}
                    width="375"
                    height="100"
                >
            </div>
        </div>
        
        {{-- Responsive Loading Text and Dots --}}
        <div class="space-y-4 sm:space-y-6">
            {{-- Loading Text --}}
            <div class="text-base sm:text-lg md:text-xl font-semibold text-gray-600">
                Loading...
            </div>
            
            {{-- Responsive Loading Dots --}}
            <div class="flex items-center justify-center space-x-2 sm:space-x-3 md:space-x-4">
                <div class="w-4 h-4 sm:w-6 sm:h-6 md:w-8 md:h-8 bg-gray-500 rounded-full animate-bounce"></div>
                <div class="w-4 h-4 sm:w-6 sm:h-6 md:w-8 md:h-8 bg-gray-500 rounded-full animate-bounce" style="animation-delay: 0.2s"></div>
                <div class="w-4 h-4 sm:w-6 sm:h-6 md:w-8 md:h-8 bg-gray-500 rounded-full animate-bounce" style="animation-delay: 0.4s"></div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const preloader = document.getElementById('preloader');
    
    // Preload the image to prevent flickering
    const preloadImage = new Image();
    preloadImage.src = "{{ asset('images/greycode-white-logo.png') }}";
    
    // Hide preloader when page is fully loaded
    window.addEventListener('load', function() {
        setTimeout(function() {
            preloader.style.opacity = '0';
            setTimeout(function() {
                preloader.style.display = 'none';
            }, 500);
        }, 800);
    });
    
    // Fallback: hide preloader after 3 seconds max
    setTimeout(function() {
        if (preloader.style.display !== 'none') {
            preloader.style.opacity = '0';
            setTimeout(function() {
                preloader.style.display = 'none';
            }, 500);
        }
    }, 3000);
});
</script>