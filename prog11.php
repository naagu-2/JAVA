<!-- Write a PHP script to implement constructor and destructor -->
<?php
class Person
{
    private $fname;
    private $lname;
    public function __construct($fname,$course)
    {
        echo "Initializing the object<br>";
        $this->fname=$fname;
        $this->course=$course;
    }
    public function __destruct()
    {
        echo "Destroying Object";
    }
    public function showName()
    {
        echo "My name is".$this->fname."<br>Studying ".$this->course."<br>";
    }
}
$student=new Person("Arun","BCA");
$student->showName();
?>