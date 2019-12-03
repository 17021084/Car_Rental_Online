@extends('layouts.master')
@section('content')
    <!-- Term of Use--->
    <section class="page-header aboutus_page">
            <div class="container">
              <div class="page-header_wrap">
                <div class="page-heading">
                  <h1>Terms and Conditions</h1>
                </div>
                <ul class="coustom-breadcrumb">
                  <li><a href="{{ route('index') }}">Home</a></li>
                  <li>Terms and Conditions</li>
                </ul>
              </div>
            </div>
            <!-- Dark Overlay-->
            <div class="dark-overlay"></div>
          </section>
          <section class="about_us section-padding">
            <div class="container">
              <div class="section-header text-center">
          
          
                <h2>Terms and Conditions</h2>
                <p>
                    {!! $terms[0]->detail !!}
                </p>

        </div>
               </div>
          </section>
       <!-- /Term of use--->
  @endsection