<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/scss/suggestions-index.scss', 'resources/js/app.js'])
    <title>Alertes</title>
</head>

<body>
    <h2>Alert</h2>
    @foreach($alerts as $alert)
    <div class="suggestions">
        <b>{{$alert->type}}</b>
        <div class="suggestion-description">{{$alert->description}}</div>
        <div class="times">
        <span class="suggestion">{{$alert->location->address}}</span>    
        <span class="suggestion-created_at">{{$alert->created_at->diffForHumans()}}</span>
        </div>
    </div>
    @endforeach
</body>

</html>