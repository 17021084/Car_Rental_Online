<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    //
    
    protected $table = "tbltestimonial";
    protected $primaryKey = 'id';
    // có có trường time stamps thì để false ko nó lỗi
    public $timestamps = false; 
    public $autoincrement = true;
    
    protected $fillable = [
        'status','Testimonial','UserEmail'
    ];

}
