<?php

class Person
{
    public $name;
    public $age;

    public function showInfo()
    {
        echo "Ten: " . $this->name . "<br>";
        echo "Tuoi: " . $this->age . " <br>";
    }
}
class Student extends Person 
{
    public $studentID;

    public function showInfo()
    {
        parent::showInfo();
        echo "Ma sinh vien " . $this->studentID . " <br>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<form method="post">
    Ten:
    <input type="text" name="name"><br><br>

    Tuoi:
    <input type="number" name="age"><br><br>

    Ma sinh vien:
    <input type="number" name="studentID"><br><br>

   
</form>


</body>
</html>