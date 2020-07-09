<?php
$object = new User;
print_r($object);        // print in a human readable format
class User
{
public $name, $password;
function save_user()
{
echo "Save User code goes here";
}
}
?>
