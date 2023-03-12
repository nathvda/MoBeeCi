<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/scss/login.scss', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>
<section class="login_wrapper">
    <div class="logo_wrapper">

        <x-logo/>
    </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label for="email">Email</label>
        <input class="email" type="email" name="email" id="email"/>
        <label for="password">Mot de passe</label>
        <input class="password" type="password" name="password" id="password"/>
        <button class="login" type="submit">
            <b>Connexion</b>
        </button>
    </form>
</section>
</body>

</html>
