<!-- Write a PHP script to reverse a given number and calculate its sum -->
<?php
$a=1231;
$temp=$a;
$rev=0;
$sum=0;
while($a>0){
    $r=$a%10;
    $rev=$rev*10+$r;
    $sum=$sum+$r;
    $a=(int)($a/10);
}
echo "Reverse of ".$temp." is ".$rev."<br>";
echo "Sum of digits is ".$sum;
?>