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

  /* .checkout-section {
    margin-bottom: 2rem;
  }

  .section-title {
    font-size: 20px;
    font-weight: 700;
    color: #333;
    margin-bottom: 1rem;
  } */

  .form-group label {
    font-size: 14px;
    font-weight: 700;
    color: #333;
    text-transform: uppercase;
  }

  .checkout-buttons {
    margin-top: 2rem;
  }

  /* .checkout-summary {
    background-color: #f2f2f2;
    padding: 1rem;
    border-radius: 4px;
    margin-bottom: 2rem;
  } */
  .section-content{
    width: 500px;
  }
  .section-title{
    font-weight: bolder;
    font-size: large;
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
.hide-cart .fa-shopping-cart {
    display: none;
}
.checkout-summary{
  position: relative;
  left: 550px;
  top: 50px;
}
.QR{
 position: absolute;
 top: 150px;
  left: 100px;
  width: 300px;
}
button {
  cursor: pointer;
  font-weight: 700;
  font-family: Helvetica,"sans-serif";
  transition: all .2s;
  padding: 10px 20px;
  border-radius: 100px;
  background: #cfef00;
  border: 1px solid transparent;
  display: flex;
  align-items: center;
  font-size: 15px;
}

button:hover {
  background: #c4e201;
}

button > svg {
  width: 34px;
  margin-left: 10px;
  transition: transform .3s ease-in-out;
}

button:hover svg {
  transform: translateX(5px);
}

button:active {
  transform: scale(0.95);
}
.button-group{
  position: absolute;
  top: 580px;
  left: 245px;
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
        <div class="step ">
          <div class="step-number">1</div>
          <div class="step-title">Shipping</div>
        </div>
        <div class="step active">
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
      <div class="section-title">Payment</div>
      <div class="section-content">
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

      </div>
      <div>
        <img class="QR" src="https://promptpay.io/0956417023.png">
      </div>
    </div>
  </div>

  
  <div class="button-group">
    <a href="/review" style="text-decoration:none;">
    <button >
    <span>Confirm Payment</span>
    <svg width="34" height="34" viewBox="0 0 74 74" fill="none"  xmlns="http://www.w3.org/2000/svg">
        <circle cx="37" cy="37" r="35.5" stroke="black" stroke-width="3"></circle>
        <path d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z" fill="black"></path>
    </svg>
</button>
    </a>
    </div>


    

@endsection


@section('styles')