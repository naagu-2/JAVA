<!-- Write a PHP script to show the functionality of date and time function. -->

<?php
echo "Today's date in various formats:<br>";
echo "Today is ".date("Y/m/d")."<br>";
echo "Today is ".date("Y.M.d, D")."<br>";
echo "Today is ".date("Y-F-d,ls")."<br><br>";
date_default_timezone_set("Asia/Calcutta")."<br>";
echo "The time is ".date("h:i:sa")."<br>";
$d=mktime(11,14,34,12,5,2020);
echo "Created date is ".date("Y-m-d h:i:sA",$d)."<br>";
$s=strtotime("tomorrow");
echo date("Y-m-d h:i:sa");
?>