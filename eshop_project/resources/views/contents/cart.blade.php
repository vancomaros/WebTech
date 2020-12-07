@extends('layout.app')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cart.css') }}" >
<!-- Cart container-->
<main>
    <div class="container  cart-container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-striped text-center my-table">
                    <thead>
                    <tr>
                        <td>Item </td>
                        <td>Quantity</td>
                        <td>Price</td>
                        <td>Remove</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Item 1</td>
                        <td>
                            <button type="button" class="btn btn-dark btn-sm">-</button> 1
                            <button type="button" class="btn btn-dark btn-sm">+</button>
                        </td>
                        <td>199.99€</td>
                        <td>
                            <button type="button" class="btn btn-danger btn-sm">X</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Item 2</td>
                        <td>
                            <button type="button" class="btn btn-dark btn-sm">-</button> 1
                            <button type="button" class="btn btn-dark btn-sm">+</button>
                        </td>
                        <td>299.99€</td>
                        <td>
                            <button type="button" class="btn btn-danger btn-sm">X</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Item 3</td>
                        <td>
                            <button type="button" class="btn btn-dark btn-sm">-</button> 1
                            <button type="button" class="btn btn-dark btn-sm">+</button>
                        </td>
                        <td>99.99€</td>
                        <td>
                            <button type="button" class="btn btn-danger btn-sm">X</button>
                        </td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td>
                            <b>Total amount</b>
                        </td>
                        <td></td>
                        <td>
                            <b>599.97€</b>
                        </td>
                        <td></td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div align="right" class="proceed-div">
                    <a><button type="button" class="btn btn-dark">Proceed to checkout</button></a>
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
