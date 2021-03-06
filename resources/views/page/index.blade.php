@extends('layouts.master')

{{-- 
    trong thằng master sẽ include 2 file php là header và footer
    có 1 cái thẻ div id = content
    yield(" content")    
    
    tại file index.
    muốn nhét nội dung trang index sẽ nhét vào cái section(conten) bên trong

    vậy ta có trang index kế thừa trang master

    
--}}

<style>




</style>




@section('content')
 <!-- home--->

        {{-- {{$year}}
        {{$id}} --}}
        {{-- {{$vehicles->year }} --}}
{{-- 
    @foreach ($vehicles as $item)
        {{ $item->year}}
    @endforeach --}}


            <!-- Banners -->
        <section id="banner" class="banner-section">
            <div class="container">
            <div class="div_zindex">
                <div class="row">
                <div class="col-md-5 col-md-push-7">
                    <div class="banner_content">
                    <h1>Find the right car for you.</h1>
                    <p>We have more than a thousand cars for you to choose. </p>
                    <a href="{{ route('carlisting') }}" class="btn">Read More <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
                </div>
                </div>
            </div>
            </div>
        </section>
        <!-- /Banners --> 
        
        
        <!-- Resent Cat-->
        <section class="section-padding gray-bg">
            <div class="container">
                <div class="section-header text-center">
                    <h2>Find the Best <span>CarForYou</span></h2>
                    <p>Let's hit the Road with ours fancy Cars !! </p>
                </div>
                <div class="row"> 
                    
                    <!-- Nav tabs -->
                    <div class="recent-tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">New Car</a></li>
                    </ul>
                    </div>
                    <!-- Recently Listed New Cars -->
                    <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="resentnewcar">
            
                
                {{-- =========================================================== --}}
                 
                {{-- ================================================================================== --}}
            
                    {{-- vhl = vehicle - hiển thị xe--}} 
                    @foreach ($vehicles as $vhl)  
                            <div class="col-list-3">
                                <div class="recent-car-list">
                                    <div class="car-info-box"> 
                                        
                                        <div class='image'>
                                            <a href="details/{{$vhl->vehicleID }}" ><img src="{{ $vhl->image_url }}" class="img-responsive" alt="image"></a>
                                        </div>    
                                        <ul>
                                            <li><i class="fa fa-beer" aria-hidden="true"></i>{{ $vhl->fuel }}</li>
                                            <li><i class="fa fa-calendar" aria-hidden="true"></i>{{ $vhl->year }}</li>
                                            
                                            <li><i class="fa fa-user" aria-hidden="true"></i>{{ $vhl->seats }} seats</li>
                                            <li><i class="fa fa-cog" aria-hidden="true"></i>{{ $vhl->transmission }} </li>
                                        </ul>
                                    </div>
                        
                                    <div class="car-title-m">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h6 style="text-transform:capitalize" ><a href="details/{{$vhl->vehicleID }}" >  {{ $vhl->manufacturer }}  </a></h6>
                                               <br>
                                                <b style="text-transform:capitalize" > {{ $vhl->make }}</b>  
                                            </div>
                                            <div class="col-sm-6">                                              
                                                <span class="price">${{ $vhl->price }} /Day</span> 
                                            </div>

                                        </div>
                                        
                                        
                                    </div>
                                    
                                    
                                </div>

                             </div>
                    @endforeach
                            

                </div>
            </div>
        </div>
                <div >
                     {{ $vehicles->links() }}
                </div>
        </section>
        <!-- /Resent Cat --> 
        
        <!-- Fun Facts-->
        <section class="fun-facts-section">
            <div class="container div_zindex">
            <div class="row">
                <div class="col-lg-3 col-xs-6 col-sm-3">
                <div class="fun-facts-m">
                    <div class="cell">
                    <h2><i class="fa fa-calendar" aria-hidden="true"></i>{{count($manu)}}+</h2>
                    <p> Category of Cars </p>
                    </div>
                </div>
                </div>
                <div class="col-lg-3 col-xs-6 col-sm-3">
                <div class="fun-facts-m">
                    <div class="cell">
                    <h2><i class="fa fa-car" aria-hidden="true"></i>{{count($type)}}+</h2>
                    <p>Type of Cars</p>
                    </div>
                </div>
                </div>
                <div class="col-lg-3 col-xs-6 col-sm-3">
                <div class="fun-facts-m">
                    <div class="cell">
                    <h2><i class="fa fa-car" aria-hidden="true"></i>  {{count($vhc)}} +</h2>
                    <p>Used Cars For Rent</p>
                    </div>
                </div>
                </div>
                <div class="col-lg-3 col-xs-6 col-sm-3">
                <div class="fun-facts-m">
                    <div class="cell">
                    <h2><i class="fa fa-user-circle-o" aria-hidden="true"></i>600+</h2>
                    <p>Satisfied Customers</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <!-- Dark Overlay-->
            <div class="dark-overlay"></div>
        </section>
        <!-- /Fun Facts--> 
        
        
        <!--Testimonial -->
        <section class="section-padding testimonial-section parallex-bg">
            <div class="container div_zindex">
                <div class="section-header white-text text-center">
                    <h2>Our Satisfied <span>Customers</span></h2>
                </div>
                
                <div class="row">
                    <div id="testimonial-slider">
            
                
                        <div class="testimonial-m">
                            @foreach ($test as $item)
                                
                                    <div class="testimonial-img"> 
                                        <img src="{{ asset('images/user.png') }}" alt="user images" />
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="testimonial-heading">
                                                <h5>{{ $item->UserEmail }}</h5>
                                            <p>
                                                {{ $item->Testimonial }}
                                            </p>
                                        </div>
                                    </div>
                                
                            @endforeach
                        </div>
                                       
                    </div>
                </div>
            
            </div>
            <!-- Dark Overlay-->
            <div class="dark-overlay"></div>

        </section>
        <!-- /Testimonial--> 

 <!--/home--->

@endsection