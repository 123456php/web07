<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clg";

// // Create connection
// $conn = new mysqli($servername, $username, $password);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// // Create database
// $sql = "CREATE DATABASE IF NOT EXISTS clg";
// if ($conn->query($sql) === TRUE) {
//  // echo "Database created successfully";
// } 

// $conn->close();

$con = new mysqli($servername, $username, $password,$dbname);




// $sqlTable = "CREATE TABLE IF NOT EXISTS student (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     username VARCHAR(20),
//     useremail VARCHAR(20),
//     userpassword VARCHAR(20)
// )";

// if ($con->query($sqlTable) === TRUE) {
//    // echo "Table student  created successfully";
//   } else {
//     echo "Error creating table: " . $conn->error;
//   }
  
  //$con->close();
 
  ?>
  