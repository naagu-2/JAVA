<!-- Write a PHP script to to generate a Fibonacci series using Recursive function -->

<?php
$arr=array(45,78,90,12);
$insert=122;
echo "Given array is : <br>";
foreach($arr as $value)
    echo $value."<br>";
$insert=222;
array_splice($arr,2,0,$insert);
echo "After insertion of 222 the array is:<br>";
foreach($arr as $value)
    echo $value."<br>";
?>