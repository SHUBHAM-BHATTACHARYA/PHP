<html>
<head><h1 align="center">Student Details</h1>
<title>SKFGI</title>
</head>

<body>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","skfgi1");
$sql="SELECT * FROM student ";
$row=mysqli_query($con,$sql);
print "<table border=1>";
print "<tr><td>Roll</td><td>Name</td><td>Address</td><td>Phone Number</td></tr>";
while($r=mysqli_fetch_assoc($row))
{
print "<tr>";
print "<td>".$r['roll']."</td><td>".$r['name']."</td><td>".$r['address']."</td><td>".$r['phno']."</td></tr>";
}
print "</table>";
mysqli_close($con);
?>