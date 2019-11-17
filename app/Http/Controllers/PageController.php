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
        // phân trang tầm 9 cái xe


        // $vehicles=  VehiclesModel::limit(5)->get(); //json
        // chú ý là nó phải là mới nhất 
        $vehicles=  VehiclesModel::where("price",'!=',0 )->orderby('year','desc')->paginate(9); //json
               
        //tra ve json
        return view('page.index',[ "vehicles"=> $vehicles ]);
        
        
    

    }




    public function details( )
    {
        
        // $vehicles=  VehiclesModel::where("vehicleID",'==',$id ); //json $id
      

          return view('page.details');




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
