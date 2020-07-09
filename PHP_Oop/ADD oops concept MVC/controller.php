 <?php
   
 
  if($_POST)
  {
    include_once("model.php");
	$ob=new addition;
	$ob->assign($_POST['n1'],$_POST['n2']);
	$ob->sum();

  }
  ?>