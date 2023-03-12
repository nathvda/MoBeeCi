<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/scss/register.scss', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>

<section class="login_wrapper">
    <div class="logo_wrapper">

        <x-logo/>
    </div>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <label for="email">Email</label>
        <input type="email" id="email" name="email" />
        <label for="password">Password</label>
        <input type="password" id="password" name="password" />
        <label for="password_confirmation">Confirm password</label>
        <input type="password" id="password_confirmation" name="password_confirmation" />
        <button class="register" type="submit">
            Confirm
        </button>

        @if ($errors->has('email'))
            <div>
                {{ $errors->first('email') }}
            </div>
        @endif

        @if ($errors->has('password'))
            <div>
                {{ $errors->first('password') }}
            </div>
        @endif
    </form>
</section>


</body>

</html>
