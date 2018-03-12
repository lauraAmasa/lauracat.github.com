<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<script type="bootstrap/js/bootstrap.min.js"></script>
<script type="bootstrap/js/jquery.min.js"></script>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>
</head>
<body style="background-image: url(images); background-size: 100%; background-repeat: no-repeat;">
		<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>
		<form method="GET" style="margin-left: 250px; margin-top: 110px; border:solid; width: 400px;">
			 <?php include('errors.php') ?>
		UserName:
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

</body>
</html>