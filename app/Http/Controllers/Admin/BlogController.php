<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:blogs,slug|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|max:5120',
            'image_url' => 'nullable|url|max:255',
            'category' => 'nullable|string|max:255',
            'status' => 'required|string|in:draft,published,scheduled',
            'meta_description' => 'nullable|string|max:255',
            'is_featured' => 'nullable|boolean',
            'published_at' => 'nullable|date',
        ]);

        $validated['is_featured'] = $request->has('is_featured');

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('blogs', 'public');
        } elseif ($request->filled('image_url')) {
            $validated['image'] = $request->image_url;
        }

        Blog::create($validated);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('admin.blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:blogs,slug,' . $blog->id,
            'content' => 'required|string',
            'image' => 'nullable|image|max:5120',
            'image_url' => 'nullable|url|max:255',
            'category' => 'nullable|string|max:255',
            'status' => 'required|string|in:draft,published,scheduled',
            'meta_description' => 'nullable|string|max:255',
            'is_featured' => 'nullable|boolean',
            'published_at' => 'nullable|date',
        ]);

        $validated['is_featured'] = $request->has('is_featured');

        if ($request->hasFile('image')) {
            if ($blog->image && !filter_var($blog->image, FILTER_VALIDATE_URL)) {
                Storage::disk('public')->delete($blog->image);
            }
            $validated['image'] = $request->file('image')->store('blogs', 'public');
        } elseif ($request->filled('image_url')) {
            $validated['image'] = $request->image_url;
        }

        $blog->update($validated);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        if ($blog->image && !filter_var($blog->image, FILTER_VALIDATE_URL)) {
            Storage::disk('public')->delete($blog->image);
        }
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
