<!-- Write a PHPscript to check whether given number is palindrome or not. -->
<?php
$a=121;
$temp=$a;
$rev=0;
while($a>0){
    $r=$a%10;
    $rev=$rev*10+$r;
    $a=(int)($a/10);
}
if($temp==$rev)
    echo $temp." is palindrome";
else
    echo $temp." is not palindrome";
?>