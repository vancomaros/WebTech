@extends('layout.app')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/checkout2.css') }}" >
    <main>
        <!-- Checkout container-->
        <div class="container  checkout2-container">
            <div class="jumbotron">
                <h1 class="h-heading">Personal information</h1>
                <hr class="my-4">
                {!! Form::open(['url' =>'credentials', 'method' => 'POST']) !!}
                    <div class="form-group row justify-content-center">
                        {{Form::label('title', 'First Name', ['class'=> 'col-sm-5 col-md-4 col-lg-3 col-form-label'])}}
                        {{Form::text('firstName', '', ['class' => 'col-md-6 form-control'])}}
                    </div> 
                    <div class="form-group row justify-content-center">
                        {{Form::label('title', 'Last Name', ['class'=> 'col-sm-5 col-md-4 col-lg-3 col-form-label'])}}
                        {{Form::text('lastName', '', ['class' => 'col-md-6 form-control'])}}
                    </div> 
                    <div class="form-group row justify-content-center">
                        {{Form::label('title', 'Address', ['class'=> 'col-sm-5 col-md-4 col-lg-3 col-form-label'])}}
                        {{Form::text('address', '', ['class' => 'col-md-6 form-control'])}}
                    </div> 
                    <div class="form-group row justify-content-center">
                        {{Form::label('title', 'City', ['class'=> 'col-sm-5 col-md-4 col-lg-3 col-form-label'])}}
                        {{Form::text('city', '', ['class' => 'col-md-6 form-control'])}}
                    </div> 
                    <div class="form-group row justify-content-center">
                        {{Form::label('title', 'E-mail', ['class'=> 'col-sm-5 col-md-4 col-lg-3 col-form-label'])}}
                        {{Form::text('email', '', ['class' => 'col-md-6 form-control'])}}
                    </div> 
                    <div class="form-group row justify-content-center">
                        {{Form::label('title', 'Phone number', ['class'=> 'col-sm-5 col-md-4 col-lg-3 col-form-label'])}}
                        {{Form::text('phoneNumber', '', ['class' => 'col-md-6 form-control'])}}
                    </div> 
                <div class="d-flex justify-content-between button-row">

                    {{Form::button('Back', ['class' => 'btn btn-dark btn-sm'])}}
                    {{Form::submit('Finish your order', ['class' => 'btn btn-dark btn-sm'])}}
                </div>
                {!! Form::close() !!}
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
