@extends('layout.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/product_page.css') }}" >
<!-- product page content-->
<main>
    <div class="container">
        <div class='row'>
            <div class="col-lg-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Electronics</li>
                        <li class="breadcrumb-item">Gaming</li>
                        <li class="breadcrumb-item" aria-current="page">Consoles</li>
                        <li class="breadcrumb-item active" aria-current="page">PlayStation</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row my-row">
            <div class='col-lg-6 col-md-4'>
                <img src="img/PS5.jpg" class="d-block w-100 c-item" alt="Playstation 5 picture">
            </div>
            <div class="col-lg-6 col-md-9 col-sm-12 primary-col">
                <h1>PlayStation 5</h1>
                <h2 class="price">499.99€</h2>

                <div class="rating">
                    <i class="fa fa-star checked"></i>
                    <i class="fa fa-star checked"></i>
                    <i class="fa fa-star checked"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <span class="badge badge-dark">2</span>
                </div>
                <div class="version-menu">
                    <select class="browser-default custom-select w-50">
                        <option selected>Choose version</option>
                        <option value="1">PlayStation 5</option>
                        <option value="2">PlayStation 5 Digital Edition</option>
                        <option value="3">PlayStation 5 Pro</option>
                    </select>
                </div>
                <div class="add-to-cart">
                    <button type="button" class="btn btn-dark">Add to cart</button>
                    <input type='number' value="1">
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12 navigate">
                <ul class="nav nav-pills nav-tab">
                    <li><a class="nav-link active ntab" href="#description" data-toggle="tab">Description</a></li>
                    <li><a class="nav-link ntab" href="#specs" data-toggle="tab">Specs</a></li>
                    <li><a class="nav-link ntab" href="#reviews" data-toggle="tab">Reviews</a></li>
                    <li><a class="nav-link ntab" href="#similar-items" data-toggle="tab">Similar items</a></li>
                </ul>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="tab-content">
                    <div role="tabpanel" , class="tab-pane active" , id="description">
                        <div class="jumbotron jumbotron-fluid">
                            <div class="container">
                                <h1 class="display-4">Item description</h1>
                                <div class="row">
                                    <div class="col-lg-5 mb-4 my-lg-auto">
                                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Integer
                                            sit amet metus eros.
                                            Maecenas aliquet id nibh in condimentum. Morbi id elit eu ante
                                            convallis
                                            efficitur.
                                            In cursus quam libero, non rutrum lacus bibendum vitae. Phasellus
                                            vel nibh
                                            ut turpis suscipit luctus.
                                            Fusce ultricies ante mauris, et ullamcorper lorem iaculis non. Fusce
                                            eleifend sodales ipsum.
                                            Praesent hendrerit, lorem nec aliquam mollis, nisl mi convallis
                                            massa, ac
                                            commodo urna nibh eu elit.
                                            Duis eleifend arcu at neque pellentesque auctor.</p>
                                    </div>
                                    <div class="col-lg-7">
                                        <img src="/img/PS5.jpg" alt="console picture" class="w-100">
                                    </div>
                                </div>
                                <br>
                                <p class="lead">Aenean ut sodales ex. Ut viverra est ac nibh tincidunt tempor.
                                    Vivamus venenatis augue a semper consectetur. Etiam viverra iaculis euismod.
                                    Suspendisse ullamcorper mi urna, at luctus est blandit eu. Donec sed dui
                                    vulputate
                                    mi lobortis convallis.
                                    Suspendisse est erat, pellentesque quis tellus non, pulvinar imperdiet
                                    libero.
                                    Sed hendrerit condimentum varius. Pellentesque vel ante lectus.</p>
                                <br>
                                <p class="lead">Aenean id eros metus. Nunc quis purus in orci iaculis tincidunt
                                    quis ut
                                    mauris.
                                    Aenean feugiat efficitur elit, et consectetur leo vestibulum a. Fusce mollis
                                    tempor
                                    nisi a volutpat.
                                    Nam mattis tellus efficitur, blandit purus ac, varius lorem.
                                    Curabitur ullamcorper justo eu lacus aliquet, nec cursus ex gravida.
                                    Aliquam vel tortor elit. Pellentesque in enim a metus luctus laoreet.
                                    Aenean quis pulvinar sem, quis dapibus lectus. Maecenas sollicitudin mauris
                                    sed
                                    luctus eleifend.</p>
                                <br>
                                <p class="lead">Quisque at vehicula sapien. Maecenas eu lorem velit. Donec vitae
                                    quam
                                    urna. Fusce nec varius metus, ut condimentum eros.
                                    Fusce scelerisque rutrum libero, id euismod quam. Ut vitae accumsan velit,
                                    in
                                    volutpat odio. Nulla facilisi.
                                    Nulla aliquet egestas dignissim. Nunc efficitur orci ut viverra commodo.
                                    Suspendisse
                                    nec ante vitae ligula mattis condimentum.
                                    Praesent feugiat sollicitudin tempor. Sed scelerisque pulvinar finibus.
                                    Phasellus
                                    imperdiet sapien at turpis volutpat rhoncus.
                                    Pellentesque vitae enim vel nunc sollicitudin luctus. Duis vitae est semper,
                                    vehicula orci in, ultrices libero. Ut nec interdum orci, a interdum augue.
                                </p>
                                <br>
                                <p class="lead">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                                    posuere
                                    cubilia curae; Proin pellentesque aliquet mauris.
                                    Phasellus molestie dui et ipsum mattis fermentum. Nullam congue magna sit
                                    amet
                                    mattis efficitur.
                                    Integer lacus arcu, efficitur sit amet pretium in, blandit ac libero. Nam
                                    aliquam
                                    lacinia laoreet.
                                    Sed vehicula, quam eget pellentesque tempor, libero erat rhoncus nisi, eget
                                    ullamcorper quam neque ut lacus.
                                    Duis varius mauris eu mauris fringilla tempus. Aenean libero mauris,
                                    molestie nec
                                    diam nec, elementum pulvinar dui.
                                    Duis porta erat nunc, eu elementum felis fermentum sed. Suspendisse
                                    hendrerit, odio
                                    in vehicula eleifend, ipsum sapien mattis libero, vel eleifend purus neque
                                    quis
                                    enim.
                                    Pellentesque volutpat suscipit dui feugiat varius.
                                    Etiam efficitur dolor leo, quis faucibus diam fermentum vel. In ac hendrerit
                                    lacus.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" , class="tab-pane fade in" , id="specs">
                        <div class="jumbotron jumbotron-fluid">
                            <div class="container">
                                <h1 class="display-4">Item specs</h1>
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                        <tr>

                                            <td>Version</td>
                                            <td>PS5</td>
                                        </tr>
                                        <tr>

                                            <td>Storage capacity</td>
                                            <td>888 GB</td>
                                        </tr>
                                        <tr>

                                            <td>Storage type</td>
                                            <td>SSD</td>
                                        </tr>
                                        <tr>

                                            <td>Color</td>
                                            <td>White</td>
                                        </tr>
                                        <tr>

                                            <td>Width</td>
                                            <td>39 cm</td>
                                        </tr>
                                        <tr>

                                            <td>Height</td>
                                            <td>26 cm</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" , class="tab-pane fade in" , id="reviews">
                        <div class="jumbotron jumbotron-fluid">
                            <div class="container">
                                <h1 class="display-4">Customer reviews</h1>
                                <div class="review">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="blog-comment">
                                                <ul class="comments">
                                                    <li class="clearfix">
                                                        <img src="img/user_1.jpg" class="avatar" alt="">
                                                        <div class="post-comments">
                                                            <p class="meta">Dec 18, 2019 <a href="#">JohnDoe</a>
                                                                says :
                                                                <i class="float-right"><a
                                                                        href="#"><small>Reply</small></a></i>
                                                            </p>
                                                            <p>

                                                                <i class="fa fa-star checked"></i>
                                                                <i class="fa fa-star checked"></i>
                                                                <i class="fa fa-star checked"></i>
                                                                <i class="fa fa-star checked"></i>
                                                                <i class="fa fa-star"></i>
                                                                <br>
                                                                Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing elit.
                                                                Etiam a sapien odio, sit amet
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li class="clearfix">
                                                        <img src="img/user_2.jpg" class="avatar" alt="">
                                                        <div class="post-comments">
                                                            <p class="meta">Jan 19, 2018 <a href="#">JaneDoe</a>
                                                                says : <i class="float-right"><a
                                                                        href="#"><small>Reply</small></a></i>
                                                            </p>
                                                            <p>
                                                                <i class="fa fa-star checked"></i>
                                                                <i class="fa fa-star checked"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <br>
                                                                Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing elit.
                                                                Etiam a sapien odio, sit amet
                                                            </p>
                                                        </div>
                                                        <!--<ul class="comments"> example of a review reply
                                            <li class="clearfix">
                                                <img src="https://bootdey.com/img/Content/user_3.jpg" class="avatar" alt="">
                                                <div class="post-comments">
                                                    <p class="meta">Dec 20, 2014 <a href="#">JohnDoe</a> says : <i class="pull-right"><a href="#"><small>Reply</small></a></i></p>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Etiam a sapien odio, sit amet
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>-->
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white rounded shadow-sm p-4 mb-5 rating-review">
                                    <h5 class="mb-4">Leave a review</h5>
                                    <p class="mb-2">Rate the Place</p>
                                    <div class="mb-4">
                                        <span class="star-rating">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        </span>
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <label>Your review</label>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-dark btn-sm" type="button"> Submit review
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div role="tabpanel" , class="tab-pane fade in" , id="similar-items">
                        <div class="jumbotron jumbotron-fluid">
                            <div class="container">
                                <h1 class="display-4">Similar items</h1>
                                <div class="row">
                                    <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                                        <div class="card">
                                            <div class="img-container">
                                                <img src="/img/Featured/lens-3143893_640.jpg"
                                                    alt="High zoom camera" class="card-img-top" />
                                            </div>
                                            <div class="card-body">
                                                <div
                                                    class="card-text d-flex justify-content-between text-capitalize">
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
                                                <img src="/img/Featured/earphones-791188_640.jpg"
                                                    alt="Good quality earphones" class="card-img-top" />
                                            </div>
                                            <div class="card-body">
                                                <div
                                                    class="card-text d-flex justify-content-between text-capitalize">
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
                                                <img src="/img/Featured/smart-watch-821559_640.jpg"
                                                    alt="Smart Watch" class="card-img-top" />
                                            </div>
                                            <div class="card-body">
                                                <div
                                                    class="card-text d-flex justify-content-between text-capitalize">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
@endsection
