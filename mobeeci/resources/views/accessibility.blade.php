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
<div class="previous"><a href="{{ url()->previous() }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
</svg></a></div>
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

        <button type="submit">Confirm</button>
    </section>

</body>

</html>