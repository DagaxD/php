<?php
$search = null;
if (isset ($_GET['search'])){
    $search = $_GET['search'];
} else {
    echo "Brak zmiennej search";
}

$string = "Ala ma kota";

function strpos_all($haystack, $needle)
{
    $offset = 0;
    $allpos = array();
    while (($pos = strpos($haystack, $needle, $offset)) !== FALSE) {
        $offset = $pos + 1;
        $allpos[] = $pos;
    }
    return $allpos;
}
if (strpos ($string, $search)) {
    echo "Litera znajduje się na miejscach: ";
    print_r(strpos_all($string, $search));
}
else { echo "Nie ma takiej litery";
}