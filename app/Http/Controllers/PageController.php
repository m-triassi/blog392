<?php

namespace App\Http\Controllers;

use App\Models\Blurb;
use App\Models\Experience;
use App\Models\Skill;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('index');
    }
}
