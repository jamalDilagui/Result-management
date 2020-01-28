<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name'
];
    public function classe()
    {
        return $this->hasOne('App\Classe');
    }

    public function exam()
    {
        return $this->hasOne('App\Exam');
    }

    public function resultat()
    {
        return $this->belongsTo('App\Resultat');
    }
}
