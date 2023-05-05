@extends('layouts')

@section('content')
<style>  .breadcrumb {
    margin-top: 1rem;
  }

  .checkout-progress {
    margin-bottom: 2rem;
  }

  .checkout-progress-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #f2f2f2;
    border-radius: 4px;
    height: 4px;
  }

  .step {
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
  }

  .step-number {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 24px;
    height: 24px;
    background-color: #fff;
    border: 2px solid #ccc;
    border-radius: 50%;
    font-size: 14px;
    font-weight: 700;
    color: #ccc;
    margin-bottom: 0.5rem;
    z-index: 1;
  }

  .step.active .step-number {
    border-color: #007bff;
    color: #007bff;
  }

  .step-title {
    font-size: 14px;
    font-weight: 700;
    color: #999;
    text-transform: uppercase;
    margin-top: 0.5rem;
    z-index: 1;
  }

  .step.active .step-title {
    color: #007bff;
  }

  .checkout-section {
    margin-bottom: 2rem;
  }

  .section-title {
    font-size: 20px;
    font-weight: 700;
    color: #333;
    margin-bottom: 1rem;
  }

  .form-group label {
    font-size: 14px;
    font-weight: 700;
    color: #333;
    text-transform: uppercase;
  }

  .checkout-buttons {
    margin-top: 2rem;
  }

  .checkout-summary {
    background-color: #f2f2f2;
    padding: 1rem;
    border-radius: 4px;
    margin-bottom: 2rem;
  }

  .checkout-summary .section-title {
    margin-bottom: 0.5rem;
  }

  .checkout-summary table {
    margin-bottom: 0;
  }

  .checkout-summary th,
  .checkout-summary td {
    font-size: 14px;
    font-weight: 700;
    color: #333;
    text-transform: uppercase;
  }

  .checkout-summary th {
    text-align: left;
  }

  .checkout-summary td {
    text-align: right;
  }

  .checkout-summary tfoot td {
    font-size: 18px;
    font-weight: 700;
    color: #333;
    text-transform: uppercase;
  }

  .checkout-summary tfoot td:first-child {
    text-align: left;
  }

  .checkout-summary tfoot td:last-child {
    text-align: right;
  }
  body {
	font-family: Arial, sans-serif;
	background-color: #F5F5F5;
	color: #333;
}

header {
	background-color: #333;
	color: #FFF;
	padding: 20px;
}

h1 {
	margin: 0;
}

main {
	padding: 20px;
}

footer {
	background-color: #EEE;
	padding: 20px;
	text-align: center;
}

  </style>
<div class="row">
  <div class="col-md-12">
    <ul class="breadcrumb">
      <li><a href="{{ url('/') }}">Home</a></li>
      <li>Checkout</li>
    </ul>
  </div>
</div>
<div class="row">
  <div class="col-md-8">
    <div class="checkout-progress">
      <div class="checkout-progress-bar">
        <div class="step active">
          <div class="step-number">1</div>
          <div class="step-title">Shipping</div>
        </div>
        <div class="step">
          <div class="step-number">2</div>
          <div class="step-title">Payment</div>
        </div>
        <div class="step">
          <div class="step-number">3</div>
          <div class="step-title">Review</div>
        </div>
      </div>
    </div>
    <div class="checkout-section">
      <div class="section-title">Shipping Information</div>
      <div class="section-content">
        <form action="{{route('checkout.store')}}" method="POST">
          @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="phone">phone</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
          </div>
          <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" required>
          </div>
          <div class="form-group">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city" name="city" required>
          </div>
          <div class="form-group">
            <label for="state">State</label>
            <input type="text" class="form-control" id="state" name="state" required>
          </div>
          <div class="form-group">
            <label for="zip">Zipcode</label>
            <input type="text" class="form-control" id="zip" name="zip" required>
          </div>
          <div class="checkout-buttons">
            <button type="submit" class="btn btn-primary">Continue to Payment</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="checkout-summary">
        <div class="section-title">Order Summary</div>
        <div class="section-content">
            @php
                $total = 0;
                foreach(session('cart') as $id => $products) {
                    $total += $products['price'] * $products['quantity'];
                }
            @endphp

            <ul class="list-group">
                @foreach(session('cart') as $id => $products)
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex">
                                <img src="{{ asset('product/'.$products['image']) }}" width="80" height="80" class="mr-3" alt="{{ $products['name'] }}">
                                <div>
                                    <h5 class="mb-0">{{ $products['name'] }}</h5>
                                    <span class="text-muted">{{ $products['quantity'] }} x ${{ $products['price'] }}</span>
                                </div>
                            </div>
                            <span class="text-primary">${{ $products['price'] * $products['quantity'] }}</span>
                        </div>
                    </li>
                @endforeach
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (USD)</span>
                    <strong>${{ $total }}</strong>
                </li>
            </ul>
        </div>
    </div>
</div>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<script>
  
</script>

@endsection

@section('dropdown')
    <!-- leave this section empty to hide the cart icon in the home page -->
@endsection

@section('styles')