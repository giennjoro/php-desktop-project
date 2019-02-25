@extends('layouts.app')
@section('title')
<title>About Us</title>
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
                        <h2>About Us</h2>
                        <ul class="list-unstyled m-0 d-flex">
                            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                            <li><a href="#">About us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Page Title -->
    
    <!-- Abut Us -->
    <section class="pt-120 pb-55">
        <div class="container">
            <div class="row align-items-center pb-4">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="text-center" data-animate="fadeInUp" data-delay=".1">
                        <img src="img/number-one.png" alt="" data-rjs="2">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="number-one-content" data-animate="fadeInUp" data-delay=".3">
                        <h2 class="mb-3">Who are 24seven Web Developers? </h2>
                        <p>Started as a UI and Graphics Design company, we quickly grew into professionals with many satisfied clients. We passionately move pixels and lines of code with the aim of crafting clean, responsive, and user-friendly Systems. What separates design from art is that design is meant to be functional. While designing we highly focus on layout, color, graphics, fonts, SEO friendly Content, and above all, the functionality of our systems. Good design is obvious, Great design is transparent. Please connect with us We are here to help you to grow your Business.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of About Us -->

    

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