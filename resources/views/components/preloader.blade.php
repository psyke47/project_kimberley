{{-- Optimized Preloader Component --}}
<div id="preloader" class="fixed inset-0 z-50 flex items-center justify-center bg-black transition-opacity duration-500 px-4">
    <div class="text-center">
        {{-- Smaller Preloader Image Container --}}
        <div class="mb-6">
            <div class="mx-auto w-200 h-200 rounded-full animate-pulse flex items-center justify-center">
                <img 
                    src="{{ asset('images/greycode-white-logo.png') }}" 
                    alt="Loading" 
                    class="w-150 h-150 animate-pulse"
                    loading="eager"
                    width="160"
                    height="160"
                >
            </div>
        </div>
        
        {{-- Loading Text and Dots --}}
        <div class="space-y-4">
            {{-- Loading Text --}}
            <div class="text-lg font-semibold text-gray-400">
                Loading...
            </div>
            
            {{-- Loading Dots --}}
            <div class="flex items-center justify-center space-x-3">
                <div class="w-3 h-3 bg-gray-500 rounded-full animate-bounce"></div>
                <div class="w-3 h-3 bg-gray-500 rounded-full animate-bounce" style="animation-delay: 0.2s"></div>
                <div class="w-3 h-3 bg-gray-500 rounded-full animate-bounce" style="animation-delay: 0.4s"></div>
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
        }, 500); // Reduced minimum display time
    });
    
    // Fallback: hide preloader after 2 seconds max (reduced from 3)
    setTimeout(function() {
        if (preloader.style.display !== 'none') {
            preloader.style.opacity = '0';
            setTimeout(function() {
                preloader.style.display = 'none';
            }, 500);
        }
    }, 2000);
});
</script>