<x-student-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Recorded Videos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-8">
                <h3 class="text-3xl font-bold text-gray-900">Recorded Video Library</h3>
                <p class="text-gray-600 mt-2 text-lg">Access all your course recordings in one place.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                @forelse($videos as $video)
                    <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 transition hover:shadow-xl hover:-translate-y-1 group">
                        <div class="aspect-video relative overflow-hidden bg-gray-100">
                            @if($video->thumbnail)
                                <img src="{{ asset($video->thumbnail) }}" alt="{{ $video->title }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            @else
                                <div class="w-full h-full flex items-center justify-center">
                                    <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                            @endif
                            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                                <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-white border border-white/30">
                                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M4.516 7.548c0-.923.651-1.623 1.395-1.623.295 0 .566.106.77.281l11.074 4.693c.483.203.734.527.734.826 0 .299-.251.623-.734.826L6.681 17.24a1.144 1.144 0 01-.77.281c-.744 0-1.395-.7-1.395-1.623V7.548z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="absolute bottom-3 right-3 px-2 py-1 bg-black/60 backdrop-blur-sm text-white text-[10px] font-bold rounded uppercase tracking-wider">
                                Video
                            </div>
                        </div>
                        <div class="p-6">
                            <span class="text-xs font-bold text-blue-600 uppercase tracking-widest mb-2 block">{{ $video->training->title }}</span>
                            <h4 class="text-lg font-bold text-gray-900 mb-2 line-clamp-2 leading-tight">{{ $video->title }}</h4>
                            <p class="text-sm text-gray-500 line-clamp-2 mb-6 leading-relaxed">{{ $video->description }}</p>
                            <a href="{{ route('student.videos.show', $video->id) }}" class="w-full inline-flex items-center justify-center px-4 py-3 bg-gray-50 text-gray-900 font-bold rounded-xl hover:bg-gray-100 transition border border-gray-100 group-hover:border-blue-200 group-hover:bg-blue-50 group-hover:text-blue-700">
                                Start Watching
                                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full py-20 text-center bg-white rounded-3xl border border-dashed border-gray-200">
                        <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                        </svg>
                        <h4 class="text-xl font-bold text-gray-900">No videos available yet</h4>
                        <p class="text-gray-500 mt-2">Check back later for new lesson recordings.</p>
                    </div>
                @endforelse
            </div>

            <div class="mt-8">
                {{ $videos->links() }}
            </div>
        </div>
    </div>
</x-student-layout>
