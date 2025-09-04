<?php
$arr=[1,2,3,4,5,6];
echo"Reverse(without using array reverse=";
for($i=count($arr)-1;$i>=0;$i--)
echo $arr[$i]." ";
echo "<br>Reverse(function): ";
print_r(array_reverse($arr));
?>
