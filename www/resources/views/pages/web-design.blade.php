@extends('layouts.app')
@section('title')
<title>Web Design and Development</title>
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
                        <h2>Web Design</h2>
                        <ul class="list-unstyled m-0 d-flex">
                            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="#">Web Design</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Page Title -->

    <!-- Service Details -->
    <section class="pt-120 pb-120 light-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="service-details" data-animate="fadeInUp" data-delay=".1">
                        <h2>Committed to deliver quality solutions with <span>latest trends </span> and technology, we make sure to provide the best web development services.</h2>
                        <p>We offer all web solutions as per your specifications. All at your convenience. Contact us for Business/Organisation/Company websites, online management systems as well as Progresssive Web Applications.
                        <p><i>Did you know your business security starts with the simple line by line code for your online system? Get in touch for more.</i></p>
                        <ul class="rubik list-unstyled m-0 clearfix">
                            <li>Custom Web Application Development</li>
                            <li>Content Management Systems</li>
                            <li>E-commerce Develoopment</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-img text-center" data-animate="fadeInUp" data-delay=".4">
                        <img src="img/cable-tv.png" alt="" data-rjs="2">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Service Details -->
    <!-- Subscription -->
    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-5">
                    <div class="section-title pb-0" data-animate="fadeInUp" data-delay=".1">
                        <h2>Subscribe to Newsletter</h2>
                        <p class="mb-0">Let us update you with 24/7 tech bytes</p>
                    </div>
                </div>
                 <div class="col-lg-6 col-md-7">
                    <!-- Subscription form -->
                    <div class="subscription-form" data-animate="fadeInUp" data-delay=".4">
                            {!! Form::open(['action' => 'PagesController@subscriber_store', 'method' => 'POST']) !!}
                                {{Form::email('email' ,'', ['class' => 'theme-input-style', 'placeholder' => 'Enter your e-mail address']) }}
                                {{ Form::button('Subscribe Now',['class'=>'btn' ,'type'=>'submit']) }}
                            {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Subscription -->

    <!-- Brands -->
    <section class="light-bg pt-80 pb-50">
        <div class="container">
            <div class="row">
                 <div class="col">
                    <h1>Our Partners</h1><br/>
                    <ul class="brands list-unstyled d-flex flex-wrap align-items-center justify-content-center justify-content-md-between mb-0">
                        @foreach($partners as $partner)
                            <a target="_blank" href="{{ $partner->link }}" alt="{{ $partner->name }}"><li data-animate="fadeInUp" data-delay=".05"><img src="{{ asset($partner->logo) }}" alt="{{$partner->link}}"></li></a>  
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Brands -->

@endsection