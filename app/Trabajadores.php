<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajadores extends Model
{
    protected $table = "trabajadores";
    protected $fillable = ["nombre", "mes"];


    public function trabajadores()
    {
        return $this->hasOne('App\Meses',  'mes_id');
    }
}


