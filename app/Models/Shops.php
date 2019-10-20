<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shops extends Model
{
    public function products()
    {
        return $this->hasMany('App\Models\Products');
    }

    /*Se puede usar 
    $comments = App\Post::find(1)->comments;
    */
}
