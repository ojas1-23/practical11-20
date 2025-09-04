<?php
$fruits = ["Banana" => 30, "Apple" => 50, "Mango" => 40];

echo "Sorted by values:<br>";
asort($fruits);
print_r($fruits);

echo "<br><br>Sorted by keys:<br>";
ksort($fruits);
print_r($fruits);
?>

