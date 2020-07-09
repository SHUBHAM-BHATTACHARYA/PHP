<html>
<head><h1 align="center">STUDENT DETAILS</h1>
<title>SKFGI</title>
</head>
<body bgcolor="grey" text="white">
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","shubham");
$sql="SELECT *FROM student2";
$row=mysqli_query($con,$sql);
print"<table border=2>";
print"<tr><td>Roll</td><td>Name</td><td>Address</td><td>Phone No</td></tr>";
while($r=mysqli_fetch_assoc($row))
{
	print"<tr>";
	print "<td>".$r['roll']."</td><td>".$r['name']."</td><td>".$r['address']."</td><td>".$r['phno']."</td></tr>";
}
print"</table>";
mysqli_close($con);
?>