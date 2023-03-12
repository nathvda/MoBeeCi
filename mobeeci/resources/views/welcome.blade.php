
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/scss/welcome.scss', 'resources/js/app.js'])
    <title>MoBeeCi</title>
</head>

<body>
<dialog id="authorization" open style="width:80%">
Bonjour, notre application utilise des informations de géolocalisation. Nous avons besoin de votre accord afin d'y accéder.
<button onClick="document.getElementById('authorization').close()">Accepter</button><button onClick="document.getElementById('authorization').close()">Refuser</button>
</dialog>
    <img style="width:100%" src="/images/Logo_sans_fond.png">
    <a href="/login">
        <button class="login-home">
            <b>Me connecter</b>
        </button>
    </a>

    <a href="/register">
        <button class="register-home">
            <b>M'enregistrer</b>
        </button>
    </a>
</body>

</html>