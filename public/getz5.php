<?php
$data = file("z5");
$result = "";
foreach ($data as $row){
    $item = explode (",",$row);
    echo "<p>";
    $netPrice = ($item[2]);
    $biggerPrice = $netPrice*1.1;
    $grossPrice = round ($netPrice+$netPrice*($item[3]/100),2);
    $result = $result."\n$item[0],$item[1],$biggerPrice,$item[3]";
    echo "Product <b> {$item[0]}</b> is available in <b>{$item[1]}</b>. Nett price is <b>{$netPrice}</b>, tax is: <b>{$item[3]}</b>. Gross is <b>{$grossPrice}</b>";
echo "</p>";

}
//$content = file_get_contents("z5");
//echo $content;
if (!file_exists("newfile.txt")) {
    file_put_contents("newfile.txt", $result);
}else{
    echo "File already exists";
}