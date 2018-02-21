<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<script type="bootstrap/js/bootstrap.min.js"></script>
<script type="bootstrap/js/jquery.min.js"></script>
</head>
<body>
	<h2><i>WELCOME TO THE OFFFICIAL STUDENT SITE</i></h2>
Enter your Marks Here:
<br><br>
<div style="width:;">
	<form>
	<table class="table table-bordered">
		<th>Mathematics</th>
		<th>English</th>
			<th>Kiswahili</th>
				<th>Chemistry</th>
					<th>Biology</th>
					<th>Physics</th>
						<th>C.R.E</th>
							<th>Computer</th>
			<tr>
				<td>80</td>
				<td>92</td>
				<td>75</td>
				<td>88</td>
				<td>79</td>
				<td>86</td>
				<td>90</td>
				<td>99</td>
			</tr><br><br>

	</table>
	<form>

	</form>
	<br>
	<?php 
$td1=80;
$td2=92;
$td3=75;
$td4=88;
$td5=79;
$td6=86;
$td7=90;
$td8=99;
echo $td1+$td2+$td3+$td4+$td5+$td6+$td7+$td8;
	 ?>
	 	<form method="GET">
	 		TOTAL MARKS:
	 		<input type="number" name="TOTAL">
	 		NO of SUBJECTS:
	 		<input type="number" name="NO of SUBJECTS"><br><br>
	 		<button type="submit" class="btn btn-warning">SUBMIT</button>
	 			<button type="reset" class="btn btn-danger">RESET</button>
	 	</form>
	 		<?php 

if (isset($_GET['TOTAL'])) {
	# code...
	$total=$_GET['TOTAL'];	
}
if (isset($_GET['NO of SUBJECTS'])) {
	# code...
	$subjects=$_GET['NO of SUBJECTS'];
}
$meanmarks=$total / $subjects;
if ($meanmarks>=80) {
	# code...
	echo "Grade A";
} else {
	# code...
	echo "Grade B";
}

	 		 ?>

</form>
</div>
</body>
</html>