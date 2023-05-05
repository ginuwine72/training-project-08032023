@extends('layout2')
@section('content')

<div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Product</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/adminproduct') }}" class="btn btn-success btn-sm" title="Add New Student">
                            Admin Product
                        </a>
                        <a href="/computer" class="btn btn-success btn-sm" title="Add New Student">
                            show product
                        </a>
                        <br/>
                        <br/>
<div class="box">
<form method="post" action="/edit" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" id="id" value="{{$product->id}}" id="id" />
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" value="{{$product->name}}" class="form-control" placeholder="Enter product name">
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" name="price" value="{{$product->price}}" class="form-control" placeholder="Enter product price">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" value="{{$product->description}}" class="form-control" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" value="{{$product->image}}"class="form-control-file">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</button>
</form>
</div>
@endsection