<?php
$object = new Subscriber;
$object->name = "Fred";
$object->password = "pword";
$object->phone = "9433547657";
$object->email = "ab@skf.edu.in";
$object->display();
class User
{
     public $name, $password;
     function save_user()
     {
       echo "Save User code goes here";
     }
}
class Subscriber extends User
{
     public $phone, $email;
     function display()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Pass: " . $this->password . "<br>";
        echo "Phone: " . $this->phone . "<br>";
        echo "Email: " . $this->email;
    }
}
?>
