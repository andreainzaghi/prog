<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function food()
    {
        return $this -> BelongsToMany('App\Food');
    }
    
}
