<x-public-layout>
    <!-- Add some custom CSS for micro-animations and gradients -->
    <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.05);
        }
        .text-gradient {
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .premium-hover {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .premium-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px -10px rgba(0,0,0,0.1);
        }
    </style>

    <div class="relative bg-slate-50 min-h-screen overflow-hidden font-sans">
        
        <!-- Stunning Background Elements -->
        <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
            <div class="absolute -top-40 -right-40 w-[600px] h-[600px] rounded-full bg-gradient-to-br from-indigo-100/50 to-blue-200/30 blur-[100px]"></div>
            <div class="absolute top-[40%] -left-60 w-[700px] h-[700px] rounded-full bg-gradient-to-tr from-purple-100/40 to-pink-100/20 blur-[120px]"></div>
            <div class="absolute bottom-0 right-10 w-[500px] h-[500px] rounded-full bg-gradient-to-t from-blue-100/40 to-emerald-50/20 blur-[90px]"></div>
            <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMSIgY3k9IjEiIHI9IjEiIGZpbGw9InJnYmEoMCwwLDAsMC4wMykiLz48L3N2Zz4=')] [mask-image:linear-gradient(to_bottom,white,transparent)] opacity-60"></div>
        </div>

        <!-- Premium Hero Section -->
        <div class="relative z-10 pt-32 pb-20 lg:pt-40 lg:pb-28">
            <div class="max-w-6xl mx-auto px-6 lg:px-8 text-center">
                <div class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-white/60 border border-indigo-100/80 shadow-sm backdrop-blur-md mb-8 premium-hover cursor-default">
                    <span class="flex h-2.5 w-2.5 relative">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-indigo-500"></span>
                    </span>
                    <span class="text-indigo-800 text-sm font-semibold uppercase tracking-widest pl-1">Establishing Excellence</span>
                </div>
                
                <h1 class="text-5xl sm:text-6xl md:text-7xl font-extrabold tracking-tight mb-8">
                    <span class="block text-slate-900 pb-2">We Are</span>
                    <span class="block bg-gradient-to-r from-indigo-600 via-blue-500 to-purple-600 text-gradient pb-2">Gorkhabyte Academy</span>
                </h1>
                
                <p class="text-xl sm:text-2xl text-slate-600 max-w-3xl mx-auto leading-relaxed font-light">
                    Pioneering the next era of technological brilliance by transforming ambitious minds into world-class digital innovators.
                </p>
            </div>
        </div>

        <!-- Introduction Story -->
        <div class="relative z-10 max-w-5xl mx-auto px-6 lg:px-8 pb-24">
            <div class="glass-card rounded-3xl p-10 md:p-14 text-center">
                <p class="text-lg md:text-xl text-slate-700 leading-loose">
                    <span class="font-semibold text-indigo-900">Gorkhabyte Academy</span> stands at the pinnacle of technology education in Nepal. 
                    We curate an immersive ecosystem where aspiring software engineers, data scientists, and digital marketers master their craft. 
                    Our meticulously architected curriculum, forged by veteran industry leaders, ensures that every graduate is not just prepared for the industry—but ready to redefine it.
                </p>
            </div>
        </div>

        <!-- Core Pillars Grid -->
        <div class="relative z-10 bg-white/40 border-y border-white/60 py-24 backdrop-blur-sm">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-5xl font-bold text-slate-900 mb-4">Our Foundational Pillars</h2>
                    <div class="w-24 h-1.5 bg-gradient-to-r from-indigo-500 to-purple-500 mx-auto rounded-full"></div>
                </div>

                <div class="grid md:grid-cols-3 gap-8 lg:gap-12">
                    <!-- Mission -->
                    <div class="group h-full">
                        <div class="h-full bg-white rounded-[2rem] p-10 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(59,130,246,0.15)] transition-all duration-500 border border-slate-100 premium-hover flex flex-col items-center text-center">
                            <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-blue-50 to-indigo-50 flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-500">
                                <svg class="w-10 h-10 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-4">Our Mission</h3>
                            <p class="text-slate-600 leading-relaxed text-lg">
                                To engineer a future where specialized technology skills are accessible, empowering individuals to command the digital economy.
                            </p>
                        </div>
                    </div>

                    <!-- Vision -->
                    <div class="group h-full md:-translate-y-8">
                        <div class="h-full bg-white rounded-[2rem] p-10 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(168,85,247,0.15)] transition-all duration-500 border border-slate-100 premium-hover flex flex-col items-center text-center relative overflow-hidden">
                            <div class="absolute top-0 right-0 w-32 h-32 bg-purple-50 rounded-bl-full -z-10 transition-transform duration-500 group-hover:scale-150"></div>
                            <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-purple-50 to-fuchsia-50 flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-500">
                                <svg class="w-10 h-10 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-4">Our Vision</h3>
                            <p class="text-slate-600 leading-relaxed text-lg">
                                To emerge as the continent's most prestigious sanctuary for technical excellence and visionary leadership.
                            </p>
                        </div>
                    </div>

                    <!-- Team Impact -->
                    <div class="group h-full">
                        <div class="h-full bg-white rounded-[2rem] p-10 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(16,185,129,0.15)] transition-all duration-500 border border-slate-100 premium-hover flex flex-col items-center text-center">
                            <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-emerald-50 to-teal-50 flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-500">
                                <svg class="w-10 h-10 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-4">Our Culture</h3>
                            <p class="text-slate-600 leading-relaxed text-lg">
                                Driven by industry veterans, we foster a culture of relentless innovation, deep mentorship, and practical mastery.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Premium Members Section -->
        @if(isset($mentors) && $mentors->count() > 0)
        <div class="relative z-10 py-24 bg-slate-50">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold text-slate-900 mb-6 drop-shadow-sm">Meet Our Team Members</h2>
                    <p class="text-xl text-slate-500 max-w-2xl mx-auto font-light">
                        Learn directly from the architects of tomorrow. Our members are elite professionals dedicated to your growth.
                    </p>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-x-8 gap-y-12">
                    @foreach($mentors as $mentor)
                        <div class="group relative bg-white rounded-[2rem] overflow-hidden border border-slate-100 shadow-[0_4px_20px_rgb(0,0,0,0.03)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] transition-all duration-500 flex flex-col">
                            
                            <!-- Image Container -->
                            <div class="relative h-72 w-full overflow-hidden bg-slate-100">
                                @if($mentor->image)
                                    <!-- Grayscale by default, color on hover -->
                                    <img src="{{ Storage::url($mentor->image) }}" alt="{{ $mentor->name }}" 
                                         class="w-full h-full object-cover object-top transition-all duration-700 ease-in-out filter grayscale group-hover:grayscale-0 group-hover:scale-105">
                                @else
                                    <div class="w-full h-full flex flex-col items-center justify-center text-slate-300 bg-gradient-to-br from-slate-100 to-slate-200">
                                        <svg class="w-20 h-20 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                @endif
                                
                                <!-- Gradient Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-60 group-hover:opacity-80 transition-opacity duration-300"></div>
                                
                                <!-- Name & Title overlaid slightly -->
                                <div class="absolute bottom-4 left-6 right-6">
                                    <h3 class="text-2xl font-bold text-white tracking-wide mb-1">{{ $mentor->name }}</h3>
                                    @if($mentor->designation)
                                        <div class="inline-block px-3 py-1 bg-white/20 backdrop-blur-md rounded-full text-white/90 text-xs font-semibold tracking-wider uppercase">
                                            {{ $mentor->designation }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            
                            <!-- Bio text below -->
                            <div class="p-6 flex-grow bg-white relative">
                                <!-- Elegant top border effect -->
                                <div class="absolute top-0 left-0 w-0 h-1 bg-gradient-to-r from-indigo-500 to-purple-500 group-hover:w-full transition-all duration-500 ease-out"></div>
                                
                                @if($mentor->bio)
                                    <p class="text-slate-600 text-sm leading-relaxed font-medium">
                                        {{ $mentor->bio }}
                                    </p>
                                @else
                                    <p class="text-slate-400 text-sm italic">
                                        No biography available.
                                    </p>
                                @endif
                                
                                <!-- Social links at the bottom -->
                                <div class="mt-6 flex justify-center space-x-4 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">
                                    @if($mentor->linkedin_url)
                                        <a href="{{ $mentor->linkedin_url }}" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-indigo-600 transition-colors">
                                            <i class="fab fa-linkedin text-xl"></i>
                                        </a>
                                    @endif
                                    @if($mentor->github_url)
                                        <a href="{{ $mentor->github_url }}" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-slate-900 transition-colors">
                                            <i class="fab fa-github text-xl"></i>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif

        <!-- Striking Stats Section -->
        <div class="relative z-10 bg-slate-900 py-24 mt-0">
            <!-- Dark texture/glow -->
            <div class="absolute inset-0 overflow-hidden">
                <div class="absolute -top-40 -left-40 w-[500px] h-[500px] rounded-full bg-indigo-600/20 blur-[120px]"></div>
                <div class="absolute bottom-0 right-0 w-[400px] h-[400px] rounded-full bg-blue-600/20 blur-[100px]"></div>
            </div>
            
            <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-12 divide-x divide-white/10">
                    <div class="text-center px-4">
                        <div class="text-5xl md:text-6xl font-black text-white mb-2 tracking-tighter drop-shadow-lg">50<span class="text-indigo-400">+</span></div>
                        <div class="text-sm md:text-base text-slate-400 uppercase tracking-widest font-semibold font-mono">Students Trained</div>
                    </div>
                    <div class="text-center px-4">
                        <div class="text-5xl md:text-6xl font-black text-white mb-2 tracking-tighter drop-shadow-lg">95<span class="text-blue-400">%</span></div>
                        <div class="text-sm md:text-base text-slate-400 uppercase tracking-widest font-semibold font-mono">Job Placement</div>
                    </div>
                    <div class="text-center px-4">
                        <div class="text-5xl md:text-6xl font-black text-white mb-2 tracking-tighter drop-shadow-lg">5<span class="text-purple-400">+</span></div>
                        <div class="text-sm md:text-base text-slate-400 uppercase tracking-widest font-semibold font-mono">Expert Members</div>
                    </div>
                    <div class="text-center px-4">
                        <div class="text-5xl md:text-6xl font-black text-white mb-2 tracking-tighter drop-shadow-lg">15<span class="text-emerald-400">+</span></div>
                        <div class="text-sm md:text-base text-slate-400 uppercase tracking-widest font-semibold font-mono">Industry Partners</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-public-layout>