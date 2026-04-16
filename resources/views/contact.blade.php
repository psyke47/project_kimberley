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
                            <a href="mailto:sales@greycode.co.za" class="text-gray-600 hover:text-greycode-light-blue transition-colors block dark:text-gray-300 dark:hover:text-blue-400">
                                sales@greycode.co.za
                            </a>
                        </div>

                        <!-- Phone -->
                        <div class="space-y-2">
                            <div class="flex items-center space-x-3">
                                <i class="fas fa-phone text-greycode-light-blue"></i>
                                <h4 class="font-medium text-gray-900 dark:text-white">Phone</h4>
                            </div>
                            <a href="tel:+27124813515" class="text-gray-600 hover:text-greycode-light-blue transition-colors block dark:text-gray-300 dark:hover:text-blue-400">
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
                                13 Stamvrug St, Val de Grace, Pretoria, 0184, South Africa
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
                <div class="w-full bg-black rounded-2xl shadow-xl dark:shadow-lg dark:shadow-greycode-light-blue/30 p-8 transition-shadow duration-300 hover:shadow-2xl">
                    <h2 class="text-2xl font-bold text-gray-200 mb-6">Send us a <span class="text-greycode-light-blue">message</span></h2>

                    <!-- Success Message -->
                    <div x-show="success" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 -translate-y-2"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-200"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 -translate-y-2"
                         class="bg-green-100 dark:bg-green-900/30 border border-green-400 dark:border-green-700 text-green-800 dark:text-green-200 p-4 rounded-md mb-4 text-center">
                        <i class="fas fa-check-circle mr-2"></i>
                        <span x-text="successMessage"></span>
                    </div>

                    <!-- Error Message -->
                    <div x-show="error" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 -translate-y-2"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-200"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 -translate-y-2"
                         class="bg-red-100 dark:bg-red-900/30 border border-red-400 dark:border-red-700 text-red-800 dark:text-red-200 p-4 rounded-md mb-4 text-center">
                        <i class="fas fa-exclamation-circle mr-2"></i>
                        <span x-text="errorMessage"></span>
                    </div>

                    <form @submit.prevent="submitForm" class="flex flex-col space-y-6">
                        @csrf
                        <!-- Name Field -->
                        <div>
                            <label class="block mb-2 text-gray-200 font-medium text-left" for="name">
                                Name <span class="text-red-400">*</span>
                            </label>
                            <input
                                id="name"
                                name="name"
                                placeholder="Jane Doe"
                                class="w-full bg-gray-700 text-gray-200 border-0 rounded-lg p-3 focus:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-150 disabled:opacity-50 disabled:cursor-not-allowed placeholder:text-gray-400"
                                type="text"
                                x-model="form.name"
                                :disabled="loading"
                                required
                            >
                        </div>

                        <!-- Email Field -->
                        <div>
                            <label class="block mb-2 text-gray-200 font-medium text-left" for="email">
                                Email <span class="text-red-400">*</span>
                            </label>
                            <input
                                id="email"
                                name="email"
                                placeholder="jane@example.com"
                                class="w-full bg-gray-700 text-gray-200 border-0 rounded-lg p-3 focus:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-150 disabled:opacity-50 disabled:cursor-not-allowed placeholder:text-gray-400"
                                type="email"
                                x-model="form.email"
                                :disabled="loading"
                                required
                            >
                        </div>

                        <!-- Service Selection -->
                        <div>
                            <label class="block mb-2 text-gray-200 font-medium text-left" for="services">
                                What service are you looking for:
                            </label>
                            <select
                                class="w-full bg-gray-700 text-gray-200 border-0 rounded-lg p-3 focus:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-150 disabled:opacity-50 disabled:cursor-not-allowed cursor-pointer"
                                id="services"
                                name="services"
                                x-model="form.services"
                                :disabled="loading"
                            >
                                <option value="" selected>Select a service</option>
                                <option value="IoT Solutions">IoT Solutions</option>
                                <option value="Product Development">Product Development</option>
                                <option value="Education">Education</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <!-- Message Field -->
                        <div>
                            <label class="block mb-2 text-gray-200 font-medium text-left" for="message">
                                Message <span class="text-red-400">*</span>
                            </label>
                            <textarea
                                placeholder="Tell us about your project or inquiry..."
                                rows="5"
                                class="w-full bg-gray-700 text-gray-200 border-0 rounded-lg p-3 focus:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-150 resize-y disabled:opacity-50 disabled:cursor-not-allowed placeholder:text-gray-400"
                                id="message"
                                name="message"
                                x-model="form.message"
                                :disabled="loading"
                                required
                            ></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-4">
                            <button
                                type="submit"
                                class="w-full bg-gradient-to-r from-greycode-light-blue to-greycode-mid-blue text-white font-bold py-4 px-8 rounded-lg transition-all duration-300 ease-in-out hover:brightness-110 hover:scale-105 active:scale-95 transform shadow-lg hover:shadow-xl disabled:opacity-50 disabled:cursor-not-allowed disabled:hover:scale-100 disabled:hover:shadow-lg"
                                :disabled="loading"
                            >
                                <i class="fas fa-spinner fa-spin mr-2" x-show="loading"></i>
                                <i class="fas fa-paper-plane mr-2" x-show="!loading"></i>
                                <span x-text="loading ? 'Sending...' : 'Send Message'"></span>
                            </button>
                        </div>
                        
                        <p class="text-gray-400 text-xs text-center mt-4">
                            <i class="fas fa-lock mr-1"></i>
                            Your information is secure and will never be shared.
                        </p>
                    </form>
                </div>
            </div>
        </div>

        <!-- Google Maps Section -->
        <div class="mt-16" data-aos="fade-up" data-aos-duration="600">
            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 text-center">
                <i class="fas fa-location-dot text-greycode-light-blue mr-2"></i>
                Find Us
            </h3>
            <div class="rounded-2xl overflow-hidden shadow-xl border-4 border-white dark:border-gray-700 hover:shadow-2xl transition-all duration-300 hover:scale-[1.01]">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3593.7521810385706!2d28.291579709614375!3d-25.745707677267568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e956079f07e1e8b%3A0xfa271b951789a907!2s13%20Stamvrug%20St%2C%20Val-De-Grace%2C%20Pretoria%2C%200184!5e0!3m2!1sen!2sza!4v1776170469932!5m2!1sen!2sza"
                    width="100%"
                    height="450"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    class="w-full">
                </iframe>
            </div>
            <p class="text-center text-gray-600 dark:text-gray-400 mt-4">
                <i class="fas fa-map-pin text-greycode-light-blue mr-1"></i>
                13 Stamvrug St, Val de Grace, Pretoria, 0184, South Africa
                <br>
                <a href="https://maps.app.goo.gl/hmF38qv8gKgC1WpJ9" 
                   target="_blank" 
                   rel="noopener noreferrer"
                   class="inline-block mt-2 text-greycode-light-blue hover:text-greycode-mid-blue dark:hover:text-blue-400 transition-colors duration-300 hover:scale-105 transform">
                    <i class="fas fa-external-link-alt mr-1"></i>
                    Open in Google Maps
                </a>
            </p>
        </div>
    </div>
