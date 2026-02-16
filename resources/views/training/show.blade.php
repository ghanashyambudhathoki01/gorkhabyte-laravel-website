<x-public-layout>
<main class="bg-white min-h-screen">
    <!-- Hero/Header Section -->
    <section class="relative pt-32 pb-20 bg-gray-50 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-50/50 via-transparent to-transparent"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <nav class="flex mb-8" aria-label="Breadcrumb">
                    <ol class="flex items-center space-x-4">
                        <li>
                            <div>
                                <a href="{{ route('home') }}" class="text-gray-400 hover:text-gray-500 transition-colors">
                                    <svg class="h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M9.293 2.293a1 1 0 011.414 0l7 7a1 1 0 010 1.414l-7 7a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-5.293-5.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="h-5 w-5 flex-shrink-0 text-gray-300" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                                <a href="{{ route('training') }}" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Trainings</a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="h-5 w-5 flex-shrink-0 text-gray-300" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                                <span class="ml-4 text-sm font-medium text-indigo-600 truncate max-w-[200px]" aria-current="page">{{ $training->title }}</span>
                            </div>
                        </li>
                    </ol>
                </nav>

                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 tracking-tight mb-6">
                    {{ $training->title }}
                </h1>
                
                @if($training->duration || $training->schedule)
                <div class="flex flex-wrap gap-4 items-center mt-8">
                    @if($training->duration)
                    <div class="inline-flex items-center px-4 py-2 rounded-full bg-white border border-gray-100 shadow-sm">
                        <svg class="w-5 h-5 text-indigo-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span class="text-sm font-medium text-gray-700">{{ $training->duration }}</span>
                    </div>
                    @endif

                    @if($training->schedule)
                    <div class="inline-flex items-center px-4 py-2 rounded-full bg-white border border-gray-100 shadow-sm">
                        <svg class="w-5 h-5 text-indigo-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <span class="text-sm font-medium text-gray-700">{{ $training->schedule }}</span>
                    </div>
                    @endif
                </div>
                @endif
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-16">
                <!-- Left: Description and Details -->
                <div class="lg:col-span-2">
                    <div class="prose prose-lg max-w-none text-gray-600">
                        @if($training->image)
                        <div class="relative rounded-3xl overflow-hidden mb-12 shadow-2xl">
                            <img src="{{ $training->image }}" alt="{{ $training->title }}" class="w-full h-auto object-cover max-h-[500px]">
                        </div>
                        @endif
                        
                        <div class="space-y-6 whitespace-pre-wrap">
                            {!! $training->description !!}
                        </div>
                    </div>

                    <!-- Curriculum or Features if you have them, else just more space -->
                </div>

                <!-- Right: Sidebar/Info Card -->
                <div class="lg:col-span-1">
                    <div class="sticky top-32 p-8 bg-white border border-gray-100 rounded-3xl shadow-xl shadow-gray-200/50">
                        <div class="mb-8">
                            <p class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-2">Program Investment</p>
                            <div class="flex items-baseline gap-2">
                                @if($training->price)
                                <span class="text-4xl font-bold text-gray-900">Rs. {{ number_format($training->price) }}</span>
                                @else
                                <span class="text-3xl font-bold text-gray-900">Custom Quote</span>
                                @endif
                            </div>
                        </div>

                        <div class="space-y-4">
                            <a href="{{ route('contact', ['type' => 'training', 'course' => $training->title]) }}" 
                               class="w-full inline-flex items-center justify-center px-8 py-4 bg-indigo-600 text-white font-semibold rounded-2xl hover:bg-indigo-700 transition-all duration-300 shadow-lg shadow-indigo-600/20 group">
                                <span>Enroll in Program</span>
                                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                            
                            <a href="{{ route('contact') }}" 
                               class="w-full inline-flex items-center justify-center px-8 py-4 bg-white text-gray-900 font-semibold rounded-2xl border border-gray-200 hover:border-gray-300 hover:bg-gray-50 transition-all duration-300">
                                Send Inquiry
                            </a>
                        </div>

                        <div class="mt-8 pt-8 border-t border-gray-100">
                            <h4 class="text-sm font-semibold text-gray-900 mb-4">What's Included</h4>
                            <ul class="space-y-3">
                                <li class="flex items-start text-sm text-gray-500">
                                    <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Expert Instruction
                                </li>
                                <li class="flex items-start text-sm text-gray-500">
                                    <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Hands-on Projects
                                </li>
                                <li class="flex items-start text-sm text-gray-500">
                                    <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Industry-Recognized Certificate
                                </li>
                                <li class="flex items-start text-sm text-gray-500">
                                    <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Post-Training Support
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
</x-public-layout>
