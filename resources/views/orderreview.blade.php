<!-- resources/views/orders/paid.blade.php -->

@extends('layouts')

@section('content')
<style>
    .card {
    margin-top: 50px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}
 .card{
    position: absolute;
   left: -40px;
    width: 700px;
 }
.card-header h4 {
    margin-bottom: 0;
}

.card-body p {
    font-size: 18px;
    margin-bottom: 15px;
}

.card-body p:last-child {
    margin-bottom: 0;
}

a {
    color: #007bff;
    text-decoration: none;
}

a:hover {
    color: #0056b3;
    text-decoration: underline;
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
    right: 350px;
    top: 410px;
}
.breadcrumb {
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
  .wrap-progressbar{
    margin-left: 250px;
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
<div class="wrap-progressbar">
<div class="row">
  <div class="col-md-8">
    <div class="checkout-progress">
      <div class="checkout-progress-bar">
        <div class="step ">
          <div class="step-number">1</div>
          <div class="step-title">Shipping</div>
        </div>
        <div class="step ">
          <div class="step-number">2</div>
          <div class="step-title">Payment</div>
        </div>
        <div class="step active">
          <div class="step-number">3</div>
          <div class="step-title">Review</div>
        </div>
      </div>
    </div>
  </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>ชำระเงินเสร็จสิ้น</h4>
                    </div>
                    <div class="card-body">
                        <p>ขอบคุณสำหรับการชำระเงิน ขณะนี้ระบบได้รับการยืนยันการชำระเงินของท่านแล้ว</p>
                        <p>ทางร้านจะทำการจัดส่งสินค้าภายใน 1-3 วันทำการ</p>
                        <p>หากมีข้อสงสัยหรือคำถามเพิ่มเติม กรุณาติดต่อเราทางอีเมล <a href="intern7895@gmail.com">intern7895@gmail.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="button-group">
    <a href="/shipped" style="text-decoration:none;">
    <button >
    <span>เช็คสถานะ</span>
    <svg width="34" height="34" viewBox="0 0 74 74" fill="none"  xmlns="http://www.w3.org/2000/svg">
        <circle cx="37" cy="37" r="35.5" stroke="black" stroke-width="3"></circle>
        <path d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z" fill="black"></path>
    </svg>
</button>
    </a>
    </div>
    <script>
        
    </script>
@endsection
