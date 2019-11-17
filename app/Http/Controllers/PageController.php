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




    public function details( $id)
    {
        
        $vehicle =  VehiclesModel::where("vehicleID",$id )->get(); //json $id
       
        // kieu obj
        // $car = json_decode($vehicle);
        // echo($car[0]->price);
        
        
        // kieeur mang
        // $car = json_decode($vehicle,true);
        // echo($car[0]['price']);

        // json
        // echo($vehicle[0]->year);


        return view('page.details', ["vehicle" => $vehicle ] );

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
