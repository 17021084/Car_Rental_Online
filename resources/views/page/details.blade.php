@extends('layouts.master')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0&appId=1141583422680485&autoLogAppEvents=1"></script>
<style>
  #vehicle_image{
    width: 400px;
    height: 400px;

  }
  #desc{
    
    width: 400px;
    height: 150px;
    /* background-color: antiquewhite; */
    overflow: auto;
  }
  .similar_img{
   

  }


</style>


@section('content')
   <!--Listing-detail-->

<section class="listing-detail">       
  <div class="container">
         
    <div class="listing_detail_head row">
      <div class="col-md-9">
          <h2 style="text-transform:capitalize">{{ $vehicle[0]->manufacturer }} </h2>
      </div>
      <div class="col-md-3">
        <div class="price_info">
           <p style="padding-bottom:20px" >${{ $vehicle[0]->price }}  </p>Per Day              
        </div>
      </div>
    </div>


     <div class="row">
        <div class="col-md-9">
           
          <div class="row">
            <div class="col-md-6">
                <div id="vehicle_image">  
                    <img  src="{{ $vehicle[0]->image_url }} " class="img-responsive" alt="image">
                 </div>
            </div>
            <div class="col-md-6">
                <div class="main_features">
             
                    <ul>
                        <li> <i class="fa fa-calendar" aria-hidden="true"></i>
                              <h5>{{ $vehicle[0]->year }} </h5>
                              <p>Release Year</p>
                        </li>
                        <li> <i class="fa fa-beer" aria-hidden="true"></i>
                              <h5>{{ $vehicle[0]->fuel }} </h5>
                              <p>Fuel Type</p>
                        </li>
                      
                        <li> 
                          <i class="fa fa-user-plus" aria-hidden="true"></i>
                          <h5>{{ $vehicle[0]->seats }} </h5>
                          <p>Seats</p>
                        </li>    
                                
                      </ul>                    
                   </div>
                   <h4 style="text-align:center;margin-top: 30px;"> <b>Descriptions </b> </h4>
                   <div id="desc" >
                      
                      <p>{{ $vehicle[0]->desc }}</p> 
                  </div>

            </div>
          </div>
         
         
        



          <div class="listing_more_info">
            <div > 
                <h2 style="text-align:center"> Vehicle overviews </h2>
              
                <table class="table table-hover table-inverse table-responsive">
                <thead class="thead-inverse">           
                  </thead>
                  <tbody>
                    <tr>
                      <td scope="row">  <b>Category </b> </td>
                      <td style="text-transform:capitalize"> {{ $vehicle[0]->make }}  </td>
                      
                    </tr>
                    <tr>
                        <td scope="row">  <b>Gear</b> </td>
                       <td style="text-transform:capitalize"> {{ $vehicle[0]->transmission }}  </td>
                          
                     </tr>
                    <tr>
                      <td scope="row">  <b>Type</b> </td>
                      <td style="text-transform:capitalize"> {{ $vehicle[0]->type }}  </td>
                      
                    </tr>
                    <tr>
                      <td scope="row"> <b>Size</b>   </td>
                      <td style="text-transform:capitalize">{{ $vehicle[0]->size }} </td>
                      
                    </tr>
                    <tr>
                      <td scope="row"><b>Cylinders</b> </td>
                      <td style="text-transform:capitalize"> {{ $vehicle[0]->cylinders }} </td>
                     
                    </tr>
                    <tr>
                      <td scope="row"><b>Odometer</b> </td>
                      <td style="text-transform:capitalize">{{ $vehicle[0]->odometer }} </td>
                     
                    </tr>
                    <tr>
                      <td scope="row"> <b>Drive (Dẫn động cầu trước , cầu sau , 2 cầu) </b> </td>
                      <td style="text-transform:capitalize"> {{ $vehicle[0]->drive }} </td>
                     
                    </tr>
                    <tr>
                      <td scope="row"> <b>Paint color</b> </td>
                      <td style="text-transform:capitalize">{{ $vehicle[0]->paint_color }} </td>
                     
                    </tr>
                    <tr>
                      <td scope="row"><b>Status</b>  </td>
                      <td style="text-transform:capitalize">{{ $vehicle[0]->title_status }} </td>                 
                    </tr>
                  
                  </tbody>
              </table> 
                 



            </div>   

         </div>   

      </div>
            


