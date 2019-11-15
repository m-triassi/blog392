<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function submit(Request $request)
    {
        dd($request->all());
    }
}
