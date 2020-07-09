<?php 
class Circle 
{ public $radius; 
function setRadius($radius) 
{ 
$this->radius = $radius; 
} 
function area() 
{ return $this->radius * $this->radius * M_PI; 
                                               // M_PI is a built-in constant.
 } 
} 
$c = new Circle(); 
$c->setRadius(5);
 echo $c->area(), "\n"; 
?>
