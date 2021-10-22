<?php
include 'confige.php';

if (isset($_POST['Submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    //$q="select * from student where useremail='$email' and userpasword='$password'";

    $query = "SELECT count(*) as useremail FROM `student` WHERE useremail='$email' and userpassword='$password'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
    $count = $row['useremail'];


    
    if ($count > 0) {
        echo "login Succssfully."; // display error message if not delete
        header("location:view.php"); // redirects to all records page
        exit;
    } else {
        echo "emailid and passwordis worng "; // display error message if not delete
        echo "Error insert: " . $con->error;
    }
}




?>


<!DOCTYPE html>
<html>

<head>

    <title></title>

    <h1>login</h1>
    <table border="2">

        <form method="POST">
            <tr>



            <tr>
                <td><label> email </label></td>
            </tr>
            <tr>
                <td><input type="text" name="email" class="form-control"> </td>
            </tr>

            <tr>
                <td><label> password </label></td>
            </tr>
            <tr>
                <td><input type="password" name="password" class="form-control"> </td>
            </tr>

            <tr>
                <td><button class="btn btn-success" type="submit" name="Submit"> Submit </button></td>
            </tr>



            </tr>

            <a href="insert.php">register</a>

        </form>
    </table>
</head>

</html