@extends('layouts.master')

@section('content')
   
<!--Listing-->
<section class="listing-page">
    <div class="container">
       <div class="row">
        <div class="col-md-9 col-md-push-3">
           <div class="result-sorting-wrapper">
              <div class="sorting-count">
               <p><span>6 Listings</span></p>
              </div>
           </div>
      
              <div class="product-listing-m gray-bg">
                <div class="product-listing-img"><img src="admin/img/vehicleimages/knowledge_base_bg.jpg" class="img-responsive" alt="Image" /> </a> 
                </div>
                <div class="product-listing-content">
                  <h5><a href="vehical-details.php?vhid=1">BMW , ytb rvtr</a></h5>
                  <p class="list-price">$345345 Per Day</p>
                  <ul>
                    <li><i class="fa fa-user" aria-hidden="true"></i>7 seats</li>
                    <li><i class="fa fa-calendar" aria-hidden="true"></i>3453 model</li>
                    <li><i class="fa fa-car" aria-hidden="true"></i>Petrol</li>
                  </ul>
                  <a href="vehical-details.php?vhid=1" class="btn">View Details <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
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
                  <form action="search-carresult.php" method="post">
                    <div class="form-group select">
                      <select class="form-control" name="brand">
                        <option>Select Brand</option>                                          
                          
                        
                        
                        
                        <option value="1">Maruti</option>
                            
                          <option value="2">BMW</option>
                            
                          <option value="3">Audi</option>
                            
                          <option value="4">Nissan</option>
                            
                          <option value="5">Toyota</option>
                            
                          <option value="7">Marutiu</option>
                            
                          <option value="8">Taxi</option>                      
                      </select>
                    </div>



            <div class="form-group select">
                      <select class="form-control" name="fueltype">
                           <option>Select Fuel Type</option>
                           <option value="Petrol">Petrol</option>
                           <option value="Diesel">Diesel</option>
                           <option value="CNG">CNG</option>
                     
                       </select>
                    
                      </div>
                   
                          <div class="form-group">
                                 <button type="submit" class="btn btn-block"><i class="fa fa-search" aria-hidden="true"></i> Search Car</button>
                          </div>
                   </form>
               
               
               
               
               
                </div>
              </div>
      
              <div class="sidebar_widget">
                <div class="widget_heading">
                  <h5><i class="fa fa-car" aria-hidden="true"></i> Recently Listed Cars</h5>
                </div>
                <div class="recent_addedcars">
                  <ul>
      
                    <li class="gray-bg">
                      <div class="recent_post_img"> <a href="vehical-details.php?vhid=6"><img src="admin/img/vehicleimages/Koala.jpg" alt="image"></a> </div>
                      <div class="recent_post_title"> <a href="vehical-details.php?vhid=6">Taxi , Waganor Taxi</a>
                        <p class="widget_price">$10 Per Day</p>
                      </div>
                    </li>
                  
                </div>
              </div>

            </aside>
            <!--/Side-Bar--> 
          </div>
        </div>
  
  
  </section>
      <!-- /Listing--> 
@endsection