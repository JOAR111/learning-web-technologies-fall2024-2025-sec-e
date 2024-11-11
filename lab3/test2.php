<?php
$amount = 2700;
$vat_rate = 0.15;
$vat = $amount * $vat_rate;

echo "Amount: " . $amount  . "taka<br>";
echo "VAT (15%): " . $vat . "taka<br>";
echo "Total Amount (including VAT): " . $amount + $vat. "taka<br>";
?>
