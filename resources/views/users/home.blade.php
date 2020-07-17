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

<div id ='app'>
        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <h1 style="text-align:center; margin-bottom:30px;" > My Booking Home </h1> 
                        <ul class = "list_rent" type="none" >
                            @foreach ($booking as $item)
                                {{-- xe dau tien --}}
                                <li>
                                    <div class="row"  >
                                
                                            <div class="col-sm-3" > 
                                                <img style="border-radius: 50%; height:120px;  width:120px;" src="{{ $item->vehicle()->first()->image_url }}" alt="car Image">
                                            </div>
    
                                            <div class="col-sm-4" >
                                                <h3> <b style="text-transform:capitalize">{{  $item->vehicle()->first()->manufacturer }}</b></h3>                  
                                                <b>From Date :</b> {{ $item->FromDate }}  <br>
                                                <b>To Date :</b>  {{ $item->ToDate }}  <br>
                                                <b>Duration :</b> 
                                                
                                                <?php  
                                              

                                                $FromDate =  DateTime::createFromFormat('d/m/Y', $item->FromDate) ; 
										        $ToDate =  DateTime::createFromFormat('d/m/Y', $item->ToDate) ; 
										        $interval = date_diff($FromDate, $ToDate);
										        echo $interval->format('%R%a days'); 
                                                ?>
                                            
                                                <br>
                                                <span class="badge badge-dark badge-lg"> <h6>price</h6> </span>  <b> 
                                                    <?php 
                                                    echo $interval->format('%a')* $item->vehicle()->first()->price ;   
                                                    
                                                    ?>
                                                                                                                        
                                                </b>   
                                                    
    
                                            </div>
    
                                            <div class="col-sm-3 ">
                                                    <h5> <b>Message</b> </h5>
                                                    {{ $item->message }}
                                            </div>
                                            <div class="col-sm-1" style="padding-top:  50px;">
                                                        @if ($item->Status ==0)
                                                            <span class="badge badge-pill badge-primary">Waitting </span>  
                                                        @else
                                                            @if($item->Status ==1)
                                                            <span class="badge badge-pill badge-success">Accept</span>
                                                            @else
                                                            {{-- 2 la bi huy --}}
                                                            <span class="badge badge-pill badge-warning">Decline</span>
                                                            
                                                            @endif
                                                        @endif
                                                        
                                                                
                                            </div>
                                            <div class="col-sm-1" style="padding-top:  50px;" >             
                                                    
                                                    <button type="button" class="btn btn-danger">
                                                        <a  onclick="return confirm('Are you really want delete this booking?');" href="{{  route('deletebooking' , ['id'=>$item->id ]) }}" >X
                                                        </a>
                                                    </button>
                                            </div>
    
                                    </div>                                                                 
                                </li>
    
                            @endforeach
                                        {{-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ --}}
                                                
                         </ul>
                        
                    </div>
            </div>
        </div>
</div> 




        
@endsection


