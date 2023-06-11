<?php

$itemOne = 100;
$itemTwo = 200;
$itemThree = 300;

echo getQuantityInItemOne(3);
echo "\n";
echo getQuantityInItemOne(5);
echo "\n";
echo getQuantityInItemTwo(5);
echo "\n";
echo getQuantityInItemOne(50);
echo "\n";
echo getQuantityInItemThree(5);

function getQuantityInItemOne($qty) {
global $itemOne;
$totalStock = $itemOne - $qty;
$itemOne = $totalStock;
return "Item 1 - ($qty) qty | Remaining Stocks = $totalStock";
}

function getQuantityInItemTwo($qty) {
global $itemTwo;
$totalStock = $itemTwo - $qty;
$itemTwo = $totalStock;
return "Item 2 - ($qty) qty | Remaining Stocks = $totalStock";
}

function getQuantityInItemThree($qty) {
global $itemThree;
$totalStock = $itemThree - $qty;
$itemThree = $totalStock;
return "Item 3 - ($qty) qty | Remaining Stocks = $totalStock";
}

?>