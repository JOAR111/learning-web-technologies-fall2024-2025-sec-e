<?php
$num1 = 458663;
$num2 = 5682;
$num3 = 18451;

if ($num1 > $num2 && $num1 > $num3) {
    echo "The largest number is: " . $num1;
} elseif ($num2 > $num1 && $num2 > $num3) {
    echo "The largest number is: " . $num2;
} else {
    echo "The largest number is: " . $num3;
}
?>
