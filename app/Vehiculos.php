<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculos extends Model
{
    protected $table='vehiculo';

    protected $primaryKey='IDVEHICULO';

    public $timestamps= false;


    public function categorias(){
        return $this->belongsto("App\Categorias" , 'CATID');
    }

    public function Usuario(){
        return $this->belongsto("App\DatosPersonales" , 'DATID');
    }
}
