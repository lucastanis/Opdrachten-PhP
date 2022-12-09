<?php
    if(isset($_POST["kleur"])) {
        $kleur = $_POST["kleur"];

        switch($kleur) {
            case"rood":
                echo"<style>body{background-color: red;}</style>";
            break;
            case"groen":
                echo"<style>body{background-color: ;}</style>";
            break;
            case"blauw":
                echo"<style>body{background-color: blue;}</style>";
            break;
            case"roze":
                echo"<style>body{background-color: pink;}</style>";
            break;
        }
    }
    ?>