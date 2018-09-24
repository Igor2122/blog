<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index ()
    {
        return view('blog.index');
    }

    public function show () 
    {
        return view('blog.show');
    }

    public function create ()
    {
        return view('blog.create');
    }
}
