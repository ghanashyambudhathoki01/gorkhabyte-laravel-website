<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Service;
use App\Models\Training;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $services = Service::latest()->take(3)->get();
        $trainings = Training::latest()->take(3)->get();
        $blogs = Blog::latest()->take(3)->get();
        return view('welcome', compact('services', 'trainings', 'blogs'));
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        $services = Service::latest()->get();
        return view('services.index', compact('services'));
    }

    public function training()
    {
        $trainings = Training::latest()->get();
        return view('training.index', compact('trainings'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function blog()
    {
        $blogs = Blog::latest()->paginate(9);
        return view('blog.index', compact('blogs'));
    }

    public function blogShow($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('blog.show', compact('blog'));
    }

    public function trainingShow($slug)
    {
        $training = Training::where('slug', $slug)->firstOrFail();
        return view('training.show', compact('training'));
    }

    public function storeContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'type' => 'required|string|in:training,service,both,general',
            'course_or_service' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        \Log::info('Contact Form Submission:', $validated);
        \App\Models\Contact::create($validated);

        return back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }

    public function privacy()
    {
        return view('pages.privacy');
    }

    public function terms()
    {
        return view('pages.terms');
    }
}
