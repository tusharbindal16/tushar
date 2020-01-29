<?php
$servername = "35.223.220.76";
$username = "newr";
$dbpass = "password";
$dbname = "testdb";
$fname=$_POST["First_name"];
$lname=$_POST["Last_name"];
$dob=$_POST["DOB"];
$email=$_POST["val"];
$mobile=$_POST["phone"];
$gen=$_POST["gender"];
$hnumber=$_POST["h_no"];
$local=$_POST["locality"];
$city=$_POST["city"];
$state=$_POST["state"];
$pass=$_POST["pass1"];

$conn = new mysqli($servername, $username, $dbpass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Email FROM register WHERE Email='".$email."'";
$result = $conn->query($sql);
if($result->num_rows >= 1) {
    echo "Email or Username already exist, try something else.";
} else {

        $nsql = "INSERT INTO register(FirstName,LastName,DOB,Email,Phone,GENDER,HouseNumber,Locality,city,State,Pass)
        VALUES ('$fname','$lname','$dob','$email','$mobile','$gen','$hnumber','$local','$city','$state','$pass')";

        if ($conn->query($nsql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
}
$conn->close();
?>
