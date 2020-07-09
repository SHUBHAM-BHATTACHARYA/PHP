<!DOCTYPE html>
<html>
<title> SKFGI </title>
<head><h1 align="center">DISPLAY EVEN NUMBER</h1></head>
<body>
<br>
<form method="GET">
M<input type=text name=n1>
<br>
N<input type=text name=n2>
<br>
<input type=submit value=DISPLAY>
</form>
</body>
</html>
<?php
if($_GET)
{
     for($i=$_GET['n1'];$i<=$_GET['n2'];$i++)
	 {
		 if($i%2==0)
			 echo "$i<br>";
		 
	 }      
}
?>
