<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $table='categoria';

    protected $primaryKey='CATID';

    public $timestamps= false;
}
