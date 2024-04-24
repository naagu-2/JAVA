<!-- Write a PHP script to implement atleast seven string functions. -->

<?php
$s="NDRK FGC Hassan";
echo "Given string is ".$s."<br>";
$lw=strtolower($s);
echo "Lower case is ".$lw."<br>";
$up=strtoupper($s);
echo "Upper case is ".$up."<br>";
$len=strlen($s);
echo "Length is ".$len."<br>";
$rev=strrev($s);
echo "reverse is ".$rev."<br>";
$wo=ucwords($lw);
echo "First char of each word in uppercase is".$wo."<br>";
$lwo=ucfirst($lw);
echo "First char of given string in uppercase is".$lwo."<br>";
$sub=substr($s,5,3);
echo "Sub string is ".$sub;
?>