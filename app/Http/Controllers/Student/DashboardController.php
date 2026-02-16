<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = auth()->user();
        $stats = [
            'trainings' => \App\Models\Training::count(),
            'videos' => \App\Models\Video::count(),
            'feedbacks' => \App\Models\Feedback::where('user_id', $user->id)->count(),
        ];
        
        $latestVideos = \App\Models\Video::with('training')->latest()->take(4)->get();
        $recentTrainings = \App\Models\Training::latest()->take(3)->get();

        return view('student.dashboard', compact('user', 'stats', 'latestVideos', 'recentTrainings'));
    }
}