</section>

<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('contactForm', () => ({
        form: {
            name: '',
            email: '',
            services: 'IoT Solutions',
            message: ''
        },
        success: false,
        error: false,
        loading: false,
        successMessage: 'Thank you! Your message has been sent successfully. We\'ll get back to you soon.',
        errorMessage: '',

        async submitForm() {
            // Reset messages
            this.success = false;
            this.error = false;
            
            // Validate form
            if (!this.form.name || !this.form.email || !this.form.message) {
                this.error = true;
                this.errorMessage = 'Please fill in all required fields.';
                setTimeout(() => this.error = false, 5000);
                return;
            }

            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(this.form.email)) {
                this.error = true;
                this.errorMessage = 'Please enter a valid email address.';
                setTimeout(() => this.error = false, 5000);
                return;
            }

            this.loading = true;

            try {
                const response = await fetch("{{ route('contact.submit') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}",
                        "Accept": "application/json"
                    },
                    body: JSON.stringify(this.form)
                });

                const data = await response.json();

                if (response.ok && data.success) {
                    this.success = true;
                    this.successMessage = data.message || 'Thank you! Your message has been sent successfully. We\'ll get back to you soon.';
                    
                    // Reset form
                    this.form = {
                        name: '',
                        email: '',
                        services: 'IoT Solutions',
                        message: ''
                    };
                    
                    // Auto-hide success message after 8 seconds
                    setTimeout(() => {
                        this.success = false;
                    }, 8000);
                } else {
                    throw new Error(data.message || 'Something went wrong. Please try again.');
                }
            } catch (error) {
                console.error('Form submission error:', error);
                this.error = true;
                this.errorMessage = error.message || 'Sorry, there was an error sending your message. Please try again or email us directly at sales@greycode.co.za.';
                
                // Auto-hide error message after 8 seconds
                setTimeout(() => {
                    this.error = false;
                }, 8000);
            } finally {
                this.loading = false;
            }
        }
    }));
});
</script>
</x-layout>