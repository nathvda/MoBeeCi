<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoBeeCi</title>
    @vite(['resources/scss/maps.scss', 'resources/js/app.js'])
</head>
<body>
<x-nav />
<div class="toolbox">
    <a href="/suggestions/new">Suggestions</a>
    <a href="/locations/new">Lieu</a>
    <a href="/alerts/new">Alertes</a>
</div>
<div class="maps">

<img src="/images/Fond_de_plan_300.png"/>   
<img class="layer" src="/images/couche_bruit.png"/>    
<img class="layer" src="/images/couche_lumiere.png"/>
<img class="layer" src="/images/couche_accessibilite_pmr.png"/>
<img src="/images/Nom_Rue_sans_fond.svg.png"/>



</div>

</body>
</html>