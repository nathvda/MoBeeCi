<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/scss/suggestions.scss', 'resources/js/app.js'])
    <title>Afficher un lieu</title>
</head>

<body>
<div class="previous"><a href="{{ url()->previous() }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
</svg></a></div>
    <h2>Afficher un lieu</h2>
    <div class="display_location">{{$location->address}}
    <div class="suggestions">
    <h3>SCORE PMR</h3>
    <div class="stars">@for($i = 0 ; $i < 5 ; $i++)
        @if( $i < floor($pmr_rating))
        ★
    @else
    ☆
    @endif
    @endfor</div>

    <h3>SCORE ENCOMBREMENT</h3>
    <div class="stars">@for($i = 0 ; $i < 5 ; $i++)
        @if( $i < floor($population_rating))
        ★
    @else
    ☆
    @endif
    @endfor
    </div>

    <h3>SCORE SENSIBILITÉ SENSORIELLE</h3>
    <div class="stars">
    @for($i = 0 ; $i < 5 ; $i++)
        @if( $i < floor($sensitive_rating))
        ★
    @else
    ☆
    @endif
    @endfor
    </div>

        </div>
    </div>
    </div>
</body>

</html>