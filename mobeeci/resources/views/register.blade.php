<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/scss/register.scss', 'resources/js/app.js'])
    <title>MoBeeCi</title>
</head>

<body>
<div class="previous"><a href="{{ url()->previous() }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
</svg></a></div>
<section class="login_wrapper">
    <div class="logo_wrapper">

        <x-logo/>
    </div>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <label for="email">Email</label>
        <input type="email" id="email" name="email" />
        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password" />
        <label for="password_confirmation">Confirmer le mot de passe</label>
        <input type="password" id="password_confirmation" name="password_confirmation" />
        <span>Après votre inscription, vous recevrez un email de confirmation afin de valider votre inscription.</span>
        
        <button class="register" type="submit">
            Confirmer
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
