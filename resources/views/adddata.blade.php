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
                    
<h2>add data from</h2>


<form action="/adddata" method="POST" id="myForm">
    @csrf

        <label for="name">Name</label>
        <input type="text" placeholder="Enter name" name="name" required>
   
        <label for="email">Email</label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="password">Password</label>
        <input type="password" placeholder="Enter Password" name="password" required>
        <button type="submit" onclick="showSuccess(event)">Register</button>
 
</form>

<script>
      function showSuccess(event) {
        event.preventDefault(); // Prevent the form from submitting

        // Check if all required fields are filled in
        if (document.getElementById("myForm").checkValidity()) {
          Swal.fire(
            'Good job!',
            'You clicked the button!',
            'success'
          )
        } else {
          Swal.fire(
            'Error',
            'Please fill in all required fields',
            'error'
          )
        }
      }
</script>
                  
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
