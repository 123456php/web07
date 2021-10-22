<?php
include 'confige.php';
?>

<html>
    <head>VIEW</head>
<body> 



<td> <a href="insert.php"><button class="btn btn-success" type="submit" name="submit"> Insert </button></a></td></br>

    <table border="2">
        <tr>
            <td> username</td>
            <td> useremail</td>
            <td> userpassword</td>
            <td> edite</td>
            <td> delete</td>
        </tr>

        <?php

 
  $qry = mysqli_query($con,"select * from student");

  while($data=mysqli_fetch_array($qry))
  {
     ?>

     <tr>   
            <td><?php echo $data['username']?></td>
            <td><?php echo $data['useremail']?></td>
            <td><?php echo $data['userpassword']?></td>
            <td><a href="update.php?id=<?php echo $data['id']; ?>">edit</a> </td>
            <td><a href="delete.php?id=<?php echo $data['id']; ?>">delete</a> </td>

            
     </tr>

     <?php
  }

?>

    </table>


</body>
</html>