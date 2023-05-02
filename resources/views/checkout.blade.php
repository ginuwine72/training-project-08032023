@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="progress mb-5">
          <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Cart</div>
          <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Shipping</div>
          <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Payment</div>
          <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Confirmation</div>
        </div>
        <form action="{{ route('checkout.process') }}" method="POST">
          @csrf
          <div class="tab-content">
            <div class="tab-pane fade show active" id="cart" role="tabpanel" aria-labelledby="cart-tab">
              <!-- Cart information form fields go here -->
              <div class="form-group">
                <label for="cart-items">Cart Items:</label>
                <input type="text" class="form-control" id="cart-items" name="cart_items" value="{{ old('cart_items') }}">
              </div>
              <button type="button" class="btn btn-secondary" data-dismiss="tab">Back</button>
              </div>
            <div class="tab-pane fade" id="shipping" role="tabpanel" aria-labelledby="shipping-tab">
              <!-- Shipping information form fields go here -->
              <div class="form-group">
                <label for="shipping-address">Shipping Address:</label>
                <input type="text" class="form-control" id="shipping-address" name="shipping_address" value="{{ old('shipping_address') }}">
              </div>
              <button type="button" class="btn btn-secondary" data-dismiss="tab">Back</button>
              <button type="button" class="btn btn-success" data-toggle="tab" data-target="#payment">Next</button>
            </div>
            <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="payment-tab">
              <!-- Payment information form fields go here -->
              <div class="form-group">
                <label for="payment-method">Payment Method:</label>
                <select class="form-control" id="payment-method" name="payment_method">
                  <option value="credit_card">Credit Card</option>
                  <option value="paypal">PayPal</option>
                </select>
              </div>
              <button type="button" class="btn btn-secondary" data-dismiss="tab">Back</button>
              <button type="button" class="btn btn-success" data-toggle="tab" data-target="#confirmation">Next</button>
            </div>
            <div class="tab-pane fade" id="confirmation" role="tabpanel" aria-labelledby="confirmation-tab">
              <!-- Confirmation information form fields go here -->
              <h3>Confirm Order</h3>
              <p>Cart Items: {{ old('cart_items') }}</p>
              <p>Shipping Address: {{ old('shipping_address') }}</p>
              <p>Payment Method: {{ old('payment_method') }}</p>
              <button type="button" class="btn btn-secondary" data-toggle="tab" data-target="#payment">Back</button>
              <button type="submit" class="btn btn-success">Place Order</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
         
<div class="checkout-progress">
    <div class="progress-step active">1. Shipping</div>
    <div class="progress-step">2. Payment</div>
    <div class="progress-step">3. Confirmation</div>
</div>

<form action="{{ route('checkout.process') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
    </div>

    <!-- more form elements for shipping address, payment info, etc. -->

    <button type="submit">Place Order</button>
</form>
