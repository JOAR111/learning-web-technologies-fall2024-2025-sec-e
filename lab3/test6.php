<?php
$array = array(10, 20, 30, 40, 50);
$search_element = 30;
$found = false;

for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == $search_element) {
        echo "Element " . $search_element . " found at index " . $i . ".<br>";
        $found = true;
        break;
    }
}
if (!$found) {
    echo "Element " . $search_element . " not found in the array.";
}
?>