{{-- ================================================================================ --}}
            <!--Side-Bar-->
     <aside   class="col-md-3"> 
        <div class="share_vehicle">
              <p>Share: 
                
                  {{-- <i class="fa fa-facebook-square" aria-hidden="true"></i> --}}
                
                  <div class="fb-share-button" data-href="http://localhost:8000/index" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%3A8000%2Findex&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>

                


                <a href="#">
                  <i class="fa fa-twitter-square" aria-hidden="true"></i>
                </a> 
                <a href="#">
                  <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                </a> 
                <a href="#">
                  <i class="fa fa-google-plus-square" aria-hidden="true"></i>
                </a> 
              </p>
         </div>

          <div class="sidebar_widget">
            <div class="widget_heading">
              <h5><i class="fa fa-envelope" aria-hidden="true"></i>Book Now</h5>
            </div>


            <form method="post">
               <div class="form-group">
                
                <input type="text" class="form-control" name="fromdate" placeholder="From Date(dd/mm/yyyy)" required>
                  </div>
                 
                  <div class="form-group">
                    <input type="text" class="form-control" name="todate" placeholder="To Date(dd/mm/yyyy)" required>
                  </div>
                 
                  <div class="form-group">
                    <textarea rows="4" class="form-control" name="message" placeholder="Message" required></textarea>
                  </div>

                  <div class="form-group">
                    <input type="submit" class="btn"  name="submit" value="Book Now">

                </div>
             </form>


           </div>
            
     </aside>

{{-- ====================================================== --}}


            <!--/Side-Bar--> 
          </div>
          
          <div class="space-20"></div>
          <div class="divider"></div>
          











          <!--Similar-Cars-->
          <div class="similar_cars">
            <h3>Similar Cars</h3>
            <div class="row">
              
              @foreach ($similar as $vhl)
                  
              <div class="col-md-3 grid_listing">
                
                  <div class="product-listing-m gray-bg">
                    <div class="product-listing-img"> 
                      <a class="similar_img" href="details/{{ $vhl->vehicleID }}" >
                        <img src="{{ $vhl->image_url }}" class="img-responsive" alt="image" />
                      </a>
                    </div>
                    
                    <div class="product-listing-content">
                      
                      <div class="row">
                        <div class="col-sm-6">
                          <h5  style="text-transform:capitalize; margin-bottom:0px;">
                            <a href="details/{{$vhl->vehicleID }}">{{ $vhl->manufacturer }}</a>
                          </h5>                       
                          <b style="text-transform:capitalize;" > {{ $vhl->make }}</b>
                        </div>
                        <div class="col-sm-6">
                            <p class="list-price">$  {{ $vhl->price }} </p>
                            
                        </div>

                      </div>


                      <ul class="features_list">  
                        <li><i class="fa fa-user" aria-hidden="true"></i> {{ $vhl->seats }} seats</li>
                        <li><i class="fa fa-calendar" aria-hidden="true"></i>{{ $vhl->year }}</li>
                        <li><i class="fa fa-car" aria-hidden="true"></i>{{$vhl->fuel  }}</li>
                        <li><i class="fa fa-cog" aria-hidden="true"></i>{{ $vhl->transmission }} </li>
                      </ul>
                    </div>
                  </div>
                  
                  
                </div>
                
                
                @endforeach
                
                
              </div>
          
          </div>
          <!--/Similar-Cars--> 
          
        </div>
      
</section>      
      <!--/Listing-detail--> 
@endsection