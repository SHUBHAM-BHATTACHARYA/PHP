<?php
class student
{
	public $roll,$name,$add,$email,$con;
	function __construct()
	{
		$this->con=mysqli_connect("localhost","root","","shubham");
	}
	function assign($r,$n,$a,$e)
	{
		$this->roll=$r;
		$this->name=$n;
		$this->add=$a;
		$this->email=$e;
	}
	function insert()
	{
		$sql="INSERT INTO student(`roll`,`name`,`addr`,`email`)VALUES('$this->roll','$this->name','$this->add','$this->email')";
		if(!mysqli_query($this->con,$sql))
		{
			die("Student record is not Inserted");
		}
		else
		{
			echo("Student record is Inserted");
		}
	}
	function select()
	{
		$sql=mysqli_query($this->con,"SELECT * FROM student");
		echo "<table border=1><tr align=center><td>Roll Number</td><td>Name</td><td>Address</td><td>Email</td></tr>";
		while($row=mysqli_fetch_row($sql))
		{
			echo "<tr align=center>";
			echo "<td>".$row[0]."</td>";
			echo "<td>".$row[1]."</td>";
			echo "<td>".$row[2]."</td>";
			echo "<td>".$row[3]."</td>";
			echo  "</tr>";
		}
		echo "</table>";
    }
	function update($r,$n,$a,$e)
	{
		$sql="UPDATE student SET name='$n',addr='$a',email='$e' where roll='$r'";
		if(!mysqli_query($this->con,$sql))
		{
			die("Student record is not Updated");
		}
		else
		{
			echo("Student record is Updated");
		}
	}
	function delete($r)
	{
		$sql="DELETE FROM student where roll='$r'";
		if(!mysqli_query($this->con,$sql))
		{
			die("Student record is not Deleted");
		}
		else
		{
			echo("Student record is Deleted");
		}
	}
}
?>
		