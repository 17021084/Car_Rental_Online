@extends('layouts.master')

@section('content')
    <!-- FAQs--->
    <section class="page-header aboutus_page">
        <div class="container">
          <div class="page-header_wrap">
            <div class="page-heading">
              <h1>FAQs</h1>
            </div>
            <ul class="coustom-breadcrumb">
              <li><a href="{{ route('index') }}">Home</a></li>
              <li>FAQs</li>
            </ul>
          </div>
        </div>
        <!-- Dark Overlay-->
        <div class="dark-overlay"></div>
    </section>
    <section class="about_us section-padding">
        <div class="container">
          <div class="section-header text-center">      
            <h2>FAQs</h2>
            <p>																								
                {!! $faqs[0]->detail !!}
            </p>
          </div>
           </div>
      </section>

       <!-- /FAQs--->
  @endsection