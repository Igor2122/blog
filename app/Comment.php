<?php

namespace App;


class Comment extends Model
{
    //$comment->blog;
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
