    <link rel="stylesheet" href="{{asset('css/addproduct.css')}}">

<form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="name">ชื่อสินค้า:</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="price">ราคา:</label>
        <input type="number" name="price" id="price">
    </div>
    <div>
        <label for="description">คำอธิบาย:</label>
        <textarea name="description" id="description"></textarea>
    </div>
    <div>
        <label for="image">รูปภาพ:</label>
        <input type="file" name="image" id="image">
    </div>
    <button type="submit">บันทึกข้อมูล</button>
</form>