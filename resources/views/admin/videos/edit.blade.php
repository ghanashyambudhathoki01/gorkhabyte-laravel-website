<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Video') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('admin.videos.update', $video) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="mb-4">
                                <label for="training_id" class="block text-sm font-medium text-gray-700">Training Program</label>
                                <select name="training_id" id="training_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                                    <option value="">Select a Program</option>
                                    @foreach($trainings as $training)
                                        <option value="{{ $training->id }}" {{ (old('training_id') ?? $video->training_id) == $training->id ? 'selected' : '' }}>{{ $training->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="title" class="block text-sm font-medium text-gray-700">Video Title</label>
                                <input type="text" name="title" id="title" value="{{ old('title') ?? $video->title }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea name="description" id="description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ old('description') ?? $video->description }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label for="video_url" class="block text-sm font-medium text-gray-700">Video URL</label>
                            <input type="text" name="video_url" id="video_url" value="{{ old('video_url') ?? $video->video_url }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                        </div>

                        <div class="mb-4">
                            <label for="thumbnail" class="block text-sm font-medium text-gray-700">Thumbnail Image (Leave blank to keep current)</label>
                            @if($video->thumbnail)
                                <div class="mt-2 mb-2">
                                    <img src="{{ asset($video->thumbnail) }}" alt="Current Thumbnail" class="h-20 w-32 object-cover rounded shadow-sm border">
                                </div>
                            @endif
                            <input type="file" name="thumbnail" id="thumbnail" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                        </div>

                        <div class="flex justify-end mt-6">
                            <a href="{{ route('admin.videos.index') }}" class="mr-4 px-4 py-2 text-gray-700 hover:text-gray-900">Cancel</a>
                            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                                Update Video
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
