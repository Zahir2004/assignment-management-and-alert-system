<?php
session_start();


require 'dbconnect.php';
if (!isset($_SESSION['login'])|| $_SESSION['login']!=true) 
{
    header('location: index.php');
}
// setcookie("display", "0" , time() + (86400 * 30), "/");
$rollno=$_SESSION['username'];
$sql= " SELECT * FROM `student` WHERE rollno='$rollno' ";
$row1=mysqli_query($conn,$sql);
$row2 = mysqli_fetch_assoc($row1);
$_SESSION['section']=$row2['section'];
$cdate=date("Y-m-d");
$find_assign = "SELECT * FROM `student` JOIN assign WHERE student.section=assign.section AND rollno= '$rollno' ";
$result = mysqli_query($conn, $find_assign);
$num= mysqli_num_rows($result);

if($num!=0){
    while($row=mysqli_fetch_assoc($result))
    $array[] =$row;
}
if($num!=0){
foreach($array as $values)
{ 
   if ($values['deadline']>$cdate){
    if($_SESSION['alert']==true){
   ?>
  
        <script>
            alert("YOU HAVE AN ASSIGNMENTS");
        </script>
        
    
    
    <?php
    $_SESSION['alert']=false;
  break;
}
}
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIETU</title>
    <link rel="stylesheet"href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
   <link rel="stylesheet" href="style.css">
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
                    <a href="student_dashboard.php" class="active"><span class="las la-tachometer-alt"></span>
                        <span>Dashboard</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-edit"></span>
                        <span>Semester Registration</span></a>
                      
                </li>
                <li>
                <a href="logout.php"><span class="las la-sign-out-alt">
                        <span>Logout</span></a>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                Dashboard 
                <h2 style="text-align: right;"><br><?php echo $_SESSION['name']; ?><h3 style="text-align: right;">STUDENT</h3><h4 style="text-align: right ;" ><b>Section-<?php echo $_SESSION['section'];?></b></h4></h4></h2>
            </h2> 
        </header>
        <main>
            <div class="cards" style="width: 100%;height: 80px;">
                <div class="card-single" >
                    <div>
                        <span class="las la-school"><br>Attendance Details</span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1></h1>
                        <span class="las la-sticky-note"><br>Exam Details</span>
                    </div>
                </div>
                <div class="card-single">
                    <a href="student_assign.php">
                   
                    <div>
                        
                        <h1></h1>
                        <span class="las la-newspaper"><br>Assignment</span>
                    </div>
               
                </a>
                </div>
                <div class="card-single">
                    <a href="event.php">
                    
                    <div>
                        <h1></h1>
                        <span class="las la-calendar-check"><br>Event Details</span>
                    </div>
              
                </a>
                </div>
              </div>
              </div>

              </div>
        </main>
    </div>
    
</body>
</html>
