<?php
session_start();

if (!isset($_SESSION['login'])|| $_SESSION['login']!=true) 
{
    header('location: index.php');
}

require 'dbconnect.php';

$sql=" SELECT * FROM teacher NATURAL JOIN section";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIETU</title>
    <link rel="stylesheet"href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">"
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
                    <a href="teacher_dashboard.php" class="active"><span class="las la-tachometer-alt"></span>
                        <span>Dashboard</span></a>
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
                <h2 style="text-align: right;"><br><?php echo $_SESSION['name']; ?><h3 style="text-align: right;">TEACHER</h3></h2>
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
                    <a href="teacher_das1.php">
                    
                    <div>
                        
                        <h1></h1>
                        
                        <span class="las la-newspaper"><br>Assignment</span>
                    </div>
                    </a>
                </div>
                <div class="card-single">
                    <a href="event_admin.php">
                    
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