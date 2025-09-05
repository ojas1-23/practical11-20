<!-- sum.php file-->
<?php
if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $sum = $num1 + $num2;
    echo "The sum of $num1 and $num2 is: $sum";
} else {
    echo "Please provide both numbers.";
}
?>
