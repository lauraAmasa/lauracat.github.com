<?php
$conn=mysqli_connect('localhost','root','','laura');
if (isset($_GET['id'])) {
	# code...
	extract($_GET);
	mysqli_query($conn,"delete from ppeople where id=$id");
}
header('location:user.php');

 ?>