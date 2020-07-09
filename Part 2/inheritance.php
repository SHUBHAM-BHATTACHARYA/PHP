<?php
class Identity
{
	public $name,$dept,$roll,$sem,$year;
	function name()
	{
		echo "SHUBHAM BHATTACHARYA<br>";
		echo "
	}
}
class Details extends Identity
{
      	function display()
		{
			echo "Name=".$this->name;
			echo "Department=".$this->dept;
			echo "Roll=".$this->roll;
            echo "Semester=".$this->sem;
            echo "Year=".$this->year;			
		}
}
$ID=new Details;
$ID->dept="C.S.E";
$ID->roll="32";
$ID->name="SHUBHAM";
$ID->display();
$ID->id();
?>