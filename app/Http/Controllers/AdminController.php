<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('admin.contact');
        
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
    public function users(){
        return view('admin.users');
        
    }
    public function vehicles(){
       return view('admin.vehicles');
        
    }
    public function editvehicle(){
        return view('admin.editvehicle');
        
    }
    public function addvehicle(){
        return view('admin.addvehicle');
        
    }

    public function feedback(){
        return view('admin.feedback');
        
    }
        
    

    



}
