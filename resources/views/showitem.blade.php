
@extends('layout')
@section('content')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Courier+Prime&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sorts+Mill+Goudy&display=swap" rel="stylesheet">


<style>
    body{
        background-color: #EEEEEE;
    }
    .img{
        float: left;
        margin-right: 100px;
    }
    .name{
        font-size: 25px;
        margin-bottom: 25px;
        font-family: 'Sorts Mill Goudy', serif;
    }
    .black{
        background-color: #FFFFFF;
        padding: 30px;
        margin-left: 50px;
        margin-right: 50px;
        overflow: hidden;
    }
    .com{
        font-size:15px;
        font-family: 'Courier Prime', monospace;
    }
    .price{
        font-size: 25px;
        font-family: 'Courier Prime', monospace;
    }

    


</style>

<div class="black">
  <div class="img"><img src="{{ asset('product/'.$products['image']) }}" style="width: 300px; height: 300px;" alt=""></div>
  <div class="details">
    <div class="name">{{$products->name}}</div>
    <div class="com"><br>{{$products->description}}</div>
    <div class="price">฿{{$products->price}}</div>
    <div class="buttons">
     <a href="{{route('add_to_cart',$products->id)}}"><button class="addtocart"><span>add to cart</span></button></a> 
      <button class="buybutton"><span>Buy Now</span></button>
    </div>
  </div>
</div>



@endsection