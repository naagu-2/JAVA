<!-- Write a PHP script to implement form handling using get method -->
<?php
if(!empty($_GET['name']))
$name=$_GET['name'];
else
$name="Not Entered";
echo <<<END
<html>
    <head>
        <title>Form Test</title>
    </head>
    <body>
        <form action="prog12.php" method="get">
            Enter your name:
            <input type="text" name="name" id=""><br>
            <input type="submit" ><br>
            Name is: $name
        </form>
    </body>
</html>
END;
?>