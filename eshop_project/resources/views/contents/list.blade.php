@extends('layout.app')

@section('content')
<!--Filters-->
<link rel="stylesheet" type="text/css" href="{{ asset('css/list.css') }}" >

<div class="bg-black head">
    <div class="searchbar">
        <div class="input-group row">
            <form class="form-control col-7 col-md-4 col-sm-8 mt-2 py-1 mx-auto" type="get" action="{{ url('/list/search') }}">
                <input class="no-border"
                       type="text" name="query" placeholder="Search" aria-label="Search">
            </form>
            <a class="nav-link btn btn-color mt-1" href="{{ url('/cart') }}">
                <i class="fas fa-shopping-cart fa-2x"></i>
            </a>
        </div>
    </div>
</div>

<div class="row justify-content-around ml-1 pt-5 pb-3 wid">
    <div class="dropdown">
        <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary black" data-target="#" href="/page.html">
            Filter by <span class="caret"></span>
        </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
            <li class="dropdown-submenu">
                <a tabindex="-1" href="#" class="blc">Price</a>
                <ul class="dropdown-menu">
                    <li><a tabindex="-1" href="{{$url}}pricemin=0&pricemax=99&page=1" class="blc">0-99</a></li>
                    <li><a href="{{$url}}pricemin=100&pricemax=299&page=1" class="blc">100-299</a></li>
                    <li><a href="{{$url}}pricemin=300&pricemax=699&page=1" class="blc">300-699</a></li>
                    <li><a href="{{$url}}pricemin=700&pricemax=99999&page=1" class="blc">700+</a></li>
                </ul>
            </li>
            <li class="dropdown-submenu">
                <a tabindex="-1" href="#" class="blc">Category</a>
                <ul class="dropdown-menu">
                    <li><a tabindex="-1" href="/list/office" class="blc">Office</a></li>
                    <li><a href="/list/photo_audio_video" class="blc">Audio</a></li>
                    <li><a href="/list/notebooks" class="blc">Notebooks</a></li>
                    <li><a href="/list/monitors" class="blc">Monitors</a></li>
                    <li><a href="/list/mobile_phones" class="blc">Mobiles</a></li>
                    <li><a href="/list/tvs" class="blc">TV's</a></li>
                    <li><a href="/list/smartwatches" class="blc">Smart Watches</a></li>
                    <li><a href="/list/gaming_devices" class="blc">Gaming Devices</a></li>
                </ul>
            </li>
            <li class="dropdown-submenu">
                <a tabindex="-1" href="#" class="blc">Brand</a>
                <ul class="dropdown-menu">
                    <li><a tabindex="-1" href="{{$url}}brand=Sony&page=1" class="blc">Sony</a></li>
                    <li><a href="{{$url}}brand=Samsung&page=1" class="blc">Samsung</a></li>
                    <li><a href="{{$url}}brand=Apple&page=1" class="blc">Apple</a></li>
                    <li><a href="{{$url}}brand=Dell&page=1" class="blc">Dell</a></li>
                </ul>
            </li>
            <li class="dropdown-submenu">
                <a tabindex="-1" href="#" class="blc">Color</a>
                <ul class="dropdown-menu">
                    <li><a tabindex="-1" href="{{$url}}color=black&page=1" class="blc">Black</a></li>
                    <li><a href="{{$url}}color=gray&page=1" class="blc">Gray</a></li>
                    <li><a href="{{$url}}color=white&page=1" class="blc">White</a></li>
                    <li><a href="{{$url}}color=green&page=1" class="blc">Green</a></li>
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
            <li><a tabindex="-1" href="{{$url}}order=rating&how=asc" class="blc">Rating</a></li>
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
                        <a href="/product/{{$item->id}}"><img src="./.{{$item->img}}" class="card-img-top"/></a>
                    </div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between text-capitalize">
                            <h5><a href="/product/{{$item->id}}">
                                {{$item->title}}
                            </a></h5>
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
        @isset($page)
            @if ($page > 1)
                <li class="page-item">
                    <a class="page-link clr-black" href={{$url}}page={{$page-1}} tabindex="-1">Previous</a>
                </li>
            @endif
        @endisset
        @for ($i = 1, $temp = $length; $temp > 0; $i++, $temp-=9)
            <li class="page-item"><a class="page-link clr-black" href={{$url}}page={{$i}}>{{$i}}</a></li>
        @endfor
        @isset($page)
            @if ($page < $length/9)
                <li class="page-item">
                    <a class="page-link clr-black" href={{$url}}page={{$page+1}}>Next</a>
                </li>
            @endif
        @endisset
    </ul>
</nav>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

@endsection
