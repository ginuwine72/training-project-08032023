@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Billing Details</h2>
                <form action="{{ route('checkout.process') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="city">City:</label>
                        <input type="text" name="city" id="city" class="form-control" value="{{ old('city') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="state">State:</label>
                        <input type="text" name="state" id="state" class="form-control" value="{{ old('state') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="zip">Zip:</label>
                        <input type="text" name="zip" id="zip" class="form-control" value="{{ old('zip') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="country">Country:</label>
                        <input type="text" name="country" id="country" class="form-control" value="{{ old('country') }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Continue to Payment</button>
                </form>
            </div>
        </div>
    </div>
@endsection
