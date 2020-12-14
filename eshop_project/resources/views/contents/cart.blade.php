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
                    <?php $total = 0 ?>
                    @if(session('cart'))
                    @foreach(session('cart') as $id => $details)
                    <?php $total += $details['price'] * $details['quantity'] ?>
                        <tr>
                            <td>{{ $details['name'] }}</td>
                            <td>
                                <a href=#><button type="button" class="btn btn-dark btn-sm decrease mr-2" data-id="{{ $id }}" data-quantity="{{ $details['quantity'] }}">-</button></a>{{ $details['quantity']}}
                                <a href=#><button type="button" class="btn btn-dark btn-sm increase ml-2" data-id="{{ $id }}" data-quantity="{{ $details['quantity'] }}">+</button></a>
                            </td>
                            <td>{{ $details['price'] }}€</td>
                            <td>
                                <a href=#><button type="button" class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}">X</button></a>
                            </td>
                        </tr>
                    @endforeach
                    @endif
                    </tbody>
                    <tfoot>
                    <tr>
                        <td>
                            <b>Total amount</b>
                        </td>
                        <td></td>
                        <td>
                            <b>{{ $total }} €</b>
                        </td>
                        <td></td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div align="left" class="proceed-div">
                    <button type="button" class="btn btn-dark" onclick="location.href='{{ '/' }}'">Back to shopping</button>
                </div>
            </div>
            <div class="col-md-6">
                <div align="right" class="proceed-div">
                    <button type="button" class="btn btn-dark" onclick="location.href='{{ url('checkout') }}'">Proceed to checkout</button>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- <script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script> -->

<script type="text/javascript">


$(".increase").click(function (e) {
   e.preventDefault();

   var ele = $(this);

    $.ajax({
       url: '{{ url('update-cart') }}',
       method: "patch",
       data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.attr("data-quantity")-(-1)},
       success: function (response) {
           window.location.reload();
       }
    });
});

$(".decrease").click(function (e) {
   e.preventDefault();

   var ele = $(this);

    $.ajax({
       url: '{{ url('update-cart') }}',
       method: "patch",
       data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity:  ele.attr("data-quantity")-1},
       success: function (response) {
           window.location.reload();
       }
    });
});

$(".remove-from-cart").click(function (e) {
    e.preventDefault();

    var ele = $(this);
    console.log(ele.attr("data-id"));
    if(confirm("Are you sure")) {
        $.ajax({
            url: '{{ url('remove-from-cart') }}',
            method: "DELETE",
            data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
            success: function (response) {
                window.location.reload();
            }
        });
    }
});

</script>
@endsection
