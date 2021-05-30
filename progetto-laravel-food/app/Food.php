<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
   protected $table = "food_5000";

   public function tags()
{
    return $this -> BelongsToMany('App\Tag');
}

}


