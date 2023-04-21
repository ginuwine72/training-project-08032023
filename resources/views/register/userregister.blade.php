<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>

.register-container {
display: flex;
justify-content: center;
align-items: center;
height: 100vh;
}

.register-box {
width: 450px;
background-color: #fff;
padding: 40px;
border-radius: 10px;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
opacity: 0.6;
}
.register-box:hover{
  opacity: 0.8;
}

.register-header {
text-align: center;
margin-bottom: 30px;
}

.register-header h2 {
margin: 0;
font-size: 28px;
font-weight: 500;
color: #333;
}

.register-header p {
margin: 10px 0 0;
font-size: 14px;
color: #999;
}

.register-header a {
color: #fa4a0c;
}

.form-group {
position: relative;
margin-bottom: 25px;
}

.form-group input {
width: 100%;
height: 45px;
border: none;
border-bottom: 2px solid #ddd;
font-size: 16px;
color: #333;
padding: 0 5px;
background-color: transparent;
transition: border-bottom-color 0.3s;
}

.form-group input:focus {
outline: none;
border-bottom-color: #fa4a0c;
}

.form-group input:focus ~ label,
.form-group input:not(:placeholder-shown) ~ label {
top: -18px;
left: 0;
font-size: 12px;
color: #fa4a0c;
font-weight: 500;
}

.form-group label {
position: absolute;
top: 10px;
left: 5px;
font-size: 16px;
color: #999;
transition: all 0.3s;
pointer-events: none;
}


button[type="submit"] {
width: 100%;
height: 45px;
background-color: #fa4a0c;
color: #fff;
font-size: 16px;
font-weight: 500;
border: none;
border-radius: 5px;
cursor: pointer;
transition: background-color 0.3s;
}

button[type="submit"]:hover {
background-color: #f63700;
}
body{
    background-image: url('https://www.pixel4k.com/wp-content/uploads/2021/04/mountains-birds-tree-minimal-4k_1618131711-1536x960.jpg.webp');
    background-size: cover;
    
    
}
    </style>
</head>
<body >
<div class="custom-shape">
<div class="register-container">
  <div class="register-box">
    <div class="register-header">
      <h2>Create an account</h2>
      <p>Already have an account? <a href="#">Sign in</a></p>
    </div>
    <form method="post" action="{{ route('store.userregister') }}" >

    @csrf
      <div class="form-group">
        <input type="text" id="fullname" name="fullname" placeholder="    " required>
        <label for="fullname">Full Name</label>
      </div>
      <div class="form-group">
        <input type="email" id="email" name="email" placeholder=" " required>
        <label for="email">Email</label>
      </div>
      <div class="form-group">
        <input type="tel" id="phone" name="phone" placeholder="  " required>
        <label for="phone">Phone</label>
      </div>
      <div class="form-group">
        <input type="password" id="password" name="password" placeholder="  " required>
        <label for="password">Password</label>
      </div>
      <div class="form-group">
        <input type="password" id="confirm_password" name="confirm_password" placeholder="   " required>
        <label for="confirm_password">Confirm Password</label>
      </div>
      <button type="submit">Sign Up</button>
    </form>
  </div>
</div>
<script src="{{ asset('js/register.js') }}"></script>
</body>
</html> -->

@extends('layouts.app')

@section('content')
    <div class="custom-shape">
        <div class="register-container">
            <div class="register-box">
                <div class="register-header">
                    <h2>Login</h2>
                    <p>Don't you have an account ?<a href="#"> Register now !</a></p>
                </div>
                <form method="post" action="{{ route('processuserlogin') }}" >
                    @csrf
                    <div class="form-group">
                        <input type="text" id="E-mail" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="E-mail" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-transparent px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">E-mail</label>
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="password" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-transparent px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Password</label>
                    </div>
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
        <script src="{{ asset('js/register.js') }}"></script>
    </div>
@endsection
