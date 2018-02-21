<!DOCTYPE html>
<html>
<head>
	<title>revision</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<script type="bootstrap/js/bootstrap.min.js"></script>
<script type="bootstrap/js/jquery.min.js"></script>
</head>
<body>
	<div class="container container-fluid">
	<h2>revision revision</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<div class="jumbotron">
		<?php 
$frank=19;
$brian=18;
$answer=$frank*$brian;
echo $answer;
 ?>
 <h3>constant</h3>
 <?php 
define("lau", "55" ,true);
echo lau;
echo "<br>";
  ?>
  <br>
  <?php 
$date=30;
if ($date!==30) {
	# code...
	echo "today is not 22<sup>nd</sup>";
} else {
	# code...
	echo "today is 22<sup>nd</sup>";
}
   ?>
<br><br>
   <form method="GET">
   	NumOne:
   	<input type="number" name="numone" required>
   	NumTwo:
 	<input type="number" name="numtwo" required>
 	<br><br>
 	<?php 
$ed=$_GET['numone'];
$de=$_GET['numtwo'];
$beast=$ed/$de;
echo $beast;
?>
 	 <br><br>
 	<button class="btn btn-success">submit</button>
	<button class="btn btn-danger">reset</button>
   </form>
   <h4>Else If</h4>
<?php 
$niki=32;
$Una=44;
if ($Una>=50 && $niki<=40) {
	# code...
	echo "free";}
	elseif ($Una>=50 || $niki<=40) {
		# code...
			echo "Marry but";}
		elseif ($Una>=50 xor $niki<=40) {
			# code...
			echo "Go on";
		}
	else {
	# code...
	echo "not happening";
}
 ?> 
 <h3>Form Validation</h3>
<form>
	Name:
	<input type="text" name="name"><br><br>
	E-Mail:
<input type="text" name="E-Mail"><br><br>
Password:
<input type="Password" name="PsdOne"><br><br>
Confirm Password:
<input type="Password" name="PsdTwo"><br><br>
<?php 
$ri=$_GET['PsdOne'];
$a=$_GET['PsdTwo'];
if ($ri===$a) {
	# code...
	echo "";
} else {
	# code...
	echo "Password Mismatch";
}

 ?>
 <br>
<button class="btn btn-success">Log In</button>
</form>
	</div>

</div>
</body>
</html>