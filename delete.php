<?php
include 'confige.php';


  $id = $_GET['id']; // get id through query string


  $del = mysqli_query($con,"delete from student where id = '$id'"); // delete query
  
  if($del)
  {
      echo "Deleted Succssfully."; // display error message if not delete
      header("location:view.php"); // redirects to all records page 
      exit;	
  }
  else
  {
      echo "Error deleting record"; // display error message if not delete
      header("location:view.php"); // redirects to all records page
      exit;
  }


?>


