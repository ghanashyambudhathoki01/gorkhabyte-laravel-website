<x-student-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student Feedback') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-indigo-600 rounded-3xl p-10 mb-8 text-white relative overflow-hidden shadow-xl">
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-2">Your Feedback Matters!</h3>
                    <p class="text-indigo-100 text-lg">Help us improve our courses and services by sharing your honest feedback and suggestions.</p>
                </div>
                <div class="absolute top-0 right-0 -mt-20 -mr-20 w-64 h-64 bg-white opacity-10 rounded-full"></div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm rounded-3xl border border-gray-100">
                <div class="p-8 text-gray-900">
                    <form action="{{ route('student.feedback.store') }}" method="POST">
                        @csrf
                        
                        <div class="mb-8">
                            <label for="training_id" class="block text-sm font-bold text-gray-700 uppercase tracking-wider mb-2">Training Program</label>
                            <select name="training_id" id="training_id" class="mt-1 block w-full rounded-2xl border-gray-200 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 py-4 px-6 text-lg" required>
                                <option value="">Select the program you're attending</option>
                                @foreach($trainings as $training)
                                    <option value="{{ $training->id }}" {{ old('training_id') == $training->id ? 'selected' : '' }}>{{ $training->title }}</option>
                                @endforeach
                            </select>
                            @error('training_id')
                                <p class="mt-2 text-sm text-red-600 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-8">
                            <label class="block text-sm font-bold text-gray-700 uppercase tracking-wider mb-2">Overall Rating</label>
                            <div class="flex items-center space-x-4 bg-gray-50 p-6 rounded-2xl border border-gray-100">
                                @for($i = 1; $i <= 5; $i++)
                                    <label class="cursor-pointer group flex flex-col items-center">
                                        <input type="radio" name="rating" value="{{ $i }}" class="sr-only peer" required {{ old('rating') == $i ? 'checked' : '' }}>
                                        <svg class="w-12 h-12 text-gray-300 peer-checked:text-yellow-400 group-hover:text-yellow-300 transition" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <span class="text-xs font-bold text-gray-400 mt-1 uppercase">{{ $i }} Star</span>
                                    </label>
                                @endfor
                            </div>
                            @error('rating')
                                <p class="mt-2 text-sm text-red-600 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-8">
                            <label for="comment" class="block text-sm font-bold text-gray-700 uppercase tracking-wider mb-2">Tell us more about your experience</label>
                            <textarea name="comment" id="comment" rows="6" class="mt-1 block w-full rounded-2xl border-gray-200 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 py-4 px-6 text-lg placeholder-gray-400" placeholder="What did you like? What can we improve?" required>{{ old('comment') }}</textarea>
                            @error('comment')
                                <p class="mt-2 text-sm text-red-600 font-medium">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex justify-between items-center mt-10">
                            <a href="{{ route('student.dashboard') }}" class="text-gray-500 hover:text-gray-900 font-bold px-4 py-2">
                                Cancel
                            </a>
                            <button type="submit" class="inline-flex items-center justify-center px-10 py-4 bg-indigo-600 text-white font-bold rounded-2xl hover:bg-indigo-700 transition shadow-lg hover:shadow-indigo-500/30">
                                Send My Feedback
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-student-layout>
