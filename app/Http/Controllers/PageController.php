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



    // redirect ra  route khac
    public function redetails( $id)
    {
        
        return redirect()->route('details',['id'=>$id]);

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

        // relevant car
        // $year = $vehicle[0]->year;
        // $fuel =$vehicle[0]->fuel;
        // $seats =$vehicle[0]->seats;
        // lấy phần gợi ý car
        $similar_vehicle = VehiclesModel::where( "year",$vehicle[0]->year )->orwhere( 'fuel',$vehicle[0]->fuel)->orwhere('seats',$vehicle[0]->seats)->limit(4)->get();

        return view('page.details', ["vehicle" => $vehicle , 'similar'=> $similar_vehicle ] );

    }

    /**
     * return filter value
     * 
     */

    public function carlisting()
    {
        
        $manufacturer=VehiclesModel::select('manufacturer')->groupby('manufacturer')->get();
        $category=VehiclesModel::select('make')->groupby('make')->get();
        $fuel=VehiclesModel::select('fuel')->groupby('fuel')->get();
        $transmission=VehiclesModel::select('transmission')->groupby('transmission')->get();
        $type=VehiclesModel::select('type')->groupby('type')->get();
        $seats=VehiclesModel::select('seats')->groupby('seats')->get();
      
         return view('page.carlisting',['manufacturer'=>$manufacturer ,
          'category'=> $category , 'fuel'=>$fuel ,'transmission'=>$transmission  , 'type'=> $type,
          'seats'=>$seats
          ]);

    }
    public function filtervehicle()
    {
                  


         return view('page.carlisting');

    }
    // ajax  handler filter 
    public function ajaxfiltervehicle(Request $request){
                    
        $manufacturer=$request['manufacturer']; 
        $category=$request['category'];
        $fuel=$request['fuel'];     
        $transmission=$request['transmission'];
        $seats=$request['seats'];
        $type=$request['type'];


        $vehicle = VehiclesModel::orwhere('make',$category)->orwhere('manufacturer',$manufacturer)
        ->orwhere('fuel',$fuel)->orwhere('transmission',$transmission)->orwhere('type',$type)->orwhere('seats',$seats)->get();

        return  response()->json( ['vehicle'=>$vehicle ] );


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


    // =========
    //test form
    public function post(Request $req)
    {
        echo $req->text;
        echo $req->radio;

    }
    


    //test ajax Request $req
    public function ajax( $id )
    {
        //   $num=  $req->number;

       return response()->json(['number'=>12]) ;

    }
    public function testajax()
    {
        //   $num=  $req->number;



       return response()->json(['number'=>12]) ;

    }
    
    // =====
  

   

    public function ajaxRequestPost(Request $request)

    {

        $input = $request->all();

        return response()->json(['success'=>'Got Simple Ajax Request.',
        'name' => $request['name'],
        'password' => $request['password'],
        'email' => $request['email'],
        
        
        ]);

    }
    



}
