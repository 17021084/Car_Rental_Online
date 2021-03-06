<?php

namespace App\Http\Controllers;

use App\BookingModel;
use Illuminate\Http\Request;
use App\User;
use App\VehiclesModel;
use App\Testimonial;
use App\ConTactUsInfor;
use App\GuestContact;
use App\ManagePage;
use DateTime;

class AdminController extends Controller
{

    public function __construct()
    {
        // tất cả các route gọi controller phải qua middleware
        $this->middleware('adminAuth');
    }

    // admin daskboard 
   
    public function index(){

        $booking =count(BookingModel::get());
        $user=count(User::get());
       
        $test=count(Testimonial::get());
        $page =count(ManagePage::get());
        $vehicle = count(VehiclesModel::get());
        $guest =count(GuestContact::get());

       return view('admin.dashboard',
        [ 'user'=>$user, 'test' => $test ,'page'=>$page,
         'vehicle'=>$vehicle ,'guest'=>$guest ,   'booking'=>$booking  
        
        ]
        );
        
    }


    // manage contact of page
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


  
    // manage page 
    public function pages(){
        $page = ManagePage::get();
        // var_dump($page[0]->detail);
        return view('admin.pages',['page'=>$page] );
        
    }
    public function postpages(Request $request){
    
        ManagePage::where( 'type', $request['type'] )->update( ['detail'=> $request['summary-ckeditor'] ]);
        
        return redirect()->route('admin.pages');
        
    }
    

    // manage booking
    public function booking( Request $request){
             
        // $booking=BookingModel::where('userEmail','erina@gmail')->orderBy('PostingDate','desc')->get(); 
        if( $request->has('search') ){

            $search = "%".$request['search']."%";
        
            $booking = BookingModel::orwhere( 'id','LIKE',$search )->orwhere( 'userEmail','LIKE',$search )->orwhere( 'FromDate','LIKE',$search )->
            orwhere( 'ToDate','LIKE',$search )->orwhere( 'message','LIKE',$search )->orwhere( 'PostingDate','LIKE',$search )->orwhere( 'Status','LIKE',$search )-> orderBy('PostingDate','desc')->paginate(10);  
          
            // return $search;
           
            
        }else{
            // neu ko co formseach gui len
            $booking=BookingModel::orderBy('PostingDate','desc')->paginate(5); 
                
        }

        return view('admin.booking',['booking'=>$booking]);
          
        // var_dump($booking);
        // foreach( $booking as $item){
        //     echo  $item->vehicle()->first()->vehicleID." ". $item->vehicle()->first()->price ." <br> " ;
        // }

    }

    //update status of booking
    public function bookingupdate( Request $request){
         // 1 accept  0 watiting 2 decline
       
       
         $id= $request['id'];
         $btn =$request['btn'];

        // $booking = BookingModel::where('id',$id)->get();

      if( $btn=='acc'){ // accept
          
        BookingModel::where('id',$id)->update(['Status'=>1]);
          $booking = BookingModel::where('id',$id)->get();
       
       }
        if($btn =='dec') { // decline

            BookingModel::where('id',$id)->update(['Status'=>2]);
           $booking = BookingModel::where('id',$id)->get();
           
       
         }       

       return $booking[0];
  


    }


    
    //See users
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



    // show vehicle    
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

    /**
     * edit vehicle
     * 
     * 
     */
    public function editvehicle( $id){
        
        $vehicle= VehiclesModel::where("vehicleID",$id )->get();
        // var_dump($vehicle);

        return view('admin.editvehicle', ['vehicle'=>$vehicle[0]] );
    }

    public function posteditvehicle(Request $request){
        
        VehiclesModel::where("vehicleID", $request['Id'] )->update( ['price'=>$request['Price'],'year'=>$request['Year'],'manufacturer'=>$request['Manufacturer'],'make'=>$request['Category'],
        'condition'=>$request['Condition'],'cylinders'=>$request['Cylinders'],'fuel'=>$request['Fuel'],'odometer'=>$request['Odometer'],
        'title_status'=>$request['status'],'transmission'=>$request['Transmission'],'drive'=>$request['Drive'],'size'=>$request['Size'],
        'seats'=>$request['Seats'],'type'=>$request['Type'],'image_url'=>$request['ImageURL'],'paint_color'=>$request['PaintColor'],'desc'=>$request['Description'] ]);
        
       
        return redirect()->route('admin.editvehicle', ['id'=>$request['Id']] ) ;
    }

    /**Delete vehicles
     * 
     */
    public function deletevehicle($id){
        
        VehiclesModel::where("vehicleID", $id )->delete();
        
        return redirect()->route('admin.vehicles' ) ;
    }

    


    /**
     * add vehicle
     * 
     * 
     */

    public function addvehicle(){
        return view('admin.addvehicle');
        
    }
    public function postaddvehicle(Request $request){
    
       
        
        VehiclesModel::insertGetId( ['price'=>$request['Price'],'year'=>$request['Year'],'manufacturer'=>$request['Manufacturer'],'make'=>$request['Category'],
        'condition'=>$request['Condition'],'cylinders'=>$request['Cylinders'],'fuel'=>$request['Fuel'],'odometer'=>$request['Odometer'],
        'title_status'=>$request['status'],'transmission'=>$request['Transmission'],'drive'=>$request['Drive'],'size'=>$request['Size'],
        'seats'=>$request['Seats'],'type'=>$request['Type'],'image_url'=>$request['ImageURL'],'paint_color'=>$request['PaintColor'],'desc'=>$request['Description'] ]);      
       
        //route admin.vehicle  ,['message'=>$request['Manufacturer']] 
        return redirect()->route('admin.addvehicle');
        
    }



    /**
     * render view Testimonials and search with 'testimonials ()'
     * update Testimonials with  'testimonials()'
     * 
     */

     
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
             $test = Testimonial::orderBy('PostingDate','desc')->paginate(10);     

        }

        
        return view('admin.testimonials', ['test' =>$test ]);
        
    }


    public function testupdate(Request $request){
        
          $id= $request['id'];
         $test = Testimonial::where('id',$id)->get();

       if($test[0]->status==1){
           
           Testimonial::where('id',$id)->update(['status'=>0]);
           $test = Testimonial::where('id',$id)->get();
           
           
        }else{
            Testimonial::where('id',$id)->update(['status'=>1]);
            $test = Testimonial::where('id',$id)->get();
            
        
          }       
        return $test[0];
         
        
    }
        
    // guest contact to admin 
    public function guestcontact(Request $request){

        if($request->has('search') ){
            $search = "%".$request['search']."%";
            $contact = GuestContact::orwhere( 'id','LIKE',$search )->
            orwhere( 'name','LIKE',$search )->
            orwhere( 'EmailId','LIKE',$search )->
            orwhere( 'ContactNumber','LIKE',$search )->
            orwhere( 'Message','LIKE',$search )->
            orwhere( 'PostingDate','LIKE',$search )->
            paginate(5);

        }else{

            $contact = GuestContact::paginate(5);
            
        }

        return view('admin.guestcontact',['contact'=>$contact]);
    }

    



}
