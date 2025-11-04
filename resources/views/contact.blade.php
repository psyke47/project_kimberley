<x-layout>
   <x-slot name="title">Contact Us - Greycode</x-slot>
   <x-slot name="meta_description">Get in touch with Greycode for inquiries about our IoT solutions, product development, and educational services. We're here to help!</x-slot>

   <section class="py-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 gap-12 lg:grid-cols-2">
            <!-- Left Column - Contact Info -->
            <div class="flex flex-col">
                <h2 class="text-black text-4xl lg:text-5xl font-bold mb-8 text-left dark:text-white">Contact Us</h2>
                <div class="space-y-6 text-left">
                    <h4 class="text-3xl font-semibold dark:text-white">Let's <span class="text-greycode-light-blue">chat</span></h4>
                    <p class="text-lg text-gray-700 leading-relaxed dark:text-gray-300">
                        We promise, your message won't disappear into the abyss. We're standing by and ready to help with any questions, comments, or thoughts you may have.
                    </p>
                </div>
                
                <!-- Contact Information -->
                <div class="space-y-6 mt-8">
                    <h3 class="text-3xl font-semibold text-gray-900 border-b border-greycode-mid-blue pb-2 dark:text-white">Get in Touch</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Email -->
                        <div class="space-y-2">
                            <div class="flex items-center space-x-3">
                                <i class="fas fa-envelope text-greycode-light-blue"></i>
                                <h4 class="font-medium text-gray-900 dark:text-white">Email</h4>
                            </div>
                            <a href="mailto:skillsprogram@greycode.co.za" class="text-gray-600 hover:text-greycode-light-blue transition-colors block dark:text-gray-300">
                                skillsprogram@greycode.co.za
                            </a>
                        </div>
                        
                        <!-- Phone -->
                        <div class="space-y-2">
                            <div class="flex items-center space-x-3">
                                <i class="fas fa-phone text-greycode-light-blue"></i>
                                <h4 class="font-medium text-gray-900 dark:text-white">Phone</h4>
                            </div>
                            <a href="tel:+27124813515" class="text-gray-600 hover:text-greycode-light-blue transition-colors block dark:text-gray-300">
                                +27 12 481 3515
                            </a>
                        </div>
                        
                        <!-- Address -->
                        <div class="space-y-2 md:col-span-2">
                            <div class="flex items-center space-x-3">
                                <i class="fas fa-map-marker-alt text-greycode-light-blue"></i>
                                <h4 class="font-medium text-gray-900 dark:text-white">Address</h4>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300">
                                123 Stamvrug, Val de Grace, Pretoria, 0184, South Africa
                            </p>
                        </div>
                        
                        <!-- Working Hours -->
                        <div class="space-y-2 md:col-span-2">
                            <div class="flex items-center space-x-3">
                                <i class="fas fa-clock text-greycode-light-blue"></i>
                                <h4 class="font-medium text-gray-900 dark:text-white">Working Hours</h4>
                            </div>
                            <div class="text-gray-600 dark:text-gray-300 space-y-1">
                                <div class="flex justify-between">
                                    <span>Monday - Thursday:</span>
                                    <span class="font-medium">8:00 AM - 4:00 PM</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Friday:</span>
                                    <span class="font-medium">8:00 AM - 1:00 PM</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Saturday - Sunday & Public Holidays:</span>
                                    <span class="font-medium">Closed</span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Contact Form -->
            <div x-data="contactForm" class="flex flex-col w-full">
                <div class="w-full bg-black rounded-2xl shadow-xl p-8">
                    <h2 class="text-2xl font-bold text-gray-200 mb-6">Send us a <span class="text-greycode-light-blue">message</span></h2>
                    <template x-if="success">
                        <div class="bg-green-100 text-green-800 p-3 rounded-md mb-4">
                        Your message has been sent!
                        </div>
                    </template>
                    <form @submit.prevent="submitForm" action="{{ route('contact.submit') }}" class="flex flex-col space-y-6" method="POST">
                        <!-- Name Field -->
                        @csrf
                        <div>
                            <label class="block mb-2 text-gray-200 font-medium text-left" for="name">Name</label>
                            <input 
                                name="name"
                                id="name"
                                placeholder="Jane Doe" 
                                class="w-full bg-gray-700 text-gray-200 border-0 rounded-lg p-3 focus:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 transition ease-in-out duration-150" 
                                type="text"
                                x-model="form.name"
                                required
                            >
                        </div>

                        <!-- Email Field -->
                        <div>
                            <label class="block mb-2 text-gray-200 font-medium text-left" for="email">Email</label>
                            <input 
                                name="email"
                                id="email"
                                placeholder="jane@greycode.co.za" 
                                class="w-full bg-gray-700 text-gray-200 border-0 rounded-lg p-3 focus:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 transition ease-in-out duration-150" 
                                type="email"
                                x-model="form.email"
                                required
                            >
                        </div>

                        <!-- Service Selection -->
                        <div>
                            <label class="block mb-2 text-gray-200 font-medium text-left" for="servicea">What service are you looking for:</label>
                            <select 
                                class="w-full bg-gray-700 text-gray-200 border-0 rounded-lg p-3 focus:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 transition ease-in-out duration-150" 
                                id="services"
                                name="services"
                                x-model="form.services"
                            >
                                <option value="IoT Solutions">IoT Solutions</option>
                                <option value="Product Development">Product Development</option>
                                <option value="Education">Education</option>
                            </select>
                        </div>

                        <!-- Message Field -->
                        <div>
                            <label class="block mb-2 text-gray-200 font-medium text-left" for="message">Message</label>
                            <textarea 
                                placeholder="Your message..." 
                                rows="4"
                                class="w-full bg-gray-700 text-gray-200 border-0 rounded-lg p-3 focus:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 transition ease-in-out duration-150" 
                                name="message"
                                id="message"
                                x-model="form.message"
                                required
                            ></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-4">
                            <button 
                                type="submit" 
                                class="w-full bg-linear-to-r from-greycode-light-blue to-greycode-mid-blue text-white font-bold py-4 px-8 rounded-lg transition-all duration-500 ease-in-out hover:brightness-110 hover:scale-105 transform shadow-lg"
                            >
                                Submit Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('contactForm', () => ({
        form: {
            name: '',
            email: '',
            services: '',
            message: ''
        },
        success: false,
        async submitForm() {
            try {
                await fetch("{{ route('contact.submit') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify(this.form)
                });
                this.success = true;
                this.form = { name: '', email: '', services: '', message: '' };
            } catch (error) {
                alert("Something went wrong. Please try again.");
            }
        }
    }));
});
</script>
</x-layout>