<?php

namespace App\Http\Controllers;

use App\BookingModel;
use App\DB;
use Illuminate\Http\Request;
use App\VehiclesModel;
use App\ConTactUsInfor;
use App\ManagePage;
use App\Testimonial;
use DateTime;

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

    public function search(Request $request ){

        $manufacturer=VehiclesModel::select('manufacturer')->groupby('manufacturer')->get();
        $category=VehiclesModel::select('make')->groupby('make')->get();
        $fuel=VehiclesModel::select('fuel')->groupby('fuel')->get();
        $transmission=VehiclesModel::select('transmission')->groupby('transmission')->get();
        $type=VehiclesModel::select('type')->groupby('type')->get();
        $seats=VehiclesModel::select('seats')->groupby('seats')->get();

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

        return view('page.carlisting',['manufacturer'=>$manufacturer ,
        'category'=> $category , 'fuel'=>$fuel ,'transmission'=>$transmission  , 'type'=> $type,
        'seats'=>$seats , 'vehicles'=>$vehicles
        ]);



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
    
    public function booking( Request $request)
    {
        // chua xu li logic 
        $email =$request['email'];
        $fromdate = date_format(date_create($request['fromdate']),"d/m/Y");
        $todate = date_format(date_create($request['todate']),"d/m/Y");
        $message = $request['message'];
        $vehicleID = $request['vehicleID'];
        
        // 'userEmail','VehicleId',,'FromDate','ToDate','message'
        // 1 confirm  0 not confrimed yet 2 cancell

        //check logic xem co dat dc xe ko
        $booking = BookingModel::where('VehicleId',$vehicleID)->get();
        
        //check liệu có ai đã book xe có id này chưa
        if (count($booking)==0){
            // chưa có ai từng booked xe này
            
            BookingModel::insertGetId(['userEmail'=>$email,'VehicleId'=>$vehicleID,
            'FromDate'=>$fromdate,'ToDate'=>$todate,'message'=>$message, 'Status'=>0]);
            $message = "booking request  from : $fromdate to $todate is waiting status ";
            return view( 'page.response',['message'=>$message]);
            
       } else{ 
           //có nhiều người đã  book xe này
              
            // booking request dang gửi lên   ep  kiểu   
             $fromDateRequesting =   DateTime::createFromFormat('d/m/Y', $fromdate  );
         
            foreach($booking as $item){

                // cái đã gửi book request lên rồi rồi               
                $todatebooked =  DateTime::createFromFormat('d/m/Y', $item->ToDate);                

                if(   $todatebooked  > $fromDateRequesting  && $item->Status == 1 ){
                    // nếu trong số xe có cùng id và fromdate(booking đang gửi lên) < toDate (của cái đã có)
                    // và  nó đã đc confirm rồi  tức là Status =1 
                    // =>> booking ko dc

                    $message="booking request from  : $fromdate to $todate 'Fail' because  vehicle is being rented " ;
                    return view( 'page.response',['message'=>$message]);
                    
                 
                }

             }
        // chạy hết for của những thằng cùng id  
        // fromdate (booking gửi lên)  >  cái toDate (của cái đã có ) hoăc
        //  fromdate (booking gửi lên)  <  cái toDate (của cái đã có ,nhưng status = 0 2) thì có nghĩa là
        //  booking request vẫn đc gửi  và đang trạng thái ' not confirmed yet '

        BookingModel::insertGetId(['userEmail'=>$email,'VehicleId'=>$vehicleID,
        'FromDate'=>$fromdate,'ToDate'=>$todate,'message'=>$message, 'Status'=>0]);
             $message="booking request  from : $fromdate to $todate is waiting status ";
             return view( 'page.response',['message'=>$message]);
       }
        

        

        
    }









}
