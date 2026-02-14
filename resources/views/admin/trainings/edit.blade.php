<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-bold text-2xl text-gray-800 dark:text-gray-100 leading-tight">
                {{ __('Edit Training') }}
            </h2>
            <a href="{{ route('admin.trainings.index') }}" class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-lg font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to List
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-2xl sm:rounded-2xl border border-gray-100 dark:border-gray-700">
                <div class="p-8 sm:p-12">
                    <form action="{{ route('admin.trainings.update', $training) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                        @csrf
                        @method('PUT')

                        <!-- General Information Section -->
                        <div class="space-y-6">
                            <div class="border-b border-gray-100 dark:border-gray-700 pb-4">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">General Information</h3>
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Update the core details of your training program.</p>
                            </div>

                            <div class="space-y-4">
                                <div>
                                    <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Training Title</label>
                                    <input type="text" name="title" id="title" value="{{ old('title', $training->title) }}" 
                                        class="block w-full px-4 py-3 rounded-xl border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-white focus:border-indigo-500 focus:ring-indigo-500 transition duration-200" 
                                        placeholder="e.g. Advanced Web Development" required>
                                    @error('title') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="schedule" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Schedule</label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                </svg>
                                            </div>
                                            <input type="text" name="schedule" id="schedule" value="{{ old('schedule', $training->schedule) }}" 
                                                class="block w-full pl-10 px-4 py-3 rounded-xl border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-white focus:border-indigo-500 focus:ring-indigo-500 transition duration-200" 
                                                placeholder="e.g. Mon - Fri, 7:00 AM">
                                        </div>
                                    </div>

                                    <div>
                                        <label for="duration" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Duration</label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </div>
                                            <input type="text" name="duration" id="duration" value="{{ old('duration', $training->duration) }}" 
                                                class="block w-full pl-10 px-4 py-3 rounded-xl border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-white focus:border-indigo-500 focus:ring-indigo-500 transition duration-200" 
                                                placeholder="e.g. 3 Months">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pricing and Media Section -->
                        <div class="space-y-6">
                            <div class="border-b border-gray-100 dark:border-gray-700 pb-4">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Pricing & Preview</h3>
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Manage the cost and visual representation of the training.</p>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
                                <div>
                                    <label for="price" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Price (NPR)</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <span class="text-gray-500 sm:text-sm font-semibold">Rs.</span>
                                        </div>
                                        <input type="number" step="0.01" name="price" id="price" value="{{ old('price', $training->price) }}" 
                                            class="block w-full pl-10 px-4 py-3 rounded-xl border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-white focus:border-indigo-500 focus:ring-indigo-500 transition duration-200" 
                                            placeholder="0.00">
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Featured Image</label>
                                    <div class="flex items-center space-x-6">
                                        <div class="flex-shrink-0">
                                            <div class="relative group">
                                                <img class="h-20 w-20 object-cover rounded-xl border-2 border-indigo-100 dark:border-indigo-900 shadow-md group-hover:opacity-75 transition duration-200" 
                                                    src="{{ $training->image ? asset($training->image) : 'https://via.placeholder.com/150' }}" 
                                                    alt="Preview" id="image-preview">
                                                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-200">
                                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <input type="file" name="image" id="image" accept="image/*" class="hidden" onchange="previewImage(event)">
                                            <label for="image" class="cursor-pointer inline-flex items-center px-4 py-2 bg-indigo-50 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-400 rounded-lg text-sm font-semibold hover:bg-indigo-100 dark:hover:bg-indigo-900/50 transition">
                                                Change Image
                                            </label>
                                            <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG (max. 2MB)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Description Section -->
                        <div class="space-y-6">
                            <div class="border-b border-gray-100 dark:border-gray-700 pb-4">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Detailed Description</h3>
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Provide a comprehensive overview of the training program.</p>
                            </div>

                            <div>
                                <textarea name="description" id="description" rows="6" 
                                    class="block w-full px-4 py-3 rounded-xl border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-white focus:border-indigo-500 focus:ring-indigo-500 transition duration-200" 
                                    placeholder="Write about the course modules, pre-requisites, and outcomes..." required>{{ old('description', $training->description) }}</textarea>
                            </div>
                        </div>

                        <!-- Actions Section -->
                        <div class="flex items-center justify-end space-x-4 pt-6 border-t border-gray-100 dark:border-gray-700">
                            <a href="{{ route('admin.trainings.index') }}" 
                                class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-gray-700 dark:text-gray-300 rounded-xl font-bold hover:bg-gray-100 dark:hover:bg-gray-800 transition duration-200">
                                Cancel
                            </a>
                            <button type="submit" 
                                class="px-8 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-xl font-bold shadow-lg hover:shadow-indigo-500/30 hover:-translate-y-0.5 transition duration-200">
                                Save Changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewImage(event) {
            const input = event.target;
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('image-preview').src = e.target.result;
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</x-app-layout>

