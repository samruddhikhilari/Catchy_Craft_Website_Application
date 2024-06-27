<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
           global $username ;
           global  $uemail ;
           global $contact ;
           global  $address;
           global $city;
           global  $udob;

    $username = $_POST["username"];
    $uemail = $_POST["email"];
    $contact = $_POST["contact"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $udob = $_POST["dob"];

    $servername = "localhost";
	$uname = "root";
	$password = "";
	$dbname = "CachyCraft";

	// Create connection
	$conn = new mysqli($servername, $uname, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

    $updateQuery = "UPDATE buyers SET  name='$username', email='$uemail', contact_no='$contact', address='$address', city='$city', dob='$udob' WHERE email='$uemail'";

    if ($conn->query($updateQuery)) {
        echo "Profile updated successfully";

    } else {
        echo "Error updating profile: " . $conn->connect_error;
    }
}
?>
