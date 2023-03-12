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
<button class="menuburger"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
</svg></button>
<div class="toolbox hide">
    <a href="/suggestions/new">Ajouter une suggestions</a>
    <a href="/locations/new">Ajouter un lieu</a>
    <a href="/alerts/new">Ajouter une alerte</a>
    <a href="/suggestions">Liste des suggestions</a>
    <a href="/locations/view/1">Présentation lieu</a>
    <a href="/alerts">Liste des alertes</a>

</div>
<div class="scale"><span>+</span><span>-</span></div>

<div class="maps">
<img src="/images/Fond_de_plan_300.png"/>   
<img class="layer" src="/images/couche_bruit.png" style="display:none;"/>    
<img class="layer" src="/images/couche_lumiere.png" style="display:none;"/>
<img class="layer" src="/images/couche_accessibilite_pmr.png" style="display:none;"/>
<img src="/images/Nom_Rue_sans_fond.svg.png"/>



</div>

</body>
</html>