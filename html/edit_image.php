<?php
include "Auth/connection.php";
include "Auth/controllerUserData.php";
// Check if the form is submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve file data
    
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "images/".$filename;

    // Move uploaded file to desired folder
    if (move_uploaded_file($tempname, $folder)) {
        echo "File uploaded successfully.";
    } else {
        echo "Error uploading file.";
    }

   
$email=$_SESSION['email'];
    // Update the image path in the database
    $sql = "UPDATE usertable SET image='$folder' WHERE email='$email' ";


    if ($con->query($sql) === TRUE) {
        echo "Form data updated successfully.";
    } else {
        echo "Error updating record: " . $con->error;
    }

    // Close database connection
    $con->close();
} else {
    echo "Form submission method not allowed.";
}

