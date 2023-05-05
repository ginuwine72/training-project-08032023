<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

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
    <form class="form-inline my-2 my-lg-0" type="get" action="{{url('/searchAdmin')}}">
  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>

  </div>
</nav>
@extends('layout2')
@section('content')

<div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Admin Product</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/addproduct') }}" class="btn btn-success btn-sm" title="Add New Student">
                            Add New
                        </a>
                        <a href="/computer?" class="btn btn-success btn-sm" title="Add New Student">
                            show product
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Iamge</th>
                                        <th>Name_Product</th>
                                        <th>Price_Product</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($product as $product)
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td><img src="{{ asset('product/'.$product['image']) }}" style="width:70px; height:70px"></td>
</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->description}}</td>
  
                                        <td>
                                            <a href="{{ url('/product/' . $product->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{"Edit/" .$product['id']}}" title="Edit"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
  
                                      <a href="{{"Delete/" .$product['id']}}">
                                          
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection