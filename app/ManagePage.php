<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagePage extends Model
{
    //
    protected $table = "tblpages";
    protected $primaryKey = 'type';
    public $timestamps = false; 

}
