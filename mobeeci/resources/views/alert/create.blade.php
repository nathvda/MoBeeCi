<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une alerte</title>
    @vite(['resources/scss/suggestions.scss', 'resources/js/app.js'])
</head>
<body>
<div class="previous"><a href="{{ url()->previous() }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
</svg></a></div>
    <h2>Ajouter une alerte</h2>
    <form id="alertes" method="post" action="/alerts">
    @csrf
    <label for="description">Description</label>
    <textarea id="description" name="description" form="alertes"></textarea>
    <label for="type">Type</label>
    <select name="type" id="type">
        <option name="type" value="pmr">PMR</option>
        <option name="type" value="sensitivity">Sensibilité sensorielle</option>
        <option name="type" value="anxiety">Anxiété</option>
    </select>
    <label for="location_id">Localité</label>
    <select name="location_id" id="location_id">
    @foreach($locations as $location)
        <option name="location_id" value="{{$location->id}}">
        {{$location->address}}
        </option>
    @endforeach
</select>
<button type="submit">Envoyer</button>
    </form>
</body>
</html>