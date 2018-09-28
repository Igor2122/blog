<?php

namespace App;


// is extending our custom Model that is extanding the eloquent model 
class Blog extends Model
{
    // adding relationship with the comments database
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment($body)
    {
        Comment::create([
            'body' => $body,
            'post_id' => $this->id
        ]);
    }
}
