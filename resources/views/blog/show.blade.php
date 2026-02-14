<x-public-layout>
    <div class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-8 text-center">
                 <div class="text-sm text-gray-500 mb-2">
                    {{ $blog->created_at->format('M d, Y') }} | {{ $blog->category ?? 'General' }}
                </div>
                <h1 class="text-4xl font-bold text-gray-900 mb-4">{{ $blog->title }}</h1>
            </div>

            @if($blog->image)
                <div class="mb-8">
                    <img src="{{ $blog->image }}" alt="{{ $blog->title }}" class="w-full h-auto rounded-lg shadow-md">
                </div>
            @endif

            <div class="prose max-w-none text-gray-800 text-lg leading-relaxed">
                {!! nl2br(e($blog->content)) !!}
            </div>

            <div class="mt-12 pt-8 border-t border-gray-200">
                <a href="{{ route('blog') }}" class="text-blue-600 font-semibold hover:underline">&larr; Back to Blog</a>
            </div>
        </div>
    </div>
</x-public-layout>
