<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signupform";


// Create connection 

$conn = mysqli_connect("$servername", $username, $password, $dbname);

//check connection 
if ($conn === false) {
    die("ERROR: Could not connect." . mysqli_connect_error());
}

// Taking data from user

$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
$email = $_REQUEST['email'];
$mobile = $_REQUEST['mobile'];
$address = $_REQUEST['address'];
$gender = $_REQUEST['gender'];


// We are going to insert the data into our sampleDB table

$sql = "INSERT INTO googleform(firstname,lastname,email,mobile,address,gender)  VALUES('$firstname','$lastname','$email','$mobile','$address','$gender')";

// Check if the query is successful
if (mysqli_query($conn, $sql)) {
    echo "<h3>data stored in a database successfully." . " Please browse your localhost php my admin" . " to view the updated data</h3>";
} else {
    echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

?>