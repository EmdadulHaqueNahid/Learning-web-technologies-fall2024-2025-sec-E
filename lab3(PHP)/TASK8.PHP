<?php

echo "<table border='1' cellspacing='0' cellpadding='10'>";
echo "<tr>";

echo "<td>";
$array = array
(
    array('1', '2', '3', 'A'),
    array('1', '2', 'B', 'C'),
    array('1', 'D', 'E', 'F'),
);  

$x = 2;
for ($i = 0; $i < 3; $i++) 
{        
    for ($j = 0; $j < 3; $j++) 
    {
        echo $array[$i][$j] . " ";
        if ($x == $j) 
        {
            break;
        }
    }
    $x--;
    echo "<br/>";
}
echo "</td>";

echo "<td>";
$x = 3;
for ($i = 0; $i <= 2; $i++) 
{
    for ($j = 0; $j <= 3; $j++) 
    {
        if ($x <= $j) 
        {
            echo $array[$i][$j] . " ";
        }
    }
    $x--;
    echo "<br>";
}
echo "</td>";
echo "</tr>";
echo "</table>";

?>
