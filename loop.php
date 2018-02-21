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
	<h1>PATTERN</h1>	
	</div>
	<?php 
for ($i=7; $i >=1 ; $i--) { 
	# code...
	echo "*";
	for ($k=1; $k<=$i ; $k++) { 
		# code...
		echo "*";
		if ($k<$i) {
			# code...
			echo " ";
		}
	}
	echo "<br>";
}
	 ?>


 
	<?php

	 

	echo "<table border=2 width=30%>";

	 

	for ($i = 1; $i <= 11; $i++ ) {

	$k=1;

	   echo "<tr>";

	   if($i==1)

	    echo "<td>x</td>";

	   else{

	   $k=$i-1;

	   echo "<td>$k</td>";

	   }

	    

	    echo "<td>".$k ."</td>";

	     

	    for ( $j = 2; $j <= 10; $j++ ) {

	 

	            echo "<td>".$k * $j."</td>";

	 

	        }

	 

	    echo "</tr>";

	 

	}

	     

	echo "</table>";

	 

	?>



 
</body>
</html>