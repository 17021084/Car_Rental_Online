<?php

namespace App\Http\Controllers;

use App\DB;
use Illuminate\Http\Request;
use App\VehiclesModel;

class PageController extends Controller
{
    //
    public function index()
    {
        // hiển thị car
        $vehicles=  VehiclesModel::limit(5)->get(); //json
               
        //tra ve json
        return view('page.index',[ "vehicles"=> $vehicles ]);
        
        
    

    }


    public function carlisting()
    {
        
      
       
         return view('page.carlisting');




    }


    public function aboutus()
    {
        return view('page.aboutus');
    }


    public function contactus()
    {
        return view('page.contactus');
    }


    public function term()
    {
        return view('page.termofuse');
    }

    
    public function privacy()
    {
        return view('page.privacypolicy');
    }


    public function faqs()
    {
        return view('page.faqs');
    }
    


}
