<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingModel extends Model
{
    //
    protected $table = "tblbooking";
    protected $primaryKey = 'id';
    public $timestamps = false; // nếu ko có createat và update at thì thôi để false
    
}
