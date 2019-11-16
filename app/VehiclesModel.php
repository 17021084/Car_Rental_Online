<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehiclesModel extends Model
{
    //
    protected $table = "vehicles";
    protected $primaryKey = 'vehicleID';
    public $timestamps = false; // nếu ko có createat và update at thì thôi để false
    





}
