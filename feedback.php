<?php
$servername = "localhost";
$username = "f34ee";
$password = "f34ee";
$dbname = "f34ee";

// Set up connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

	$name = $_GET['name'];
	$email = $_GET['email'];
	$phonenum = $_GET['phonenum'];
	$comments = $_GET['comments'];
	$sql= "INSERT INTO contact_table(userid, name,email,phonenum,comments) VALUES (NULL, '$name', '$email', '$phonenum', '$comments')";
	mysqli_query($conn,$sql);
	
	header("Location:contact.php?feedback=success");
?>