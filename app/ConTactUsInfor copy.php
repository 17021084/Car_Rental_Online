<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConTactUsInfor extends Model
{
    //
    protected $table = "tblcontactusinfo";
    protected $primaryKey = 'id';
    public $timestamps = false; // nếu ko có createat và update at thì thôi để false
    
    // những cột có thể update đc
    protected $fillable = [
        'Address', 'EmailId','ContactNo'
    ];
}
