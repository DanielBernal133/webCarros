<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosPersonales extends Model
{
    protected $table='personaldat';

    protected $primaryKey='IdPerso';

    public $timestamps= false;

    /*public function usuario(){
        return $this->belongsto("App\User" , 'USUID');
    }*/
}
