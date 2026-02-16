<x-public-layout>
    <div class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h1 class="text-4xl sm:text-5xl font-bold text-gray-900">
                    Get in Touch with Gorkha Byte Academy
                </h1>
                <p class="mt-4 text-xl text-gray-600 max-w-3xl mx-auto">
                    Interested in our professional IT training programs or reliable IT services?<br>
                    Fill out the form below — we'll typically respond within 24 hours.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16">
                <!-- Left column - Contact Information -->
                <div class="space-y-10">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Contact Information</h2>
                        <p class="text-lg text-gray-600 mb-8">
                            We're here to help you begin your IT learning journey or solve your technology challenges.
                        </p>

                        <div class="space-y-6">
                            <div class="flex items-start">
                                <svg class="w-7 h-7 text-blue-600 mt-1 mr-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">Our Location</h3>
                                    <p class="text-gray-600 mt-1">Charikot, Dolakha, Nepal</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <svg class="w-7 h-7 text-blue-600 mt-1 mr-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">Email Address</h3>
                                    <p class="text-gray-600 mt-1">gorkhabyteacademy@gmail.com</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <svg class="w-7 h-7 text-blue-600 mt-1 mr-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">Phone / WhatsApp</h3>
                                    <p class="text-gray-600 mt-1">+977 9865438982</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <h3 class="text-xl font-semibold mb-4">Office Hours</h3>
                        <p class="text-gray-600">Sunday – Friday: 7:00 AM – 6:00 PM</p>
                        <p class="text-gray-600 mt-1">Saturday: Closed</p>
                    </div>
                </div>

                <!-- Right column - Contact Form -->
                <div class="bg-white p-8 md:p-10 rounded-2xl shadow-xl border border-gray-100">
                    @if (session('success'))
                        <div class="mb-6 p-5 bg-green-50 border-l-4 border-green-500 text-green-700 rounded-r-lg">
                            <p class="font-medium">{{ session('success') }}</p>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="mb-6 p-5 bg-red-50 border-l-4 border-red-500 text-red-700 rounded-r-lg">
                            <ul class="list-disc pl-5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-7">
                        @csrf

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name *</label>
                                <input 
                                    type="text" 
                                    name="name" 
                                    id="name" 
                                    value="{{ old('name') }}" 
                                    class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-base py-3 px-4" 
                                    placeholder="Your full name"
                                    required
                                >
                            </div>

                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone / WhatsApp *</label>
                                <input 
                                    type="tel" 
                                    name="phone" 
                                    id="phone" 
                                    value="{{ old('phone') }}" 
                                    class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-base py-3 px-4" 
                                    placeholder="+977 98XXXXXXXX"
                                    required
                                >
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address *</label>
                            <input 
                                type="email" 
                                name="email" 
                                id="email" 
                                value="{{ old('email') }}" 
                                class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-base py-3 px-4" 
                                placeholder="yourname@example.com"
                                required
                            >
                        </div>

                        <!-- Subject field (added to prevent validation error) -->
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject *</label>
                            <input 
                                type="text" 
                                name="subject" 
                                id="subject" 
                                value="{{ old('subject') }}" 
                                class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-base py-3 px-4" 
                                placeholder="e.g. Laravel Training Inquiry, Website Development Quote"
                                required
                            >
                        </div>

                        <!-- Radio buttons in one row -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-3">I'm Interested In *</label>
                            <div class="flex flex-wrap gap-x-6 gap-y-3">
                                <label class="flex items-center cursor-pointer group">
                                    <input type="radio" name="type" value="training" 
                                           class="w-5 h-5 text-blue-600 border-gray-300 focus:ring-blue-500" 
                                           {{ old('type') == 'training' ? 'checked' : '' }} required>
                                    <span class="ml-2 text-gray-700 group-hover:text-blue-700 transition">IT Training / Course</span>
                                </label>

                                <label class="flex items-center cursor-pointer group">
                                    <input type="radio" name="type" value="service" 
                                           class="w-5 h-5 text-blue-600 border-gray-300 focus:ring-blue-500" 
                                           {{ old('type') == 'service' ? 'checked' : '' }}>
                                    <span class="ml-2 text-gray-700 group-hover:text-blue-700 transition">IT Services / Support</span>
                                </label>

                                <label class="flex items-center cursor-pointer group">
                                    <input type="radio" name="type" value="both" 
                                           class="w-5 h-5 text-blue-600 border-gray-300 focus:ring-blue-500" 
                                           {{ old('type') == 'both' ? 'checked' : '' }}>
                                    <span class="ml-2 text-gray-700 group-hover:text-blue-700 transition">Both</span>
                                </label>

                                <label class="flex items-center cursor-pointer group">
                                    <input type="radio" name="type" value="general" 
                                           class="w-5 h-5 text-blue-600 border-gray-300 focus:ring-blue-500" 
                                           {{ old('type') == 'general' || old('type') == null ? 'checked' : '' }}>
                                    <span class="ml-2 text-gray-700 group-hover:text-blue-700 transition">General Inquiry</span>
                                </label>
                            </div>
                            @error('type')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="course_or_service" class="block text-sm font-medium text-gray-700 mb-1">Specific Course / Service (optional)</label>
                            <input 
                                type="text" 
                                name="course_or_service" 
                                id="course_or_service" 
                                value="{{ old('course_or_service') }}" 
                                class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-base py-3 px-4" 
                                placeholder="e.g. Web Development with Laravel, Network Setup, Server Maintenance..."
                            >
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Your Message / Questions *</label>
                            <textarea 
                                name="message" 
                                id="message" 
                                rows="5" 
                                class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-base py-3 px-4" 
                                placeholder="Tell us more about your needs, goals, timeline or project..."
                                required
                            >{{ old('message') }}</textarea>
                        </div>

                        <div>
                            <button 
                                type="submit" 
                                class="w-full bg-blue-600 text-white py-4 px-6 rounded-lg font-semibold text-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-200"
                            >
                                Submit Your Inquiry
                            </button>
                        </div>
                    </form>

                    <p class="mt-8 text-center text-sm text-gray-500">
                        We respect your privacy — your information is used only to respond to this inquiry.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>