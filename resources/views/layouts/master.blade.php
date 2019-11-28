{{--  Thằng này nó sẽ là cái khung chính --}}
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Car Rental Portal</title>
    
    <!--Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}" type="text/css">
    <link href="{{asset('css/slick.css')  }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-slider.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }} " rel="stylesheet">
    
   
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('images/favicon-icon/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('images/favicon-icon/apple-touch-icon-114-precomposed.html') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('images/favicon-icon/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('images/favicon-icon/apple-touch-icon-57-precomposed.png') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon-icon/favicon.png') }}">

    <link href="{{ asset('https://fonts.googleapis.com/css?family=Lato:300,400,700,900') }}" rel="stylesheet"> 

  {{-- ajax  --}}
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>


<body>

<!-- Start Switcher -->

{{-- @include('layouts.switch') --}}

<!-- /Switcher -->  
        


<!--Header-->
@include('layouts.header')
<!-- /Header --> 

{{-- =========================================== --}}
<div id="content">
 {{-- đoạn này là sẽ phần nội dung của các trang tương ưng sẽ đc ném ở đây
  
  phần nội dung đó là phần bên trong của cái secsion ở file đó

  --}}

@yield('content')
</div>


{{-- =================== --}}

<!--Footer -->
@include('layouts.footer')


<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 







</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:22:11 GMT -->
</html>