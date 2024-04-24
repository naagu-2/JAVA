<!-- Write a PHPscript to find the factorial of a number. -->
<?php
$a=5;
$fact=1;
for($i=1;$i<=$a;$i++)
{
    $fact=$fact*$i;
}
echo "factorial of ".$a." is ".$fact;
?>