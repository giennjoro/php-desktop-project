@extends('layouts.app')
@section('title')
<title>Contact Us</title>
@stop

@section('metatags')
    @foreach($metatags as $metatag)
<meta name="{{ $metatag->name }}" content="{{ $metatag->content }}">
    @endforeach
@endsection

@section('content')
     <!-- Page Title -->
     <section class="page-title-wrap" data-bg-img="img/hills.jpg" data-rjs="2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-title" data-animate="fadeInUp" data-delay="1.2">
                        <h2>Contact</h2>
                        <ul class="list-unstyled m-0 d-flex">
                            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Page Title -->

    <!-- Contacts -->
    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Map -->
                    <img src="img/24seven-Developers-cover.jpg" alt="24seven Developers header">
                </div>
                <div class="col-lg-4">
                    <!-- Map description -->
                    <div class="map-description light-bg d-flex align-items-center" data-animate="fadeInUp" data-delay=".4">
                          <p>"Our designers move pixels and lines of code to clean, 
                            responsive, and user-friendly websites. Our aim is to offer you one 
                            stop solutions for all your IT and branding Services under one roof"</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-contacts-widget-wrapper light-bg d-flex align-items-center" data-animate="fadeInUp" data-delay=".1">
                        <!-- Contact Info -->
                        <div class="page-contacts-widget">
                            <h3 class="h4">Contact Us</h3>
                            <div class="contact-widget-content">
                                <p>Get in touch with us through our contacts</p>
                                <ul class="list-unstyled">
                                    @foreach($phones as $phone)
                                        <li>
                                            <i class="fa fa-phone"></i>
                                            <a href="tel:">{{ $phone->phone }}</a>
                                        </li>
                                    @endforeach
                                    
                                    <li>
                                        <i class="fa fa-envelope-o"></i>
                                        <a href="mailto:info@24seven.co.ke">info@24seven.co.ke</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-facebook"></i>
                                        <a href="https://web.facebook.com/24sevenDevelopers"   >24sevenKenya</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-twitter"></i>
                                        <a href="https://twitter.com/24sevenDevelop">@24seven Developers</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <!-- Contact Form -->
                    <div class=" parsley-validate-wrap mt-60" data-animate="fadeInUp" data-delay=".4">
                        <h3 class="bordered-title">Direct Message</h3>
                        <div class="form-response"></div>
                        {!! Form::open(['action' => 'ContactUsController@store', 'method' => 'POST']) !!}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-field">
                                        {{Form::text('name' ,'', ['class' => 'theme-input-style', 'placeholder' => 'Your Name']) }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-field">
                                        {{Form::text('email' ,'', ['class' => 'theme-input-style', 'placeholder' => 'Your email']) }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-field">
                                        {{Form::text('phone' ,'', ['class' => 'theme-input-style', 'placeholder' => 'Your Phone','data-parsley-pattern' => '^[\d\+\-\.\(\)\/\s]*$']) }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-field">
                                        {{Form::text('subject' ,'', ['class' => 'theme-input-style', 'placeholder' => 'Subject']) }}
                                    </div>
                                </div>
                            </div>
                            <div class="form-field">
                                {{Form::textarea('message' ,'', ['class' => 'theme-input-style', 'placeholder' => 'Your Message Here']) }}
                            </div>
                            {{ Form::button('Send Message',['class'=>'btn','type' =>'submit']) }}
                            
                        {!! Form::close() !!}
                    </div>
                    <!-- End of Contact Form -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of Contacts -->
@endsection