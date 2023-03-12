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
    <x-logo />
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label htmlFor="email">Email</label>
        <input class="email" type="email" name="email" id="email" />
        <label htmlFor="password">Password</label>
        <input class="password" type="password" name="password" id="password" />
        <button class="login" type="submit">
            <b>Login</b>
        </button>
    </form>

</body>

</html>