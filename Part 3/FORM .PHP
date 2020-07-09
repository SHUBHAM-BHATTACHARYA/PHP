<html>
<head><h1 align="center">Registration Page</h1>
<title>SKFGI</title>
</head>
<body bgcolor="white">
<form method="GET">
<table border="0">
<tr><td>
Name</td><td><input type="text" name="n1"/></td></tr>
<tr><td>
Roll</td><td><input type="text" name="n2"/></td></tr>
<tr><td>
Address</td><td><input type="text" name="n3"/></td></tr>
<tr><td>
Phone number</td><td><input type="text" name="n4"/></td></tr>
<tr><td>
<input type="submit" value="Register"/></td><td>
<input type="reset" value="cancel"/></td></tr></table>
</form>
</body>
</html>
<?php
if($_GET)
{
	$con=mysqli_connect("localhost","root","","shubham");
	$name=$_GET['n1'];
	$roll=$_GET['n2'];
	$addr=$_GET['n3'];
	$pno=$_GET['n4'];
	
	$sql="INSERT INTO student2(`name`,`roll`,`address`,`phno`)VALUES('$name','$roll','$addr','$pno')";
	if(mysqli_query($con,$sql))
	{
		print"Register Successfully";
	}
	else
	{
		print "Not Register Successfully";
	}
	mysqli_close($con);
}
?>