<?php
        $waarde = $_POST["rekenen"];
        $getal1 = $_POST["getal1"];
        $getal2 = $_POST["getal2"];

        switch($waarde) {
            case"optellen":
                $som = $getal1 + $getal2;
                echo"$getal1 + $getal2 = $som";
            break;
            case"aftrekken":
                $som = $getal1 - $getal2;
                echo"$getal1 - $getal2 = $som";
            break;
            case"vermenigvuldigen":
                $som = $getal1 * $getal2;
                echo"$getal1 * $getal2 = $som";
            break;
            case"delen":
                $som = $getal1 / $getal2;
                echo"$getal1 / $getal2 = $som";
            break;
        }

    ?>