<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = \App\Models\Video::with('training')->latest()->paginate(12);
        return view('student.videos.index', compact('videos'));
    }

    public function show($id)
    {
        $video = \App\Models\Video::with('training')->findOrFail($id);
        return view('student.videos.show', compact('video'));
    }
}
