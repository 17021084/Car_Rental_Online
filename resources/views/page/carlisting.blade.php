@extends('layouts.master')


{{-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"> --}}


@section('content')
   
<!--Listing-->
<section class="listing-page">
    <div class="container">
       <div class="row">
        <div class="col-md-9 col-md-push-3">
           <div class="result-sorting-wrapper">
              <div class="sorting-count">
               <p><span><div id='numvehicles'>{{ count($vehicles) }} Listings</div>  </span></p>
              </div>
           </div>
           
              {{-- vehicle list  --}}
             <div id="vehicle-list">

                @foreach ($vehicles as $item)
                    <div  class="product-listing-m gray-bg">
                        <div class="product-listing-img"><img src="{{ $item->image_url }}" class="img-responsive" alt="Image" /> </a> 
                        </div>
                        <div class="product-listing-content">
                          <h5><a style="text-transform: capitalize;" href="vehical-details.php?vhid=1"> {{ $item->manufacturer }}</a></h5>
                          <p class="list-price">${{ $item->price }} Per Day</p>
                          <ul>
                            <li><i  class="fa fa-user" aria-hidden="true"></i>{{ $item->seats }} Seats</li>
                            <li><i style="text-transform: capitalize;" class="fa fa-window-minimize" aria-hidden="true"></i>{{ $item->make }}</li>
                            <li><i style="text-transform: capitalize;" class="fa fa-car" aria-hidden="true"></i> {{ $item->type }} </li>
                            <li><i style="text-transform: capitalize;" class="fa fa-beer" aria-hidden="true"></i>{{ $item->fuel }}</li>
                            <li><i style="text-transform: capitalize;" class="fa fa-cog" aria-hidden="true"></i> {{ $item->transmission }}</li>
                                                                      
                          </ul>
                          <a href="details/{{$item->vehicleID }}" class="btn">View Details <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                          
                        </div>
                      </div>
    
                  @endforeach
                      <div >
                          {{ $vehicles->links() }}
                    </div>
             </div>
              



      </div>
            





            <!--Side-Bar-->
  <aside class="col-md-3 col-md-pull-9">
         
    <div class="sidebar_widget">
      
      <div class="widget_heading">
            
        <h5><i class="fa fa-filter" aria-hidden="true"></i> Find Your  Car </h5>
              
      </div>

      <div class="sidebar_filter">
          {{-- action="{{ route('filtervehicle') }}" method="post" --}}
        <form action="{{ route('carlisting') }}" method="get" >  
            @csrf
          <div class="form-group select">   
                       
            <select class="form-control" name="manufacturer">
                       
                        @foreach ($manufacturer as $man )
                        @if (  $man->manufacturer=="")
                        
                        <option value='' >Select Brand</option>                                          
                      
                       @else
                       <option id="manufacturer" style="text-transform: capitalize;" value="{{ $man->manufacturer}}"> {{ $man->manufacturer}}</option>              
                           
                       @endif
                     
                       @endforeach                                                                                                        
                     
                      </select>
                      
                    </div>
                    
                    <div class="form-group select">
                      <select id="category" class="form-control" name="category">
                        @foreach ($category as $cate)
                          @if ( $cate->make =="")
                            <option value="" >Select Category </option>
                                
                            @else
                              <option  style="text-transform: capitalize;" value="{{ $cate->make}}"> {{ $cate->make}}</option>              
                                
                            @endif
                        
                        @endforeach
                     
             </select>
                    
                </div>
            <div class="form-group select">
               <select  id="fuel" class="form-control" name="fueltype">
                          @foreach ($fuel as $f)
                            @if ( $f->fuel =="")
                 
                               <option value="">Select Fuel Type</option>
                              @else
                              <option  style="text-transform: capitalize;" value="{{ $f->fuel }}">{{ $f->fuel }}</option>
                                  
                              @endif
                           @endforeach
                     
                </select>
                    
            </div>

            <div class="form-group select">
               <select id="type" class="form-control" name="type">
                 
                          @foreach ($type as $item)
                            @if ($item->type=="")
                 
                               <option value=""  >Select Type Vehicle </option>
                            @else
                              <option  style="text-transform: capitalize;" value="{{ $item->type }}">{{ $item->type }}</option>
                                
                            @endif

                           @endforeach
                     
                </select>
                    
            </div>

            <div class="form-group select">
               <select id="transmission"  class="form-control" name="transmission">
                 <option value="" >Select transmission </option>
                         
                          @foreach ($transmission as $item)
                           
                             <option style="text-transform: capitalize;" value="{{ $item->transmission }}">{{ $item->transmission }}</option>
                                
                            

                           @endforeach
                     
                </select>
                    
            </div>

            <div class="form-group select">
               <select id="seats" class="form-control" name="seats">
                 
                    <option value="" >Select Seats </option>
                           @foreach ($seats as $item)
                           
                            <option  value="{{ $item->seats }}">   {{ $item->seats }}    </option>                            
                          
                           @endforeach
                     
                </select>
                    
            </div>


                   
            <div class="form-group">
                  <button type="submit" id="filtercar" class="btn btn-block">
                    <i class="fa fa-search" aria-hidden="true"></i> Search Car
                  </button>
            </div>



      {{-- /form --}}
          </form>
               
                          
      </div>
              
    </div>
      
             

  </aside>
            <!--/Side-Bar--> 
          </div>
        </div>
  
  
  </section>

      <!-- /Listing--> 

    


@endsection

