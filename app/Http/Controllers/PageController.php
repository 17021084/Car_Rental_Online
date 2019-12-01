<?php

namespace App\Http\Controllers;

use App\DB;
use Illuminate\Http\Request;
use App\VehiclesModel;
use App\ConTactUsInfor;
use App\ManagePage;
use App\Testimonial;

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
        
        
        // thông tin thêm      
        $manu=VehiclesModel::select('manufacturer')->groupby('manufacturer')->get();
        $type=VehiclesModel::select('type')->groupby('type')->get();
        $vhc =VehiclesModel::select('*')->get();
        
        //testimonial  lấy feedback từ user 
        $test = Testimonial::where('status',1)->get();


        //tra ve json
        return view('page.index',[ "vehicles"=> $vehicles,
        
        'type'=>$type,
        'manu'=>$manu,
        'vhc'=>$vhc,
        'test'=>$test
        ]);
        
        
    

    }



    // redirect ra  route khac
    public function redetails( $id)
    {
        
        return redirect()->route('details',['id'=>$id]);

    }

    //return vehicle details
    // 

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
     *  filter v
     * 
     */

    public function carlisting(Request $request)
    {
        
        
        $manufacturer=VehiclesModel::select('manufacturer')->groupby('manufacturer')->get();
        $category=VehiclesModel::select('make')->groupby('make')->get();
        $fuel=VehiclesModel::select('fuel')->groupby('fuel')->get();
        $transmission=VehiclesModel::select('transmission')->groupby('transmission')->get();
        $type=VehiclesModel::select('type')->groupby('type')->get();
        $seats=VehiclesModel::select('seats')->groupby('seats')->get();
       
        //form request gui len
        $vehicles = VehiclesModel::orwhere('make',$request['category'])->orwhere('manufacturer',$request['manufacturer'])
        ->orwhere('fuel',$request['fuel'])
        ->orwhere('transmission',$request['transmission'])
        ->orwhere('type',$request['type'])->orwhere('seats',$request['seats'])->paginate(4);;



         return view('page.carlisting',['manufacturer'=>$manufacturer ,
          'category'=> $category , 'fuel'=>$fuel ,'transmission'=>$transmission  , 'type'=> $type,
          'seats'=>$seats , 'vehicles'=>$vehicles
          ]);

    }

    

    
    
    public function contactus()
    {
        $infor =ConTactUsInfor::get();
        return view('page.contactus',['infor'=>$infor]);
    }
    //render infor in header
    public function pageinfor()
    {
        $infor =ConTactUsInfor::get();
        $email =$infor[0]->EmailId;
        $phone =$infor[0]->ContactNo;
        
        return response()->json(['email'=>$email, 'phone'=>$phone]);
    }
    
    
    
    public function aboutus()
    {
        $page=ManagePage::where('type','aboutus')->get();
        return view('page.aboutus', [ 'aboutus'=>$page]);
    }
    
    
    
    public function term()
    {
        
        $page=ManagePage::where('type','terms')->get();
        return view('page.termofuse', [ 'terms'=>$page] );
    }
    
    
    public function privacy()
    {
        $page=ManagePage::where('type','privacy')->get();
        return view('page.privacypolicy',[ 'privacy'=>$page]);
    }
    
    
    public function faqs()
    {
        $page=ManagePage::where('type','faqs')->get();
        return view('page.faqs',[ 'faqs'=>$page]);
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
