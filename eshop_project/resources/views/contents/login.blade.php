@extends('layout.app')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}" >
    <main class="page-container">
        <!--Login-->
        <div id="login" class="d-flex align-items-center justify-content-center">
            <form class="login-form text-center col-10 col-md-4 col-sm-8 col-lg-4 col-xl-4" method="POST" action="/login">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" name="username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
                <div>
                    <a href="#">Forgot password?</a>
                </div>
                <button type="submit" class="btn btn-primary btn-block btn-dark mt-3 mx-auto">
                    Login
                </button>
                <p class="mt-2">Not registered? Click <a href="registerr"><strong>Here!</strong></a></p>
            </form>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
@endsection
