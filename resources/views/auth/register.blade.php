@extends('auth.layouts')

@section('content')
<style>
    /*body */
    /* .body{
        background-image: url("https://i.redd.it/ylqeu0859hqa1.png");
    } */
    /* Card Style*/
    .card {
        position: relative;
        border: none;
        background: white;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease-in-out;
    }

    .card:hover {
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .card-header {
        background-color: #F5F5F5;
        padding: 1rem;
        border-radius: 0.25rem;
        text-shadow: 1px 1px 0 #444;
        text-align: center;
        margin-bottom: 1rem;
        opacity: 0;
        animation: fadeIn 0.5s forwards;
    }

    .card-body {
        padding: 2rem;
    }

    /* Password strength meter styles */
    .password-meter {
        height: 5px;
        margin-top: 5px;
        background-color: #eee;
        border-radius: 10px;
        top: 5px;
        transition: width 0.3s ease-in-out;
    }

    .password-meter.weak {
        background-color: #ff5c5c;
    }

    .password-meter.medium {
        background-color: #f0ad4e;
    }

    .password-meter.strong {
        background-color: #13931d;
    }

    .text-muted {
        position: relative;
        left: 70px;
    }

    /* Submit button style */
    input[type="submit"] {
        background-color: #3498db;
        border: none;
        color: white;
        padding: 0.75rem 1.5rem;
        font-size: 1rem;
        border-radius: 0.25rem;
        margin-top: 1rem;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
        position: relative;
        left: 250px;
    }

    input[type="submit"]:hover {
        background-color: #2980b9;
    }

    /* Animations */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-1rem);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
<body>
<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-white text-black " style=" text-shadow:1px 1px 0 #444" ><h1><b>Register Now</b></h1></div>
            <div class="card-body">
                <form action="{{ route('store') }}" method="post">
                    @csrf
 <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><i class="bi bi-person"></i> Full Name</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Full Name">
                            @if ($errors->has('name'))


                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email Address</label>
                        <div class="col-md-6">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="in put your email">
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-md-4 col-form-label text-md-end text-start">Password</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control password-strength @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter a password">
                            <div class="password-meter"></div>
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="password_confirmation" class="col-md-4 col-form-label text-md-end text-start">Confirm Password</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="agree" name="agree" {{ old('agree') ? 'checked' : '' }}>
                                <label class="form-check-label" for="agree">
                                    I agree to the <a href="#">terms and conditions</a>
                                </label>
                                @error('agree')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Register Now">
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</body>
<script>
    // Password strength meter
    const passwordInput = document.querySelector('.password-strength');
    const passwordMeter = document.querySelector('.password-meter');

    passwordInput.addEventListener('input', function() {
        const strength = calculatePasswordStrength(this.value);
        passwordMeter.style.width = `${strength * 20}%`;
        passwordMeter.className = `password-meter ${getPasswordStrengthClass(strength)}`;
    });

    function calculatePasswordStrength(password) {
        let strength = 0;
        if (password.length >= 8) strength++;
        if (/[A-Z]/.test(password)) strength++;
        if (/[0-9]/.test(password)) strength++;
        if (/[^A-Za-z0-9]/.test(password)) strength++;
        return strength;
    }

    function getPasswordStrengthClass(strength) {
        if (strength < 2) {
            return 'weak';
        } else if (strength < 4) {
            return 'medium';
        } else {
            return 'strong';
        }
    }
    // Form validation
    const form = document.querySelector('form');

    form.addEventListener('submit', function(event) {
        const nameInput = document.querySelector('#name');
        const emailInput = document.querySelector('#email');
        const passwordInput = document.querySelector('#password');
        const passwordConfirmationInput = document.querySelector('#password_confirmation');

        if (!nameInput.value || !emailInput.value || !passwordInput.value || !passwordConfirmationInput.value) {
            event.preventDefault();
            alert('Please fill in all fields.');
        } else if (passwordInput.value !== passwordConfirmationInput.value) {
            event.preventDefault();
            alert('Passwords do not match.');
        }
    });
</script>
@endsection