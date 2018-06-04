<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meses extends Model
{
    protected $table = "meses_posibles";
    protected $fillable = ["mes"];


    public function meses()
    {
        return $this->hasMany('App\Trabajadores');
    }
}

