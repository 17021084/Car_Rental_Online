@extends('layouts.master')

@section('content')
   
<!--Contact-us-->
<section class="contact_us section-padding">
        <div class="container">
          <div  class="row">
            <div class="col-md-6">
              <h3>Get in touch using the form below</h3>
                        <div class="contact_form gray-bg">
                
                <form  method="post" action="{{ route('postcontactus') }}">
                  @csrf
                  <div class="form-group">
                    <label class="control-label">Full Name <span>*</span></label>
                    <input type="text" name="fullname" class="form-control white_bg" id="fullname" required>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Email Address <span>*</span></label>
                    <input type="email" name="email" class="form-control white_bg" id="emailaddress" required>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Phone Number <span>*</span></label>
                    <input type="text" name="contactno" class="form-control white_bg" id="phonenumber" required>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Message <span>*</span></label>
                    <textarea class="form-control white_bg" name="message" rows="4" required></textarea>
                  </div>
                  <div class="form-group">
                    <button class="btn" type="submit" name="send" type="submit">Send Message <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
                  </div>
                </form>

              </div>
            </div>
            <div class="col-md-6">
              <h3>Contact Info</h3>
              <div class="contact_detail">
                              <ul>
                  <li>
                    <div class="icon_wrap"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="contact_info_m">{{ $infor[0]->Address }}																							</div>
                  </li>
                  <li>
                    <div class="icon_wrap"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="contact_info_m"><a href="tel:{{ $infor[0]->ContactNo }}">{{ $infor[0]->ContactNo }}	</a></div>
                  </li>
                  <li>
                    <div class="icon_wrap"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                    <div class="contact_info_m"><a href="mailto:{{ $infor[0]->EmailId }}">{{ $infor[0]->EmailId }}	</a></div>
                  </li>
                </ul>
        

                      </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Contact-us--> 
@endsection