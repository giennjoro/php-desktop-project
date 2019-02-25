@extends('layouts.app')
@section('title')
<title>Reviews</title>
@stop
@section('metatags')
    @foreach($metatags as $metatag)
<meta name="{{ $metatag->name }}" content="{{ $metatag->content }}">
    @endforeach
@endsection

@section('content')
    <!-- Page Title -->
    <section class="page-title-wrap" data-bg-img="img/reviews.jpg" data-rjs="2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-title" data-animate="fadeInUp" data-delay="1.2">
                        <h2>Reviews</h2>
                        <ul class="list-unstyled m-0 d-flex">
                            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                            <li><a href="#">Reviews</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Page Title -->

    <!-- Reviews -->
    <section class="theme-bg-overlay bg-img-xs-none pt-120 pb-120" data-bg-img="img/earth.jpg" data-rjs="2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-title section-title-white text-center" data-animate="fadeInUp" data-delay=".1">
                        <h2>What Our Client’s Say</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour</p>
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
@endsection