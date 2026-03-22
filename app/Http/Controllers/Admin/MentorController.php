<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mentor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MentorController extends Controller
{
    public function index()
    {
        $mentors = Mentor::latest()->paginate(10);
        return view('admin.mentors.index', compact('mentors'));
    }

    public function create()
    {
        return view('admin.mentors.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'linkedin_url' => 'nullable|url|max:255',
            'github_url' => 'nullable|url|max:255',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('mentors', 'public');
        }

        Mentor::create($validated);

        return redirect()->route('admin.mentors.index')->with('success', 'Member added successfully.');
    }

    public function show(Mentor $mentor)
    {
        return view('admin.mentors.show', compact('mentor'));
    }

    public function edit(Mentor $mentor)
    {
        return view('admin.mentors.edit', compact('mentor'));
    }

    public function update(Request $request, Mentor $mentor)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'linkedin_url' => 'nullable|url|max:255',
            'github_url' => 'nullable|url|max:255',
        ]);

        if ($request->hasFile('image')) {
            if ($mentor->image) {
                Storage::disk('public')->delete($mentor->image);
            }
            $validated['image'] = $request->file('image')->store('members', 'public');
        }

        $mentor->update($validated);

        return redirect()->route('admin.mentors.index')->with('success', 'Member updated successfully.');
    }

    public function destroy(Mentor $mentor)
    {
        if ($mentor->image) {
            Storage::disk('public')->delete($mentor->image);
        }
        $mentor->delete();

        return redirect()->route('admin.mentors.index')->with('success', 'Member deleted successfully.');
    }
}
