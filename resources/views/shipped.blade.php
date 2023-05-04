
@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4>สถานะการจัดส่งสินค้า</h4>
        </div>
        <div class="card-body">
          <h5 class="card-title">รหัสการสั่งซื้อ: 123456</h5>
          <p class="card-text">สินค้าของคุณอยู่ระหว่างการจัดส่ง</p>
          <p class="card-text">สถานะ: <span class="badge badge-success">จัดส่งสินค้าแล้ว</span></p>
          <p class="card-text">วันที่จัดส่ง: 01/05/2023</p>
          <p class="card-text">เลขพัสดุ: JT123456789TH</p>
          <a href="#" class="btn btn-primary">ติดตามสถานะพัสดุ</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
