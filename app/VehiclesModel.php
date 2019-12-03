<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehiclesModel extends Model
{
    //
    protected $table = "vehicles";
    protected $primaryKey = 'vehicleID';
    public $timestamps = false; // nếu ko có createat và update at thì thôi để false
    public $autoincrement = true;

    protected $fillable = [
      'vehicleID', 'price','year','manufacturer','make','condition','cylinders','fuel','odometer'
       ,'title_status','transmission','drive','size','seats','type','image_url','paint_color','desc'
    ];
            
    // public function booking(){  
    //   return $this->hasMany('App\BookingModel' );
    // }
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
