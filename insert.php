<?php
include 'confige.php';


if (isset($_POST['submit'])) {

  $username = $_POST['username'];
  $useremail = $_POST['useremail'];
  $userpassword = $_POST['userpassword'];


  $query = "SELECT count(*) as useremail FROM `student` WHERE useremail='$useremail'";
  $result = mysqli_query($con, $query);
  $row = mysqli_fetch_array($result);
  $count = $row['useremail'];



  if ($count > 0) {
    echo "Email Exist";
  } else {


    $sql = " INSERT INTO student (`username`, `useremail`, `userpassword`) VALUES ( '$username', '$useremail','$userpassword' )";
    //$query = mysqli_query($con,$sql);


    if (mysqli_query($con, $sql) === TRUE) {
      echo "Insert successfully";
      header("location:login.php"); // redirects to all records page
      exit;
    } else {
      echo "Error insert: " . $con->error;
      header("location:login.php"); // redirects to all records page
      exit;
    }
  }
}


?>


<!DOCTYPE html>
<html>

<head>

  <title></title>

  <h1>Register</h1>
  <table border="2">

    <form method="POST">
      <tr>
        <td><label> username </label></td>
      </tr>
      <tr>
        <td><input type="text" name="username" class="form-control">
        </td>
      </tr>

      <tr>
        <td><label> useremail </label></td>
      </tr>
      <tr>
        <td><input type="text" name="useremail" class="form-control"> </td>
      </tr>

      <tr>
        <td><label> userpassword </label></td>
      </tr>
      <tr>
        <td><input type="password" name="userpassword" class="form-control"> </td>
      </tr>

      <tr>
        <td><button class="btn btn-success" type="submit" name="submit"> Submit </button></td>
      </tr>



      </tr>

    </form>
  </table>
</head>

</html>