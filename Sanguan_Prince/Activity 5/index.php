<?php


echo getQuantityRemainingItem()

function getQuantityRemainingItem($itemNumber, $qty, $remainingStock) {
  $totalStock = $itemNumber - $qty;
return "$itemNumber - ($qty) qty | $remainingStock = $totalStock";
}

?>