<x-public-layout>
    <!-- Hero Section -->
    <div id="home" class="relative bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-500 text-white overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.05\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
            <div class="text-center">
                <div class="flex justify-center mb-8">
                    <img src="{{ asset('assets/logo.jpeg') }}" alt="Gorkhabyte Academy" class="h-24 md:h-32 w-auto rounded-lg shadow-2xl">
                </div>
                <h1 class="text-3xl sm:text-5xl md:text-6xl font-extrabold tracking-tight mb-6">
                    Gorkhabyte Academy
                </h1>
                <p class="text-lg md:text-2xl text-indigo-100 mb-8 max-w-3xl mx-auto px-4">
                    Empowering Nepal's next generation of tech leaders through world-class education
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/training" class="inline-flex items-center justify-center px-8 py-4 border-2 border-white text-lg font-semibold rounded-lg text-white hover:bg-white hover:text-indigo-600 transition-all duration-200 shadow-lg">
                        Explore Courses
                    </a>
                    <a href="#about" class="inline-flex items-center justify-center px-8 py-4 bg-white text-lg font-semibold rounded-lg text-indigo-600 hover:bg-indigo-50 transition-all duration-200 shadow-lg">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Wave Shape -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" class="fill-white dark:fill-gray-900 transition-colors duration-300"/>
            </svg>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="py-16 bg-white dark:bg-gray-900 border-b border-gray-100 dark:border-gray-800 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
                <div class="p-4 sm:p-6">
                    <div class="text-3xl sm:text-4xl md:text-5xl font-bold text-indigo-600 dark:text-indigo-400 mb-2">500+</div>
                    <div class="text-gray-600 dark:text-gray-400 font-medium">Students Trained</div>
                </div>
                <div class="p-4 sm:p-6">
                    <div class="text-3xl sm:text-4xl md:text-5xl font-bold text-indigo-600 dark:text-indigo-400 mb-2">15+</div>
                    <div class="text-gray-600 dark:text-gray-400 font-medium">Expert Instructors</div>
                </div>
                <div class="p-4 sm:p-6">
                    <div class="text-3xl sm:text-4xl md:text-5xl font-bold text-indigo-600 dark:text-indigo-400 mb-2">20+</div>
                    <div class="text-gray-600 dark:text-gray-400 font-medium">Courses Offered</div>
                </div>
                <div class="p-4 sm:p-6">
                    <div class="text-3xl sm:text-4xl md:text-5xl font-bold text-indigo-600 dark:text-indigo-400 mb-2">95%</div>
                    <div class="text-gray-600 dark:text-gray-400 font-medium">Job Placement</div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <div id="about" class="py-20 bg-gray-50 dark:bg-gray-800 transition-colors duration-300 scroll-mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">About Gorkhabyte Academy</h2>
                <div class="w-24 h-1 bg-indigo-600 mx-auto"></div>
            </div>
            
            <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
                <div>
                    <p class="text-lg text-gray-700 dark:text-gray-300 mb-6 leading-relaxed">
                        Gorkhabyte Academy is a leading technology training institute in Nepal, dedicated to providing high-quality education in software development, data science, and digital marketing. Our mission is to bridge the gap between academic learning and industry requirements.
                    </p>
                    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed">
                        Founded in 2025, we have successfully trained hundreds of students who are now working in top tech companies across the globe. Our curriculum is designed by industry experts to ensure that our students learn the most relevant and up-to-date technologies.
                    </p>
                </div>
                <div class="relative">
                    <div class="aspect-w-16 aspect-h-9 rounded-lg overflow-hidden shadow-2xl">
                        <img src="{{ asset('assets/logo.jpeg') }}" alt="Gorkhabyte Academy" class="object-cover w-full h-full">
                    </div>
                    <div class="absolute -bottom-6 -left-6 w-72 h-72 bg-indigo-100 dark:bg-indigo-900/20 rounded-lg -z-10"></div>
                </div>
            </div>

            <!-- Mission & Vision Cards -->
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white dark:bg-gray-900 rounded-xl shadow-lg p-8 border-t-4 border-indigo-600 hover:shadow-xl transition-all duration-300">
                    <div class="w-14 h-14 bg-indigo-100 dark:bg-indigo-900/30 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Our Mission</h3>
                    <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                        To empower individuals with the skills and knowledge needed to excel in the digital economy, transforming lives through quality tech education.
                    </p>
                </div>

                <div class="bg-white dark:bg-gray-900 rounded-xl shadow-lg p-8 border-t-4 border-purple-600 hover:shadow-xl transition-all duration-300">
                    <div class="w-14 h-14 bg-purple-100 dark:bg-purple-900/30 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Our Vision</h3>
                    <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                        To be the premier destination for technology education in South Asia, recognized globally for excellence and innovation.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured Training Programs -->
    <div id="training" class="py-20 bg-white dark:bg-gray-900 transition-colors duration-300 scroll-mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">Featured Training Programs</h2>
                <div class="w-24 h-1 bg-indigo-600 mx-auto"></div>
                <p class="mt-4 text-xl text-gray-600 dark:text-gray-400">Master the skills needed for a successful career in tech</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($trainings as $training)
                    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg overflow-hidden border border-gray-100 dark:border-gray-700 hover:shadow-2xl transition-all duration-300 group">
                        <div class="relative h-48 overflow-hidden bg-gray-200 dark:bg-gray-700">
                            @if($training->image)
                                <img src="{{ $training->image }}" alt="{{ $training->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-indigo-50 dark:bg-indigo-900/30">
                                    <svg class="w-16 h-16 text-indigo-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                    </svg>
                                </div>
                            @endif
                            @if($training->price)
                                <div class="absolute top-4 right-4 bg-indigo-600 text-white px-3 py-1 rounded-full text-sm font-bold shadow-lg">
                                    Rs. {{ number_format($training->price) }}
                                </div>
                            @endif
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">{{ $training->title }}</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4 line-clamp-3 text-sm">
                                {{ $training->description }}
                            </p>
                            <div class="flex items-center justify-between mt-6 pt-4 border-t border-gray-50 dark:border-gray-700">
                                <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                    <svg class="w-4 h-4 mr-1 text-indigo-500 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    {{ $training->duration ?? 'Flexible' }}
                                </div>
                                <a href="/training" class="text-indigo-600 dark:text-indigo-400 font-semibold text-sm hover:text-indigo-800 dark:hover:text-indigo-300 transition-colors flex items-center">
                                    View Details
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-12">
                        <p class="text-gray-500 text-lg">No training programs available at the moment.</p>
                    </div>
                @endforelse
            </div>
            
            <div class="mt-16 text-center">
                <a href="/training" class="inline-flex items-center px-8 py-4 bg-indigo-600 text-white font-bold rounded-xl hover:bg-indigo-700 transition-all duration-300 shadow-lg hover:shadow-2xl transform hover:-translate-y-1">
                    Explore All Programs
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Why Choose Us Section -->
    <div id="why-choose-us" class="py-20 bg-white dark:bg-gray-900 transition-colors duration-300 scroll-mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">Why Choose Gorkhabyte Academy?</h2>
                <div class="w-24 h-1 bg-indigo-600 mx-auto mb-6"></div>
                <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
                    We're committed to providing the best learning experience to help you achieve your career goals
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-gradient-to-br from-indigo-50 to-purple-50 dark:from-indigo-900/20 dark:to-purple-900/20 rounded-xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Industry-Relevant Curriculum</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">Courses designed by industry experts with real-world applications and latest technologies</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-purple-900/20 dark:to-pink-900/20 rounded-xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Hands-On Learning</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">Practical projects, live coding sessions, and real-world case studies for better understanding</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-gradient-to-br from-pink-50 to-red-50 dark:from-pink-900/20 dark:to-red-900/20 rounded-xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="w-16 h-16 bg-gradient-to-br from-pink-500 to-red-600 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2-2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Career Support</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">Dedicated job placement assistance, resume building, and interview preparation</p>
                </div>

                <!-- Feature 4 -->
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-blue-900/20 dark:to-indigo-900/20 rounded-xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Expert Instructors</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">Learn from industry professionals with years of experience in top tech companies</p>
                </div>

                <!-- Feature 5 -->
                <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-green-900/20 dark:to-emerald-900/20 rounded-xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Flexible Schedule</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">Weekend and weekday batches available to fit your busy lifestyle</p>
                </div>

                <!-- Feature 6 -->
                <div class="bg-gradient-to-br from-yellow-50 to-orange-50 dark:from-yellow-900/20 dark:to-orange-900/20 rounded-xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="w-16 h-16 bg-gradient-to-br from-yellow-500 to-orange-600 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Industry Certification</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">Receive recognized certificates upon course completion to boost your resume</p>
                </div>

                <!-- Feature 7 -->
                <div class="bg-gradient-to-br from-cyan-50 to-blue-50 dark:from-cyan-900/20 dark:to-blue-900/20 rounded-xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Real Project Portfolio</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">Build impressive portfolio projects to showcase your skills to potential employers</p>
                </div>

                <!-- Feature 8 -->
                <div class="bg-gradient-to-br from-violet-50 to-purple-50 dark:from-violet-900/20 dark:to-purple-900/20 rounded-xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="w-16 h-16 bg-gradient-to-br from-violet-500 to-purple-600 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Lifetime Support</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">Access to alumni community and continuous mentorship even after course completion</p>
                </div>

                <!-- Feature 9 -->
                <div class="bg-gradient-to-br from-rose-50 to-pink-50 dark:from-rose-900/20 dark:to-pink-900/20 rounded-xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="w-16 h-16 bg-gradient-to-br from-rose-500 to-pink-600 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Affordable Pricing</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">Competitive fees with flexible payment options and scholarship opportunities</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Section -->
    <div class="py-20 bg-gray-50 dark:bg-gray-800 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-900 rounded-xl shadow-lg p-8 md:p-12">
                <h3 class="text-3xl font-bold text-gray-900 dark:text-white mb-6 text-center">Our Team</h3>
                <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed text-center max-w-3xl mx-auto">
                    Our team consists of experienced professionals who are passionate about teaching and mentoring. We believe in practical, hands-on learning and provide a supportive environment for our students to grow and succeed in their tech careers.
                </p>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div id="contact" class="bg-gradient-to-r from-indigo-600 to-purple-600 py-16 scroll-mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Ready to Start Your Tech Journey?</h2>
            <p class="text-xl text-indigo-100 mb-8 max-w-2xl mx-auto">
                Join hundreds of successful graduates and transform your career with Gorkhabyte Academy
            </p>
            <a href="/training" class="inline-flex items-center justify-center px-8 py-4 bg-white text-lg font-semibold rounded-lg text-indigo-600 hover:bg-indigo-50 transition-all duration-200 shadow-lg">
                Browse All Courses
            </a>
        </div>
    </div>
</x-public-layout>