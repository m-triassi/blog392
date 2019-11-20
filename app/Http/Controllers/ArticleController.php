<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function submit(Request $request)
    {
        $newArticle = new Post();
        $newArticle->title = $request->input('title');
        $newArticle->slug = Str::slug($request->input('title'));
        $newArticle->excerpt = $request->input('excerpt');
        $newArticle->body = $request->input('body');
    }
}
