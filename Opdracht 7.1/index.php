<?php
    if(isset($_POST['BTW'])) {
        $btw = $_POST['BTW'];
        $bedrag =$_POST['bedrag'];

        if ($btw == "negen") {
            $som = $bedrag / 100 * 109;
            echo"Bedrag inclusief 9% BTW : &euro; $som,-";
        }
        elseif ($btw == "eenentwintig"){
            $som = $bedrag / 100 * 121;
            echo"Bedrag inclusief 21% BTW : &euro; $som,-";
        }
    }
    ?>