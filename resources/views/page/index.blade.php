@extends('layouts.master') 

{{-- 
    trong thằng master sẽ include 2 file php là header và footer
    có 1 cái thẻ div id = content
    yield(" content")    
    
    tại file index.
    muốn nhét nội dung trang index sẽ nhét vào cái section(conten) bên trong

    vậy ta có trang index kế thừa trang master

    
--}}



@section('content')
 <!-- home--->
        
            <!-- Banners -->
        <section id="banner" class="banner-section">
            <div class="container">
            <div class="div_zindex">
                <div class="row">
                <div class="col-md-5 col-md-push-7">
                    <div class="banner_content">
                    <h1>Find the right car for you.</h1>
                    <p>We have more than a thousand cars for you to choose. </p>
                    <a href="#" class="btn">Read More <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
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
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
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
        
            
        
        <div class="col-list-3">
        <div class="recent-car-list">
        <div class="car-info-box"> <a href="vehical-details.php?vhid=1"><img src="admin/img/vehicleimages/knowledge_base_bg.jpg" class="img-responsive" alt="image"></a>
        <ul>
        <li><i class="fa fa-car" aria-hidden="true"></i>Petrol</li>
        <li><i class="fa fa-calendar" aria-hidden="true"></i>3453 Model</li>
        <li><i class="fa fa-user" aria-hidden="true"></i>7 seats</li>
        </ul>
        </div>
        <div class="car-title-m">
        <h6><a href="vehical-details.php?vhid=1">BMW , ytb rvtr</a></h6>
        <span class="price">$345345 /Day</span> 
        </div>
        <div class="inventory_info_m">
        <p>vtretrvet</p>
        </div>
        </div>
        </div>
            
        
        <div class="col-list-3">
        <div class="recent-car-list">
        <div class="car-info-box"> <a href="vehical-details.php?vhid=2"><img src="admin/img/vehicleimages/car_755x430.png" class="img-responsive" alt="image"></a>
        <ul>
        <li><i class="fa fa-car" aria-hidden="true"></i>CNG</li>
        <li><i class="fa fa-calendar" aria-hidden="true"></i>2015 Model</li>
        <li><i class="fa fa-user" aria-hidden="true"></i>4 seats</li>
        </ul>
        </div>
        <div class="car-title-m">
        <h6><a href="vehical-details.php?vhid=2">BMW , Test Demoy</a></h6>
        <span class="price">$859 /Day</span> 
        </div>
        <div class="inventory_info_m">
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam nibh. Nu</p>
        </div>
        </div>
        </div>
            
        
        <div class="col-list-3">
        <div class="recent-car-list">
        <div class="car-info-box"> <a href="vehical-details.php?vhid=3"><img src="admin/img/vehicleimages/featured-img-3.jpg" class="img-responsive" alt="image"></a>
        <ul>
        <li><i class="fa fa-car" aria-hidden="true"></i>CNG</li>
        <li><i class="fa fa-calendar" aria-hidden="true"></i>2012 Model</li>
        <li><i class="fa fa-user" aria-hidden="true"></i>5 seats</li>
        </ul>
        </div>
        <div class="car-title-m">
        <h6><a href="vehical-details.php?vhid=3">Nissan , Lorem ipsum</a></h6>
        <span class="price">$563 /Day</span> 
        </div>
        <div class="inventory_info_m">
        <p>Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLore</p>
        </div>
        </div>
        </div>
            
        
        <div class="col-list-3">
        <div class="recent-car-list">
        <div class="car-info-box"> <a href="vehical-details.php?vhid=4"><img src="admin/img/vehicleimages/featured-img-3.jpg" class="img-responsive" alt="image"></a>
        <ul>
        <li><i class="fa fa-car" aria-hidden="true"></i>CNG</li>
        <li><i class="fa fa-calendar" aria-hidden="true"></i>2012 Model</li>
        <li><i class="fa fa-user" aria-hidden="true"></i>5 seats</li>
        </ul>
        </div>
        <div class="car-title-m">
        <h6><a href="vehical-details.php?vhid=4">Maruti , Lorem ipsum</a></h6>
        <span class="price">$5636 /Day</span> 
        </div>
        <div class="inventory_info_m">
        <p>Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLore</p>
        </div>
        </div>
        </div>
            
        
        <div class="col-list-3">
        <div class="recent-car-list">
        <div class="car-info-box"> <a href="vehical-details.php?vhid=5"><img src="admin/img/vehicleimages/car_755x430.png" class="img-responsive" alt="image"></a>
        <ul>
        <li><i class="fa fa-car" aria-hidden="true"></i>Petrol</li>
        <li><i class="fa fa-calendar" aria-hidden="true"></i>3453 Model</li>
        <li><i class="fa fa-user" aria-hidden="true"></i>7 seats</li>
        </ul>
        </div>
        <div class="car-title-m">
        <h6><a href="vehical-details.php?vhid=5">Toyota , ytb rvtr</a></h6>
        <span class="price">$345345 /Day</span> 
        </div>
        <div class="inventory_info_m">
        <p>vtretrvet</p>
        </div>
        </div>
        </div>
            
        
        <div class="col-list-3">
        <div class="recent-car-list">
        <div class="car-info-box"> <a href="vehical-details.php?vhid=6"><img src="admin/img/vehicleimages/Koala.jpg" class="img-responsive" alt="image"></a>
        <ul>
        <li><i class="fa fa-car" aria-hidden="true"></i>Petrol</li>
        <li><i class="fa fa-calendar" aria-hidden="true"></i>2017 Model</li>
        <li><i class="fa fa-user" aria-hidden="true"></i>4 seats</li>
        </ul>
        </div>
        <div class="car-title-m">
        <h6><a href="vehical-details.php?vhid=6">Taxi , Waganor Taxi</a></h6>
        <span class="price">$10 /Day</span> 
        </div>
        <div class="inventory_info_m">
        <p>Its Well matintaied</p>
        </div>
        </div>
        </div>
                
                </div>
            </div>
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
                    <h2><i class="fa fa-calendar" aria-hidden="true"></i>40+</h2>
                    <p>Years In Business</p>
                    </div>
                </div>
                </div>
                <div class="col-lg-3 col-xs-6 col-sm-3">
                <div class="fun-facts-m">
                    <div class="cell">
                    <h2><i class="fa fa-car" aria-hidden="true"></i>1200+</h2>
                    <p>New Cars For Sale</p>
                    </div>
                </div>
                </div>
                <div class="col-lg-3 col-xs-6 col-sm-3">
                <div class="fun-facts-m">
                    <div class="cell">
                    <h2><i class="fa fa-car" aria-hidden="true"></i>1000+</h2>
                    <p>Used Cars For Sale</p>
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
                    <div class="testimonial-img"> <img src="assets/images/cat-profile.png" alt="" /> </div>
                    <div class="testimonial-content">
                    <div class="testimonial-heading">
                        <h5>Anuj Kumar</h5>
                    <p>Test Test</p>
                    </div>
                </div>
                </div>
                
        
                <div class="testimonial-m">
                    <div class="testimonial-img"> <img src="assets/images/cat-profile.png" alt="" /> </div>
                    <div class="testimonial-content">
                    <div class="testimonial-heading">
                        <h5>Anuj Kumar</h5>
                    <p>
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam nibh. Nunc varius facilis</p>
                    </div>
                </div>
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