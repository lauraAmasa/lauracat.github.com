<?php 
$servername="localhost";
$password="";
$db="Amasa";
$user="root";
$conn=mysqli_connect($servername,$user,$password,$db);
//checks connections
if (!$conn) {
	die("connection failed" . mysqli_connect_error());
	# code...
}
echo "connection successful";
 ?>