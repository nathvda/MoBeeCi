<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/scss/suggestions-index.scss', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>
    <h2>Suggestions</h2>
    @foreach($suggestions as $suggestion)
    <div class="suggestions">
        <b>{{$suggestion->category}}</b>
        <div class="suggestion-description">{{$suggestion->description}}</div>
        <div class="times"><span class="suggestion-created_at">{{$suggestion->created_at->diffForHumans()}}</span>
        </div>
    </div>
    @endforeach
</body>

</html>