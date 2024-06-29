<?php

// Check if the form is submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $designation = $_POST['Designation'];
    $qualification = $_POST['qualification'];
    $gender=$_POST['gender'];
    $phoneNumber = $_POST['phoneNumber'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $zipCode = $_POST['zipCode'];
    


    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "doctor"; 

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "UPDATE usertable SET firstName='$firstName', lastName='$lastName', email='$email', Designation='$designation', qualification='$qualification', gender='$gender', phoneNumber='$phoneNumber', address='$address', state='$state', zipCode='$zipCode' WHERE email='$email' "; // Assuming id=1 is the identifier for the record to update

    if ($conn->query($sql) === TRUE) {
        echo "Form data updated successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
} else {
    
    echo "Form submission method not allowed.";
}

