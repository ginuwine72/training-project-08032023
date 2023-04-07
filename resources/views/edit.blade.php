


@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-50">
            <div class="card">
            

            <div class="card-header">edit username  {{ $datauser->name }}</div>
               
               
               <div class="card-body">
                    @if (session('status')) 
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <link rel="stylesheet" href="{{asset('css/adddatafrom.css')}}">
<form action="/edit" method="POST">
    @csrf
    <div class="container"> 
        <label for="name"><b>ID</b></label>
        <input type="text" placeholder="Enter Username" name="id" value="{{ $datauser->id }}" required>
        <label for="name"><b>NAME</b></label>
        <input type="text" placeholder="Enter Username" name="name" value="{{ $datauser->name }}" required>
        <label for="email"><b>EMAIL</b></label>
        <input type="text" placeholder="Enter Email" name="email" value="{{ $datauser->email }}" required>
        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" value="{{ $datauser->password}}" required>
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