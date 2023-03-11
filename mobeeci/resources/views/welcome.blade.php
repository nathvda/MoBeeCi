
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/scss/welcome.scss', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>
    <x-logo />
    <a href="/login">
        <button class="login-home">
            <b>Login</b>
        </button>
    </a>

    <a href="/register">
        <button class="register-home">
            <b>Register</b>
        </button>
    </a>
</body>

</html>