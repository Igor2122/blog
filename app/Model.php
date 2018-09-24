<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    //to protect all the input fields of the submitted form 
    protected $guarded = [];
}
