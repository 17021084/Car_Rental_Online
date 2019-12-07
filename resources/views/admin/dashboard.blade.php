@extends('admin.adminmaster')
<style>

.panel_1 , .panel_5 {
     
    background-color:#5b7b2c;
    color: aliceblue;
    height: 100px;

}
.panel_2 , .panel_6 {
     
    background-color:#48a997;
    color: aliceblue;
    height: 100px;

}
.panel_3 , .panel_7 {
     
    background-color:#882f2f;
    color: aliceblue;
    height: 100px;

}
.panel_4 , .panel_8 {
     
    background-color:#88410f;
    color: aliceblue;
    height: 100px;

}

.wrap{
    height: 150px;
    border: 1.5px solid  wheat;
    box-shadow: 2px 2px wheat;
    /* background-color: white; */
    margin-bottom: 50px; 

}
.detail{
    padding-top: 10px;

}
.col-md-3{
    border-bottom:50px; 
}
</style>

@section('content')
<div class="container">
    
    <h1 style="text-align:center; margin-top:30px;" > Admin DashBoard</h1> 
                     
        <div class="testimonials">
                
             <div class="row">
                        <div class="col-md-3">
                            <div class="wrap">
                                
                                <div class="panel_1">
                                    <div class="stat-panel text-center">
                                        <div class="stat-panel-number h1 ">{{ $booking }}</div>
                                        <div class="stat-panel-title text-uppercase">Booking </div>
                                    </div>
                                    

                                </div>
                                <div class="detail">
                                   <a href="{{ route('admin.booking') }}" >Full Detail <i class="fa fa-arrow-right"></i></a>
                                </div>
        
                            </div>

                        </div>
                      
                        <div class="col-md-3">
                            <div class="wrap">
                                
                                <div class="panel_2">
                                    <div class="stat-panel text-center">
                                        <div class="stat-panel-number h1 ">{{ $user }}</div>
                                        <div class="stat-panel-title text-uppercase"> Users</div>
                                    </div>
                                    

                                </div>
                                <div class="detail">
                                   <a href="{{ route('admin.users') }}">Full Detail <i class="fa fa-arrow-right"></i></a>
                                </div>
        
                            </div>

                        </div>
                      
                        <div class="col-md-3">
                            <div class="wrap">
                                
                                <div class="panel_3">
                                    <div class="stat-panel text-center">
                                        <div class="stat-panel-number h1 ">3</div>
                                        <div class="stat-panel-title text-uppercase">Update Contact infor</div>
                                    </div>
                                    

                                </div>
                                <div class="detail">
                                   <a href="{{ route('admin.updatecontact') }}" >Full Detail <i class="fa fa-arrow-right"></i></a>
                                </div>
        
                            </div>

                        </div>
                      
                        <div class="col-md-3">
                            <div class="wrap">
                                
                                <div class="panel_4">
                                    <div class="stat-panel text-center">
                                        <div class="stat-panel-number h1 ">{{ $guest }}</div>
                                        <div class="stat-panel-title text-uppercase">Guest Contact</div>
                                    </div>
                                    

                                </div>
                                <div class="detail">
                                   <a href="{{ route('admin.guestcontact') }}" >Full Detail <i class="fa fa-arrow-right"></i></a>
                                </div>
        
                            </div>

                        </div>
                      
                        <div class="col-md-3">
                            <div class="wrap">
                                
                                <div class="panel_5">
                                    <div class="stat-panel text-center">
                                        <div class="stat-panel-number h1 ">{{ $test }}</div>
                                        <div class="stat-panel-title text-uppercase">Manage Testimonials</div>
                                    </div>
                                    

                                </div>
                                <div class="detail">
                                   <a href="{{ route('admin.testimonials') }}" >Full Detail <i class="fa fa-arrow-right"></i></a>
                                </div>
        
                            </div>

                        </div>
                      
                        <div class="col-md-3">
                            <div class="wrap">
                                
                                <div class="panel_6">
                                    <div class="stat-panel text-center">
                                        <div class="stat-panel-number h1 ">{{ $page }}</div>
                                        <div class="stat-panel-title text-uppercase"> Manage pages </div>
                                    </div>
                                    

                                </div>
                                <div class="detail">
                                   <a href="{{ route('admin.pages') }}" >Full Detail <i class="fa fa-arrow-right"></i></a>
                                </div>
        
                            </div>

                        </div>
                      
                        <div class="col-md-3">
                            <div class="wrap">
                                
                                <div class="panel_7">
                                    <div class="stat-panel text-center">
                                        <div class="stat-panel-number h1 ">{{ $vehicle }}</div>
                                        <div class="stat-panel-title text-uppercase">Manage Vehicles</div>
                                    </div>
                                    

                                </div>
                                <div class="detail">
                                   <a href="{{ route('admin.vehicles') }}" >Full Detail <i class="fa fa-arrow-right"></i></a>
                                </div>
        
                            </div>

                        </div>
                      
                        <div class="col-md-3">
                            <div class="wrap">
                                
                                <div class="panel_8">
                                    <div class="stat-panel text-center">
                                     
                                        <h5 style="padding-top: 30px">Add  Vehicle</h5>
                                    </div>
                                    

                                </div>
                                <div class="detail">
                                   <a href="{{ route('admin.addvehicle') }}" >Full Detail <i class="fa fa-arrow-right"></i></a>
                                </div>
        
                            </div>

                        </div>
                      

                      
                      
                    

                 
                    
                  
                    

            </div>
      
         </div>
            
</div>



@endsection
