<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<script type="bootstrap/js/bootstrap.min.js"></script>
<script type="bootstrap/js/jquery.min.js"></script>
</head>
</head>
<body>
	<div>
		<p><h2>Constants</h2> 


		</p>
	<form method="GET" style="margin-left: 50px; margin-top: 20px;">
		FirstName:
		<input type="text" name="" required=""><br><br>
		SecondName:
		<input type="text" name="" required=""><br><br>
		LastName:
		<input type="text" name="" required=""><br><br>
		E-Mail:
		<input type="text" name="" required=""><br><br>
		Password:
		<input type="Password" name="pw1"><br><br>
		Confirm Password:
		<input type="Password" name="pw2"><br><br>
		
		<?php 
$lau=$_GET['pw1'];
$lauu=$_GET['pw2'];
if ($lau===$lauu) {
	# code...
	echo "";
} else {
	# code...
	echo "Wrong Password";
}
 ?>
 <br><br>
 <button class="btn btn-success" type="submit">Submit</button>
		<button class="btn btn-danger" type="reset">Reset</button>
	</form>
</div>
</body>
</html>