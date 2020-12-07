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
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="shipping-radio" id="exampleRadios1"
                               value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Personal pickup
                        </label>
                        <a>- 0€</a>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="shipping-radio" id="exampleRadios2"
                               value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Delivery service
                        </label>
                        <a>- 3.99€</a>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="shipping-radio" id="exampleRadios3"
                               value="option3">
                        <label class="form-check-label" for="exampleRadios3">
                            Delivery by mail
                        </label>
                        <a>- 2.49€</a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center checkout-row" align="center">
                <div class="col-md-8 col-sm-10">
                    <h2>Payment method</h2>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment-radio" id="exampleRadios1"
                               value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Pay with card
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment-radio" id="exampleRadios2"
                               value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Pay on delivery
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment-radio" id="exampleRadios3"
                               value="option3">
                        <label class="form-check-label" for="exampleRadios3">
                            Bank Transfer
                        </label>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between button-row">
                <a><button class="btn btn-dark btn-sm">Back</button></a>
                <a><button class="btn btn-dark btn-sm">Continue</button></a>
            </div>
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
