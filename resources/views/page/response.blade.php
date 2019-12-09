<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking Response</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon-icon/favicon.png') }}">
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>

     <!-- Fonts -->
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
 
     <link href="{{ asset('css/bootstrap-slider.min.css') }}" rel="stylesheet">
     <link href="{{ asset('css/font-awesome.min.css') }} " rel="stylesheet">
     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
         .image{
           
            margin-top: -300px;    
              
         }
         .caption{

            position: absolute;
            left: 0;
            top: 40%;
            width: 100%;
            text-align: center;
            color: #000;
         }  
         .caption span.border {
            background-color: #5b7b2c;
            color: #fff;
            padding: 18px;
            font-size: 40px;
            /* letter-spacing: 5px; */
            opacity: 0.99;
            
        } 
        

        
    </style>
            
</head>


<body>
        <div class="image">

                <img src="{{ asset('images/car_booking.gif ')}}"  style=" opacity: 0.99;width:100%;" alt="background">
                <div class="caption">
                      
                        <span  class="border">
                            
                          Hello   <i class="fa fa-user-circle" aria-hidden="true"></i> {{ Auth::user()->name }} 

                        </span>
                        <br><br><br>
                        <span style=" font-size: 15px; background-color:#48a997;" class="border">
                            
                               
                               {{$message}}
      
                         </span>


                        <br><br><br>
                       <button type="button" class="btn btn-dark">
                           
                        <a style="text-decoration: none; color:white" href="{{ route('index') }}"> <i class="fa fa-hand-o-left" aria-hidden="true"></i>  Back to page </a>
                       </button>
                       <button type="button" class="btn btn-success">
                           <a style="text-decoration: none;color:white" href="{{ route('home') }}">
                            Go to Booking Manage <i class="fa fa-sign-out" aria-hidden="true"></i>
                            </a>
                       </button>
                       
                </div>
                
        </div>

</body>
</html>

    
    
