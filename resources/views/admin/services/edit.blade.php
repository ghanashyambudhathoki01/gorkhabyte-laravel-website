<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-bold text-2xl text-gray-800 dark:text-gray-100 leading-tight">
                {{ __('Edit Service') }}
            </h2>
            <a href="{{ route('admin.services.index') }}" class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-lg font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150">
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
                    <form action="{{ route('admin.services.update', $service) }}" method="POST" class="space-y-8">
                        @csrf
                        @method('PUT')

                        <!-- General Information Section -->
                        <div class="space-y-6">
                            <div class="border-b border-gray-100 dark:border-gray-700 pb-4">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Service Details</h3>
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Update the core information about this service.</p>
                            </div>

                            <div class="space-y-4">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Service Name</label>
                                    <input type="text" name="name" id="name" value="{{ old('name', $service->name) }}" 
                                        class="block w-full px-4 py-3 rounded-xl border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-white focus:border-indigo-500 focus:ring-indigo-500 transition duration-200" 
                                        placeholder="e.g. Custom Software Development" required>
                                    @error('name') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                                </div>

                                <div>
                                    <label for="icon" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Icon (FontAwesome class or SVG URL)</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                                            </svg>
                                        </div>
                                        <input type="text" name="icon" id="icon" value="{{ old('icon', $service->icon) }}" 
                                            class="block w-full pl-10 px-4 py-3 rounded-xl border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-white focus:border-indigo-500 focus:ring-indigo-500 transition duration-200" 
                                            placeholder="e.g. fas fa-code or /assets/icon.svg">
                                    </div>
                                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">Use a FontAwesome icon class or a path to an SVG file.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Description Section -->
                        <div class="space-y-6">
                            <div class="border-b border-gray-100 dark:border-gray-700 pb-4">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Service Description</h3>
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Describe what this service offers to our clients.</p>
                            </div>

                            <div>
                                <textarea name="description" id="description" rows="5" 
                                    class="block w-full px-4 py-3 rounded-xl border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-white focus:border-indigo-500 focus:ring-indigo-500 transition duration-200" 
                                    placeholder="Briefly explain the service, its key features, and benefits..." required>{{ old('description', $service->description) }}</textarea>
                                @error('description') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <!-- Actions Section -->
                        <div class="flex items-center justify-end space-x-4 pt-6 border-t border-gray-100 dark:border-gray-700">
                            <a href="{{ route('admin.services.index') }}" 
                                class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-gray-700 dark:text-gray-300 rounded-xl font-bold hover:bg-gray-100 dark:hover:bg-gray-800 transition duration-200">
                                Cancel
                            </a>
                            <button type="submit" 
                                class="px-8 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-xl font-bold shadow-lg hover:shadow-blue-500/30 hover:-translate-y-0.5 transition duration-200">
                                Update Service
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

