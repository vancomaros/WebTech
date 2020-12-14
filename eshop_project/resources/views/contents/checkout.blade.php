@extends('layout.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/checkout.css') }}" >

<!-- Checkout container-->
<main>
    <div class="container  checkout-container">
        <div class="jumbotron">
            <h1 class="h-heading">Shipping and payment</h1>
            <hr class="my-4">
            <div class="row justify-content-center checkout-row" align="center">
                <div class="col-md-8 col-sm-10">
                    <h2>Shipping</h2>
                    {!! Form::open(['url' =>'paymentshipping', 'method' => 'GET']) !!}
                        <div class="form-check">
                            {{Form::radio('shipping', 'Personal', true)}}
                            {{Form::label('title', 'Personal pickup - 0€')}}
                        </div>
                        <div class="form-check">
                            {{Form::radio('shipping', 'Delivery', false)}}
                            {{Form::label('title', 'Delivery service - 3,99€')}}
                        </div>
                        <div class="form-check">
                            {{Form::radio('shipping', 'Mail', false)}}
                            {{Form::label('title', 'Delivery by mail - 2,49€')}}
                        </div>
                </div>
            </div>
            <div class="row justify-content-center checkout-row" align="center">
                <div class="col-md-8 col-sm-10">
                <h2>Payment method</h2>

                        <div class="form-check">
                            {{Form::radio('payment', 'card', true)}}
                            {{Form::label('title', 'Pay with card')}}
                        </div>
                        <div class="form-check">
                            {{Form::radio('payment', 'onDelivery', false)}}
                            {{Form::label('title', 'Pay on delivery')}}
                        </div>
                        <div class="form-check">
                            {{Form::radio('payment', 'bankTransfer', false)}}
                            {{Form::label('title', 'Bank trasfer')}}
                        </div>

                    
                    
                </div>
            </div>
            <div class="d-flex justify-content-between button-row">
            {{Form::button('Back', ['class' => 'btn btn-dark btn-sm'])}}
            {{Form::button('Continue', ['class' => 'btn btn-dark btn-sm', 'type' => 'submit'])}}
                <!-- <a><button class="btn btn-dark btn-sm" onclick="location.href='{{ url('cart') }}'">Back</button></a>
                <a><button class="btn btn-dark btn-sm" onclick="location.href='{{ url('checkoutnext') }}'">Continue</button></a> -->
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</main>

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

@endsection
