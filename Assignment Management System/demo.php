<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db = "erp";
$conn = mysqli_connect($servername, $username, $password, $db);
if(!$conn){
   die("sorry we faild to connect". mysqli_connect_error());
   }
//    else{
//    echo "connected successful";
$queery1 = "SELECT * FROM teacher WHERE empid='$username' ";
$result1 = mysqli_query($conn, $queery1);
$num1 = mysqli_num_rows($result1);

$row = mysqli_fetch_assoc($result);
//    }
$_SESSION['section']=$row['section'];

?>

<?php

?>

