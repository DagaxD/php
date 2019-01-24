<?php
$items = [];
for ($i=0; $i<5; $i++){

    array_push($items, "item {$i}");
//    echo "$items " ;

}
echo "<br/>";
print_r ($items);
echo "<br/>";
array_push($items,"item added");
print_r($items);

echo "<br/>";
array_unshift($items,"second item added");
print_r($items);

echo "<br/>";
array_pop($items);
print_r($items);

echo "<br/>";
array_shift($items);
print_r($items);