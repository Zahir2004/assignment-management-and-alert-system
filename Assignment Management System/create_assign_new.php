<?php

// connect to the database
require 'dbconnect.php';
session_start();
require 'db_auth.php';
$empid=$_SESSION['empid'];
$fetch_sec_id = "SELECT * FROM `section` WHERE empid='$empid'";
$arr = mysqli_query($conn,$fetch_sec_id);
$fetch_subject  = "SELECT * FROM `subject` WHERE emp='$empid'";
$arr2 = mysqli_query($conn,$fetch_subject);
$arr1 = mysqli_query($conn,$fetch_subject);




// while( $row =mysqli_fetch_assoc($arr)){
//   echo $row['section'];
// }
// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>You file extension must be .zip, .pdf or .docx</strong> 
        
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
        ";
        // $extention=true;//"You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>File too large!</strong> 
       
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
        ";
        // echo "File too large!";
        $size=true;
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
                $title=$_POST['tile'];
                $sectio=$_POST['section'];
                $sid=$_POST['sid'];
                $dat=date('y-m-d',strtotime($_POST['date']));
                $sname=$_POST['sname'];
                

            $sql =  "INSERT INTO `assign` (`empid`,  `title`, `section`, `subject`, `name`, `deadline`, `subname`, `size`) VALUES ('$empid', '$title', '$sectio', '$sid ', '$filename', '$dat', '$sname', '$size')";
  
            if (mysqli_query($conn, $sql)) {
                
                
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>Assignment uploaded successfully</strong> 
               
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                </button>"
                ;
                // echo "File uploaded successfully";
               // $success=true;
            }
        } else {
            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Failed to upload file.</strong> 
                
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                </button>
                ";
            // echo "Failed to upload file.";
           // $success=false;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Files Upload and Download</title>
  </head>
  <body>
    <div>
      <div>

        <a href="teacher_das1.php"><span><button>Close</button></span></a>
      </div>
    </div>
    <?php 
    
    
     ?>
</div>
    <div class="container">
      <div class="row">
        <form action="create_assign_new.php" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="text" name="tile" placeholder="TITLE" required><br><br>
          <select name="section" id="section" style="
              padding-left: 10px;
              padding-right: 171px;
              padding-bottom: 3px;">
              <option select required >SECTION</option>
          <?php
          while($row_no=mysqli_fetch_assoc($arr)){
          
          ?>
            <option value="<?php echo $row_no['section'];?>"><?php echo $row_no['section'];?></option>
            <?php
          }
            ?>
              
          </select><br><br>
            <!-- <input type="text" name="section" placeholder="SECTION" required> -->
            <select name="sid" id="ID" style="
              padding-left: 10px;
             padding-right: 210px;
            padding-bottom: 3px;">              
              <option value="sid">ID</option>

              <?php
               while($row_no1=mysqli_fetch_assoc($arr1)){
          
          ?>
              <option value="<?php echo $row_no1['sid']; ?>"><?php echo $row_no1['sid']; ?></option>
              <?php
               }
            ?>
              </select><br><br>

            <!-- <input type="text" name="sid" placeholder="ID" required><br><br> -->
            <select name="sname" id="sname" style="
              padding-left: 10px;
             padding-right: 135px;
            padding-bottom: 3px;">
              
              <option value="sname">SUBJECT Name</option>
              <?php
          while($row_no2=mysqli_fetch_assoc($arr2)){
          
          ?>
              <option value="<?php echo $row_no2['sname']; ?>"><?php echo $row_no2['sname']; ?></option>
              <?php
              }
              ?>

          </select><br><br>
            <!-- <input type="text" name="sname" placeholder="NAME"  required><br><br> -->
           
            <input type="date" name="date" placeholder="Due Date" required><br><br>
            
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save">upload</button>
        </form>
      </div>
    </div>
  </body>
</html>