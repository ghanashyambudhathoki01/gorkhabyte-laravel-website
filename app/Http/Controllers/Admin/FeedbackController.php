<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = \App\Models\Feedback::with(['user', 'training'])->latest()->paginate(10);
        return view('admin.feedback.index', compact('feedbacks'));
    }

    public function show($id)
    {
        $feedback = \App\Models\Feedback::with(['user', 'training'])->findOrFail($id);
        return view('admin.feedback.show', compact('feedback'));
    }

    public function destroy($id)
    {
        \App\Models\Feedback::findOrFail($id)->delete();
        return redirect()->route('admin.feedback.index')->with('success', 'Feedback deleted successfully.');
    }
}
