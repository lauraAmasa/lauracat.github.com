<!DOCTYPE html>
<html>
<head>
	<title>Arrays</title>
	<style type="text/css">
		h1{font-family: algerian;
			color: lightblue;}




	</style>
</head>
<body>
<?php 
$kala="<h1>My collection has<h1>";
echo "<br>";
$brands=array("addidas","nike","puma","gucci","ballmain","yeezy");
echo count($brands);
echo $kala . $brands[0]; 
echo "<br>";
rsort($brands);
$student=count($brands);
for ($i=0; $i <$student ; $i++) { 
	# code...
	echo "<br>";
}
?>
<br>
<h2>Associative Arrays</h2>
<?php 

$ericmanu=array("erick"=>"20","manu"=>"16");
echo "my name is eric and i am" . $ericmanu['eric'] . "and i sit next to manu who is" . $ericmanu['manu'];
  ksort($ericmanu); 
  foreach ($ericmanu as $key => $value) {
  	# code...
  	echo "eric " . $key . " i am " . $value;
  	echo "<br>";
  }
 ?>
 <?php 
$johnny=40;
$fortunes=18;
if ($fortunes>10 xor $johnny>100) {
	# code...
	echo "false";
} else {
	# code...
	echo "true";
}

  ?>
</body>
</html>