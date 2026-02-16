<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Feedback Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8 text-gray-900">
                    <div class="flex justify-between items-center mb-8 border-b pb-4">
                        <div>
                            <h3 class="text-2xl font-bold">{{ $feedback->user->name }}</h3>
                            <p class="text-gray-600">{{ $feedback->user->email }}</p>
                        </div>
                        <div class="text-right">
                            <p class="text-sm text-gray-500">Submitted on</p>
                            <p class="font-medium">{{ $feedback->created_at->format('F d, Y') }}</p>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div>
                            <h4 class="text-sm font-semibold uppercase tracking-wider text-gray-500 mb-2">Training Program</h4>
                            <p class="text-lg font-medium text-blue-600">{{ $feedback->training->title }}</p>
                        </div>

                        <div>
                            <h4 class="text-sm font-semibold uppercase tracking-wider text-gray-500 mb-2">Rating</h4>
                            <div class="flex text-yellow-400 space-x-1">
                                @for($i = 1; $i <= 5; $i++)
                                    <svg class="w-6 h-6 {{ $i <= $feedback->rating ? 'fill-current' : 'text-gray-300' }}" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                @endfor
                            </div>
                        </div>

                        <div>
                            <h4 class="text-sm font-semibold uppercase tracking-wider text-gray-500 mb-2">Comment</h4>
                            <div class="bg-gray-50 p-6 rounded-xl border italic text-gray-700 leading-relaxed whitespace-pre-wrap">
                                "{{ $feedback->comment }}"
                            </div>
                        </div>
                    </div>

                    <div class="mt-10 flex justify-between items-center border-t pt-6">
                        <a href="{{ route('admin.feedback.index') }}" class="text-gray-600 hover:text-gray-900 flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                            </svg>
                            Back to Feedback List
                        </a>
                        
                        <form action="{{ route('admin.feedback.destroy', $feedback->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this feedback?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 transition">
                                Delete Feedback
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
