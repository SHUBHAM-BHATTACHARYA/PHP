<?php
   if(isset($_FILES['pdf'])){
      $errors= array();
      $file_name = $_FILES['pdf']['name'];
      $file_size = $_FILES['pdf']['size'];
      $file_tmp = $_FILES['pdf']['tmp_name'];
      $file_type = $_FILES['pdf']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['pdf']['name'])));
      
      $expensions= array("pdf");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2980971525) {
         $errors[]='File size must be excately 25 MB';
      }
      $roll=$_POST['roll'];
	  $file_name=$roll.$file_name;
      if(empty($errors)==true) 
	  {
         move_uploaded_file($file_tmp,"pdf/".$file_name);
         //echo "Successfully Uloaded";
		 
		include_once("student.php");
		$s=new student();
		$s->pdfupload($roll,$file_name);
      }
	  else{
         print_r($errors);
      }
	  
   }
?>