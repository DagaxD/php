<?php
$liczba = $_GET["liczba"];
for ($i = 0; $i < $liczba ; $i++ ){
    echo "{$i}";
    do {
        print "$i,  ";

    } while ($i < 100);
    die();
}
