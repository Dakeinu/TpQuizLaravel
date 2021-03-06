<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    public function scores(){
        return $this->hasMany('Score');
    }

    public function questions(){
        return $this->hasMany('Question');
    }
}
