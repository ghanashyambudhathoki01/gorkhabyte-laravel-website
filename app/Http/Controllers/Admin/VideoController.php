<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = \App\Models\Video::with('training')->latest()->paginate(10);
        return view('admin.videos.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $trainings = \App\Models\Training::all();
        return view('admin.videos.create', compact('trainings'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'video_url' => 'required|string',
            'training_id' => 'required|exists:trainings,id',
            'thumbnail' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('thumbnails'), $filename);
            $validated['thumbnail'] = 'thumbnails/' . $filename;
        }

        \App\Models\Video::create($validated);

        return redirect()->route('admin.videos.index')->with('success', 'Video uploaded successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(\App\Models\Video $video)
    {
        $trainings = \App\Models\Training::all();
        return view('admin.videos.edit', compact('video', 'trainings'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, \App\Models\Video $video)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'video_url' => 'required|string',
            'training_id' => 'required|exists:trainings,id',
            'thumbnail' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('thumbnail')) {
            if ($video->thumbnail && file_exists(public_path($video->thumbnail))) {
                unlink(public_path($video->thumbnail));
            }

            $file = $request->file('thumbnail');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('thumbnails'), $filename);
            $validated['thumbnail'] = 'thumbnails/' . $filename;
        }

        $video->update($validated);

        return redirect()->route('admin.videos.index')->with('success', 'Video updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(\App\Models\Video $video)
    {
        if ($video->thumbnail && file_exists(public_path($video->thumbnail))) {
            unlink(public_path($video->thumbnail));
        }
        $video->delete();
        return redirect()->route('admin.videos.index')->with('success', 'Video deleted successfully.');
    }
}
