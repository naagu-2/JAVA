<?php
if(!empty($_POST['name']))
$name=$_POST['name'];
else
$name="Not Entered";
echo <<<END
<html>
    <head>
        <title>Form Test</title>
    </head>
    <body>
        <form action="prog13.php" method="post">
            Enter your name:
            <input type="text" name="name" id=""><br>
            <input type="submit" ><br>
            Name is: $name
        </form>
    </body>
</html>
END;
?>