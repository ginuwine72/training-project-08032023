<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        .form1 {
            margin: auto;
            width: 20%;
            border: 3px solid green;
            padding: 50px;
            text-align: center;
        }
        body{
            width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(https://www.pixel4k.com/wp-content/uploads/2021/04/mountains-birds-tree-minimal-4k_1618131711-1536x960.jpg.webp);
    background-size: cover;
    background-position: center ;
        }
    </style>
</head>

<body>
<div class="bg">
    <form method="POST" action="{{ route('userregister') }}">
        @csrf
        <section class="form1">

            <div>
                <label for="ID">{{ __('ID') }}</label>

                <div>
                    <input id="ID" type="ID" name="ID" required>
                </div>
            </div>
            <div>
                <label for="password">{{ __('Password') }}</label>

                <div>
                    <input id="password" type="password" name="password" required>
                </div>
            </div>

            <div>
                <label for="password-confirm">{{ __('Confirm Password') }}</label>

                <div>
                    <input id="password-confirm" type="password" name="password_confirmation" required>
                </div>
            </div>
            <div>
                <label for="name">{{__('Name') }}</label>

                <div>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
                </div>
            </div>

            <div>
                <label for="email">{{ __('Email Address') }}</label>

                <div>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required>
                </div>
            </div>

            <div>
                <label for="phone">{{ __('Phone Number') }}</label>

                <div>
                    <input id="phone" type="phone" name="phone" required>
                </div>
            </div>
            <div>
                <div>
                    <button type="submit">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </section>
    </form>
</div>
</body>

</html>