<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/scss/preferences.scss', 'resources/js/app.js'])
    <title>MoBeeCi - Préférences</title>
</head>

<body>
    <section>
        <h1>Vos préférences:</h1>
        <p class="about">Ici, vous pouvez activer ou désactiver vos préférences</p>
        <div class="top-preference">
            <p class="preference">PMR:</p>
            <label class="switch">
                <input type="checkbox">
                <span class="slider"></span>
            </label>
        </div>

        <div class="top-preference">
            <p class="preference">Anxieté:</p>
            <label class="switch">
                <input type="checkbox">
                <span class="slider"></span>
            </label>
        </div>

        <div class="top-preference">
            <p class="preference">Mysophonie:</p>
            <label class="switch">
                <input type="checkbox">
                <span class="slider"></span>
            </label>
        </div>

        <div class="top-preference">
            <p class="preference">Photophobie:</p>
            <label class="switch">
                <input type="checkbox">
                <span class="slider"></span>
            </label>
        </div>
    </section>

</body>

</html>