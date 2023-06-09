<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><h1>Cart</h1></title>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
</head>
<body>
    @section('container')
        <div class = "cart">
            @if(count($cartProducts) > 0)
                <table>
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cartProducts)
                            <tr>
                                <td>{{ $cart -> product -> name }}</td>
                                <td>{{ $cart -> product -> price }}</td>
                                <td>{{ $cart -> product -> quantity }}</td>
                                <td>{{ ($cart -> product -> price) * ($cartProducts -> product -> quantity) }}</td>
                            </tr>
                        @endforeach

                        <div class="checkout-button">
                            <a href="{{ route('checkout') }}">Checkout</a>
                        </div>
                    </tbody>
                </table>
            @else
                <p>Oops, your cart is empty... go explore products you'd like to buy!</p>
                <div class="view-products-button">
                    <a href="{{ route('view-product') }}">Shop Now</a>
                </div>
            @endif
        </div>
    @endsection
</body>
</html>
