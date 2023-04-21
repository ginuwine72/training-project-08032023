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
    <h1>Checkout</h1>
    <form method="POST" action="{{ route('cart.processPayment') }}">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label for="address">Address</label>
            <input type="text" name="address" required>
        </div>
        <div>
            <label for="city">City</label>
            <input type="text" name="city" required>
        </div>
        <div>
            <label for="state">State</label>
            <input type="text" name="state" required>
        </div>
        <div>
            <label for="zip">Zip</label>
            <input type="text" name="zip" required>
        </div>
        <div>
            <label for="card_number">Card Number</label>
            <input type="text" name="card_number" required>
        </div>
        <div>
            <label for="expiration_date">Expiration Date</label>
            <input type="text" name="expiration_date" required>
        </div>
        <div>
            <label for="cvv">CVV</label>
            <input type="text" name="cvv" required>
        </div>
        <button type="submit">Submit Payment</button>
    </form>
    @endsection
</body>
</html>
    