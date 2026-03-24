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
                <!-- Left: Description and Syllabus -->
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

                    <!-- Professional Curriculum Section -->
                    @if($training->syllabus)
                    <div class="mt-24 border-t border-gray-100 pt-20">
                        <div class="max-w-xl mb-12">
                            <h2 class="text-3xl font-bold text-gray-900 mb-4 tracking-tight">Academic Curriculum</h2>
                            <p class="text-lg text-gray-500 leading-relaxed font-medium">A structured, comprehensive path designed to transform your professional capabilities from foundation to advanced mastery.</p>
                        </div>
                        
                        @php
                            $lines = explode("\n", $training->syllabus);
                            $modules = [];
                            $currentModule = null;

                            foreach ($lines as $line) {
                                $line = trim($line);
                                if (empty($line)) continue;

                                if (preg_match('/^(Module|Chapter|Section|Step)\s*\d*\s*:?/i', $line) || str_ends_with($line, ':')) {
                                    if ($currentModule) $modules[] = $currentModule;
                                    $currentModule = ['title' => rtrim($line, ':'), 'items' => []];
                                } elseif ($currentModule) {
                                    $currentModule['items'][] = ltrim($line, '-*• ');
                                } else {
                                    $currentModule = ['title' => 'Core Essentials', 'items' => [ltrim($line, '-*• ')]];
                                }
                            }
                            if ($currentModule) $modules[] = $currentModule;
                        @endphp

                        <div class="space-y-4" x-data="{ activeAccordion: 0 }">
                            @foreach($modules as $index => $module)
                            <div class="bg-white rounded-[1.5rem] border border-gray-200/60 overflow-hidden transition-all duration-300 hover:border-indigo-200"
                                 :class="{ 'ring-1 ring-indigo-600/10 border-indigo-200 shadow-xl shadow-indigo-600/5': activeAccordion === {{ $index }} }">
                                <button 
                                    @click="activeAccordion = (activeAccordion === {{ $index }} ? null : {{ $index }})"
                                    class="w-full flex items-center justify-between p-7 text-left focus:outline-none transition-colors"
                                    :class="activeAccordion === {{ $index }} ? 'bg-indigo-50/30' : 'bg-white'"
                                >
                                    <div class="flex items-center gap-6">
                                        <div class="w-10 h-10 rounded-xl flex items-center justify-center transition-all duration-300"
                                             :class="activeAccordion === {{ $index }} ? 'bg-indigo-600 text-white' : 'bg-indigo-50 text-indigo-600'">
                                            <i class="fas fa-book-open text-xs"></i>
                                        </div>
                                        <h3 class="text-xl font-bold text-gray-900 tracking-tight leading-snug">{{ $module['title'] }}</h3>
                                    </div>
                                    <div class="w-8 h-8 rounded-lg flex items-center justify-center transition-all duration-500"
                                         :class="activeAccordion === {{ $index }} ? 'bg-indigo-600 text-white rotate-180' : 'bg-gray-50 text-gray-400'">
                                        <i class="fas fa-chevron-down text-[10px]"></i>
                                    </div>
                                </button>
                                
                                <div x-show="activeAccordion === {{ $index }}" x-collapse x-cloak>
                                    <div class="px-7 pb-8 pt-2 bg-indigo-50/20">
                                        <div class="p-6 md:p-8 bg-white rounded-2xl border border-indigo-100/50 shadow-sm relative overflow-hidden">
                                            <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-4">
                                                @foreach($module['items'] as $item)
                                                <li class="flex items-center group">
                                                    <div class="w-1.5 h-1.5 bg-indigo-200 rounded-full mr-4 group-hover:bg-indigo-600 transition-colors flex-shrink-0"></div>
                                                    <p class="text-sm font-semibold text-gray-700 group-hover:text-indigo-600 transition-colors">{{ $item }}</p>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                        <!-- Certification Badge -->
                        <div class="mt-16 p-8 bg-emerald-50 rounded-[2.5rem] border border-emerald-100 flex flex-col md:flex-row items-center gap-8 shadow-sm">
                            <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center shadow-inner border border-emerald-100 flex-shrink-0">
                                <i class="fas fa-award text-2xl text-emerald-500"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-900 mb-1">Professional Certification</h4>
                                <p class="text-gray-600 font-medium">Earn a verified industry-standard digital certificate upon successful completion of the entire curriculum.</p>
                            </div>
                        </div>
                    </div>
                    @endif
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
                            <h4 class="text-sm font-semibold text-gray-900 mb-4 font-bold">What's Included</h4>
                            <ul class="space-y-4">
                                @php
                                    $perks = [
                                        'Free Internship Opportunity',
                                        'Hands-on Projects',
                                        'Verified Digital Certificate',
                                        'Job Placement Assistance',
                                        'Lifetime Support',
                                    ];
                                @endphp
                                @foreach($perks as $perk)
                                <li class="flex items-start text-sm text-gray-500">
                                    <i class="fas fa-check-circle text-emerald-500 mr-3 mt-1"></i>
                                    {{ $perk }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        [x-cloak] { display: none !important; }
    </style>
</main>
</x-public-layout>
