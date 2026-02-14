<x-public-layout>
    <!-- Hero Section -->
    <div class="relative overflow-hidden bg-gradient-to-b from-slate-50 via-white to-white py-20 sm:py-28">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#8080800a_1px,transparent_1px),linear-gradient(to_bottom,#8080800a_1px,transparent_1px)] bg-[size:14px_24px] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)]"></div>
        
        <div class="relative max-w-4xl mx-auto px-6 lg:px-8">
            <div class="text-center space-y-6">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-indigo-50 text-indigo-700 text-sm font-medium border border-indigo-100">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
                    </svg>
                    What We Offer
                </div>
                
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight text-gray-900 leading-tight">
                    Our Services
                </h1>
                
                <p class="text-lg sm:text-xl text-gray-600 leading-relaxed max-w-2xl mx-auto">
                    Comprehensive technology solutions designed to empower your business and accelerate your digital transformation journey
                </p>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($services as $service)
                    <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300 flex flex-col">
                        {{-- Service Image / Placeholder --}}
                        <div class="w-full h-48 bg-gray-200 flex items-center justify-center overflow-hidden">
                            @if($service->icon && (str_starts_with($service->icon, 'http') || str_contains($service->icon, '/storage/')))
                                <img src="{{ $service->icon }}" alt="{{ $service->name }}" class="w-full h-full object-cover">
                            @else
                                {{-- Use Academy Logo as fallback for services if no specific image is provided --}}
                                <img src="{{ asset('assets/logo.jpeg') }}" alt="{{ $service->name }}" class="w-full h-full object-contain p-8 opacity-50">
                            @endif
                        </div>
                        
                        <div class="p-6 flex-grow">
                            <h3 class="text-xl font-bold mb-4 text-gray-900">
                                {{ $service->name }}
                            </h3>
                            
                            <p class="text-gray-600 mb-6 line-clamp-3">
                                {{ $service->description }}
                            </p>
                            
                            <div x-data="{ open: false }" class="mt-auto">
                                <div x-show="open" 
                                     x-transition
                                     class="mb-4 text-gray-600 space-y-3 text-sm">
                                    {{-- Full description or more details could go here if available --}}
                                    <p>{{ $service->description }}</p>
                                </div>

                                <button 
                                    @click="open = !open"
                                    class="inline-flex items-center gap-2 text-indigo-600 font-semibold hover:gap-3 transition-all duration-300">
                                    <span x-text="open ? 'Read Less' : 'Read More'"></span>
                                    <svg class="w-4 h-4 transition-transform duration-300"
                                         :class="{ 'rotate-90': open }"
                                         fill="none"
                                         stroke="currentColor"
                                         viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                              d="M9 5l7 7-7 7"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-20">
                        <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-gray-100 mb-6">
                            <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">No Services Available</h3>
                        <p class="text-gray-600">We're working on bringing you amazing services. Check back soon!</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <!-- Call to Action Section -->
    <div class="relative overflow-hidden bg-gradient-to-br from-indigo-600 to-purple-600 py-20">
        <!-- Subtle Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff1a_1px,transparent_1px),linear-gradient(to_bottom,#ffffff1a_1px,transparent_1px)] bg-[size:24px_24px]"></div>
        </div>
        
        <div class="relative max-w-4xl mx-auto px-6 lg:px-8 text-center">
            <div class="space-y-8">
                <!-- Heading -->
                <div class="space-y-4">
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white leading-tight">
                        Need a Custom Solution?
                    </h2>
                    <p class="text-lg sm:text-xl text-indigo-50 leading-relaxed max-w-2xl mx-auto">
                        Let's discuss how we can help transform your business with our tailored technology solutions
                    </p>
                </div>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-stretch sm:items-center pt-4 max-w-sm sm:max-w-none mx-auto">
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 bg-white text-indigo-600 px-8 py-4 rounded-full font-semibold shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300">
                        <span>Contact Us Today</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    
                    <a href="#services" class="inline-flex items-center justify-center gap-2 text-white border-2 border-white/30 px-8 py-4 rounded-full font-semibold hover:bg-white/10 hover:border-white/50 transition-all duration-300">
                        <span>Explore Services</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>