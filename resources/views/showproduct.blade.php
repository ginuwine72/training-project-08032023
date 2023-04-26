<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{asset('css/showproduct.css')}}">
	<title>product</title>
	
</head>
<body>
  <div class="fronco">
      <h1><span>OUR PRODUCTS</span></h1> 
  </div>
  <div class="kok"></div>
  @foreach($product as $pd)
  <a href="{{url('product/'.$pd->id)}}"class="">
 <div class="frame" style="display: inline-block; margin-right: 35px;" onmouseover="document.getElementById('greeting').style.display = 'block';" onmouseout="document.getElementById('greeting').style.display = 'none';">
  <img src="{{ asset('product/'.$pd['image']) }}" style="width: 240px; height: 240px;" alt="">
  <div class="nameproduct">{{$pd['name']}}</div>
  <div class="price">{{$pd['price']}} ฿</div>
</div>
</a> 
@endforeach
</body>
</html>
