<?php
$a=null;
$b=null;
$i=null;

function divide($a,$b) {
    if($b != 0){
        $c = $a / $b;
        return $c;
    } else {
        echo "Nie dziel przez zero!";
    }
}
function add ($a,$b){
    $c=$a+$b;
    return $c;
}
function substract ($a,$b){
    $c=$a-$b;
    return $c;
}
function multiplicat ($a,$b){
    $c=$a*$b;
    return $c;
}
//if(isset ($_GET['i']) && isset($_GET['a']) && isset($_GET['b'])){
    $i = $_GET['i'] || $i = "a";
    $a = $_GET['a'] ||  $a = 8;
    $b = $_GET['b'] || $b = 4;

switch ($i){

        case "a":
            echo add($a,$b);
            break;
        case "d":
            echo divide($a,$b);
            break;
        case "s":
            echo substract($a,$b);
            break;
        case "m":
            echo multiplicat($a,$b);
            break;
        default:
            echo add($a,$b);

}
