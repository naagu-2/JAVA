<!-- Write a PHP script to implement database creation -->

<?php
$servername="localhost";
$username="root";
$password="";


$conn = new mysqli($servername,$username,$password);

if(!$conn)
{
    die("connection failed:".mysqli_connect_error());
}
echo "connected successfully";
$db="create database NDRK";
if(mysqli_query($conn,$db))
{
    echo "Database created successfully";
}
else
{
    echo "database creation failed";
}
mysqli_close($conn);
?>