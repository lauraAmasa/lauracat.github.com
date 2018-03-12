<!DOCTYPE html>
<html>
<head>
	<title>LogInPage</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<script type="bootstrap/js/bootstrap.min.js"></script>
<script type="bootstrap/js/jquery.min.js"></script>
<style type="text/css">
	body{background-image: url(pics/hos.jpeg); background-repeat: no-repeat; background-size: 100%;}
.loginbox{
	position: absolute;
	top: 50px;
	left: 50px;
	transform: translate(-50px,-50px);
width: 350px;
height: 350px;
box-sizing: border-box;
background-color:#0B2F3A; 
margin-left: 50px;
margin-top: 115PX;

}
.user
{
	width: 100px;
	height: 100px;
	border-radius: 50%;
	overflow: hidden;
	position: absolute;
	top: calc(-100px;/2)
	left:calc(50% * 50%);

}
.loginbox2{

	top: 50px;
	left: 50px;

width: 350px;
height: 350px;
box-sizing: border-box;
background-color:#0B2F3A; 
margin-right: 50px;
margin-top: 0PX;
float: right;
color: white;


}


</style>
</head>
<body>
<div class="container fluid">
			<h1 style="font-family: kinnari; color: #black"><i><b>Aga Khan Hospital</b></i></h1><br>
	<div class="loginbox">

<form style="font-size: 10px; color: white;" action="patientlogin.php" >
	<p style="font-size: 20px;"><u>PATIENT LOGIN:</u></p>
	Full Names:
	<input type="text" name="name" style="color: black;"><br><br>
    Registration Number:
	<input type="text" name="Registration Number" style="color: black;"><br><br>
	E-Mail:
<input type="text" name="E-Mail" style="color: black;"><br><br>
Telephone Number:
		<input type="text" name="Telephone Number" style="color: black;"><br><br>
		<button type="submit" class="btn btn-warning">LogIn</button>
		<button type="reset" class="btn btn-success">Reset</button>
</form>	
	</div>
</div>
<br><br>

<div class="container fluid">
	<div class="loginbox2">
		<form action="doctorlogin.php">
				<p style="font-size: 20px;"><u>DOCTOR LOGIN:</u></p>
     Names:
     <input type="text" name="" style="color: white;"><br><br>
     Registration Number:
     <input type="number" name="" style="color: white;"><br><br>
     E-Mail:
     <input type="text" name="" style="color: white;"><br><br>
Password:
<input type="Password" name="Password" style="color: white;"><br><br>
<button type="submit" class="btn btn-success" >LogIn</button>
		<button type="reset" class="btn btn-danger">Reset</button>


		</form>
	</div>

</div>
</body>
</html>