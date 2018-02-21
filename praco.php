<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-image: url(pics/images.jpeg)";>
<br>
<div style="margin-left: 30%; background-color: lightblue; width: 400px; margin-top: 200px; height: 200px;">
<form method="_GET" style="color: black;">
	WEIGHT:
	<input type="number" name="weight"><br><br>
	HEIGHT:
	<input type="decimal" name="height"><br>
	 <button style="background-color:violet;">SUBMIT</button>
	</form>
<?php 
echo "<br>";

if (isset($_GET['weight'])) {
	# code...
	$weight=$_GET['weight'];
}
if (isset($_GET['height'])) {
	# code...
	$height=$_GET['height'];
}
$bmi=$weight / $height;
if ($bmi<= 19.5) {
	# code...
	echo "underweight";}
	elseif ($bmi<= 25.5) {
		# code...
		echo "normal";
} else {
	# code...
	echo "Overweight";
}

 ?>
 <br><br>

</div>
</body>
</html>