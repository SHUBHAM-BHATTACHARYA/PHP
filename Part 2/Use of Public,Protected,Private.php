<?php
class MyClass
{
    public $pub = 'Public';
    protected $pro = 'Protected';
    private $priv = 'Private';
    function printHello()
    {
        echo $this->pub."<br>";
        echo $this->pro."\n";
        echo $this->priv."<br>";
    }   }
class MyClass2 extends MyClass
{
    function printHello1()
    {
        echo $this->pub."\n";
        echo $this->pro."<br>";
        echo $this->priv."\n"; // Undefined
    }    }
$obj = new MyClass();
echo $obj->pub."\n"; // Works
//echo $obj->pro."\n"; // Fatal Error
//echo $obj->priv."\n"; // Fatal Error
$obj->printHello(); // Shows Public, Protected and Private

echo("--- MyClass2 ---\n");
$obj2 = new MyClass2();
echo $obj2->pub."<br>"; // Works
$obj2->printHello1(); // Shows Public, Protected, Undefined
?>
