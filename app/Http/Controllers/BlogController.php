<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog', [
            "title" => "Blog",
            "posts" => blog::all()
        ]);
    }

    public function show($slug)
    {
        return view('post',[
            "title" => "Single Post",
            "post" => blog::find($slug)
        ]);
    }
}
