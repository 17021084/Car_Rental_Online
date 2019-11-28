@extends('layouts.app')
<style>

.list_rent li{
    background-color: whitesmoke;
    border-top: 0.1px;
    margin-top: 30px;
    padding-top: 10px;
    border-top-style: groove;   

}



</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 style="text-align:center; margin-bottom:30px;" > My Booking Home </h1> 
            <ul class = "list_rent" type="none" >
                
                {{-- xe dau tien --}}
                <li>
                    <div class="row"  >
                        <div class="col-sm-3" > 
                            <img style="border-radius: 50%; height:120px;  width:120px;" src="images/recent-car-1.jpg" alt="car Image">
                        </div>
                        <div class="col-sm-4" >
                            <h3> <b>Car name</b></h3>                  
                            <b>From Date :</b> 15/11/1999  <br>
                            <b>To Date :</b>  15/11/1999  <br>
                            <b>Duration :</b> 0 day <br>
                            <span class="badge badge-dark badge-lg"> <h6>price</h6> </span>  <b>  1000 $ </b>   
                                
                            </div>
                            <div class="col-sm-3 ">
                                <h5> <b>Messages</b> </h5>
                                test thu xem the nao
                            </div>
                            <div class="col-sm-1" style="padding-top:  50px;">
                                    <span class="badge badge-pill badge-success">Success</span>
                                    <span class="badge badge-pill badge-danger">Waitting</span>              
                                </div>
                                <div class="col-sm-1" style="padding-top:  50px;" >                
                                        <button value="not" onclick="clear()"  type="button" class="btn btn-danger btn-sm">X</button>
                                    </div>
                                </div>
                                
                                
                            </li>
                            {{-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ --}}
                            
                            {{-- xe dau thu 2 --}}
                            <li>
                                <div class="row"  >
                                    <div class="col-sm-3" > 
                                        <img style="border-radius: 50%; height:120px;  width:120px;" src="images/recent-car-1.jpg" alt="car Image">
                                    </div>
                                    <div class="col-sm-4" >
                                        <h3> <b>Car name</b> </h3>                  
                                        <b>From Date </b> : 15/11/1999 <br>
                                        <b>To Date </b> : 15/11/1999    <br>            
                                             
                                        <span class="badge badge-dark badge-lg"> <h6>price</h6> </span>  <b>  1000 $ </b>   
                                    </div>
                                    <div class="col-sm-3 ">
                                        <h5> <b>Messages</b> </h5>
                                        test thu xem the nao
                                    </div>
                                    <div class="col-sm-1" style="padding-top:  50px;">
                                            <span class="badge badge-pill badge-success">Success</span>
                                            <span class="badge badge-pill badge-danger">Waitting</span>              
                                        </div>
                                        <div class="col-sm-1" style="padding-top:  50px;" >                
                                                <button name="delete" type="button" class="btn btn-danger btn-sm">X</button>
                                            </div>
                                        </div>
                                        
                                        
                                    </li>
                {{-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ --}}

           </ul>
            
        </div>
    </div>
</div>





@endsection
