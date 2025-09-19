<?php
$students = [
    "Alice" => 85,
    "Bob" => 92,
    "Charlie" => 78,
    "David" => 64,
    "Eva" => 90
];

$total = array_sum($students);
$average = $total / count($students);

echo "Class average grade: " . $average . "<br><br>";
echo "Students with grades above average:<br>";

foreach ($students as $name => $grade) {
    if ($grade > $average) {
        echo "$name : $grade <br>";
    }
}
?>
