<?php
$a=null;
$b=null;

function divide($a,$b) {
    if($b != 0){
    $c = $a / $b;
    return $c;
    } else {
        echo "Nie dziel przez zero!";
    }
}
if (isset($_GET['a']) && isset($_GET['b'])) {
    $a= $_GET['a'];
    $b= $_GET['b'];
        echo divide($a,$b);

} else {
    echo "Brak zmiennych";
}
