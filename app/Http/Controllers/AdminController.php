<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\VehiclesModel;
use App\Testimonial;
use App\ConTactUsInfor;
use PhpParser\Node\Stmt\Else_;

class AdminController extends Controller
{

    // public function __construct()
    // {
    //     // tất cả các route gọi controller phải qua middleware
    //     $this->middleware('auth:admin');
    // }

    // trả về trang home admin khi đăng nhập thành công
   
    public function index(){
       return view('admin.adminmaster');
        
    }
    // quản lý contact trên page
    public function contact(){
     
            $contact = ConTactUsInfor::get();               
        return view('admin.contact' , ['contact'=>$contact] );
        
    }

    public function updatecontact( Request $request){
        //check co request ko            
            $contact = ConTactUsInfor::find(1)->update(['Address'=>$request['Address'],'EmailId'=>$request['Email'],'ContactNo'=>$request['Contact'] ]);          
            $contact=ConTactUsInfor::get();
                  
        return $contact[0];
        
    }

    // quản lý page 
    public function pages(){


        return view('admin.pages');
        
    }
    // quản lý booking
    public function booking(){
        return view('admin.booking');
        // return view('admin.book');
        
    }

    //quản lý users
    public function users(Request $request){
        if( $request->has('search') ){
            $search = "%".$request['search']."%";

            $user = User::orwhere( 'id','LIKE',$search )->
            orwhere( 'name','LIKE',$search )-> 
            orwhere( 'email','LIKE',$search )-> 
            orwhere( 'created_at','LIKE',$search )-> 
            orwhere( 'updated_at','LIKE',$search )->  
            orwhere( 'phone','LIKE',$search )-> 
            orwhere( 'dob','LIKE',$search )-> 
            paginate(10);  
            
        }else{

            // neu ko co formseach gui len
             $user = User::paginate(10);     

        }



        // thêm search
        
        return view('admin.users', [ 
            'user' => $user
          ]);
        
    }

    public function vehicles( Request $request){
        if( $request->has('search') ){
            $search = "%".$request['search']."%";
            $vehicles = VehiclesModel::orwhere( 'vehicleID','LIKE',$search )->orwhere( 'manufacturer','LIKE',$search )->orwhere( 'make','LIKE',$search )->
            orwhere( 'price','LIKE',$search )->orwhere( 'year','LIKE',$search )->orwhere( 'title_status','LIKE',$search )->
            orwhere( 'condition','LIKE',$search )->orwhere( 'cylinders','LIKE',$search )->orwhere( 'fuel','LIKE',$search )->
            orwhere( 'odometer','LIKE',$search )->orwhere( 'drive','LIKE',$search )->orwhere( 'size','LIKE',$search )->
            orwhere( 'seats','LIKE',$search )->orwhere( 'type','LIKE',$search )->orwhere( 'transmission','LIKE',$search )->
            orwhere( 'paint_color','LIKE',$search )-> paginate(10);  
           


        }else{
            // neu ko co formseach gui len
             $vehicles = VehiclesModel::paginate(10);     
        }
      
        return view('admin.vehicles' , ['vehicles' =>$vehicles ] );
        
    }
    public function editvehicle(){
        
        return view('admin.editvehicle');
        
    }
    public function addvehicle(){
        return view('admin.addvehicle');
        
    }


    public function testimonials(Request $request){
      
        if( $request->has('search') ){
            $search = "%".$request['search']."%";

            $test = Testimonial::orwhere( 'id','LIKE',$search )->
            orwhere( 'UserEmail','LIKE',$search )-> 
            orwhere( 'Testimonial','LIKE',$search )-> 
            orwhere( 'PostingDate','LIKE',$search )->  
            orwhere( 'status','LIKE',$search )-> 
            paginate(10);  
            
        }else{

            // neu ko co formseach gui len
             $test = Testimonial::paginate(10);     

        }

        
        return view('admin.testimonials', ['test' =>$test ]);
        
    }
        
    

    



}
