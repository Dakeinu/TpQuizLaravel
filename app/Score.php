<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    public function user(){
        return $this->belongsTo('User');
    }

    public function quiz(){
        return $this->belongsTo('Quiz');
    }
     
}
