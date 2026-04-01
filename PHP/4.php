<?php

function calculateAverage($numbersArray) {
    if (empty($numbersArray)) {
        return 0; 
    }
    
    $sum = array_sum($numbersArray);
    $count = count($numbersArray);
    return $sum / $count;
}

$array1 = [10, 20, 30, 40, 50];
$array2 = [5, 15, 25];
$array3 = [100, 200];

echo "<h3>Average Calculation</h3>";
echo "Array 1 Average: " . calculateAverage($array1) . "<br>";
echo "Array 2 Average: " . calculateAverage($array2) . "<br>";
echo "Array 3 Average: " . calculateAverage($array3) . "<br>";

?>
