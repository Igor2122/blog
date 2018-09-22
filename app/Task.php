<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // Adding query scopes to pull different completed and non completed info for example
    // query scopes we prefix the method with scope and regular public method  
    public function scopeincomplete($query) 
    {
        // we say 'static' as we are already within the task model
        return $query->where('completed', 0);
    }
}
