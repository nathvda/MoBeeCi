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