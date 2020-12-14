@extends('layout.app')

@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" >
<!--Carousel-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <!--Search-->
    <div class="bg-black head">
        <div class="searchbar">
            <div class="input-group row">
                <form class="form-control col-7 col-md-4 col-sm-8 mt-2 py-1 mx-auto" type="get" action="{{ url('/list/search') }}">
                    <input class="no-border col-7 col-md-4 col-sm-8"
                           type="text" name="query" placeholder="Search" aria-label="Search">
                </form>
                <a class="nav-link btn btn-color mt-1" href="{{ url('/cart') }}">
                    <i class="fas fa-shopping-cart fa-2x"></i>
                </a>
            </div>
            <!--
            <div class="row slim">
                <div class="mx-auto text-center pt-5 pb-3">
                    <a href="/list/search">
                        <button type="button" class="btn btn-outline-dark">See all products</button>
                    </a>
                </div>
            </div>
            -->
        </div>
    </div>

    <!--Special offer-->
    <div id="main">
        <div id="Carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#Carousel" data-slide-to="0" class="actice"></li>
                <li data-target="#Carousel" data-slide-to="1" class="actice"></li>
                <li data-target="#Carousel" data-slide-to="2" class="actice"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item carousel-image-1 active">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block text-right mb-5">
                            <h1 class="display-3 title-color">Headphones</h1>
                            <p class="lead">
                                Brand new comfortable headphones for listetning music or playing games
                            </p>
                            <a class="btn btn-color btn-lg" href="#">
                                Open in store
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-image-2">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block text-right mb-5">
                            <h1 class="display-3 title-color">AirPods</h1>
                            <p class="lead">
                                These AirPods represent a completely new concept of wireless headphones
                            </p>
                            <a class="btn btn-color btn-lg" href="#">
                                Open in store
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-image-3">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block text-right mb-5">
                            <h1 class="display-3 title-color">PlayStation 4</h1>
                            <p class="lead">
                                PlayStation 4 Slim is a next-generation console that lets you fulfill all your dreams
                            </p>
                            <a class="btn btn-color btn-lg" href="#">
                                Open in store
                            </a>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" data-slide="prev" href="#Carousel">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" data-slide="next" href="#Carousel">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </div>
    <!--End of special offer-->


    <!--Categories-->
    <div id="catogories" class="wid">
        <div class="row slim">
            <div class="mx-auto text-center pt-5 pb-3">
                <h1 class="text-capitalize">
                    Categories
                </h1>
            </div>
        </div>
        <div class="row slim">
            <div class="category-list col-9 col-sm-8 col-md-4 col-lg-4">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a class="color-black" href="/list/notebooks">
                            <span class="d-none d-md-block"><i class="fas fa-laptop fa-2x pr-2"></i></span>
                            Notebooks
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a class="color-black" href="/list/mobile_phones">
                            <span class="d-none d-md-block"><i class="fas fa-mobile-alt fa-2x pl-2 pr-3"></i></span>
                            Mobile Phones
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a class="color-black" href="/list/tvs">
                            <span class="d-none d-md-block"><i class="fas fa-tv fa-2x pr-2"></i></span>
                            TV's
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a class="color-black" href="/list/monitors">
                            <span class="d-none d-md-block"><i class="fas fa-tablet fa-2x pr-3"></i></span>
                            Monitors
                        </a>
                    </li>
                </ul>
            </div>
            <div class="category-list col-9 col-sm-8 col-md-4 col-lg-4">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a class="color-black" href="/list/smartwatches">
                            <span class="d-none d-md-block"><i class="far fa-clock fa-2x pr-2"></i></span>
                            Smart Watches
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a class="color-black" href="/list/gaming_devices">
                            <span class="d-none d-md-block"><i class="fab fa-playstation fa-2x pr-2"></i></span>
                            Gaming devices
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a class="color-black" href="/list/photo_audio_video">
                            <span class="d-none d-md-block"><i class="fa fa-camera fa-2x pr-2"></i></span>
                            Photo, audio, video
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a class="color-black" href="/list/office">
                            <span class="d-none d-md-block"><i class="fa fa-suitcase fa-2x pr-2"></i></span>
                            Office
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="row slim">
        <div class="mx-auto text-center pt-5 pb-3">
            <a href="/list">
                <button type="button" class="btn btn-outline-dark">See all products</button>
            </a>
        </div>
    </div>


    <!--Fresh products-->
    <div class="products py-5">
        <div class="container">
            <div class="row">
                <div class="col-10 mx-auto col-sm-6 text-center">
                    <h1 class="text-capitalize">
                        Fresh products
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                    <div class="card">
                        <div class="img-container">
                            <a href="/product/1">
                                <img src="./img/Featured/lens-3143893_640.jpg" alt="High zoom camera"
                                     class="card-img-top"/>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5>
                                    Camera
                                </h5>
                                <span>
                                    <i class="fas fa-euro-sign"></i>
                                    2999
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                    <div class="card">
                        <div class="img-container">
                            <a href="/product/2">
                                <img src="./img/Featured/earphones-791188_640.jpg" alt="Good quality earphones"
                                     class="card-img-top"/>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5>
                                    Earphones
                                </h5>
                                <span>
                                    <i class="fas fa-euro-sign"></i>
                                    99
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                    <div class="card">
                        <div class="img-container">
                            <a href="/product/3">
                            <img src="./img/Featured/smart-watch-821559_640.jpg" alt="Smart Watch"
                                 class="card-img-top"/>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5>
                                    Apple Watch
                                </h5>
                                <span>
                                    <i class="fas fa-euro-sign"></i>
                                    499
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Deals ending soon-->
    <div class="products py-5">
        <div class="container">
            <div class="row">
                <div class="col-10 mx-auto col-sm-6 text-center">
                    <h1 class="text-capitalize">
                        Deals ending soon
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                    <div class="card">
                        <div class="img-container">
                            <img src="./img/Featured/imac-464737_640.jpg" alt="For the rich"
                                 class="card-img-top product-img"/>
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5>
                                    IMac
                                </h5>
                                <span>
                                    <i class="fas fa-euro-sign"></i>
                                    1799
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                    <div class="card">
                        <div class="img-container">
                            <a href="/product/15">
                                <img src="./img/Featured/tv-627876_640.jpg" alt="LED TV"
                                     class="card-img-top"/>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5>
                                    TV
                                </h5>
                                <span>
                                    <i class="fas fa-euro-sign"></i>
                                    1499
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                    <div class="card">
                        <div class="img-container">
                            <a href="/product/22">
                                <img src="./img/slider-setup.jpg" alt="Setup for begginers"
                                     class="card-img-top"/>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5>
                                    Setup
                                </h5>
                                <span>
                                    <i class="fas fa-euro-sign"></i>
                                    299
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
