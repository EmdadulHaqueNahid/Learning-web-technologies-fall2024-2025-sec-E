<?php
echo "<table border='1' cellspacing='0' cellpadding='10'>";

echo "<tr><td>";
for($i = 0; $i <= 2; $i++) {
    for($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br/>";
}
echo "</td>";

echo "<td>";
for($i = 3; $i >= 1; $i--) {
    for($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br/>";
}
echo "</td>";

echo "<td>";
$num = 65; 
for($i = 0; $i <= 2; $i++) {
    for($j = 0; $j <= $i; $j++) {
        $ch = chr($num);
        echo $ch . " ";
        $num = $num + 1;
    }
    echo "<br/>";
}
echo "</td></tr>";

echo "</table>";
?>
