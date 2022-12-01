<?php

$uur = date("H");
$uur = 1;

switch($uur) {
    case $uur >=6 && $uur <=12 :
    echo "Het is ochtend"; break;
}
switch($uur) {
    case $uur >=12 && $uur <18 :
    echo "Het is middag"; break;
}
switch($uur) {
    case $uur >=18 && $uur <24 :
    echo "Het is avond"; break;
}
switch($uur) {
    case $uur >=24 && $uur <6 :
    echo "Het is nacht"; break;
}

?>