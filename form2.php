<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="GET">
	<input type="Password" name="Password">
	<button>submit</button>
</form>
<?php 
$psd=$_GET['Password'];
if (strlen($psd)<8) {
	echo "Please use atleast 8 characters";
}
 ?>
</body>
</html>