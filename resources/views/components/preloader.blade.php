{{-- Enhanced Preloader Component --}}
<div id="preloader" class="fixed inset-0 z-50 flex items-center justify-center bg-white transition-opacity duration-500">
    <div class="text-center">
        {{-- Larger Preloader Image Container --}}
        <div class="mb-8">
            <div class="w-32 h-32 mx-auto bg-greycode-light-blue rounded-full animate-pulse flex items-center justify-center">
                <img src="{{ asset('images/G-logo-black.png') }}" alt="Loading..." class="w-20 h-20 animate-pulse">
            </div>
        </div>
        
        {{-- Larger Loading Text and Dots --}}
        <div class="space-y-6">
            {{-- Optional Loading Text --}}
            <div class="text-xl font-semibold text-gray-600">
                Loading...
            </div>
            
            {{-- Larger Loading Dots --}}
            <div class="flex items-center justify-center space-x-4">
                <div class="w-4 h-4 bg-gray-500 rounded-full animate-bounce"></div>
                <div class="w-4 h-4 bg-gray-500 rounded-full animate-bounce" style="animation-delay: 0.1s"></div>
                <div class="w-4 h-4 bg-gray-500 rounded-full animate-bounce" style="animation-delay: 0.2s"></div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const preloader = document.getElementById('preloader');
    
    // Hide preloader when page is fully loaded
    window.addEventListener('load', function() {
        setTimeout(function() {
            preloader.style.opacity = '0';
            setTimeout(function() {
                preloader.style.display = 'none';
            }, 500);
        }, 800); // Slightly longer minimum display time for better visibility
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