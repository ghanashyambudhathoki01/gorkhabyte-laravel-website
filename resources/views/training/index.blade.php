<x-public-layout>
    <!-- Hero Section -->
    <section class="relative bg-white overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-50/50 via-transparent to-transparent"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
            <div class="max-w-3xl mx-auto text-center">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-indigo-50 text-indigo-700 mb-8">
                    Excellence in Education
                </span>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-medium text-gray-900 tracking-tight mb-6">
                    Transform Your Career
                    <span class="block text-indigo-600 mt-2">With Expert-Led Training</span>
                </h1>
                <p class="text-lg md:text-xl text-gray-600 mb-10 leading-relaxed">
                    Industry-leading programs designed by practitioners to master modern technologies and accelerate your professional journey.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-stretch sm:items-center max-w-sm sm:max-w-none mx-auto">
                    <a href="#trainings" class="inline-flex items-center justify-center px-8 py-4 bg-gray-900 text-white font-medium rounded-2xl hover:bg-gray-800 transition-all duration-300 shadow-lg shadow-gray-900/10">
                        Explore Programs
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                        </svg>
                    </a>
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-4 bg-white text-gray-900 font-medium rounded-2xl border border-gray-200 hover:border-gray-300 hover:bg-gray-50 transition-all duration-300">
                        Schedule Consultation
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Training Programs -->
    <section id="trainings" class="bg-gray-50 py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="max-w-2xl mb-16">
                <span class="text-sm font-semibold text-indigo-600 uppercase tracking-wider">Our Programs</span>
                <h2 class="text-3xl md:text-4xl font-medium text-gray-900 mt-3 mb-4">
                    Curated Learning Paths
                </h2>
                <p class="text-lg text-gray-600">
                    Each program is meticulously crafted to deliver practical skills and industry-recognized expertise.
                </p>
            </div>

            <!-- Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($trainings as $training)
                    <article class="group bg-white rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100">
                        <!-- Image Container -->
                        <div class="relative h-56 bg-gray-100 overflow-hidden">
                            @if($training->image)
                                <img src="{{ $training->image }}" 
                                     alt="{{ $training->title }}" 
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-gray-900/40 via-transparent to-transparent"></div>
                            @else
                                <div class="w-full h-full flex items-center justify-center">
                                    <svg class="w-24 h-24 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                    </svg>
                                </div>
                            @endif
                            
                            @if($training->price)
                                <div class="absolute top-5 right-5">
                                    <span class="inline-flex items-center px-4 py-2 bg-white/95 backdrop-blur-sm rounded-2xl text-sm font-semibold text-gray-900 shadow-lg">
                                        Rs. {{ number_format($training->price) }}
                                    </span>
                                </div>
                            @endif
                        </div>

                        <!-- Content -->
                        <div class="p-8">
                            <h3 class="text-xl font-semibold text-gray-900 mb-3 group-hover:text-indigo-600 transition-colors">
                                {{ $training->title }}
                            </h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-6">
                                {{ Str::limit($training->description, 100) }}
                            </p>

                            <!-- Meta Info -->
                            <div class="space-y-3 mb-6">
                                @if($training->duration)
                                    <div class="flex items-center text-sm">
                                        <div class="w-8 h-8 rounded-xl bg-indigo-50 flex items-center justify-center mr-3">
                                            <svg class="w-4 h-4 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <span class="text-gray-500">Duration:</span>
                                            <span class="font-medium text-gray-900 ml-2">{{ $training->duration }}</span>
                                        </div>
                                    </div>
                                @endif
                                
                                @if($training->schedule)
                                    <div class="flex items-center text-sm">
                                        <div class="w-8 h-8 rounded-xl bg-indigo-50 flex items-center justify-center mr-3">
                                            <svg class="w-4 h-4 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                            </svg>
                                        </div>
                                        <div>
                                            <span class="text-gray-500">Schedule:</span>
                                            <span class="font-medium text-gray-900 ml-2">{{ $training->schedule }}</span>
                                        </div>
                                    </div>
                                @endif
                            </div>

                            <!-- Actions -->
                            <div class="flex gap-3 pt-4 border-t border-gray-100">
                                <a href="{{ route('contact') }}" 
                                   class="flex-1 inline-flex items-center justify-center px-6 py-3 bg-gray-900 text-white text-sm font-medium rounded-xl hover:bg-gray-800 transition-colors shadow-md shadow-gray-900/10">
                                    Enroll Now
                                </a>
                                @if(!$training->price)
                                    <a href="{{ route('contact') }}" 
                                       class="inline-flex items-center justify-center px-6 py-3 border border-gray-200 text-gray-700 text-sm font-medium rounded-xl hover:border-gray-300 hover:bg-gray-50 transition-colors">
                                        Get Quote
                                    </a>
                                @endif
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="col-span-full text-center py-24 bg-white rounded-3xl border border-gray-100">
                        <svg class="w-20 h-20 mx-auto text-gray-200 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                        <p class="text-gray-400 text-lg">New programs are being curated. Stay tuned.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="bg-white py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-sm font-semibold text-indigo-600 uppercase tracking-wider">Why Choose Us</span>
                <h2 class="text-3xl md:text-4xl font-medium text-gray-900 mt-3">
                    A Superior Learning Experience
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center group">
                    <div class="w-20 h-20 mx-auto mb-6 rounded-2xl bg-indigo-50 group-hover:bg-indigo-100 transition-colors flex items-center justify-center">
                        <svg class="w-10 h-10 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Expert Instructors</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Learn from seasoned practitioners with real-world expertise</p>
                </div>

                <div class="text-center group">
                    <div class="w-20 h-20 mx-auto mb-6 rounded-2xl bg-indigo-50 group-hover:bg-indigo-100 transition-colors flex items-center justify-center">
                        <svg class="w-10 h-10 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Hands-on Projects</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Build a portfolio with real-world applications</p>
                </div>

                <div class="text-center group">
                    <div class="w-20 h-20 mx-auto mb-6 rounded-2xl bg-indigo-50 group-hover:bg-indigo-100 transition-colors flex items-center justify-center">
                        <svg class="w-10 h-10 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Flexible Learning</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Study at your own pace with lifetime access</p>
                </div>

                <div class="text-center group">
                    <div class="w-20 h-20 mx-auto mb-6 rounded-2xl bg-indigo-50 group-hover:bg-indigo-100 transition-colors flex items-center justify-center">
                        <svg class="w-10 h-10 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Certification</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Earn industry-recognized credentials</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-gray-900 py-24">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-medium text-white mb-4">
                Begin Your Transformation Today
            </h2>
            <p class="text-lg text-gray-300 mb-10">
                Join a community of learners and take the next step in your professional journey.
            </p>
            <a href="{{ route('contact') }}" 
               class="inline-flex items-center justify-center px-10 py-5 bg-white text-gray-900 font-medium rounded-2xl hover:bg-gray-50 transition-all duration-300 shadow-2xl shadow-white/10 group">
                <span>Start Learning Now</span>
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </section>
</x-public-layout>