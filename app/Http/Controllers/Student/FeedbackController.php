<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function create()
    {
        $trainings = \App\Models\Training::all();
        return view('student.feedback.create', compact('trainings'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'training_id' => 'required|exists:trainings,id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string',
        ]);

        $validated['user_id'] = auth()->id();

        \App\Models\Feedback::create($validated);

        return redirect()->route('student.dashboard')->with('success', 'Feedback submitted successfully.');
    }
}
