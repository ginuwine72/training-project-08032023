<title>adddata</title>
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-50">
            <div class="card">
            

            <div class="card-header">welcome you </div>
               
               
               <div class="card-body">
                    @if (session('status')) 
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <link rel="stylesheet" href="{{asset('css/adddatafrom.css')}}">
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                    
<h2>addproduct</h2>


<form action="" method="POST" id="myForm">
    @csrf

       <div class="dev">
        <input type="file" id="image-upload" name="image">
        </div>
        <label for="name"><br>Prodduct</label>
        <input type="text" placeholder="Enter name" name="name" required>
   
        <label for="email">Product Price</label>
        <input type="text" placeholder="Enter Email" name="Price" required>

        <label for="password">description</label>
        <input type="text" placeholder="Enter description" name="description" required>
        <button type="submit" onclick="showSuccess(event)">Register</button>
 
</form>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    // Add an event listener to the form element
    document.getElementById("myForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent the form from submitting normally

        // Show a success message using SweetAlert
        Swal.fire({
            title: "ระบบเพิ่มข้อมูล",
            text: "เพิ่มข้อมูลสำเร็จแล้ว กรุณากด OK",
            icon: "success",
            confirmButtonText: "OK"
        }).then(function() {
            // Submit the form once the user clicks "OK" on the success message
            document.getElementById("myForm").submit();
        });
    });
</script>
                  
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
