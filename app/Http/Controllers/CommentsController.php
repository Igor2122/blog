<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Comment;

class CommentsController extends Controller
{
    // add store method
    public function store(Blog $post) 
    {
        $post->addComment(request('body'));

        // Comment::create([
        //     'body'=> request('body'),
        //     'post_id' => $post->id

        // ]);

        return back();
    }
}
