<x-student-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student Portal') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Welcome Section -->
            <div class="bg-indigo-600 rounded-3xl p-8 mb-8 text-white relative overflow-hidden shadow-xl">
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-2">Welcome back, {{ $user->name }}!</h3>
                    <p class="text-indigo-100 text-lg max-w-xl">Continue your learning journey today. Check out the latest recorded videos and keep track of your progress.</p>
                </div>
                <!-- Abstract background elements -->
                <div class="absolute top-0 right-0 -mt-20 -mr-20 w-64 h-64 bg-indigo-500 rounded-full opacity-20"></div>
                <div class="absolute bottom-0 left-0 -mb-20 -ml-20 w-48 h-48 bg-indigo-400 rounded-full opacity-20"></div>
            </div>

            @if(session('success'))
                <div class="mb-8 p-4 bg-green-100 text-green-700 rounded-2xl border border-green-200 shadow-sm">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 transition hover:shadow-md">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500">Available Courses</p>
                            <p class="text-2xl font-bold text-gray-900">{{ $stats['trainings'] }}</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 transition hover:shadow-md">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-purple-50 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500">Recorded Videos</p>
                            <p class="text-2xl font-bold text-gray-900">{{ $stats['videos'] }}</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 transition hover:shadow-md">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-emerald-50 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500">Video Library</p>
                            <p class="text-2xl font-bold text-gray-900 border-b-2 border-emerald-200 inline-block px-1">Access All</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 transition hover:shadow-md">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-amber-50 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500">Feedbacks Given</p>
                            <p class="text-3xl font-bold text-gray-900">{{ $stats['feedbacks'] }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8">
                <!-- Latest Videos (2 cols) -->
                <div class="lg:col-span-2 space-y-6">
                    <div class="flex items-center justify-between">
                        <h4 class="text-xl font-bold text-gray-800 flex items-center">
                            <svg class="w-5 h-5 mr-3 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                            </svg>
                            Latest Recorded Sessions
                        </h4>
                        <a href="{{ route('student.videos.index') }}" class="text-sm font-semibold text-indigo-600 hover:text-indigo-700 hover:underline">View All</a>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @forelse($latestVideos as $video)
                            <a href="{{ route('student.videos.show', $video->id) }}" class="group bg-white p-4 rounded-3xl border border-gray-100 shadow-sm hover:shadow-md transition active:scale-[0.98]">
                                <div class="aspect-video relative rounded-2xl overflow-hidden mb-3 bg-gray-100">
                                    @if($video->thumbnail)
                                        <img src="{{ asset($video->thumbnail) }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                                    @endif
                                    <div class="absolute inset-0 bg-indigo-900/10 group-hover:bg-indigo-900/0 transition"></div>
                                    <div class="absolute bottom-2 right-2 px-2 py-1 bg-white/90 backdrop-blur-sm rounded text-[10px] font-bold text-indigo-600 uppercase tracking-wider">
                                        Watch
                                    </div>
                                </div>
                                <p class="text-xs font-bold text-indigo-500 uppercase tracking-widest mb-1">{{ $video->training->title }}</p>
                                <h5 class="font-bold text-gray-900 line-clamp-1 group-hover:text-indigo-600 transition">{{ $video->title }}</h5>
                            </a>
                        @empty
                            <div class="col-span-full p-8 bg-gray-50 rounded-3xl border border-dashed border-gray-200 text-center">
                                <p class="text-gray-500 font-medium">No videos uploaded yet.</p>
                            </div>
                        @endforelse
                    </div>
                </div>

                <!-- Recent Activity / Programs Side -->
                <div class="space-y-8">
                    <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100">
                        <h4 class="text-xl font-bold mb-6 flex items-center text-gray-800">
                            <svg class="w-5 h-5 mr-3 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                            New Training Programs
                        </h4>
                        <div class="space-y-4">
                            @foreach($recentTrainings as $training)
                                <a href="{{ route('training.show', $training->slug) }}" class="flex items-center group">
                                    <div class="w-12 h-12 rounded-xl overflow-hidden bg-gray-100 mr-4 flex-shrink-0 shadow-sm border border-gray-50">
                                        @if($training->image)
                                            <img src="{{ asset($training->image) }}" class="w-full h-full object-cover">
                                        @endif
                                    </div>
                                    <div class="min-w-0">
                                        <p class="text-sm font-bold text-gray-900 group-hover:text-purple-600 transition truncate">{{ $training->title }}</p>
                                        <p class="text-xs text-gray-500">{{ $training->duration }} • {{ $training->schedule }}</p>
                                    </div>
                                </a>
                            @endforeach
                            <a href="{{ route('training') }}" class="block w-full text-center py-3 mt-4 text-sm font-bold text-gray-500 hover:bg-gray-50 rounded-xl transition border border-gray-100">
                                Browse All Programs
                            </a>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="grid grid-cols-2 gap-4">
                        <a href="{{ route('student.feedback.create') }}" class="flex flex-col items-center justify-center p-6 bg-indigo-600 rounded-3xl transition hover:bg-indigo-700 shadow-lg shadow-indigo-200 group transform active:scale-95">
                            <svg class="w-8 h-8 text-white mb-2 group-hover:scale-110 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                            </svg>
                            <span class="font-bold text-white text-xs text-center">Give Feedback</span>
                        </a>
                        <a href="{{ route('profile.edit') }}" class="flex flex-col items-center justify-center p-6 bg-white rounded-3xl transition hover:bg-gray-50 shadow-sm border border-gray-100 group transform active:scale-95">
                            <svg class="w-8 h-8 text-gray-400 mb-2 group-hover:scale-110 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span class="font-bold text-gray-700 text-xs text-center">My Account</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-student-layout>
