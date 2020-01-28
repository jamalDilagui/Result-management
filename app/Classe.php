<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    public function exam()
    {
        return $this->belongsTo('App\Exam');
    }

    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }

    public function students()
    {
        return $this->hasMany('App\Student');
    }
}
