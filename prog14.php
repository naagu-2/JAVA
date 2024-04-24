<!-- Write a PHP script that receive form input by the method post to check the number is prime or not -->
<?php
if(isset($_POST['submit']))
{
    $num=$_POST['number'];
    if((is_numeric($num)==1)&&$num>0)
    {
        $flag=0;
        for($i=2;$i<$num;$i++)
        {
            if($num%$i==0)
            {
                $flag=1;
                break;
            }
        }
        if($flag==0)
            echo $num." is Prime number";
        else    
            echo $num." is not Prime number";
    }
    else
        echo "Invalid Input";
}
?>