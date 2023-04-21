<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
    @extends('layouts.app')
    
    @section('content')
    <h1>Your Cart</h1>
    <form action="{{ URL::route('cart.empty') }}" method="post">
        @csrf
        <table>
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                <th>Price</th>
                <th>Remove</th>
                <th>Update Quantity</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cartItems as $item)
            <tr>
                <td>{{ $item['name'] }}</td>
                <td>{{ $item['quantity'] }}</td>
                <td>${{ $item['price'] }}</td>
                <td>
                    <form method="POST" action="{{ route('cart.removeItem') }}">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $item['id'] }}">
                        <button type="submit">Remove</button>
                    </form>
                </td>
                <td>
                    <form method="POST" action="{{ route('cart.updateQuantity') }}">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $item['id'] }}">
                        <input type="number" name="quantity" value="{{ $item['quantity'] }}">
                        <button type="submit">Update</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <a href="{{ route('cart.checkout') }}">Proceed to Checkout</a>
    <button type="submit">Empty cart</button>
    <a href="{{ URL::route('checkout.show') }}">Checkout</a>
</form>
@endsection
</body>
</html>