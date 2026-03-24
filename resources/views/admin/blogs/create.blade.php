<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-3xl font-bold bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 bg-clip-text text-transparent">
                    {{ __('Create New Blog') }}
                </h2>
                <p class="mt-1 text-sm text-gray-500">Craft and publish your next blog post</p>
            </div>
            <a href="{{ route('admin.blogs.index') }}" 
               class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-gray-200 rounded-xl text-sm font-medium text-gray-700 hover:bg-gray-50 hover:border-gray-300 transition-all duration-200 shadow-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Back to Blogs
            </a>
        </div>
    </x-slot>

    <style>
        .ck-editor__editable_inline {
            min-height: 400px !important;
            border-bottom-left-radius: 0.75rem !important;
            border-bottom-right-radius: 0.75rem !important;
        }
        .ck-editor__top {
            border-top-left-radius: 0.75rem !important;
            border-top-right-radius: 0.75rem !important;
            overflow: hidden !important;
        }
        .ck-editor {
            --ck-border-radius: 0.75rem !important;
            border: none !important;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05) !important;
        }
    </style>

    <div class="py-8">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl rounded-2xl border border-gray-100">
                <div class="p-8 lg:p-12">
                    <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data" id="blog-form" class="space-y-8">
                        @csrf

                        <!-- Title Section -->
                        <div class="form-group">
                            <label for="title" class="block text-sm font-semibold text-gray-900 mb-2">
                                Blog Title <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="title" id="title" maxlength="255"
                                   class="block w-full px-4 py-3 text-gray-900 bg-white border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200"
                                   placeholder="Enter a captivating title..." required>
                            @error('title')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Slug -->
                            <div class="form-group">
                                <label for="slug" class="block text-sm font-semibold text-gray-900 mb-2">
                                    Slug (URL) <span class="text-red-500">*</span>
                                </label>
                                <div class="flex gap-2">
                                    <input type="text" name="slug" id="slug"
                                           class="block w-full px-4 py-3 text-gray-900 bg-white border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200"
                                           placeholder="url-slug-here" required>
                                    <button type="button" id="auto-slug-btn" class="px-3 py-2 text-indigo-600 text-xs font-semibold hover:bg-indigo-50 rounded-lg transition-colors">
                                        Auto
                                    </button>
                                </div>
                                @error('slug')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                            </div>

                            <!-- Category -->
                            <div class="form-group">
                                <label for="category" class="block text-sm font-semibold text-gray-900 mb-2">
                                    Category
                                </label>
                                <select name="category" id="category" 
                                        class="block w-full px-4 py-3 text-gray-900 bg-white border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200 appearance-none">
                                    <option value="">Select Category</option>
                                    <option value="technology">Technology</option>
                                    <option value="business">Business</option>
                                    <option value="lifestyle">Lifestyle</option>
                                    <option value="education">Education</option>
                                    <option value="news">News</option>
                                </select>
                            </div>
                        </div>

                        <!-- Featured Image -->
                        <div class="form-group">
                            <label class="block text-sm font-semibold text-gray-900 mb-2">
                                Featured Image
                            </label>
                            <div class="flex flex-col md:flex-row gap-4">
                                <div class="flex-1">
                                    <input type="file" name="image" id="image" accept="image/*"
                                           class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100 transition-all">
                                    <p class="mt-1 text-xs text-gray-500">Max size 5MB (PNG, JPG, WEBP)</p>
                                </div>
                                <div class="flex-1">
                                    <div class="relative">
                                        <input type="url" name="image_url" id="image_url"
                                               class="block w-full px-4 py-3 text-sm text-gray-900 bg-white border border-gray-200 rounded-xl"
                                               placeholder="Or paste image URL...">
                                    </div>
                                </div>
                            </div>
                            @error('image')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>

                        <!-- Meta Description -->
                        <div class="form-group">
                            <label for="meta_description" class="block text-sm font-semibold text-gray-900 mb-2">
                                Meta Description (SEO)
                            </label>
                            <textarea name="meta_description" id="meta_description" rows="2" maxlength="160"
                                      class="block w-full px-4 py-3 text-gray-900 bg-white border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200"
                                      placeholder="Brief summary for search engines..."></textarea>
                            <p class="mt-1 text-xs text-gray-500"><span id="meta-count">0</span>/160 characters</p>
                        </div>

                        <!-- Content Section -->
                        <div class="form-group">
                            <label for="content" class="block text-sm font-semibold text-gray-900 mb-2">
                                Content <span class="text-red-500">*</span>
                            </label>
                            <div class="prose-editor">
                                <textarea name="content" id="content" rows="12" 
                                          class="block w-full px-4 py-4 text-gray-900 bg-white border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200 font-mono text-sm"
                                          placeholder="Write your blog content here...">{{ old('content') }}</textarea>
                            </div>
                            @error('content')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>

                        <!-- Publishing Options -->
                        <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 flex flex-wrap gap-6">
                            <div class="flex-1 min-w-[200px]">
                                <label for="status" class="block text-sm font-semibold text-gray-900 mb-2">Status</label>
                                <select name="status" id="status" class="block w-full px-4 py-3 rounded-xl border-gray-200 focus:ring-indigo-500 focus:border-indigo-500">
                                    <option value="draft">Draft</option>
                                    <option value="published">Published</option>
                                    <option value="scheduled">Scheduled</option>
                                </select>
                            </div>
                            <div class="flex-1 min-w-[200px]">
                                <label for="published_at" class="block text-sm font-semibold text-gray-900 mb-2">Publish Date</label>
                                <input type="datetime-local" name="published_at" id="published_at" 
                                       class="block w-full px-4 py-3 rounded-xl border-gray-200 focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                            <div class="flex items-center mt-6">
                                <input type="checkbox" name="is_featured" id="is_featured" value="1"
                                       class="w-5 h-5 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                <label for="is_featured" class="ml-2 text-sm font-medium text-gray-700">Mark as Featured</label>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex gap-4 pt-6 border-t border-gray-100">
                            <button type="submit" class="flex-1 px-8 py-4 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-xl font-bold hover:from-indigo-700 hover:to-purple-700 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                                Save Blog Post
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize CKEditor
            ClassicEditor
                .create(document.querySelector('#content'), {
                    toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', 'insertTable', 'undo', 'redo'],
                })
                .then(editor => {
                    console.log('Editor initialized');
                })
                .catch(error => {
                    console.error(error);
                });

            const titleInput = document.getElementById('title');
            const slugInput = document.getElementById('slug');
            const metaDescInput = document.getElementById('meta_description');
            const metaCount = document.getElementById('meta-count');

            // Auto-slug from title
            document.getElementById('auto-slug-btn').addEventListener('click', function() {
                const slug = titleInput.value.toLowerCase()
                    .replace(/[^\w\s-]/g, '')
                    .replace(/\s+/g, '-')
                    .replace(/-+/g, '-')
                    .trim();
                slugInput.value = slug;
            });

            // Meta description count
            metaDescInput.addEventListener('input', function() {
                metaCount.textContent = this.value.length;
            });
        });
    </script>
    @endpush
</x-app-layout>