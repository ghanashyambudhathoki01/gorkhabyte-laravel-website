<x-public-layout>
    <div class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl sm:text-4xl font-bold text-center mb-12">Latest News & Insights</h1>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($blogs as $blog)
                    <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300 flex flex-col">
                        @if($blog->image)
                            <img src="{{ $blog->image }}" alt="{{ $blog->title }}" class="w-full h-48 object-cover">
                        @else
                            <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500">
                                No Image Available
                            </div>
                        @endif
                        
                        <div class="p-6 flex-grow">
                            <div class="text-sm text-gray-500 mb-2">
                                {{ $blog->created_at->format('M d, Y') }} | {{ $blog->category ?? 'General' }}
                            </div>
                            <h3 class="text-xl font-bold mb-2">
                                <a href="{{ route('blog.show', $blog->slug) }}" class="hover:text-blue-600 transition">
                                    {{ $blog->title }}
                                </a>
                            </h3>
                            <p class="text-gray-600 mb-4">{{ Str::limit($blog->content, 120) }}</p>
                            <a href="{{ route('blog.show', $blog->slug) }}" class="text-blue-600 font-semibold hover:underline">Read More &rarr;</a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center text-gray-500">
                        No blog posts available at the moment.
                    </div>
                @endforelse
            </div>

            <div class="mt-8">
                {{ $blogs->links() }}
            </div>
        </div>
    </div>
</x-public-layout>
