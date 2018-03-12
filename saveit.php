aaaaaaaaaaaaaaaaaaaaaa333<?php 
if (isset($_POST['username'])) {
 	# code...
 	$conn=mysqli_connect('localhost','root','','laura');

if (!$conn) {
	# code...
	echo "Failed to connect to database";
} else {
	# code...
	extract($_POST);
	$insertme="INSERT INTO ppeople (id,username,password VALUES (NULL,'$username','$password')" ;
	$me=mysqli_query($conn,$insertme);
	if ($me) {
		# code...
		echo "saved successfully";
	}


}
 } 
 ?>
