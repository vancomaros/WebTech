<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="main.css"> -->

    <!--icons (cart)-->
    <script src="https://kit.fontawesome.com/2a724ada4f.js" crossorigin="anonymous"></script>

    <!--official fonts (poppins)-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" >
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <title>E-shop</title>
  </head>
  <body>
    <!--Nav bar-->
    <nav class="navbar navbar-expand-sm navbar-dark bg-black">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./Logo/logo_size_invert.jpg" alt="logo">
            </a>
            <!--small devices-->
            <button class="navbar-toggler" data-toggle="collapse"
            data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--if navbar is collapsed, button shows up-->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <!--fontawesome-->
                            <i class="fas fa-shopping-cart fa-2x"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--End of nav-->

    <!--Search-->
    <header class="bg-black head">
        <div class="searchbar justify-content-between">
            <div class="input-group mx-auto">
                <input class="form-control col-8 col-md-4 col-sm-8 mt-2 py-1 mx-auto amber-border search-window"
                        type="text" placeholder="Search" aria-label="Search">
            </div>
        </div>
    </header>




    <!--Special offer-->
    <section id="main">
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
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec placerat mauris.
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
                            <h1 class="display-3 title-color">Airpods</h1>
                            <p class="lead">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque bibendum.
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
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus scelerisque ex id.
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
    </section>
    <!--End of special offer-->


    <!--Categories-->
    <div class="wid">
    <section id="catogories">
        <div class="row">
            <div class="mx-auto text-center pt-5 pb-3">
                <h1 class="text-capitalize">
                    Categories
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="category-list col-4">
                <ul class="list-group">
                    <li class="list-group-item">
                        <span><i class="fas fa-laptop fa-2x pr-2"></i></span>
                        Notebooks
                    </li>
                    <li class="list-group-item">
                        <span><i class="fas fa-mobile-alt fa-2x pl-2 pr-3"></i></span>
                        Mobile Phones
                    </li>
                    <li class="list-group-item">
                        <span><i class="fas fa-tv fa-2x pr-2"></i></span>
                        TV's
                    </li>
                    <li class="list-group-item">
                        <span><i class="fas fa-tablet fa-2x pr-3"></i></span>
                        Monitors
                    </li>
                </ul>
            </div>
            <div class="category-list col-4 ">
                <ul class="list-group">
                    <li class="list-group-item">
                        <span><i class="far fa-clock fa-2x pr-2"></i></span>
                        Smart Watches
                    </li>
                    <li class="list-group-item">
                        <span><i class="fab fa-playstation fa-2x pr-2"></i></span>
                        Gaming devices
                    </li>
                    <li class="list-group-item">
                        <span><i class="fa fa-camera fa-2x pr-2"></i></span>
                        Photo, audio, video
                    </li>
                    <li class="list-group-item">
                        <span><i class="fa fa-suitcase fa-2x pr-2"></i></span>
                        Office
                    </li>
                </ul>
            </div>
        </div>
    </section>
    </div>


    <!--Fresh products-->
    <section class="products py-5">
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
                            <img src="./images/Featured/lens-3143893_640.jpg" alt="High zoom camera"
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
                        </div>
                    </div>
                </div>
                <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                    <div class="card">
                        <div class="img-container">
                            <img src="./images/Featured/earphones-791188_640.jpg" alt="Good quality earphones"
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
                        </div>
                    </div>
                </div>
                <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                    <div class="card">
                        <div class="img-container">
                            <img src="./images/Featured/smart-watch-821559_640.jpg" alt="Smart Watch"
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Deals ending soon-->
    <section class="products py-5">
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
                            <img src="./images/Featured/imac-464737_640.jpg" alt="For the rich"
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
                            <img src="./images/Featured/tv-627876_640.jpg" alt="LED TV"
                                class="card-img-top"/>
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
                            <img src="./images/slider-setup.jpg" alt="Setup for begginers"
                                class="card-img-top"/>
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
    </section>

    <!--Footer-->
    <footer id="footer" class="bg-black">
        <div class="container">
            <div class="row justify-content-between pt-3 text-center col-8 col-md-8 col-sm-8 mx-auto">
                <div class="col-md-2 mb-3 d-none d-md-block">
                    <h6 class="font-weight-bold">
                        <a href="#!">Contact</a>
                    </h6>
                </div>
                <div class="col-md-2 mb-3 d-none d-md-block">
                    <h6 class="font-weight-bold">
                        <a href="#!">About us</a>
                    </h6>
                </div>
                <div class="col-md-2 mb-3 d-none d-md-block">
                    <h6 class="font-weight-bold">
                        <a href="#!">FAQ</a>
                    </h6>
                </div>
                <div class="col-md-2 mb-3 d-none d-md-block">
                    <h6 class="font-weight-bold">
                        <a href="#!">Return policy</a>
                    </h6>
                </div>
                <div class="col-md-2 mb-3 d-block d-sm-none d-none d-sm-block d-md-none">
                    <h6 class="font-weight-bold">
                        <p class="shrinked"><a href="#!" class="shrinked">Contact</a> | <a class="shrinked" href="#!">About us</a>
                            | <a class="shrinked" href="#!">FAQ</a> | <a class="shrinked" href="#!">Return policy</a></p>
                    </h6>
                </div>
            </div>
            <div class="footer-copyright text-center py-3">
                <h6 class="shrinked">© 2020 Copyright</h6>
            </div>
        </div>
    </footer>

    <!--Carousel-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>
