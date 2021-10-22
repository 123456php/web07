<?php
include 'confige.php';


  $id = $_GET['id']; // get id through query string
 

  $data = mysqli_query($con,"select * from student where id = '$id'"); 
  $row = mysqli_fetch_assoc($data);


  
if(isset($_POST['submit']))
{
  
  $username = $_POST['username'];
  $useremail = $_POST['useremail']; 
  $userpassword = $_POST['userpassword'];



  $sql="update student set username='$username', useremail='$useremail', userpassword='$userpassword' where id='$id'";



if (mysqli_query($con,$sql) === TRUE) {
    echo "Update successfully";
    header("location:view.php"); // redirects to all records page
    exit;	
  } else {
    echo "Error insert: " . $con->error;
    header("location:view.php"); // redirects to all records page
    exit;	
  }

  
   
}


?>



<!DOCTYPE html>
<html>
<head>

 <title></title>

 <h1>update table</h1>
<table border="2">

 <form method="POST">
     <tr>
         <td><label> username  </label></td></tr>
         <tr><td><input type="text" name="username" class="form-control" value=<?php echo $row["username"]; ?> >
         </td>
        </tr>

         <tr>
         <td><label> useremail  </label></td></tr>
         <tr><td><input type="text" name="useremail" class="form-control" value=<?php echo $row["useremail"]; ?>> </td></tr>

         <tr><td><label> userpassword  </label></td></tr>
         <tr><td><input  type="password" name="userpassword" class="form-control" value=<?php echo $row["userpassword"]; ?>> </td></tr>

         <tr>
         <td><button class="btn btn-success" type="submit" name="submit"> Submit </button></td></tr>


         
     </tr>

 </form>
</table>
</head>
</html>