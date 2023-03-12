@vite(['resources/scss/navbar.scss', 'resources/js/app.js'])

<div class="nav-bar" id="nav_bar">

    <label><img class="logo-bruit" src="{{asset('assets/Logo_bruit.png')}}" alt=""></label>
    <input type="checkbox" name="noise"/>
    <label><img class="logo-foule" src="{{asset('assets/Logo_foule.png')}}" alt=""></label>
    <input type="checkbox" name="crowd"/>
    <label><img class="logo-lumiere" src="{{asset('assets/Logo_lumiere.png')}}" alt=""></label>
    <input type="checkbox" name="light"/>
    <label><img class="logo-pmr" src="{{asset('assets/Logo_PMR.png')}}" alt=""></label>
    <input type="checkbox" name="prm"/>

</div>