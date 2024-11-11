<?php
$value = array("A", "B", "C", "D", "E");
$flag = 0;
$foundIndex = -1;

for ($i = 0; $i < count($value); $i++) {
    if ($value[$i] == "C") {
        $flag = 1;
        $foundIndex = $i;
        break;
    }
}

if ($flag == 1) {
    echo "Data found in index $foundIndex";
} else {
    echo "Data not found";
}
?>
