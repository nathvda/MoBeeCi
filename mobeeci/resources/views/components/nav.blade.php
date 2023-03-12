@vite(['resources/scss/navbar.scss', 'resources/js/app.js'])

<div class="nav-bar" id="nav_bar">

    <input id="noise" type="checkbox" name="noise"/>
    <label for="noise"><img class="logo-bruit" src="{{asset('assets/Logo_bruit.png')}}" alt=""></label>
    <input id="light" type="checkbox" name="light"/>
    <label for="light"><img class="logo-lumiere" src="{{asset('assets/Logo_lumiere.png')}}" alt=""></label>
    <input id="pmr" type="checkbox" name="prm"/>
    <label for="pmr"><img class="logo-pmr" src="{{asset('assets/Logo_PMR.png')}}" alt=""></label>
    <input id="crowd" type="checkbox" name="crowd"/>
    <label for="crowd"><img class="logo-foule" src="{{asset('assets/Logo_foule.png')}}" alt=""></label>

</div>