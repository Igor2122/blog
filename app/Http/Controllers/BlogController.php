<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    public function index ()
    {
        $posts = Blog::latest()->get();


        return view('blog.index', compact('posts'));
    }

    public function show (Blog $post) 
    {
        return view('blog.show', compact('post'));
    }

    public function create ()
    {
        return view('blog.create');
    }

    public function store () 
    {
        // Create a new post using the reuqest date
        //dd(request()->all()); // dumps an array with all the fields of the form 
        //dd(request(['body', 'title'])); // dumps title only as form can come with many things we are not interested in 
        // we can even skip this part as we no longer need to instantiate a new Blog
        //$post = new Blog;

        /* $post->title = request('title');
           $post->body = request('body');
           $post->image_url = request('image_url');
           save to DB 
           $post->save();
        And redirect to somewhere in our application ex: to the list of posts
        */

        // VALIDATION: 
        $this->validate(request(), [
            'title' => 'required|min:2', // check the docs for the specific validations
            'body' => 'required|max:1200',
            'image_url' => 'required'
        ]);

        //Better way
        Blog::create([
            'title'=>request('title'),
            'body'=>request('body'),
            'image_url'=>request('image_url'),
        ]);

        return redirect('/blog');
    }
}
