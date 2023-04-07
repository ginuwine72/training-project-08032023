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
<h2>add data from</h2>


 
<form action="" method="POST">
    @csrf
    <div class="container"> 
        <label for="uname"><b>NAME</b></label>
        <input type="text" placeholder="Enter Username" name="name" required>
        <label for="uname"><b>EMAIL</b></label>
        <input type="text" placeholder="Enter Username" name="mail" required>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pass" required>
        <button type="submit">SUBMIT</button>

    </div>
</form>
                  
                </div>
            </div>
        </div>
    </div>
</div>
</div>




@endsection
