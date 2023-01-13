<?php
        if (isset($_POST["start"])) {
            $start = $_POST["start"];
        } else {
            $start = 100000;
        }
        if(isset($_POST["rente"])) {
            $rente = $_POST["rente"];
        } else {
            $rente = 4;
        }
        if(isset($_POST["opname"])) {
            $opname = $_POST["opname"];
        } else{
            $opname = 5000;
        }
            $bedrag = $start/100*(100+$rente);
            $jaren = 0;

        if($opname > 4079) {
            while ($bedrag > $opname) {
                $bedrag -= $opname;
                $bedrag = $bedrag / 100 * (100 + $rente);
                $jaren++;
            }
            echo"U kunt $jaren jaar lang $opname opnemen";
        } else {
            echo"De opname is te laag binnen 100 jaren.";
        }
    ?>