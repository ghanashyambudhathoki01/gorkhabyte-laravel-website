<x-student-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $video->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Video Player Section -->
                <div class="lg:col-span-2">
                    <div class="bg-black rounded-3xl overflow-hidden shadow-2xl aspect-video relative group">
                        @php
                            $isFullIframe = str_starts_with(trim($video->video_url), '<iframe');
                            $isEmbedUrl = str_contains($video->video_url, 'youtube.com') || str_contains($video->video_url, 'vimeo.com') || str_contains($video->video_url, 'embed');
                        @endphp

                        @if($isFullIframe)
                            <div class="video-container absolute inset-0 w-full h-full">
                                {!! $video->video_url !!}
                                <style>
                                    .video-container iframe {
                                        width: 100% !important;
                                        height: 100% !important;
                                        position: absolute;
                                        top: 0;
                                        left: 0;
                                    }
                                </style>
                            </div>
                        @elseif($isEmbedUrl)
                            <iframe 
                                src="{{ $video->video_url }}" 
                                class="absolute inset-0 w-full h-full border-0" 
                                allowfullscreen
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            ></iframe>
                        @else
                            <video controls class="absolute inset-0 w-full h-full" poster="{{ asset($video->thumbnail) }}">
                                <source src="{{ $video->video_url }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        @endif
                    </div>

                    <div class="mt-8 bg-white p-8 rounded-3xl shadow-sm border border-gray-100">
                        <div class="flex flex-wrap items-center justify-between mb-6 gap-4">
                            <div>
                                <span class="text-xs font-bold text-blue-600 uppercase tracking-widest mb-2 block">{{ $video->training->title }}</span>
                                <h1 class="text-3xl font-bold text-gray-900">{{ $video->title }}</h1>
                            </div>
                            <div class="flex items-center space-x-2 text-sm text-gray-500 bg-gray-50 px-4 py-2 rounded-full border border-gray-100">
                                <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Verified Course Content</span>
                            </div>
                        </div>
                        
                        <div class="prose prose-blue max-w-none text-gray-600 leading-relaxed">
                            {!! nl2br(e($video->description)) !!}
                        </div>
                    </div>
                </div>

                <!-- Sidebar Section -->
                <div class="lg:col-span-1 space-y-8">
                    <!-- Instructor / Info Card -->
                    <div class="bg-gradient-to-br from-indigo-500 to-blue-600 p-8 rounded-3xl text-white shadow-lg relative overflow-hidden">
                        <div class="relative z-10">
                            <h4 class="text-xl font-bold mb-4">Course Info</h4>
                            <div class="space-y-4">
                                <div class="flex items-center">
                                    <div class="w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center mr-4 backdrop-blur-sm">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-xs text-indigo-100">Duration</p>
                                        <p class="font-bold">{{ $video->training->duration ?? 'Ongoing' }}</p>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center mr-4 backdrop-blur-sm">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-xs text-indigo-100">Frequency</p>
                                        <p class="font-bold">{{ $video->training->schedule ?? 'Flexible' }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-8">
                                <a href="{{ route('student.feedback.create') }}" class="w-full inline-flex items-center justify-center px-4 py-3 bg-white text-blue-600 font-bold rounded-xl hover:bg-indigo-50 transition shadow-sm">
                                    Rate this Session
                                </a>
                            </div>
                        </div>
                        <div class="absolute top-0 right-0 -mt-10 -mr-10 w-32 h-32 bg-white opacity-10 rounded-full"></div>
                    </div>

                    <!-- Other Sessions / Up Next -->
                    <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100">
                        <h4 class="text-xl font-bold mb-6 text-gray-800">Learning Path</h4>
                        <div class="space-y-4">
                            @foreach($video->training->videos as $related)
                                <a href="{{ route('student.videos.show', $related->id) }}" class="flex items-center p-3 rounded-2xl transition {{ $related->id == $video->id ? 'bg-blue-50 border border-blue-100' : 'hover:bg-gray-50 border border-transparent' }}">
                                    <div class="w-16 h-10 bg-gray-200 rounded-lg mr-4 overflow-hidden flex-shrink-0 relative">
                                        @if($related->thumbnail)
                                            <img src="{{ asset($related->thumbnail) }}" class="w-full h-full object-cover">
                                        @endif
                                        @if($related->id == $video->id)
                                            <div class="absolute inset-0 bg-blue-600/20 flex items-center justify-center">
                                                <div class="w-2 h-2 bg-blue-600 rounded-full animate-pulse"></div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="min-w-0">
                                        <p class="text-sm font-bold text-gray-900 truncate {{ $related->id == $video->id ? 'text-blue-700' : '' }}">{{ $related->title }}</p>
                                        <p class="text-[10px] text-gray-500 uppercase tracking-widest font-bold">Session {{ $loop->iteration }}</p>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-student-layout>
