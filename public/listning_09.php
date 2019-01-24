<?php
$liczba = null;
if (isset($_GET["liczba"]) && is_numeric($_GET["liczba"])){
    $liczba = $_GET["liczba"];
    if ($liczba < 10) {
        echo "liczba jest mniejsza od 10";
    }
    elseif ($liczba > 10) {
        echo "liczba jest większa od 10";
    }
    else {
        echo "liczba jest równa 10";
    }
} else {
    echo "Nie mamy zmiennej liczba";
    die();
}