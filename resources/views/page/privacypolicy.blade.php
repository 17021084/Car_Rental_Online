@extends('layouts.master')

@section('content')
    <!-- policy--->
    <section class="page-header aboutus_page">
            <div class="container">
              <div class="page-header_wrap">
                <div class="page-heading">
                  <h1>Privacy Policy</h1>
                </div>
                <ul class="coustom-breadcrumb">
                  <li><a href="{{ route('index') }}">Home</a></li>
                  <li>Privacy Policy</li>
                </ul>
              </div>
            </div>
            <!-- Dark Overlay-->
            <div class="dark-overlay"></div>
          </section>
          <section class="about_us section-padding">
            <div class="container">
              <div class="section-header text-center">
          
          
                <h2>Privacy Policy</h2>
                <p>
                    {!! $privacy[0]->detail !!}
                </p>
              </div>
               </div>
          </section>
       <!-- /policy--->
  @endsection