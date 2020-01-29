<?php
$servername = "35.223.220.76";
$username = "newr";
$dbpass = "password";
$dbname = "testdb";
$email=$_POST["email1"];
$pass=$_POST["pass2"];

$conn = new mysqli($servername, $username, $dbpass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Email,Pass FROM register WHERE Email='".$email."'" AND Pass='".$pass."'";
$result = $conn->query($sql);
if($result->num_rows >= 1) {
    echo "Login Successfully";
} 
$conn->close();
?>
