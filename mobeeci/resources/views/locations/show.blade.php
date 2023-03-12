<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/scss/location.scss', 'resources/js/app.js'])
    <title>Afficher un lieu</title>
</head>

<body>
    <h2>Afficher un lieu</h2>
    {{$location}}
    <div class="suggestions">
    @for($i = 0 ; i < 5 ; i++ )
        @if( i < floor($pmr_rating))
    {{youhou}}
    @else
    {{haha}}
    @endif
    @endfor
    {{ floor($population_rating) }}
    {{ floor($sensitive_rating) }}

        </div>
    </div>
</body>

</html>