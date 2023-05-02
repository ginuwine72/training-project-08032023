
<div class="box">
<link rel="stylesheet" href="{{ asset('css/addproduct.css') }}">
<form method="post" action="" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter product name">
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" name="price" class="form-control" placeholder="Enter product price">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" class="form-control-file">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</button>
</form>
</div>

