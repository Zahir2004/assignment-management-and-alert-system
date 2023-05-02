<?php 
 session_start();
 require 'db_auth.php';
 
 require 'dbconnect.php';
  $empid=$_SESSION['empid'];
  if(isset($_GET['slno'])){
      $slno=$_GET['slno'];
      $del="DELETE FROM `assign` WHERE `slno` = '$slno'";
      $done=mysqli_query($conn,$del);
  
  
  }
 
$find_assign = "SELECT * FROM `assign` WHERE empid='$empid' ";
$result = mysqli_query($conn, $find_assign);
$num= mysqli_num_rows($result);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet"href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet"href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="popup.css">
   <link rel="stylesheet" href="ta.css">
    <title>Teacher Dashboard</title>
</head>
<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class='lab la-GIETU'></span>GIETU</h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="teacher_dashboard.php" class="active"><span class="las la-tachometer-alt"></span>
                        <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="logout.php"><span class="las la-sign-out-alt"></span>
                        <span>Logout</span></a>
                </li>
            </ul>
        </div>
    </div><input type="checkbox" id="nav-toggle">
    <div class="table1">
        <h1>Assignments</h1>
        <table align="right" border="2px">
            <tr style="background-color: yellow;">
                
                <td><b>Title</b></td>
                <td><b>Section</b></td>
                
                <td><b>Due_Date</b></td>
                <td><b>Ststus</b></td>

                </tr>
            <?php
            if($num!=0){
            while( $row =mysqli_fetch_assoc($result)){
              echo  "<tr>
                   
                    <td>". $row['title']." </td>
                    <td>". $row['section']." </td>

                    <td>". $row['deadline']."</td>
                    
                    <td><a href='teacher_das1.php?slno=".$row['slno']."'><i class='las la-trash'></i></a></td>
                </tr> ";
          

            }
        }
        else {
            echo  "<tr>
                   
                    
                    
                    <td colspan='4'> NO ASSIGNMENT</td>
                </tr> ";
                
                
                
            }
                ?>
           
           
            
            <tr>
            <td colspan="4"><a href="create_assign_new.php"><input type="button" value="Create"></a></td> 
        </tr>
                 
            
      
</body>

</html>
<?php

  