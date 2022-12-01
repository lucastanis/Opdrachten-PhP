<?php
        $product = 55;
        if ($product > 150){
            $product = $product * 1.19;
            echo "De nieuwe prijs is $product";
        }
        elseif ($product < 55){
            $product = $product * 1.11;
            echo "De prijs is gestegen tot $product";
        }
        else {
            echo "het prijs is $product gebleven";
        }
    ?>