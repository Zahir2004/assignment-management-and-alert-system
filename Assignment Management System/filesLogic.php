<?php

// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'files');

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
        <strong>You file extension must be .zip, .pdf or .docx</strong> You should check in on some of those fields below.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>";
        // $extention=true;//"You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>File too large!</strong> You should check in on some of those fields below.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>";
        // echo "File too large!";
        $size=true;
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql =  "INSERT INTO files (name, size) VALUES ('$filename', $size)";
            if (mysqli_query($conn, $sql)) {
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>File uploaded successfully</strong> You should check in on some of those fields below.
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                </button>";
                // echo "File uploaded successfully";
               // $success=true;
            }
        } else {
            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Failed to upload file.</strong> You should check in on some of those fields below.
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                </button>";
            // echo "Failed to upload file.";
           // $success=false;
        }
    }
}

// download file
if (isset($_GET['file_id'])) {
  $id = $_GET['file_id'];

  // fetch file to download from database
  $sql = "SELECT * FROM files WHERE id=$id";
  $result = mysqli_query($conn, $sql);

  $file = mysqli_fetch_assoc($result);
  $filepath = 'uploads/' . $file['name'];

  if (file_exists($filepath)) {
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