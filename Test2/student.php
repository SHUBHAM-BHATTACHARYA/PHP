<?php
class student
{
	public $roll,$name,$addr,$email,$con;
	function __construct()
	{
		$this->con = mysqli_connect("localhost","root","","test");
	}
	function assign($r,$n,$a,$e)
	{
			$this->roll=$r;
			$this->name=$n;
			$this->addr=$a;
			$this->email=$e;
	}
	
	function insert()
	{
		$sql="insert into 
		student
		
		
		
		
		(roll,name,addr,email) values(".$this->roll.",'".$this->name."','".$this->addr."','".$this->email."')";
		if(!mysqli_query($this->con,$sql))
		 {
			die("Student record is not Inserted");    //display a message and exit the script
		 }
		else
		{
			
			echo("Student record is Inserted");
		}
	}
	
	function delete($n)
	{
		$sql="delete from student where roll=".$n;
		if(!mysqli_query($this->con,$sql))
		{
			die("Deletion failed");
		}
		else{
		echo "Deletion success";
		}
	}
	
	function select()
	{
		$sql=mysqli_query($this->con,
		"select * from student");
		echo "<table border=1><tr align=center>
		<td>Roll Number</td><td>Name</td>
		<td> Address </td><td> Photo </td>
		<td> Email </td><td> PDF </td></tr>";
		while($row=mysqli_fetch_row($sql))
		{
		echo "<tr align=center>";
		echo "<td>".$row[0]."</td>";
		echo "<td>".$row[1]."</td>";
		echo "<td>".$row[2]."</td>";
		echo "<td>".$row[4]."</td>";
		echo "<td><img src=images/".$row[3]." height=10% width=10%></td>";
		
		if($row[5]!=NULL)
		{
		echo "<td><a href=pdf/".$row[5].">download</a></td>";
		}
		echo "</tr>";
		}
		echo "</table>"; 
	}
	
	function update($r,$n,$a)
	{
		$sql="update student set name='$n',addr='$a' where roll=$r";
		if(!mysqli_query($this->con,$sql))
		 {
			die("Updation failed");
		 }
		 else
		 {
		 echo "Updated Successfully";
		 }
	}
	function imageupload($r,$i)
	{
		$sql="update student set image='$i' where roll=$r";
		if(!mysqli_query($this->con,$sql))
		 {
			die("Upload failed");
		 }
		 else
		 {
		 echo "Upload Successfully";
		 }
	}
	
		function pdfupload($r,$i)
	{
		$sql="update student set Pdf='$i' where roll=$r";
		if(!mysqli_query($this->con,$sql))
		 {
			die("Upload failed");
		 }
		 else
		 {
		 echo "Upload Successfully";
		 }
	}
}



?>