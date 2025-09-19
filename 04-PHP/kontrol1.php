<?php
$grades = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($grades); 

array_shift($grades);
array_shift($grades);

array_pop($grades);
array_pop($grades);

$total = array_sum($grades);
$average = $total / count($grades);

echo "Total grades: $total <br>";
echo "Average grades: " . $average;
?>
