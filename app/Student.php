<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
            'fullname','email','gender','session'
    ];

    public function classe()
    {
        return $this->belongsTo('App\Classe');
    }

    public function resultat()
    {
        return $this->belongsTo('App\Resultat');
    }
   
}
