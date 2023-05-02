
<?php 
 session_start();
 require 'db_auth.php';
 
 require 'dbconnect.php';
  $rollno=$_SESSION['username'];
 
$find_assign = "SELECT * FROM `student` JOIN assign WHERE student.section=assign.section AND rollno= '$rollno' ";
$result = mysqli_query($conn, $find_assign);
$num= mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">"
   <link rel="stylesheet" href="ta.css">
    <title>Student Assignment</title>
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
                <td><b>Subject</b></td>
                <td><b>Due_Date</b></td>
                <td><b>Action</b></td>
            </tr>
            <?php
            if($num!=0){
             while( $row =mysqli_fetch_assoc($result)){
              echo  "<tr>
                   
                    <td>". $row['title']." </td>
                    <td>". $row['subname']." </td>
                    <td>". $row['deadline']."</td>
                    
                    <td> <a href='student_assign.php?file_id=".$row['slno']."'>  <span class='las la-download'></span></a></td>
                </tr> ";
                }
            }
            else {
                 echo  "<tr>
                   
                    
                    
                    <td colspan='4'> NO ASSIGNMENT</td>
                    </tr> ";


          

          
            }
            ?>
           
           
        </table>
    </div>
</body>
</html>
<?php
$sql = "SELECT * FROM assign";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);


if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];
  
    // fetch file to download from database
    $sql = "SELECT * FROM assign WHERE slno='$id' ";
    $result = mysqli_query($conn, $sql);
  
    $file = mysqli_fetch_assoc($result);
    echo $file['name'];

    $filepath = 'uploads/' . $file['name'];
  
    if (file_exists($filepath)) {
        echo "yes";
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        readfile('uploads/' . $file['name']);
    }
}
?>
