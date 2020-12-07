@extends('layout.app')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/checkout2.css') }}" >
    <main>
        <!-- Checkout container-->
        <div class="container  checkout2-container">
            <div class="jumbotron">
                <h1 class="h-heading">Personal information</h1>
                <hr class="my-4">
                <form>
                    <div class="form-group row justify-content-center">
                        <label for="inputFirstName" class="col-sm-5 col-md-4 col-lg-3 col-form-label">First
                            Name</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="inputFirstName">
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <label for="inputLastName" class="col-sm-5 col-md-4 col-lg-3 col-form-label">Last
                            Name</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="inputLastName">
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <label for="inputAddress" class="col-sm-5 col-md-4 col-lg-3 col-form-label">Address</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="inputAddress">
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <label for="inputCity" class="col-sm-5 col-md-4 col-lg-3 col-form-label">City</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <label for="inputEmail" class="col-sm-5 col-md-4 col-lg-3 col-form-label">E-mail</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="inputEmail">
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <label for="inputPhoneNumber" class="col-sm-6 col-md-4 col-lg-3 col-form-label">Phone
                            Number</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="inputPhoneNumber">
                        </div>
                    </div>
                </form>
                <div class="d-flex justify-content-between button-row">
                    <a><button class="btn btn-dark btn-sm">Back</button></a>
                    <a><button class="btn btn-dark btn-sm">Finish your order</button></a>
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
