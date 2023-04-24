@extends('auth.layouts')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-8">
    <div class="card">
        <div class="card-header bg-primary text-white">Register Now</div>
        <div class="card-body">
            <form action="{{ route('store') }}" method="post">
                @csrf
                <div class="mb-3 row">
                    <label for="name" class="col-md-4 col-form-label text-md-end text-start fw-bold">Full Name</label>
                    <div class="col-md-6">
                      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="full name">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-md-4 col-form-label text-md-end text-start fw-bold">Email Address</label>
                    <div class="col-md-6">
                      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="in put your email">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="password" class="col-md-4 col-form-label text-md-end text-start fw-bold">Password</label>
                    <div class="col-md-6">
                      <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter a password">
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="password_confirmation" class="col-md-4 col-form-label text-md-end text-start fw-bold">Confirm Password</label>
                    <div class="col-md-6">
                      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password">
                    </div>
                </div>
                <div class="mb-3 row justify-content-center">
                    <input type="submit" class="col-md-4 btn btn-primary" value="Create Account">
                </div>
                <div class="mb-3 row justify-content-center">
                    <p class="text-muted">Already have an account? <a href="{{ route('login') }}">Login here</a></p>
                </div>
            </form>
        </div>
    </div>
</div>    
</div>

@endsection