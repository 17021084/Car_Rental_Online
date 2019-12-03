<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingModel extends Model
{
    //
    protected $table = "tblbooking";
    protected $primaryKey = 'id';
    public $timestamps = true; // nếu ko có createat và update at thì thôi để false
    public $autoincrement = true;

    protected $fillable = [
        'userEmail','VehicleId','Status','FromDate','ToDate','message','PostingDate'
    ];

    // connect to vehicles tables

        // booking 1- n voi user
        // booking 1 -m  voi vehicle

    public function vehicle(){  // bang lien ket , khoa ngoai , khoa cua bang ngoai do , 'VehicleId' ,'vehicleID' 
        return $this->belongsTo('App\VehiclesModel' ,'VehicleId','vehicleID' );
    }
    public function  user(){  // bang lien ket , khoa ngoai , khoa cua bang ngoai do , 'VehicleId' ,'vehicleID' 
        return $this->belongsTo('App\User' ,'userEmail','email' );
    }



}
