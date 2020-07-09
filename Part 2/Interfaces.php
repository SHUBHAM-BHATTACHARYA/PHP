<?php
interface IInfo 
{ 
    public function do_inform(); 
}
class Some implements IInfo 
{ 
    public function do_inform()
    { 
        echo "This is a Some class\n"; 
	} 
} 
$sm = new Some();
$sm->do_inform(); 
?>
