<!DOCTYPE html>
<html>
<head>
	<title>FILES</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<script type="bootstrap/js/bootstrap.min.js"></script>
<script type="bootstrap/js/jquery.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="jumbotron">
			<p>What is a file?</p>
			<q>A file refers to an object in a computer that is used to store information,settings or even commands</q>
			
		</div>
	<?php 
$dee=fopen("dee.txt","w") or die("unable to open file");
$txt="i love class scala\n";
fwrite($dee, $txt);
$txt="really\n";
fwrite($dee, $txt);
fclose($dee);
	 ?>
	 <?php 
$dee=fopen("dee.txt", "r") or die("unable to open file");
echo fread($dee, filesize("$dee.txt"));
fclose($dee);
	  ?>
	  <br><br>
	  <?php 
define("lauu", "<h1>my name is lauu</h1>");
echo lauu;



	   ?>

	</div>


</body>
</html>