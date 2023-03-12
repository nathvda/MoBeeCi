<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une suggestion</title>
    @vite(['resources/scss/suggestions.scss', 'resources/js/app.js'])
</head>
<body>
    <h2>Ajouter une suggestion</h2>
    <form id="suggestion" method="post" action="/suggestions">
    @csrf
    <label for="description">description</label>
    <textarea id="description" name="description" form="suggestion"></textarea>
    <label for="category">Catégorie</label>
    <select name="category" id="category">
        <option name="category" value="pmr">Pmr</option>
        <option name="category" value="sensitivity">Sensibilité sensorielle</option>
        <option name="category" value="anxiety">Anxiété</option>
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