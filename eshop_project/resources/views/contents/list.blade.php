@extends('layout.app')

@section('content')
<!--Filters-->
<link rel="stylesheet" type="text/css" href="{{ asset('css/list.css') }}" >

<div class="row justify-content-around ml-1 pt-5 pb-3 wid">
    <div class="dropdown">
        <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary black" data-target="#" href="/page.html">
            Filter by <span class="caret"></span>
        </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
            <li class="dropdown-submenu">
                <a tabindex="-1" href="#" class="blc">Category</a>
                <ul class="dropdown-menu">
                    <li><a tabindex="-1" href="/list/office" class="blc">Office</a></li>
                    <li><a href="/list/photo_audio_video" class="blc">Audio</a></li>
                    <li><a href="/list/notebooks" class="blc">Notebooks</a></li>
                </ul>
            </li>
            <li class="dropdown-submenu">
                <a tabindex="-1" href="#" class="blc">Brand</a>
                <ul class="dropdown-menu">
                    <li><a tabindex="-1" href="#" class="blc">Sony</a></li>
                    <li><a href="#" class="blc">Samsung</a></li>
                    <li><a href="#" class="blc">Apple</a></li>
                </ul>
            </li>
            <li class="dropdown-submenu">
                <a tabindex="-1" href="#" class="blc">Color</a>
                <ul class="dropdown-menu">
                    <li><a tabindex="-1" href="{{$url}}color=black" class="blc">Black</a></li>
                    <li><a href="{{$url}}color=gray&" class="blc">Gray</a></li>
                    <li><a href="{{$url}}color=white&" class="blc">White</a></li>
                    <li><a href="{{$url}}color=green&" class="blc">Green</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="dropdown">
        <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary black" data-target="#" href="/page.html">
            Order by <span class="caret"></span>
        </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
            <li><a tabindex="-1" href="{{$url}}order=title&how=asc" class="blc">Aplhabetically</a></li>
            <li><a tabindex="-1" href="{{$url}}order=price&how=asc" class="blc">Price ascending</a></li>
            <li><a tabindex="-1" href="{{$url}}order=price&how=desc" class="blc">Price descending</a></li>
        </ul>
    </div>
</div>

    <!--
<div class="row justify-content-around ml-1 pt-5 pb-3 wid">
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle bg-black" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Filter by
        </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Price</a>
                <a class="dropdown-item" href="#">Brand</a>
                <a class="dropdown-item" href="#">Color</a>
                <a class="dropdown-item" href="#">Category</a>
            </div>
    </div>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle bg-black" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Order by
        </button>
        <div class="dropdown-menu align-right" aria-labelledby="dropdownMenuButton2">
            <a class="dropdown-item" href="#">Recommended</a>
            <a class="dropdown-item" href="#">Price ascending</a>
            <a class="dropdown-item" href="#">Price descending</a>
            <a class="dropdown-item" href="#">Alphabetically</a>
        </div>
    </div>
</div>
-->

<div class="products py-5">
    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto col-sm-6 text-center">
                <h1 class="text-capitalize">
                    @isset($category)
                        Chosen products
                    @else
                        All Products
                    @endisset
                </h1>
            </div>
        </div>
        <div class="row">
        @foreach($data as $item)
            <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                <div class="card">
                    <div class="img-container">
                        <img src="./.{{$item->img}}" class="card-img-top"/>
                    </div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between text-capitalize">
                            <h5>
                                {{$item->title}}
                            </h5>
                            <span>
                            <i class="fas fa-euro-sign"></i>
                            {{$item->price}}
                        </span>
                        </div>
                        <p>{{$item->description}}</p>
                    </div>
                </div>
            </div>
            <!--
            <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                <div class="card">
                    <div class="img-container">
                        <img src="./img/Featured/lens-3143893_640.jpg" alt="High zoom camera"
                             class="card-img-top"/>
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
                        <p>High quality camera</p>
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                <div class="card">
                    <div class="img-container">
                        <img src="./img/Featured/earphones-791188_640.jpg" alt="Good quality earphones"
                             class="card-img-top"/>
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
                        <p>Earphones with jack connector</p>
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                <div class="card">
                    <div class="img-container">
                        <img src="./img/Featured/smart-watch-821559_640.jpg" alt="Smart Watch"
                             class="card-img-top"/>
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
                        <p>Smart watch for Apple users</p>
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                <div class="card">
                    <div class="img-container">
                        <img src="./img/All/drone.jpg" alt="Drone"
                             class="card-img-top"/>
                    </div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between text-capitalize">
                            <h5>
                                Drone
                            </h5>
                            <span>
                                <i class="fas fa-euro-sign"></i>
                                244
                            </span>
                        </div>
                        <p>Drone with miniature camera</p>
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                <div class="card">
                    <div class="img-container">
                        <img src="./img/All/electronic_tablet.jpg" alt="Electronic tablet"
                             class="card-img-top"/>
                    </div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between text-capitalize">
                            <h5>
                                Electronic tablet
                            </h5>
                            <span>
                                <i class="fas fa-euro-sign"></i>
                                199
                            </span>
                        </div>
                        <p>Tablet for everyone</p>
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                <div class="card">
                    <div class="img-container">
                        <img src="./img/All/robot-mower.jpg" alt="Lawn mower"
                             class="card-img-top"/>
                    </div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between text-capitalize">
                            <h5>
                                Lawn mower
                            </h5>
                            <span>
                                <i class="fas fa-euro-sign"></i>
                                499
                            </span>
                        </div>
                        <p>Robotic mower</p>
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                <div class="card">
                    <div class="img-container">
                        <img src="./img/All/samsung-1376890_640.jpg" alt="Samsung phone"
                             class="card-img-top"/>
                    </div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between text-capitalize">
                            <h5>
                                Samsung phone
                            </h5>
                            <span>
                                <i class="fas fa-euro-sign"></i>
                                55
                            </span>
                        </div>
                        <p>Samsung feature phone</p>
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                <div class="card">
                    <div class="img-container">
                        <img src="./img/All/robot-vacuum-cleaner-3786243_640.jpg" alt="Robotic vacuum cleaner"
                             class="card-img-top"/>
                    </div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between text-capitalize">
                            <h5>
                                Vacuum cleaner
                            </h5>
                            <span>
                                <i class="fas fa-euro-sign"></i>
                                499
                            </span>
                        </div>
                        <p>Automatic vacuum cleaner</p>
                    </div>
                </div>
            </div>
            <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                <div class="card">
                    <div class="img-container">
                        <img src="./img/All/xbox-2003277_640.jpg" alt="X box"
                             class="card-img-top"/>
                    </div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between text-capitalize">
                            <h5>
                                X-box controller
                            </h5>
                            <span>
                                <i class="fas fa-euro-sign"></i>
                                599
                            </span>
                        </div>
                        <p>Styled controller for X-box</p>
                    </div>
                </div>
            </div>
            -->
        @endforeach
        </div>
    </div>
</div>

<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item disabled">
            <a class="page-link clr-black" href="#" tabindex="-1">Previous</a>
        </li>
        <li class="page-item"><a class="page-link clr-black" href="#">1</a></li>
        <li class="page-item"><a class="page-link clr-black" href="#">2</a></li>
        <li class="page-item"><a class="page-link clr-black" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link clr-black" href="#">Next</a>
        </li>
    </ul>
</nav>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

@endsection
