<?php
    $server = 'localhost';
    $username = 'root';
    $pass = '';
    $DBname = 'test';
    
    $conn = mysqli_connect($server, $username, $pass, $DBname);
    
    if (!$conn) {
        die("Database connection failure " . $conn);
    }
    $tb="CREATE TABLE Student (Regno int(5),name varchar(25),course varchar(10));";
    if($a=mysqli_query($conn,$tb)){
        echo "Table created Successfully";
    }
    else{
        echo "Table not created";
    }
?>
