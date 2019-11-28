<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehiclesModel extends Model
{
    //
    protected $table = "vehicles";
    protected $primaryKey = 'vehicleID';
    public $timestamps = false; // nếu ko có createat và update at thì thôi để false
    
  
            
        // vehicleID
        // price
        // year
        // manufacturer
        // make -> dong xe category
        // condition
        // cylinders
        // fuel
        // odometer
        // title_status
        // transmission
        // drive
        // size
        // seats
        // type
        // paint_color
        // image_url
        // desc


}
