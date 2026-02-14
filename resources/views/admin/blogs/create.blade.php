<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-3xl font-bold bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 bg-clip-text text-transparent">
                    {{ __('Create New Blog') }}
                </h2>
                <p class="mt-1 text-sm text-gray-500">Craft and publish your next masterpiece</p>
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

    <div class="py-8">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <!-- Progress Indicator -->
            <div class="mb-8">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-xs font-semibold text-gray-600 uppercase tracking-wider">Form Progress</span>
                    <span class="text-xs font-semibold text-indigo-600" id="progress-text">0%</span>
                </div>
                <div class="h-2 bg-gray-100 rounded-full overflow-hidden">
                    <div id="progress-bar" class="h-full bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 transition-all duration-500 ease-out" style="width: 0%"></div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-xl rounded-2xl border border-gray-100">
                <div class="p-8 lg:p-12">
                    <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data" id="blog-form" class="space-y-8">
                        @csrf

                        <!-- Title Section -->
                        <div class="form-group">
                            <label for="title" class="block text-sm font-semibold text-gray-900 mb-2">
                                Blog Title
                                <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <input type="text" 
                                       name="title" 
                                       id="title" 
                                       maxlength="200"
                                       class="block w-full px-4 py-3.5 text-gray-900 bg-white border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200 placeholder-gray-400 shadow-sm hover:border-gray-300"
                                       placeholder="Enter a captivating title for your blog post..."
                                       required>
                                <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                                    <span class="text-xs text-gray-400" id="title-count">0/200</span>
                                </div>
                            </div>
                            <p class="mt-2 text-xs text-gray-500 flex items-center gap-1">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                A compelling title increases engagement by up to 80%
                            </p>
                        </div>

                        <!-- Slug Section with Auto-generation -->
                        <div class="form-group">
                            <label for="slug" class="block text-sm font-semibold text-gray-900 mb-2">
                                URL Slug
                                <span class="text-red-500">*</span>
                                <span class="ml-2 text-xs font-normal text-gray-500">(SEO friendly URL)</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/>
                                    </svg>
                                </div>
                                <input type="text" 
                                       name="slug" 
                                       id="slug" 
                                       class="block w-full pl-12 pr-28 py-3.5 text-gray-900 bg-white border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200 placeholder-gray-400 shadow-sm hover:border-gray-300"
                                       placeholder="your-blog-post-url"
                                       required>
                                <button type="button" 
                                        id="auto-slug-btn"
                                        class="absolute inset-y-0 right-0 pr-4 flex items-center text-xs font-medium text-indigo-600 hover:text-indigo-700 transition-colors">
                                    Auto-generate
                                </button>
                            </div>
                            <p class="mt-2 text-xs text-gray-500">
                                Preview: <span class="font-mono text-indigo-600" id="slug-preview">your-domain.com/blog/your-slug</span>
                            </p>
                        </div>

                        <!-- Category and Tags Section (Two Column Layout) -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="form-group">
                                <label for="category" class="block text-sm font-semibold text-gray-900 mb-2">
                                    Category
                                </label>
                                <div class="relative">
                                    <select name="category" 
                                            id="category" 
                                            class="block w-full px-4 py-3.5 text-gray-900 bg-white border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200 shadow-sm hover:border-gray-300 appearance-none">
                                        <option value="">Select a category</option>
                                        <option value="technology">💻 Technology</option>
                                        <option value="lifestyle">🌟 Lifestyle</option>
                                        <option value="business">💼 Business</option>
                                        <option value="design">🎨 Design</option>
                                        <option value="marketing">📊 Marketing</option>
                                        <option value="tutorials">📚 Tutorials</option>
                                        <option value="news">📰 News</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tags" class="block text-sm font-semibold text-gray-900 mb-2">
                                    Tags
                                    <span class="ml-2 text-xs font-normal text-gray-500">(comma separated)</span>
                                </label>
                                <input type="text" 
                                       name="tags" 
                                       id="tags" 
                                       class="block w-full px-4 py-3.5 text-gray-900 bg-white border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200 placeholder-gray-400 shadow-sm hover:border-gray-300"
                                       placeholder="Laravel, PHP, Web Development">
                                <div id="tags-container" class="mt-3 flex flex-wrap gap-2"></div>
                            </div>
                        </div>

                        <!-- Featured Image Section -->
                        <div class="form-group">
                            <label class="block text-sm font-semibold text-gray-900 mb-2">
                                Featured Image
                            </label>
                            <div class="mt-2">
                                <div class="flex items-center justify-center w-full">
                                    <label for="image-upload" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-200 border-dashed rounded-xl cursor-pointer bg-gradient-to-br from-gray-50 to-white hover:bg-gray-50 transition-all duration-200 group">
                                        <div class="flex flex-col items-center justify-center pt-5 pb-6" id="upload-placeholder">
                                            <svg class="w-12 h-12 mb-4 text-gray-400 group-hover:text-indigo-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                                            </svg>
                                            <p class="mb-2 text-sm text-gray-600">
                                                <span class="font-semibold">Click to upload</span> or drag and drop
                                            </p>
                                            <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                        </div>
                                        <div id="image-preview" class="hidden w-full h-full p-4">
                                            <img src="" alt="Preview" class="w-full h-full object-cover rounded-lg">
                                        </div>
                                        <input id="image-upload" name="image" type="file" class="hidden" accept="image/*" />
                                    </label>
                                </div>
                                <div class="mt-3 flex items-center gap-4">
                                    <div class="flex-1">
                                        <label for="image_url" class="text-xs font-medium text-gray-700 mb-1 block">Or enter image URL</label>
                                        <input type="url" 
                                               name="image_url" 
                                               id="image_url" 
                                               class="block w-full px-3 py-2 text-sm text-gray-900 bg-white border border-gray-200 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200"
                                               placeholder="https://example.com/image.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Content Editor Section -->
                        <div class="form-group">
                            <label for="content" class="block text-sm font-semibold text-gray-900 mb-2">
                                Content
                                <span class="text-red-500">*</span>
                            </label>
                            
                            <!-- Editor Toolbar -->
                            <div class="border border-gray-200 rounded-t-xl bg-gray-50 px-4 py-2 flex items-center gap-2 flex-wrap">
                                <button type="button" class="editor-btn p-2 hover:bg-gray-200 rounded-lg transition-colors" data-action="bold" title="Bold">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M11 3H6v14h5a4 4 0 000-8 4 4 0 000-8zM8 5h3a2 2 0 110 4H8V5zm0 6h3a2 2 0 110 4H8v-4z"/>
                                    </svg>
                                </button>
                                <button type="button" class="editor-btn p-2 hover:bg-gray-200 rounded-lg transition-colors" data-action="italic" title="Italic">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 3h6v2h-2.5l-3 10H13v2H7v-2h2.5l3-10H10V3z"/>
                                    </svg>
                                </button>
                                <div class="w-px h-6 bg-gray-300"></div>
                                <button type="button" class="editor-btn p-2 hover:bg-gray-200 rounded-lg transition-colors" data-action="h1" title="Heading 1">
                                    <span class="text-sm font-bold">H1</span>
                                </button>
                                <button type="button" class="editor-btn p-2 hover:bg-gray-200 rounded-lg transition-colors" data-action="h2" title="Heading 2">
                                    <span class="text-sm font-bold">H2</span>
                                </button>
                                <div class="w-px h-6 bg-gray-300"></div>
                                <button type="button" class="editor-btn p-2 hover:bg-gray-200 rounded-lg transition-colors" data-action="quote" title="Quote">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M6 10c0-2 1.5-4 4-4V4c-3.5 0-6 2.5-6 6s2.5 6 6 6v-2c-2.5 0-4-2-4-4zm8 0c0-2 1.5-4 4-4V4c-3.5 0-6 2.5-6 6s2.5 6 6 6v-2c-2.5 0-4-2-4-4z"/>
                                    </svg>
                                </button>
                                <button type="button" class="editor-btn p-2 hover:bg-gray-200 rounded-lg transition-colors" data-action="code" title="Code">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z"/>
                                    </svg>
                                </button>
                                <div class="ml-auto text-xs text-gray-500">
                                    <span id="word-count">0 words</span> · <span id="char-count">0 characters</span>
                                </div>
                            </div>
                            
                            <textarea name="content" 
                                      id="content" 
                                      rows="16" 
                                      class="block w-full px-4 py-4 text-gray-900 bg-white border border-gray-200 border-t-0 rounded-b-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200 placeholder-gray-400 resize-none font-mono text-sm"
                                      placeholder="Start writing your masterpiece... Markdown is supported!"
                                      required></textarea>
                            
                            <div class="mt-3 flex items-center justify-between">
                                <p class="text-xs text-gray-500">Supports Markdown formatting</p>
                                <button type="button" id="preview-btn" class="text-xs font-medium text-indigo-600 hover:text-indigo-700 transition-colors">
                                    👁️ Preview Content
                                </button>
                            </div>
                        </div>

                        <!-- SEO Section (Collapsible) -->
                        <div class="form-group border border-gray-200 rounded-xl overflow-hidden">
                            <button type="button" id="seo-toggle" class="w-full px-6 py-4 bg-gradient-to-r from-gray-50 to-white hover:from-gray-100 hover:to-gray-50 transition-all duration-200 flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-gradient-to-br from-green-400 to-emerald-500 rounded-lg flex items-center justify-center">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                        </svg>
                                    </div>
                                    <div class="text-left">
                                        <h3 class="text-sm font-semibold text-gray-900">SEO Settings</h3>
                                        <p class="text-xs text-gray-500">Optimize for search engines</p>
                                    </div>
                                </div>
                                <svg class="w-5 h-5 text-gray-400 transition-transform duration-200" id="seo-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div id="seo-content" class="hidden px-6 pb-6 space-y-4">
                                <div>
                                    <label for="meta_description" class="block text-sm font-medium text-gray-700 mb-2">Meta Description</label>
                                    <textarea name="meta_description" 
                                              id="meta_description" 
                                              rows="3" 
                                              maxlength="160"
                                              class="block w-full px-4 py-3 text-gray-900 bg-white border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-200"
                                              placeholder="A compelling description for search results (max 160 characters)"></textarea>
                                    <p class="mt-1 text-xs text-gray-500"><span id="meta-count">0</span>/160 characters</p>
                                </div>
                                <div>
                                    <label for="focus_keyword" class="block text-sm font-medium text-gray-700 mb-2">Focus Keyword</label>
                                    <input type="text" 
                                           name="focus_keyword" 
                                           id="focus_keyword" 
                                           class="block w-full px-4 py-3 text-gray-900 bg-white border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-200"
                                           placeholder="Primary keyword for this post">
                                </div>
                            </div>
                        </div>

                        <!-- Publishing Options -->
                        <div class="form-group bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 rounded-xl p-6 border border-indigo-100">
                            <h3 class="text-sm font-semibold text-gray-900 mb-4 flex items-center gap-2">
                                <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                Publishing Options
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="status" class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                                    <select name="status" id="status" class="block w-full px-4 py-3 text-gray-900 bg-white border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200">
                                        <option value="draft">📝 Draft</option>
                                        <option value="published">✅ Published</option>
                                        <option value="scheduled">⏰ Scheduled</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="publish_date" class="block text-sm font-medium text-gray-700 mb-2">Publish Date</label>
                                    <input type="datetime-local" 
                                           name="publish_date" 
                                           id="publish_date" 
                                           class="block w-full px-4 py-3 text-gray-900 bg-white border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200">
                                </div>
                            </div>
                            <div class="mt-4 flex items-center">
                                <input type="checkbox" 
                                       name="featured" 
                                       id="featured" 
                                       class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                <label for="featured" class="ml-2 text-sm text-gray-700">
                                    ⭐ Mark as featured post
                                </label>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex flex-col sm:flex-row gap-3 pt-6 border-t border-gray-200">
                            <button type="button" 
                                    id="save-draft-btn"
                                    class="flex-1 sm:flex-none px-6 py-3.5 bg-white border-2 border-gray-200 text-gray-700 rounded-xl hover:bg-gray-50 hover:border-gray-300 font-semibold transition-all duration-200 shadow-sm flex items-center justify-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"/>
                                </svg>
                                Save as Draft
                            </button>
                            <button type="submit" 
                                    class="flex-1 px-8 py-3.5 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 text-white rounded-xl hover:from-indigo-700 hover:via-purple-700 hover:to-pink-700 font-semibold transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 flex items-center justify-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Publish Blog Post
                            </button>
                        </div>

                        <!-- Auto-save Indicator -->
                        <div class="text-center">
                            <p class="text-xs text-gray-500 flex items-center justify-center gap-2">
                                <svg class="w-3.5 h-3.5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span id="autosave-status">All changes saved automatically</span>
                            </p>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Tips Section -->
            <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-6 border border-blue-100">
                    <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">SEO Tips</h3>
                    <p class="text-sm text-gray-600">Use descriptive titles, relevant keywords, and compelling meta descriptions to improve search rankings.</p>
                </div>
                <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl p-6 border border-purple-100">
                    <div class="w-12 h-12 bg-purple-500 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Visual Impact</h3>
                    <p class="text-sm text-gray-600">High-quality featured images increase engagement. Use images at least 1200x630px for optimal social sharing.</p>
                </div>
                <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-6 border border-green-100">
                    <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Content Quality</h3>
                    <p class="text-sm text-gray-600">Aim for 1000+ words for in-depth posts. Use headings, lists, and images to improve readability.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Preview Modal -->
    <div id="preview-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-hidden shadow-2xl">
            <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
                <h3 class="text-lg font-semibold text-gray-900">Content Preview</h3>
                <button type="button" id="close-preview" class="text-gray-400 hover:text-gray-600 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <div id="preview-content" class="px-6 py-8 overflow-y-auto max-h-[calc(90vh-80px)] prose prose-indigo max-w-none"></div>
        </div>
    </div>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Form elements
            const form = document.getElementById('blog-form');
            const titleInput = document.getElementById('title');
            const slugInput = document.getElementById('slug');
            const contentInput = document.getElementById('content');
            const tagsInput = document.getElementById('tags');
            const metaDescInput = document.getElementById('meta_description');
            const imageUpload = document.getElementById('image-upload');
            
            // Progress tracking
            const progressBar = document.getElementById('progress-bar');
            const progressText = document.getElementById('progress-text');
            const requiredFields = ['title', 'slug', 'content'];
            
            function updateProgress() {
                let filled = 0;
                requiredFields.forEach(fieldId => {
                    if (document.getElementById(fieldId).value.trim()) filled++;
                });
                const progress = Math.round((filled / requiredFields.length) * 100);
                progressBar.style.width = progress + '%';
                progressText.textContent = progress + '%';
            }
            
            requiredFields.forEach(fieldId => {
                document.getElementById(fieldId).addEventListener('input', updateProgress);
            });
            
            // Auto-generate slug from title
            document.getElementById('auto-slug-btn').addEventListener('click', function() {
                const title = titleInput.value;
                const slug = title.toLowerCase()
                    .replace(/[^\w\s-]/g, '')
                    .replace(/\s+/g, '-')
                    .replace(/-+/g, '-')
                    .trim();
                slugInput.value = slug;
                updateSlugPreview();
            });
            
            // Title counter
            titleInput.addEventListener('input', function() {
                document.getElementById('title-count').textContent = this.value.length + '/200';
            });
            
            // Slug preview
            function updateSlugPreview() {
                const slug = slugInput.value || 'your-slug';
                document.getElementById('slug-preview').textContent = 'your-domain.com/blog/' + slug;
            }
            slugInput.addEventListener('input', updateSlugPreview);
            
            // Tags handler
            tagsInput.addEventListener('input', function(e) {
                const tags = e.target.value.split(',').map(tag => tag.trim()).filter(tag => tag);
                const container = document.getElementById('tags-container');
                container.innerHTML = tags.map(tag => 
                    `<span class="inline-flex items-center gap-1 px-3 py-1 bg-indigo-100 text-indigo-700 rounded-full text-xs font-medium">
                        ${tag}
                        <svg class="w-3 h-3 cursor-pointer hover:text-indigo-900" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </span>`
                ).join('');
            });
            
            // Image upload preview
            imageUpload.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById('upload-placeholder').classList.add('hidden');
                        const preview = document.getElementById('image-preview');
                        preview.classList.remove('hidden');
                        preview.querySelector('img').src = e.target.result;
                    };
                    reader.readAsDataURL(file);
                }
            });
            
            // Content word/char counter
            contentInput.addEventListener('input', function() {
                const text = this.value;
                const words = text.trim() ? text.trim().split(/\s+/).length : 0;
                const chars = text.length;
                document.getElementById('word-count').textContent = words + ' words';
                document.getElementById('char-count').textContent = chars + ' characters';
            });
            
            // Meta description counter
            metaDescInput.addEventListener('input', function() {
                document.getElementById('meta-count').textContent = this.value.length;
            });
            
            // SEO section toggle
            document.getElementById('seo-toggle').addEventListener('click', function() {
                const content = document.getElementById('seo-content');
                const icon = document.getElementById('seo-icon');
                content.classList.toggle('hidden');
                icon.style.transform = content.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(180deg)';
            });
            
            // Preview modal
            document.getElementById('preview-btn').addEventListener('click', function() {
                const content = contentInput.value;
                const preview = document.getElementById('preview-content');
                // Simple markdown-like rendering
                const formatted = content
                    .replace(/^### (.*$)/gim, '<h3>$1</h3>')
                    .replace(/^## (.*$)/gim, '<h2>$1</h2>')
                    .replace(/^# (.*$)/gim, '<h1>$1</h1>')
                    .replace(/\*\*(.*)\*\*/gim, '<strong>$1</strong>')
                    .replace(/\*(.*)\*/gim, '<em>$1</em>')
                    .replace(/\n/gim, '<br>');
                preview.innerHTML = formatted;
                document.getElementById('preview-modal').classList.remove('hidden');
            });
            
            document.getElementById('close-preview').addEventListener('click', function() {
                document.getElementById('preview-modal').classList.add('hidden');
            });
            
            // Save draft
            document.getElementById('save-draft-btn').addEventListener('click', function() {
                document.getElementById('status').value = 'draft';
                form.submit();
            });
            
            // Auto-save simulation
            let autoSaveTimeout;
            form.addEventListener('input', function() {
                clearTimeout(autoSaveTimeout);
                document.getElementById('autosave-status').textContent = 'Saving...';
                autoSaveTimeout = setTimeout(() => {
                    document.getElementById('autosave-status').textContent = 'All changes saved automatically';
                }, 1500);
            });
        });
    </script>
    @endpush
</x-app-layout>