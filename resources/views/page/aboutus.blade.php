@extends('layouts.master')

@section('content')
 <!-- aboutus--->

    <div class="container">
        <section class="page-header aboutus_page">
                <div class="container">
                  <div class="page-header_wrap">
                    <div class="page-heading">
                      <h1>About Us </h1>
                    </div>
                    <ul class="coustom-breadcrumb">
                      <li><a href="{{ route('index') }}">Home</a></li>
                      <li>About Us </li>
                    </ul>
                  </div>
                </div>
                <!-- Dark Overlay-->
                <div class="dark-overlay"></div>
              </section>
              <section class="about_us section-padding">
                <div class="container">
                  <div class="section-header text-center">
              
              
                    <h2>About Us </h2>
                    <p>
                        {!! $aboutus[0]->detail !!}
                    </p>
                  </div>
                   </div>
              </section>    
 <!-- /aboutus--->
  @endsection