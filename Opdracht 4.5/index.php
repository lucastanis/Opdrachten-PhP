<?php 
        if(isset($_POST['getal'])){
            $getal = $_POST['getal'];
            echo"Is het getal $getal even? ";
            if($getal % 2 == 0){
                echo"Ja";
            }
            elseif($getal % 2 == 1){
                echo"Nee";
            }
        }
    ?>