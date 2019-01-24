<?php
$p = null;
if (isset($_GET['p'])) {
    $p = $_GET['p'];
}
switch ($p) {
    case 's1':
        echo "Przełącznik s1 jest aktywny";
        break;
    case 's2':
        echo "Przełącznik s2 jest aktywny";
        break;
    case 's3':
        echo "Przełącznik s3 jest aktywny";
        break;
    default:
        echo "Podaj parametr p";
}


