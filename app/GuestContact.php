<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuestContact extends Model
{
    //
    protected $table = "tblcontactusquery";
    protected $primaryKey = 'id';
    public $timestamps = true; // nếu ko có createat và update at thì thôi để false
    
    
   
}
