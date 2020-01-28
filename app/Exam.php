<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    public function classe()
    {
        return $this->hasOne('App\Classe');
    }

    public function resultat()
    {
        return $this->belongsTo('App\Resultat');
    }
}
