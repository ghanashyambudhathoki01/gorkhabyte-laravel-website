<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-3xl font-bold bg-gradient-to-r from-blue-600 via-cyan-600 to-teal-600 bg-clip-text text-transparent">
                    {{ __('Create New Service') }}
                </h2>
                <p class="mt-1 text-sm text-gray-500">Define a service offering for your portfolio</p>
            </div>
            <a href="{{ route('admin.services.index') }}" 
               class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-gray-200 rounded-xl text-sm font-medium text-gray-700 hover:bg-gray-50 hover:border-gray-300 transition-all duration-200 shadow-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Back to Services
            </a>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <!-- Progress Indicator -->
            <div class="mb-8">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-xs font-semibold text-gray-600 uppercase tracking-wider">Completion Status</span>
                    <span class="text-xs font-semibold text-cyan-600" id="progress-text">0%</span>
                </div>
                <div class="h-2 bg-gray-100 rounded-full overflow-hidden">
                    <div id="progress-bar" class="h-full bg-gradient-to-r from-blue-500 via-cyan-500 to-teal-500 transition-all duration-500 ease-out" style="width: 0%"></div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-xl rounded-2xl border border-gray-100">
                <div class="p-8 lg:p-12">
                    <form action="{{ route('admin.services.store') }}" method="POST" id="service-form" class="space-y-8">
                        @csrf

                        <!-- Service Name -->
                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-900 mb-2">
                                Service Name <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <input type="text"
                                       name="name"
                                       id="name"
                                       maxlength="100"
                                       class="block w-full px-4 py-3 text-gray-900 bg-white border border-gray-200 rounded-xl focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all duration-200"
                                       placeholder="e.g., Web Development"
                                       required>
                                <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                                    <span class="text-xs text-gray-400" id="name-count">0/100</span>
                                </div>
                            </div>
                        </div>

                        <!-- Hidden Icon Input -->
                        <input type="hidden" name="icon" id="icon">

                        <!-- Description -->
                        <div>
                            <label for="description" class="block text-sm font-semibold text-gray-900 mb-2">
                                Service Description <span class="text-red-500">*</span>
                            </label>

                            <textarea name="description"
                                      id="description"
                                      rows="6"
                                      maxlength="500"
                                      class="block w-full px-4 py-4 text-gray-900 bg-white border border-gray-200 rounded-xl focus:ring-2 focus:ring-cyan-500 focus:border-transparent resize-none"
                                      placeholder="Describe your service..."
                                      required></textarea>

                            <div class="mt-2 text-xs text-gray-500 flex justify-between">
                                <span id="desc-word-count">0 words</span>
                                <span id="desc-char-count">0 / 500 characters</span>
                            </div>
                        </div>

                        <!-- Additional Details -->
                        <div class="border border-gray-200 rounded-xl p-6 space-y-4">
                            <h3 class="text-sm font-semibold text-gray-900">Additional Details (Optional)</h3>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="price_range" class="block text-sm font-medium text-gray-700 mb-2">Price Range</label>
                                    <select name="price_range" id="price_range"
                                            class="block w-full px-4 py-3 text-gray-900 bg-white border border-gray-200 rounded-xl focus:ring-2 focus:ring-cyan-500 focus:border-transparent">
                                        <option value="">Select range</option>
                                        <option value="$">$ - Budget</option>
                                        <option value="$$">$$ - Moderate</option>
                                        <option value="$$$">$$$ - Premium</option>
                                        <option value="$$$$">$$$$ - Enterprise</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="delivery_time" class="block text-sm font-medium text-gray-700 mb-2">Delivery Time</label>
                                    <input type="text"
                                           name="delivery_time"
                                           id="delivery_time"
                                           class="block w-full px-4 py-3 text-gray-900 bg-white border border-gray-200 rounded-xl focus:ring-2 focus:ring-cyan-500 focus:border-transparent"
                                           placeholder="e.g., 2-4 weeks">
                                </div>
                            </div>
                        </div>

                        <!-- Buttons -->
                        <div class="flex gap-4 pt-6 border-t border-gray-200">
                            <button type="submit"
                                    class="px-8 py-3 bg-gradient-to-r from-blue-600 via-cyan-600 to-teal-600 text-white rounded-xl font-semibold shadow-lg hover:shadow-xl transition">
                                Create Service
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const nameInput = document.getElementById('name');
            const descriptionInput = document.getElementById('description');

            // Name counter
            nameInput.addEventListener('input', function() {
                document.getElementById('name-count').textContent =
                    this.value.length + '/100';
            });

            // Description counter
            descriptionInput.addEventListener('input', function() {
                const text = this.value;
                const words = text.trim() ? text.trim().split(/\s+/).length : 0;
                const chars = text.length;

                document.getElementById('desc-word-count').textContent =
                    words + ' words';

                document.getElementById('desc-char-count').textContent =
                    chars + ' / 500 characters';
            });

        });
    </script>
    @endpush

</x-app-layout>
