<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    public function movies(){
        return $this->belongsTo('App\Movie');
    }
}
