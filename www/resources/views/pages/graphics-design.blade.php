@extends('layouts.app')
@section('title')
<title>Graphic Design</title>
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
                        <h2>Graphics Design</h2>
                        <ul class="list-unstyled m-0 d-flex">
                            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="#">Graphics Design</a></li>
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
                        <h2>Make Your Business Stand Out From The Rest by Having the Best Graphic Designers</h2>
                        <p>Customers are likely to be attracted to your product if it is well branded and they can feel proud for being associated with it.
                        We bring our design skills to play by first sketching down our artworks on a book, we then include your official company colours and 
                        then finalizing with deign softwares within shortest time. Your product ought to stand out more if it has the best logos, business cards, and business fliers e.t.c</p>
                        <p><i>Graphics Design enables customers to visualize with your brand through images. Among others we design:</i></p>
                        <ul class="rubik list-unstyled m-0 clearfix">
                            <li>Logo design</li>
                            <li>Business cards</li>
                            <li>Poster design</li>
                            <li>Bronchure design</li>
                            <li>Letterheads</li>
                            <li>Infographics</li>
                            <li>T-shirt branding</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-img text-center" data-animate="fadeInUp" data-delay=".4">
                        <img src="img/dedicated-server.png" alt="" data-rjs="2">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Service Details -->
@endsection