<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    //
    
    protected $table = "tbltestimonial";
    protected $primaryKey = 'id';
    public $timestamps = true; 
}
