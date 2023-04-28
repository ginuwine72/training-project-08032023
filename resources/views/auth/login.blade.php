
    
<style>
    .register-container {
display: flex;
justify-content: center;
align-items: center;
height: 100vh;
}

.register-box {
width: 450px;
margin-top: -120px;
background-color: #fff;
padding: 40px;
border-radius: 10px;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
opacity: 0.8;
}
.register-box:hover{
  opacity: 1.0;
}

.register-header {
text-align: center;
margin-bottom: 30px;
}

.register-header h2 {
margin: 0;
font-size: 28px;
font-weight: 500;
font-family: 'Times New Roman', Times, serif;
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
    background-image: url('https://i.redd.it/nlnq3apevxd41.png');
    background-size: cover;
    
    
}
</style>
@extends('auth.layouts')

@section('content')


<body>
<div class="custom-shape">
    <div class="register-container">
        <div class="register-box">
            <div class="register-header">
                <h2>Login</h2>
                <p>Don't you have an account ?<a href="#"> Register now !</a></p>
            </div>
            <form action="{{ route('authenticate') }}" method="post">
        @csrf
            <div class="form-group">
                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Address" required autocomplete="email" autofocus />
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-group">
                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password" />
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>
</div>
</body>
@endsection