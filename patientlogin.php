<!DOCTYPE html>
<html>
<head>
	<title></title>
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<script type="bootstrap/js/bootstrap.min.js"></script>
<script type="bootstrap/js/jquery.min.js"></script>
<style type="text/css">
	.loginbox3{

	top: 50px;
	left: 50px;

width: 350px;
height: 300px;
box-sizing: border-box;
background-color:#61380B; 
margin-right: 100px;
margin-top: 80PX;
margin-left: 250PX;
text-align: center;
color: white;
}
</style>
</head>
<body style="background-image: url(pics/ward.jpeg); background-repeat: no-repeat;background-size: 100%;">
	<div class="loginbox3">
		<div>
			<br><br>
	<form method="post">
		Patient Names:
		<input type="" name="name" style="color: black;"><br><br>
		Registration Number:
		<input type="text" name="num" style="color: black;"><br><br>
		Symptoms:
		<input type="text" name="symptoms" style="color: black;" >
		<br><br>
		<button class="btn btn-warning" type="Submit">Submit</button>
</div>
</div>
	</form>

<?php 
$conn=mysqli_connect('localhost','root','','hospital');
 if (isset($_POST['Submit'])) {
 	$name=$_POST['name'];
 	$num=$_POST['num'];
 	 	$symptoms=$_POST['symptoms'];
 }
 if ($conn) {
 	# code...
 	echo "connection successfull<br>";
 }

 extract($_POST);
  	$query = "INSERT INTO `patients` (`patientnames`, `regno`, `symptoms`) 
  			  VALUES('$name','$num','$symptoms')";

if (mysqli_query($conn,$query)) {
	# code...
	echo "successfull<br>";
}
echo "unable to insert";

 ?>
</body>
</html>