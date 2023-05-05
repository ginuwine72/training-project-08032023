<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">White Store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/computer">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" href="#">Link</a> -->
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        more
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/cart">Your Cart</a>
          <a class="dropdown-item" href="/about">About Me</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/contract">Contract</a>
        </div>
      </li>
  
    </ul>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


    <form class="form-inline my-2 my-lg-0" type="get" action="{{url('/search')}}">
  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>

  </div>
</nav>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('css/showproduct.css')}}">
</head>


<body>
	<div class="fronco">
		<h1><span>OUR PRODUCTS</span></h1> 
	</div>
	<div class="kok">
	@foreach($product as $pd)
	<a href="{{url('product/'.$pd->id)}}" class="">
		<div class="frame" style="display: inline-block; margin-right: 35px;" onmouseover="document.getElementById('greeting').style.display = 'block';" onmouseout="document.getElementById('greeting').style.display = 'none';">
			<img src="{{ asset('product/'.$pd['image']) }}" style="width: 240px; height: 240px;" alt="">
			<div class="nameproduct">{{$pd['name']}}</div>
			<div class="description">{{$pd['description']}}</div>
		
			<div class="price">	  <div class="priceup"> ฿ {{$pd['price']*3}} </div>  ฿ {{$pd['price']}}</div>
		</div>
    
	</a> 
  
	@endforeach
</body>
</html>

