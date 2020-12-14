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
                        <li class="breadcrumb-item">{{ $item->category}}</li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $item->title}}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row my-row">
            <div class='col-lg-6 col-md-4'>
                <img src="./.{{$item->img}}" class="d-block w-100 c-item" alt="Playstation 5 picture">
            </div>
            <div class="col-lg-6 col-md-9 col-sm-12 primary-col">
                <h1>{{$item->title}}</h1>
                <h2 class="price">{{ $item->price}}€</h2>


                    <div class="rating">
                        @if ($item->rating == 1 )
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star "></i>
                            <i class="fa fa-star "></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                        @elseif ($item->rating == 2 )
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star checked"></i>
                            <i class="fa fa-star "></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        @elseif ($item->rating == 3 )
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                        @elseif($item->rating == 4 )
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star"></i>
                        @else()
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>

                        @endif
                        <span class="badge badge-dark">{{$item->rating}}</span>
                    </div>
                <div class="version-menu">
                    <select class="browser-default custom-select w-50">
                        <option selected value="1">{{$item->title}}</option>
                    </select>
                </div>

                <div class="add-to-cart">
                    {!! Form::open(['url' =>'add-to-cart/'.$item->id, 'method' => 'POST']) !!}
                        <div class="form-group">
                            {{Form::number('q', 'value')}}
                            {{Form::button('Add to cart', ['class' => 'btn btn-dark', 'type' => 'submit'])}}
                        </div>
                    {!! Form::close() !!}
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
                                        <p class="lead"> {{$item->title}} </p>
                                    </div>
                                    <div class="col-lg-7">
                                        <img src="./.{{$item->img}}" alt="console picture" class="w-100">
                                    </div>
                                </div>
                                <br>
                                <p class="lead">{{$item->description}}</p>
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
                                            <td>{{ $item->title}}</td>
                                        </tr>
                                        <tr>
                                            <td>Color</td>
                                            <td>{{$item->color}}</td>
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
                                                        <img src="/img/user_1.jpg" class="avatar" alt="">
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
                                                        <img src="/img/user_2.jpg" class="avatar" alt="">
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
                                    @if(count($similar) > 1)
                                        @foreach($similar as $simitem)
                                            @if ($loop->iteration == 4)
                                                @break
                                            @endif
                                            @if ($simitem->id == $item->id)
                                                @continue
                                            @endif
                                            <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                                                <div class="card">
                                                    <div class="img-container">
                                                        <a href="/product/{{$simitem->id}}">
                                                        <img src="./.{{$simitem->img}}"
                                                            alt="{{$simitem->title}}" class="card-img-top" />
                                                            </a>
                                                    </div>
                                                    <div class="card-body">
                                                        <div
                                                            class="card-text d-flex justify-content-between text-capitalize">
                                                            <h5>
                                                                {{$simitem->title}}
                                                            </h5>
                                                            <span>
                                                                <i class="fas fa-euro-sign"></i>
                                                                {{$simitem->price}}
                                                            </span>
                                                        </div>
                                                        <p>{{$simitem->description}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <p>No similar items exist</p>
                                    @endif

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
