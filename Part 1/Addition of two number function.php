<!DOCTYPE html>
<html>
<head>
<title>parameter Addition and Subtraction Example</title>
</head>
<body>
<?php
function add($x,$y)
{
    $sum=$x+$y;
    echo "Sum of two number is=$sum<br><br>";
}
add(467,943);
function sub($x,$y)
{
	$diff=$x-$y;
	echo "Difference of two number is=$diff";
}
sub(943,467);
?>
</body>
</html>