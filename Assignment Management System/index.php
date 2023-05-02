<?php
require 'dbconnect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['uname'];
  $password = $_POST['password'];
}
$name = "";

?>
<!DOCTYPE html>
<html>

<head>
  <title>Login Page</title>
  <link rel="stylesheet" type="text/css" href="index.css">
  <!-- <img src="bg2.jpg" width="1273px" height="605"  alt=""> -->
  
  <body>
    <div class="loginbox">
    <img src="University-Logo-backup.png" class="avatar">
    <img src="" alt="" srcset="">
    <h4>Login </h4>
    <form action="index.php" method="post">
      <p>User Name</p>

      <input type="text" name="uname" id="uname" placeholder="Enter Username"  pattern="[A-Za-z0-9]+" title="Invalid input" required>
      <p>Password</p>

      <input type="password" name="password" id="password" pattern=".{4,}" placeholder="Enter password" required>
      <input type="submit" name="login" value="Login">

      <?php
      if (isset($_POST['login'])) {
        $queery = "SELECT * FROM login WHERE username='$username' AND password='$password' ";
        $result = mysqli_query($conn, $queery);
        $num = mysqli_num_rows($result);
        //check whether it is a teacher or student
        $queery1 = "SELECT * FROM teacher WHERE empid='$username' ";
        $result1 = mysqli_query($conn, $queery1);
        $num1 = mysqli_num_rows($result1);

        $row = mysqli_fetch_assoc($result);
        $row1 = mysqli_fetch_assoc($result1);
        
        if ($num == 1) {
          session_start();
          $_SESSION['login']= true;
          $_SESSION['alert']=true;
          $_SESSION['name'] = $row['name'];
          $_SESSION['empid']=$row1['empid'];
          $_SESSION['username']= $row['username'];
          if ($num1 == 1) {
            header('location:teacher_dashboard.php');
          } else
            header('location:Student_dashboard.php');
        } else
          echo "<p>Wrong Username / Password</p>";
      }
      ?>
    </form>
  </div>
</body>
</head>

</html>