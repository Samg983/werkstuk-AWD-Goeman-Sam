<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function blogpost(){
        return $this->belongsTo('App\BlogPost');
    }
}
