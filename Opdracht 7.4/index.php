<?php
    if(isset($_POST["uitrekenen"])) {
        $prijs = $_POST["prijs"];
        $korting = $_POST["korting"];
        $som = $prijs * (100 -$korting)/100;
        echo"Orginele Bedrag: $prijs <br>";
        echo"Bedrag inclusief $korting% korting: €$som";
    }

    ?>