<?php

namespace App\Http\Controllers;

use App\BookingModel;
use Illuminate\Http\Request;
use App\User;
use App\Testimonial;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Schema;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     *  render booking list
     */
    public function index()
    {
        $booking = BookingModel::where('userEmail',auth()->user()->email)->orderBy('PostingDate','desc')->get(); 
        
        // var_dump($booking);
        return view('users.home',['booking'=>$booking]);
    }
    
    public function deletebooking($id){
        // echo $request['id'];

        BookingModel::where('id',$id)->delete();
        return redirect()->route('home');
    }




    
    public function profile()
    {
        // BookingModel::where()->get();
        //   echo auth()->user()->email;


        return view('users.profile'  );
    }


    public function updateprofile(Request $request){
              
        $email=$request['email'];
        $dob=$request['dob']; 
        $name=$request['name'];
        $phone=$request['phone']; 
     
        User::where('email',$email)->update( ['name'=>$name , 'dob'=>$dob,'phone'=>$phone]);
        $user=User::where('email',$email)->get();

        return $user[0];
    }

    public function testimonials(){
        
        $test = Testimonial::where('UserEmail',auth()->user()->email )->orderBy('PostingDate' ,'desc')->get();

        
        return view('users.testimonials', ['test'=>$test] );
    }
    public function posttestimonials(Request $request){

        Testimonial::insertGetId(['Testimonial' => $request['Testimonials'] ,'UserEmail'=>auth()->user()->email]);

        return redirect()->route('testimonials');
    }


}
