@extends('layouts.app')
@section('title')
<title>24seven Developers - Best Web Developers in Kenya</title>
@stop

@section('metatags')
    @foreach($metatags as $metatag)
<meta name="{{ $metatag->name }}" content="{{ $metatag->content }}">
    @endforeach
@endsection
@section('content')
    <section>
        <div class="main-slider swiper-container">
            <div class="swiper-wrapper">
            @foreach($slider_items as $slider_item)
                <!-- Single slide -->
                <div class="swiper-slide position-relative">
                    <img src="{{asset($slider_item->image)}}" data-rjs="2" alt="">
                    <div class="slide-content container">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-8">
                                <div class="slide-content-inner">
                                    <h4 data-animate="fadeInUp" data-delay=".05">{{$slider_item->message}}</h4>
                                    <h2 data-animate="fadeInUp" data-delay=".3">{{$slider_item->title}}</h2>
                                    <a data-animate="fadeInUp" data-delay=".6" href="{{$slider_item->link}}" class="btn">{{$slider_item->link_message}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Single slide -->
            @endforeach
            </div>
            <!-- Banner Pagination -->
            <div class="swiper-pagination main-slider-pagination"></div>
        </div>
    </section>
    <!-- End of Banner -->

    <!-- Abut Us -->
    <section class="pt-120 pb-55">
        <div class="container">
            <div class="row align-items-center pb-80">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="text-center" data-animate="fadeInUp" data-delay=".1">
                        <img src="img/number-one.png" alt="" data-rjs="2">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="number-one-content" data-animate="fadeInUp" data-delay=".5">
                        <h2 class="mb-3">Why should you choose 24seven Developers?</h2>
                        <p>We work around the clock to design and develop websites best for your business.
                            We perform good SEO to target people who search about your business niche. 
                            Our main aim is to build websites that will build your buiness.</p>
                        <a href="services.html" class="btn">View Details</a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 col-sm-6">
                    <div class="single-feature single-feature-img-top text-center" data-animate="fadeInUp" data-delay=".1">
                        <div class="single-feature-img">
                            <img src="img/icons/setup.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>Lifetime Website Maintenance</h4>
                            <p>When we work for you, we become part of your business with free lifetime website maintenance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-feature single-feature-img-top text-center" data-animate="fadeInUp" data-delay=".4">
                        <div class="single-feature-img">
                            <img src="img/icons/download.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>Business Branding</h4>
                            <p> When you pay for website design packages you are designed a logo and a business card for free.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-feature single-feature-img-top text-center" data-animate="fadeInUp" data-delay=".7">
                        <div class="single-feature-img">
                            <img src="img/icons/support.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>24/7 Customer Support</h4>
                            <p>Our customers always come first. Our customer support is available anytime you need us.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of About Us -->

    <!-- Services -->
    <section class="theme-bg-overlay bg-img-md-none pt-120 pb-90" data-bg-img="img/rocket.jpg" data-rjs="2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-title section-title-white text-center" data-animate="fadeInUp" data-delay=".1">
                        <h2>Our services</h2>
                        <p>We provide the following services to our clients.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service single-service-white text-center" data-animate="fadeInUp" data-delay=".1">
                        <img src="img/icons/earth.svg" alt="Web Design" class="svg">
                        <h4>Web Design</h4>
                        <p>Get your web design services from the best web designer in Kenya. <strong>24seven developers</strong> designs and develops websites for corporates, hotel management system... </p>
                        <a href="web-design.html">Learn More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service single-service-white text-center" data-animate="fadeInUp" data-delay=".4">
                        <img src="img/icons/phone.svg" alt="Graphics Design" class="svg">
                        <h4>Graphics Design</h4>
                        <p>Good UI/UX helps people to understand and identify with your brand better. You get a free logo when we design a website for you. We help in branding your business better by designing your posters, bronchures...</p>
                        <a href="graphics-design.html">Learn More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service single-service-white text-center" data-animate="fadeInUp" data-delay=".7">
                        <img src="img/icons/tv.svg" alt="Digital Marketing" class="svg">
                        <h4>Digital Marketing</h4>
                        <p>It is worth noting that the number of people online is still increasing. We make your business more visible online through Search Engine Optimization(SEO), Content marketing...</p>
                        <a href="digital-marketing.html">Learn More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-service single-service-white text-center" data-animate="fadeInUp" data-delay="1">
                        <img src="img/icons/server.svg" alt="Web Hosting" class="svg">
                        <h4>Web Hosting</h4>
                        <p>With more business online, you should host your website with the best servers to outdo the rest. Get the fastest web hosting services in Kenya.</p>
                        <a href="https://tbxhost.co.uk/" target="_blank">Visit site <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Services -->


    <!-- Reviews -->
    <section class="theme-bg-overlay bg-img-xs-none pt-120 pb-120" data-bg-img="img/earth.jpg" data-rjs="2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-title section-title-white text-center" data-animate="fadeInUp" data-delay=".1">
                        <h2>What Our Client’s Say</h2>
                        <p>We appreciate our client's reviews. Make sure to write your reviews for services given...</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <!-- Review Slider -->
                    <div class="review-slider-wraper position-relative">
                        <div class="swiper-container review-slider">
                            <div class="swiper-wrapper">
                                <script src="https://googlereviews.cws.net/google-reviews.js"></script><br />
                                <script>load_google_reviews("ChIJQ_Y2J2pHLxgR-naB2bAr-bI");</script>
                            </div>
                        </div>
                            </div>
                        </div>
                        
                        <!-- Arrows -->
                        <div class="swiper-button-next next-review">
                            <img src="img/icons/right-arrow.svg" alt="" class="svg">
                        </div>
                        <div class="swiper-button-prev prev-review">
                            <img src="img/icons/left-arrow.svg" alt="" class="svg">
                        </div>
                    </div>
                    <!-- End of Review Slider -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of Reviews -->

    <!-- FAQ -->
    <section class="pt-120 pb-70">
    
    </section>
    <!-- End of FAQ -->

    <!-- Subscription -->
    <section class="pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-5">
                    <div class="section-title pb-0" data-animate="fadeInUp" data-delay=".1">
                        <h2>Subscribe to Newsletter</h2>
                        <p class="mb-0">Let us update you with 24seven tech bytes</p>
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