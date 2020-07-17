<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Admin;
use App\User;
// use Symfony\Component\HttpFoundation\Session\Session;
use Session;
class AuthController extends Controller
{
    //


     /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    public function loginForm(){

        return view ('admin.auth.login');

    }
    public function postlogin( Request $request){


        $this->validate($request,[
            'name'=>'required',
            'password'=>'required|min:3'
        ],[
            'password.min'=>'password at least 3 characters'
        ]);

        // tesst thu 
        // $UserName = "passlaadmin";
        // $Password ="admin";
 
        $UserName = $request['name'];
        $Password = $request['password'];
        $admin =Admin::where('UserName',$UserName)->get();


        if(  count($admin)==1 && Hash::check($Password,$admin[0]->Password) ){ 

                // create session with name "admin" and value  $UserName
                session(['admin'=>$UserName]);
                // return Session::get('admin');
               return redirect()->route('admin.home');
        
         }else{
         
             return redirect()->route('admin.login' );
        }
            
     
        
    }


    // delete admin session
    public function logout(){

        Session::forget('admin');
         return redirect()->route('admin.login' );

    }





}
