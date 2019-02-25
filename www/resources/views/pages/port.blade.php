@extends('layouts.app')
@section('title')
<title>Portfolio</title>
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
                        <h2>Our Portfolio</h2>
                        <ul class="list-unstyled m-0 d-flex">
                            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                            <li><a href="portfolio.html">Our Portfolio</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Page Title -->
    
    <section class="pt-120 pb-65">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="blog">
                        <div class="row isotope">
                            @foreach($projects as $project)
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-news mb-55" data-animate="fadeInUp" data-delay=".1">
                                        <a class="tip" target="_blank" href="{{$project->url}}">Jump to site</a>
                                        <img src="{{asset($project->image)}}" data-rjs="2" alt="{{ $project->name }}">
                                        <h3 align="center" class="h5"><a href="{{$project->url}}" target="_blank">{{$project->name}}</a></h3>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection