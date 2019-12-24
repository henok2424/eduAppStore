<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $guarded = [];

    public function apps(){

      // return $this->hasMany(App::class)
    }

}
