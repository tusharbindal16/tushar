<?php
$servername = "35.223.220.76";
$username = "root";
$password = "password";
$dbname = "testdb";
$email=$_POST["email1"];
$password=$_POST["pass2"];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO login (email,password)
VALUES ($email,$password)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
