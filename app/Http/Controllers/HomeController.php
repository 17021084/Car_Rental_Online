<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('users.home');
    }
    
    
    public function profile(Request $request)
    {
            
        // $email=$request['email'];
        // $dob=$request['dob'];
        // $name=$request['name'];
        // $phone=$request['phone'];
        // User::where('email',$email)->update( ['name'=>$name , 'dob'=>$dob,'phone'=>$phone]);
        
        return view('users.profile');
    }


    public function testimonials(){

        return view('users.testimonials');
    }
}
