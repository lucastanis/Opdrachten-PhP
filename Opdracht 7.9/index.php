<?php
        if(isset($_GET["Letters"])) {
            if($_GET["Letters"] == 'Hoofdletters'){
                echo strtoupper($_GET["Tekstveld"]);
            } elseif($_GET["Letters"] == 'KleineLetters') {
                echo strtolower($_GET["Tekstveld"]);
            } elseif($_GET["Letters"] == 'EerstHoofdletter') {
                echo ucfirst($_GET["Tekstveld"]);
            } elseif($_GET["Letters"] == 'ElkWoordHoofdLetter') {
                echo ucwords($_GET["Tekstveld"]);
            }
        }
    ?>