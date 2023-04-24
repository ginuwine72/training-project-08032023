@extends('auth.layouts')

@section('content')
<head>
    <style>
        /* .card{
            background-image: url("https://i.pinimg.com/originals/c2/5c/4c/c25c4c44c4336f9e2022f323bdcdb945.png");
            background-size: auto;
            background-repeat: no-repeat;
        
        } */
        .alert{
             position: relative;
             left: 200px;
        }
        .card-header{
           color: white;
        }
        .card-header{
             background: url("https://img.freepik.com/free-vector/vibrant-summer-ombre-background-vector_53876-105765.jpg?w=740&t=st=1682318242~exp=1682318842~hmac=3e110409dabf9e876720f1045d7042df6b1c22c832f8e63b8687d08a6cee223f");
             background-repeat: no-repeat;
             background-size: cover;
             opacity: 0.9;

        }
        .card-body{
            position: relative;
            right: 200px;
        }
        /* .card-body{
            background-image: url("https://img.freepik.com/free-vector/gradient-background-green-tones_23-2148388109.jpg?w=740&t=st=1682318631~exp=1682319231~hmac=89493a5038e0fb2d0b0f0ee44bc6a8dc8dbbf074f22a04bb8eec026b406254cc");
        } */
    </style>
</head>
<header class="alert">
<div class="r" id="login-success">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @else
                    <div class="alert alert-success">
                        You are logged in!
                    </div>       
                @endif                
            </div>
        </div>
    </div>    
</div>
</header>
<body>
    <div class="side-bar">
        
    </div>
</body>

@endsection
<script>
    // Wait for the page to finish loading
    document.addEventListener('DOMContentLoaded', function() {
        // Get the login success element
        var loginSuccess = document.getElementById('login-success');
        
        // Check if the element exists
        if (loginSuccess) {
            // Set the duration (in milliseconds) that the message will be displayed
            var duration = 3000; // 5 seconds
            
            // Set a timer to remove the element after the duration
            setTimeout(function() {
                loginSuccess.parentNode.removeChild(loginSuccess);
            }, duration);
        }
    });
</script>

