<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainings = Training::latest()->paginate(10);
        return view('admin.trainings.index', compact('trainings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.trainings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'schedule' => 'nullable|string|max:255',
            'duration' => 'nullable|string|max:255',
            'price' => 'nullable|numeric',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('trainings'), $filename);
            $validated['image'] = 'trainings/' . $filename;
        }

        Training::create($validated);

        return redirect()->route('admin.trainings.index')->with('success', 'Training created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Training $training)
    {
        return view('admin.trainings.show', compact('training'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Training $training)
    {
        return view('admin.trainings.edit', compact('training'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Training $training)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'schedule' => 'nullable|string|max:255',
            'duration' => 'nullable|string|max:255',
            'price' => 'nullable|numeric',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($training->image && file_exists(public_path($training->image))) {
                unlink(public_path($training->image));
            }

            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('trainings'), $filename);
            $validated['image'] = 'trainings/' . $filename;
        }

        $training->update($validated);

        return redirect()->route('admin.trainings.index')->with('success', 'Training updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Training $training)
    {
        $training->delete();
        return redirect()->route('admin.trainings.index')->with('success', 'Training deleted successfully.');
    }
}
