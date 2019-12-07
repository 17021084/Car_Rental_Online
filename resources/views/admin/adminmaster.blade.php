<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="images/favicon-icon/favicon.png">
    <title>{{ config('app.name', 'Car Rental') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('css/font-awesome.min.css') }} " rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <link rel="shortcut icon" href="{{ asset('images/favicon-icon/favicon.png') }}">

    {{-- ajax  --}}
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}" />

    <style>
        .user_options li{
          margin-left: -30px;
        }
        
         #logo:hover {
            -ms-transform: scale(1.1); /* IE 9 */
            -webkit-transform: scale(1.1); /* Safari 3-8 */
            transform: scale(1.1); 
        }
        #logo {
              transition: transform 1s;
        }
    
        .content{
            height: 100%;
            background-color:aliceblue;
        }
      
    </style>


</head>
<body>
      
<header>
            
    
            <nav id="nav" class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">  <div class="logo"> <a href="{{ route('index') }}"><img id="logo" src="{{ asset('images/logo.png') }}" alt="image"/></a></div> </a>
                   
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                        aria-expanded="false" aria-label="Toggle navigation"></button>
                   
                        <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                           
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.booking') }}">Booking</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.users') }}">Users</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.contact') }}">Update Contact Infor</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.guestcontact') }}">Guest Contact </a>
                            </li>
                            
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.testimonials') }}">Manage Testimonials </a>
                            </li>

                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.pages') }}">Manager Pages</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.vehicles') }}">Manager Vehicles</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.addvehicle') }}">Add Vehicles</a>
                            </li>
                           
                            <li style="    " class="nav-item">
                                    <a name="logout" id="logout" class="btn btn-primary" href="{{ route('admin.logout') }}" role="button">
                                        <i class="fa fa-user-circle-o" aria-hidden="true"></i> {{ Session::get('admin') }}
                                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                                    </a>
                            </li>
                            
                           
                            
            
                        </ul>
            
                        {{-- <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form> --}}
                    </div>
                </nav>            
            
    

  
   
</header>


<div class="content">
        
@yield('content')

</div>

</body>
</html>
