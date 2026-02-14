<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center shadow-lg">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-gray-900">
                        {{ __('Create New Training') }}
                    </h2>
                    <p class="text-sm text-gray-500 mt-1">Add a new training program to your catalog</p>
                </div>
            </div>
            <a href="{{ route('admin.trainings.index') }}" 
               class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all duration-200">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Back to List
            </a>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Progress Indicator -->
            <div class="mb-8">
                <div class="flex items-center justify-between text-sm">
                    <span class="text-gray-600 font-medium">Step 1 of 1</span>
                    <span class="text-gray-500">Training Details</span>
                </div>
                <div class="mt-2 w-full bg-gray-200 rounded-full h-2 overflow-hidden">
                    <div class="bg-gradient-to-r from-indigo-500 to-purple-600 h-2 rounded-full transition-all duration-500" style="width: 100%"></div>
                </div>
            </div>

            <!-- Main Form Card -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
                <form action="{{ route('admin.trainings.store') }}" method="POST" id="trainingForm" class="p-8 space-y-8" enctype="multipart/form-data">
                    @csrf

                    <!-- Basic Information Section -->
                    <div class="space-y-6">
                        <div class="flex items-center space-x-3 pb-4 border-b border-gray-200">
                            <div class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">Basic Information</h3>
                                <p class="text-sm text-gray-500">Essential details about the training program</p>
                            </div>
                        </div>

                        <!-- Title Field -->
                        <div class="space-y-2">
                            <label for="title" class="block text-sm font-semibold text-gray-700">
                                Training Title <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <input type="text" 
                                       name="title" 
                                       id="title" 
                                       placeholder="e.g., Advanced Leadership Development Program"
                                       class="block w-full px-4 py-3.5 text-gray-900 bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200 placeholder-gray-400 hover:border-gray-400"
                                       required>
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                    </svg>
                                </div>
                            </div>
                            <p class="text-xs text-gray-500 flex items-center">
                                <svg class="w-3.5 h-3.5 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                </svg>
                                Choose a clear, descriptive title that highlights the training's value
                            </p>
                        </div>

                        <!-- Description Field -->
                        <div class="space-y-2">
                            <label for="description" class="block text-sm font-semibold text-gray-700">
                                Description <span class="text-red-500">*</span>
                            </label>
                            <textarea name="description" 
                                      id="description" 
                                      rows="6" 
                                      placeholder="Provide a detailed description of the training program, including objectives, key learning outcomes, and target audience..."
                                      class="block w-full px-4 py-3.5 text-gray-900 bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200 placeholder-gray-400 resize-none hover:border-gray-400"
                                      required></textarea>
                            <div class="flex items-center justify-between text-xs text-gray-500">
                                <span class="flex items-center">
                                    <svg class="w-3.5 h-3.5 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                    </svg>
                                    Include learning outcomes and target audience
                                </span>
                                <span id="charCount" class="text-gray-400">0 characters</span>
                            </div>
                        </div>
                    </div>

                    <!-- Schedule & Duration Section -->
                    <div class="space-y-6">
                        <div class="flex items-center space-x-3 pb-4 border-b border-gray-200">
                            <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">Schedule & Duration</h3>
                                <p class="text-sm text-gray-500">When and how long the training runs</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Schedule Field -->
                            <div class="space-y-2">
                                <label for="schedule" class="block text-sm font-semibold text-gray-700">
                                    Schedule
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <input type="text" 
                                           name="schedule" 
                                           id="schedule" 
                                           placeholder="e.g., Mon-Fri, 9 AM - 5 PM"
                                           class="block w-full pl-10 pr-4 py-3.5 text-gray-900 bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-200 placeholder-gray-400 hover:border-gray-400">
                                </div>
                                <p class="text-xs text-gray-500">Specify days and times for the training</p>
                            </div>

                            <!-- Duration Field -->
                            <div class="space-y-2">
                                <label for="duration" class="block text-sm font-semibold text-gray-700">
                                    Duration
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </div>
                                    <input type="text" 
                                           name="duration" 
                                           id="duration" 
                                           placeholder="e.g., 4 weeks, 40 hours"
                                           class="block w-full pl-10 pr-4 py-3.5 text-gray-900 bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-200 placeholder-gray-400 hover:border-gray-400">
                                </div>
                                <p class="text-xs text-gray-500">Total length of the training program</p>
                            </div>
                        </div>
                    </div>

                    <!-- Pricing & Media Section -->
                    <div class="space-y-6">
                        <div class="flex items-center space-x-3 pb-4 border-b border-gray-200">
                            <div class="w-10 h-10 bg-emerald-100 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">Pricing & Media</h3>
                                <p class="text-sm text-gray-500">Set the price and add visual content</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Price Field -->
                            <div class="space-y-2">
                                <label for="price" class="block text-sm font-semibold text-gray-700">
                                    Price
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span class="text-gray-500 text-sm font-medium">$</span>
                                    </div>
                                    <input type="number" 
                                           step="0.01" 
                                           name="price" 
                                           id="price" 
                                           placeholder="0.00"
                                           class="block w-full pl-8 pr-12 py-3.5 text-gray-900 bg-white border border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all duration-200 placeholder-gray-400 hover:border-gray-400">
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <span class="text-gray-400 text-sm">USD</span>
                                    </div>
                                </div>
                                <p class="text-xs text-gray-500">Set to 0 for free training programs</p>
                            </div>

                            <!-- Image Upload Field -->
                            <div class="space-y-2">
                                <label for="image" class="block text-sm font-semibold text-gray-700">
                                    Featured Image
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <input type="file" 
                                           name="image" 
                                           id="image" 
                                           class="block w-full pl-10 pr-4 py-3 text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100 transition border border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-transparent"
                                           accept="image/*">
                                </div>
                                <p class="text-xs text-gray-500">Recommended size: 1200x630px</p>
                            </div>
                        </div>

                        <!-- Image Preview -->
                        <div id="imagePreview" class="hidden mt-4 p-4 bg-gray-50 rounded-xl border-2 border-dashed border-gray-300">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm font-medium text-gray-700">Image Preview</span>
                                <button type="button" id="clearPreview" class="text-sm text-red-600 hover:text-red-700 font-medium">Remove</button>
                            </div>
                            <img id="previewImg" src="" alt="Preview" class="w-full h-48 object-cover rounded-lg">
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex items-center justify-between pt-6 border-t border-gray-200">
                        <div class="flex items-center text-sm text-gray-500">
                            <svg class="w-4 h-4 mr-2 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                            </svg>
                            <span>All fields marked with <span class="text-red-500 font-semibold">*</span> are required</span>
                        </div>
                        <div class="flex space-x-3">
                            <a href="{{ route('admin.trainings.index') }}" 
                               class="inline-flex items-center px-6 py-3 text-sm font-semibold text-gray-700 bg-white border-2 border-gray-300 rounded-xl hover:bg-gray-50 hover:border-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 transition-all duration-200">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                                Cancel
                            </a>
                            <button type="submit" 
                                    class="inline-flex items-center px-8 py-3 text-sm font-semibold text-white bg-gradient-to-r from-indigo-600 to-purple-600 rounded-xl hover:from-indigo-700 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Create Training
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            
        </div>
    </div>

    <!-- Enhanced JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Character counter for description
            const descriptionField = document.getElementById('description');
            const charCount = document.getElementById('charCount');
            
            descriptionField.addEventListener('input', function() {
                const count = this.value.length;
                charCount.textContent = `${count} characters`;
                
                if (count > 500) {
                    charCount.classList.add('text-emerald-600', 'font-semibold');
                } else {
                    charCount.classList.remove('text-emerald-600', 'font-semibold');
                }
            });

            // Image preview functionality
            const imageInput = document.getElementById('image');
            const imagePreview = document.getElementById('imagePreview');
            const previewImg = document.getElementById('previewImg');
            const clearPreview = document.getElementById('clearPreview');

            imageInput.addEventListener('change', function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        previewImg.src = e.target.result;
                        imagePreview.classList.remove('hidden');
                    };
                    reader.readAsDataURL(file);
                }
            });

            clearPreview.addEventListener('click', function() {
                imageInput.value = '';
                imagePreview.classList.add('hidden');
                previewImg.src = '';
            });

            // Form validation enhancement
            const form = document.getElementById('trainingForm');
            form.addEventListener('submit', function(e) {
                const submitBtn = form.querySelector('button[type="submit"]');
                submitBtn.disabled = true;
                submitBtn.innerHTML = `
                    <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Creating...
                `;
            });

            // Auto-resize textarea
            descriptionField.addEventListener('input', function() {
                this.style.height = 'auto';
                this.style.height = (this.scrollHeight) + 'px';
            });

            // Add floating label effect
            const inputs = document.querySelectorAll('input, textarea');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('ring-2');
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.classList.remove('ring-2');
                });
            });

            // Price formatting
            const priceInput = document.getElementById('price');
            priceInput.addEventListener('blur', function() {
                if (this.value) {
                    this.value = parseFloat(this.value).toFixed(2);
                }
            });
        });
    </script>

    <style>
        /* Custom animations */
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-slide-in {
            animation: slideIn 0.3s ease-out;
        }

        /* Smooth focus transitions */
        input:focus, textarea:focus {
            transform: translateY(-1px);
        }

        /* Custom scrollbar for textarea */
        textarea::-webkit-scrollbar {
            width: 8px;
        }

        textarea::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        textarea::-webkit-scrollbar-thumb {
            background: #cbd5e0;
            border-radius: 10px;
        }

        textarea::-webkit-scrollbar-thumb:hover {
            background: #a0aec0;
        }
    </style>
</x-app-layout>