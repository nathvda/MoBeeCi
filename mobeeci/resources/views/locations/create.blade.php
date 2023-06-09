<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/scss/locations.scss', 'resources/js/app.js'])
    <title>MoBeeCi - Ajouts d'un lieu</title>
</head>

<body>
<div class="previous"><a href="{{ url()->previous() }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
</svg></a></div>
    <section>
        <h2>Ajout d'un lieu</h2>
        <form method="post" action="/locations/">
            @csrf
        <p class="main-title"><b>Nom de l'établissement</b></p>
        <input type="text">
        <div class="star">
            <svg width="50" height="50" viewBox="0 0 53 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M26.5 0L32.6741 19.002H52.6541L36.49 30.7459L42.6641 49.748L26.5 38.0041L10.3359 49.748L16.51 30.7459L0.345945 19.002H20.3259L26.5 0Z" fill="#FF942F" />
            </svg>
            <svg width="50" height="50" viewBox="0 0 53 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M26.5 0L32.6741 19.002H52.6541L36.49 30.7459L42.6641 49.748L26.5 38.0041L10.3359 49.748L16.51 30.7459L0.345945 19.002H20.3259L26.5 0Z" fill="#FF942F" />
            </svg>
            <svg width="50" height="50" viewBox="0 0 53 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M26.5 0L32.6741 19.002H52.6541L36.49 30.7459L42.6641 49.748L26.5 38.0041L10.3359 49.748L16.51 30.7459L0.345945 19.002H20.3259L26.5 0Z" fill="#FF942F" />
            </svg>

            <svg width="50" height="50" viewBox="0 0 53 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M26.5 0L32.6741 19.002H52.6541L36.49 30.7459L42.6641 49.748L26.5 38.0041L10.3359 49.748L16.51 30.7459L0.345945 19.002H20.3259L26.5 0Z" fill="#FFF" />
            </svg>

            <svg width="50" height="50" viewBox="0 0 53 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M26.5 0L32.6741 19.002H52.6541L36.49 30.7459L42.6641 49.748L26.5 38.0041L10.3359 49.748L16.51 30.7459L0.345945 19.002H20.3259L26.5 0Z" fill="#FFF" />
            </svg>
        </div>

        <div class="footer">
            <p class="help">Clique sur l'étoile pour</p>
            <p class="help">attribuer une note.</p>
            <button type="submit"><b>Envoyer</b></button>
            </form>
        </div>

    </section>
</body>

</html>