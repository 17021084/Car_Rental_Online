<header>
    <div class="default-header">
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-md-2">
            <div class="logo"> <a href="index.php"><img src="images/logo.png" alt="image"/></a> </div>
          </div>
          <div class="col-sm-9 col-md-10">
            <div class="header_info">
              <div class="header_widgets">
                <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
                <p class="uppercase_text">For Support Mail us : </p>
                <a href="mailto:info@example.com">carforrent@vnu.edu.vn</a> </div>
              <div class="header_widgets">
                <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
                <p class="uppercase_text">Service Helpline Call Us: </p>
                <a href="tel:61-1234-5678-09">+84 169 920 246</a> </div>
              <div class="social-follow">
                
              </div>
      {{-- <div class="login_btn"> <a href="/home" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login / Register</a> </div> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
    


<!-- Navigation -->
<nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>


      <div class="header_wrap">
        

        
        <div class="user_login">
          <ul>
             @guest
            <li class="dropdown"> 
                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user-circle" aria-hidden="true"></i> 
                
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>  
                {{-- <ul class="dropdown-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                  @if (Route::has('register')) <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>@endif                                   
                </ul> --}}


            </li>  

             @else
             <li class="dropdown"> 
                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user-circle" aria-hidden="true"></i> 
                <a style="color:aliceblue; " href="/home" > {{ Auth::user()->name }} </a> 
              </li> 

   
             @endguest
          
          </ul> 
          
       
        </div>




        {{-- Search  --}}
        <div class="header_search">
          <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
          <form action="#" method="get" id="header-search-form">
            <input type="text" placeholder="Search..." class="form-control">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
        </div>
        {{--/Search  --}}
     
      </div>

  
    {{-- menu--}}
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li><a href="/">Home</a></li>
          <li><a href="/aboutus">About Us</a></li>
          <li><a href="/carlisting">Car Listing</a>
          <li><a href="/faqs">FAQs</a></li>
          <li><a href="/contactus">Contact Us</a></li>
        </ul>
      </div>
    {{--/menu--}} 

    </div>
</nav>
<!-- Navigation end --> 

    
  </header>


  