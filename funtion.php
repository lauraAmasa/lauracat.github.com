<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<script type="bootstrap/js/bootstrap.min.js"></script>
<script type="bootstrap/js/jquery.min.js"></script>
</head>
<body>
<div class="jumbotron jumbotron-fluid">
	<h1>User-defined Functions</h1>
	<div class="well well-lg">
<p>an argument is a variable that comes immediately after the function name within parenthesis</p>
<?php 
function frank($ray,$bra){
echo $ray*$bra;
}
frank(30,22);
?>
</div>
<h3>Default arguments</h3>
<?php 
function migos($isaac=39){
echo "my name is benson and i'm a sychopath aged "  .$isaac;
}
migos();
 ?>
 <h4>Test Return</h4>
<?php 
function _allela($me,$sm,$gh){

 $red=$me/$sm*$gh;
 echo $red;
}
_allela(12,3,56);
  ?>
</div>
<div class="well well-lg">
	<h1>the return</h1>
<?php 
function lali($la,$lau,$sam){
$answer=$la-$lau+$sam;
return $answer;
}
echo lali(12,32,444);
?>
<?php 
function amy($one,$two){
$josh=$one/$two;
return $josh;
}
 echo amy(120,50);
?>


</div>
</body>
</html>