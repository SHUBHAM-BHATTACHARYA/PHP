<?php
class Books
{
	var $price;
	var $title;
	function setPrice($par)
	{
		$this->price=$par;
	}
	function getPrice()
	{
		echo $this->price."<br>";
	}
	function setTitle($par)
	{
		$this->title=$par;
	}
	function getTitle()
	{
		echo $this->title."<br>";
	}
}
$maths=new Books;
$maths->setTitle("Algebra");
$maths->setPrice(7);
$maths->getTitle();
$maths->getPrice();
?>