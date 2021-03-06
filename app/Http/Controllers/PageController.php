<?php

namespace App\Http\Controllers;

use App\Models\Blurb;
use App\Models\Experience;
use App\Models\Post;
use App\Models\Skill;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $latestPosts = Post::visible()
            ->latestLimit(4)
            ->with("author")
            ->get();

        return view('index')->with(compact('latestPosts'));
    }

    public function article($slug)
    {
        $post = Post::visible()
            ->where('slug', $slug)
            ->firstOrFail();

        return view('article')->with(compact(['post']));
    }

    public function about() {
        return view('about');
    }

    public function dashboard()
    {
        return view('home');
    }

    public function contact()
    {
        return view('contact');
    }
}
