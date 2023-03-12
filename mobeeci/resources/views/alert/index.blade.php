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
<div class="previous"><a href="{{ url()->previous() }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
</svg></a></div>
    <h2>Alertes</h2>
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