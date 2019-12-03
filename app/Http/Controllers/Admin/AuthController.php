<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


class AuthController extends Controller
{
    //


     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
        
    }

    public function loginForm(){

        return view ('admin.login');

    }
    public function login( Request $req){

        echo $req['id'] ."  ". $req['password'];
        

    }





}
