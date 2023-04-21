@extends('layout')

@section('content')


  {{$product->links('')}}
  <div class="new"><h1 class="m-0" style="font-size: 30px ;font-weight: bold;"><span style="color:#d4001a">New</span> Products</h1>
  <span style="color:#d4001a"></h1></div>
  <div class="bg-white">
  
      <nav aria-label="Breadcrumb">
        <ol role="list" class="mx-auto flex max-w-2xl items-c enter space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-6 gap-5">
@foreach($product as $pd)
<div class="frame" style="display: inline-block;" onmouseover="document.getElementById('greeting').style.display = 'block';" onmouseout="document.getElementById('greeting').style.display = 'none';">
    <div style="text-align: left;">
        <img src="{{ asset('product/'.$pd['image']) }}" style="width: 188px; height: 188px;" alt="">
        <h1 style="font-weight: bold; font-size: 15px;">{{$pd['name']}}</h1>
        <div class="description" style="width: 188px;">{{$pd['description']}}<br></div>
        <h1 style="color: grey; font-weight: bold; font-size: 10px; text-decoration: line-through; margin-right: 10px;">
            ฿{{ number_format($pd['price'] + ($pd['price'] * 0.25), 2) }}
        </h1>
        <h1 style="color: red; font-weight: bold; font-size: 18px; display: flex; align-items: center;">
            ฿{{$pd['price']}}<span style="font-size: 12px; margin-left: 5px; color: green;">ส่วนลด 25%</span>
        </h1>
        
    </div>
</div>

@endforeach

@endsection