<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Comment;

class CommentsController extends Controller
{
    // add store method
    public function store(Blog $blog) 
    {
        Comment::create([
            'body'=> request('body'),
            'blog_id' => $blog->id
            ]);
            
            return back();
        }
    }
    





    // $blog->addComment(request('body'));