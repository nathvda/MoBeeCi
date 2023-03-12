<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/scss/profile.scss', 'resources/js/app.js'])
    <title>MoBeeCi - Profile</title>
</head>
<body>
    <section class="top-profil">
        <h1 class="profil">Mon profil</h1>
        <p class="about-profil">Bienvenue sur votre profil</p>
    </section>

    <section class="top-information">
        <h2>Informations</h2>
        <hr>
        <form action= "#" method="POST">
            <div class="main-information">
                <label for="email">Adresse email:</label>
                <input type="email" name="email" id="email" value="Admin@mail.be">
                
                <label for="password">Changement mot de passe:</label>
                <input type="password" name="password" id="password">
                <input type="password" name="password" id="password">

                <button>Mettre à jour</button>
            </div>
        </form>
    </section>

    <section>
        <h2>Besoin ?</h2>
        <hr>
        <div class="main-help">
            <div class="criteria">
                <p class="prm">PMR</p>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
            </div>

            <div class="criteria">
                <p class="prm">Anxieté</p>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
            </div>

            <div class="criteria">
                <p class="prm">Mysophonie</p>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
            </div>

            <div class="criteria">
                <p class="prm">Photophobie</p>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
            </div>
        </div>
    </section>
    <x-nav />
</body>
</html>