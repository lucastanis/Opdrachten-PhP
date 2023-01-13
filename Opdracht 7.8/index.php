<?php
    session_start();
    error_reporting(0);
    if(!$_SESSION["lijst"]){
        $_SESSION["lijst"] = array();
    }

    if(isset($_POST["item"]) && trim($_POST["item"]) != '') {
        $veld = trim($_POST["item"]);
        if(!in_array($veld, $_SESSION["lijst"], true)) {
            $_SESSION["lijst"][] = $veld;
        }
    }

    if(!empty($_SESSION["lijst"])) {
        echo "<h2>Winkelmand</h2>";

        foreach($_SESSION["lijst"] as $waarden) {
            echo "$waarden <br>";
        }
    }

    if(isset($_GET["knop"])) {
        if($_GET["knop"] == "schudden") {
            shuffle($_SESSION["lijst"]);
        }
    }

    if(isset($_GET["knop"])) {
        if($_GET["knop"] == "sorteren") {
            sort($_SESSION["lijst"]);
        }
    }

    if(isset($_GET["knop"])) {
        if($_GET["knop"] == "wissen") {
            $_SESSION = array();
            session_destroy();
            echo "Alle sessievariabelen worden verwijderd.";

            header("Refresh: 0; url=opdracht_7.8.php");
        }
    }
    ?>