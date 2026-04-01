<?php
$number = -15;

echo "<h3>If-Else to check number is positive,negative or zero</h3>";
echo "Number to check: $number <br><br>";
if ($number > 0) {
    echo "The number is Positive (+).";
} elseif ($number < 0) {
    echo "The number is Negative (-).";
} elseif ($number == 0) {
    echo "The number is perfectly Zero.";
} else {
    echo "Invalid Input.";
}
?>
