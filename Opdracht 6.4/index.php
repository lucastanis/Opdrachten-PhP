<?php
function Omtrek(){
    $pi = (pi());
    $lengte = $_POST['lengte'];
    $diameter = $lengte*2;
    $som = $diameter * $pi;
    $antwoord = number_format($som, 1);
    echo"De omtrek van een cirkel met straal $lengte is : $antwoord </br>";
}

function Oppervlakte(){
    $pi = (pi());
    $lengte = $_POST['lengte'];
    $som = $lengte * $lengte * $pi;
    $antwoord = number_format($som, 1);
    echo"De oppervlakte van een cirkel met straal $lengte is : $antwoord </br>";
}

if(isset($_POST['omtrek'])) {
    Omtrek();
}

if(isset($_POST['oppervlakte'])) {
    Oppervlakte();
}
?>