<x-layout>
    <x-slot name="title">Blog - Greycode</x-slot>
    <x-slot name="meta_description">Stay updated with the latest news and insights from Greycode, your partner in IoT solutions.</x-slot>

    {{-- Hero Section --}}
    <section class="bg-gradient-to-r from-blue-600 to-greycode-dark-blue dark:from-blue-900 dark:to-greycode-mid-blue text-white py-16">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-5xl md:text-6xl font-bold mb-4">
                Blog
            </h1>
            <p class="text-xl md:text-2xl mb-8 opacity-90" data-aos="fade-up" data-aos-duration="500">
                Learn, Build, Innovate
            </p>
            <p class="text-lg max-w-2xl mx-auto opacity-80" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                Discover educational tutorials, industry insights, and thought-provoking articles on technology and innovation.
            </p>
        </div>
    </section>

    {{-- Blog Categories --}}
    <section class="bg-gray-50 dark:bg-neutral-800 py-8">
        <div class="container mx-auto px-6">
            <div class="flex flex-wrap justify-center gap-4" data-aos="fade-up" data-aos-duration="500">
                <button class="category-filter px-4 py-2 rounded-full bg-white dark:bg-neutral-700 shadow-sm border border-gray-200 dark:border-neutral-600 text-gray-700 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-all duration-300 active" data-category="industry">
                    Industry
                </button>
                <button class="category-filter px-4 py-2 rounded-full bg-white dark:bg-neutral-700 shadow-sm border border-gray-200 dark:border-neutral-600 text-gray-700 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-all duration-300" data-category="articles">
                    Articles
                </button>
                <button class="category-filter px-4 py-2 rounded-full bg-white dark:bg-neutral-700 shadow-sm border border-gray-200 dark:border-neutral-600 text-gray-700 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-all duration-300" data-category="education">
                    Education
                </button>
                <button class="category-filter px-4 py-2 rounded-full bg-white dark:bg-neutral-700 shadow-sm border border-gray-200 dark:border-neutral-600 text-gray-700 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-all duration-300" data-category="all">
                    All Posts
                </button>
            </div>
        </div>
    </section>

    {{-- Blog Posts Grid --}}
    <section class="py-12 bg-white dark:bg-neutral-800">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="blog-grid">
                @foreach($blogPosts as $post)
                    <article class="blog-post bg-white dark:bg-neutral-700 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 dark:border-neutral-600"
                             data-category="{{ $post['category'] }}"
                             data-aos="fade-up" data-aos-duration="500" data-aos-delay="{{ $loop->index * 50 }}">
                        <a href="{{ $post['url'] }}" class="block group">
                            <div class="relative overflow-hidden">
                                <img
                                    src="{{ $post['image'] }}"
                                    alt="{{ $post['title'] }}"
                                    class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500"
                                    loading="lazy"
                                >
                                <div class="absolute top-4 left-4">
                                    <span class="px-3 py-1 text-xs font-semibold rounded-full
                                        {{ $post['category'] === 'education' ? 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200' : '' }}
                                        {{ $post['category'] === 'industry' ? 'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200' : '' }}
                                        {{ $post['category'] === 'articles' ? 'bg-purple-100 text-purple-800 dark:bg-purple-900 dark:text-purple-200' : '' }}">
                                        {{ $post['category_label'] }}
                                    </span>
                                </div>
                            </div>

                            <div class="p-6">
                                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors duration-300 line-clamp-2">
                                    {{ $post['title'] }}
                                </h3>

                                <p class="text-gray-600 dark:text-gray-300 mb-4 line-clamp-3">
                                    {{ $post['excerpt'] }}
                                </p>

                                <div class="flex items-center justify-between text-sm text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center space-x-2">
                                        <span class="font-semibold">{{ $post['author'] }}</span>
                                        <span>•</span>
                                        <span>{{ $post['date'] }}</span>
                                    </div>
                                    <span class="text-blue-600 dark:text-blue-400 group-hover:translate-x-1 transition-transform duration-300">
                                        Read More →
                                    </span>
                                </div>
                            </div>
                        </a>
                    </article>
                @endforeach
            </div>

            {{-- Load More Button --}}
            @if(count($blogPosts) >= 9)
                <div class="text-center mt-12" data-aos="fade-up" data-aos-duration="500">
                    <x-button id="load-more" variant="primary" size="lg">Load More Articles</x-button>
                </div>
            @endif
        </div>
    </section>

    {{-- Newsletter Subscription Section --}}
    <section class="bg-black py-8 text-white">
        <div class="container mx-auto px-4 py-6 lg:px-40">
            <div x-data="newsletterForm" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex flex-col justify-center">
                    <h5 class="text-4xl font-semibold lg:pr-30 lg:pl-24">
                        <span class="text-greycode-light-blue">Subscribe</span> to get more content News and opinion on everything Internet of Things
                    </h5>
                </div>
                <form @submit.prevent="submitForm" action="{{ route('subscribe') }}" method="POST">
                    @csrf
                    <label for="email" class="block mb-2">Email</label>
                    <input type="email"
                        id="email"
                        name="email"
                        x-model="email"
                        required
                        class="bg-white border border-gray-300 rounded-md px-4 py-2 w-full text-black focus:outline-none focus:ring-2 focus:ring-greycode-light-blue mb-4"
                        placeholder="Enter your email">
                    <div>
                        <x-button type="submit" variant="primary" size="lg">Subscribe</x-button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>

{{-- Alpine.js for newsletter form --}}
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('newsletterForm', () => ({
            email: '',
            async submitForm() {
                try {
                    await fetch("{{ route('subscribe') }}", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": "{{ csrf_token() }}"
                        },
                        body: JSON.stringify({ email: this.email })
                    });
                    alert("Subscribed successfully!");
                    this.email = '';
                } catch (error) {
                    alert("Subscription failed.");
                }
            }
        }));
    });
</script>

{{-- Category Filter Script --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const categoryFilters = document.querySelectorAll('.category-filter');
        const blogPosts = document.querySelectorAll('.blog-post');

        categoryFilters.forEach(filter => {
            filter.addEventListener('click', function() {
                categoryFilters.forEach(f => f.classList.remove('active', 'bg-greycode-light-blue', 'text-white'));
                this.classList.add('active', 'bg-greycode-light-blue', 'text-white');

                const category = this.getAttribute('data-category');

                blogPosts.forEach(post => {
                    if (category === 'all' || post.getAttribute('data-category') === category) {
                        post.classList.remove('hidden');
                    } else {
                        post.classList.add('hidden');
                    }
                });
            });
        });

        const loadMoreBtn = document.getElementById('load-more');
        if (loadMoreBtn) {
            loadMoreBtn.addEventListener('click', function() {
                // Placeholder for pagination/AJAX loading
                alert('Load more functionality would be implemented with Laravel pagination or AJAX loading.');
            });
        }
    });
</script>

<style>
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .category-filter.active {
        background: linear-gradient(135deg, #3b82f6, #8b5cf6);
        color: white;
        border-color: #3b82f6;
    }
    .blog-post.hidden {
        display: none;
    }
</style>