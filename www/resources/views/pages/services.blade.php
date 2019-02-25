@extends('layouts.app')
@section('title')
<title>Our Services</title>
@stop

@section('metatags')
    @foreach($metatags as $metatag)
<meta name="{{ $metatag->name }}" content="{{ $metatag->content }}">
    @endforeach
@endsection

@section('content')
    <!-- Services -->
    <section class="pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service text-center" data-animate="fadeInUp" data-delay=".1">
                        <img src="img/icons/web-design.svg" alt="Web Design" class="svg">
                        <h4>Web Design</h4>
                        <p>Get your web design services from the best web designer in Kenya. <strong>24seven developers</strong> designs and develops websites for corporates, hotel management system... </p>
                        <a href="web-design.html">Learn More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service text-center" data-animate="fadeInUp" data-delay=".4">
                        <img src="img/icons/ux.svg" alt="Graphics Design" class="svg">
                        <h4>Graphics Design</h4>
                        <p>Good UI/UX helps people to understand and identify with your brand better. You get a free logo when we design a website for you. We help in branding your business better by designing your posters, bronchures...</p>
                        <a href="graphics-design.html">Learn More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service text-center" data-animate="fadeInUp" data-delay=".7">
                        <img src="img/icons/digital-campaign.svg" alt="Digital Marketing" class="svg">
                        <h4>Digital Marketing</h4>
                        <p>It is worth noting that the number of people online is still increasing. We make your business more visible online through Search Engine Optimization(SEO), Content marketing...</p>
                        <a href="digital-marketing.html">Learn More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service text-center" data-animate="fadeInUp" data-delay="1">
                        <img src="img/icons/hosting.svg" alt="Web Hosting" class="svg">
                        <h4>Web Hosting</h4>
                        <p>With more business online, you should host your website with the best servers to outdo the rest. Get the fastest web hosting services in Kenya.</p>
                        <a href="https://tbxhost.co.uk/" target="_blank">Visit site <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Services -->
    
    
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