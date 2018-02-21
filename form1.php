<!DOCTYPE html>
<html>
<head>
	<title></title>
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<script type="bootstrap/js/bootstrap.min.js"></script>
<script type="bootstrap/js/jquery.min.js"></script>
</head>
<body>
	<h2>Registration Form</h2>
	<form method="GET" action="form2.php">
		First name:
	<input type="text" name="name" required="">
	Last name:
<input type="" name="" required=""><br>
<br>
Middle Name:
<input type="" name="" required=""><br>
<br>
D.O.B:
<select>
	<option>MM</option>
<option value="january">january</option>
<option value="february">february</option>
<option value="march">march</option>
<option value="april">april</option>
<option value="may">may</option>
<option value="june">june</option>
<option value="july">july</option>
<option value="august">august</option>
<option value="september">september</option>
<option value="october">october</option>
<option value="november">november</option>
<option value="december">december</option>
</select>
<select>
	<option>DD</option>
	<option value="1-10">1-10</option>
<option value="11-20">11-20</option>
<option value="20-30">20-30</option>
<option value="31">31</option>
</select>
<input type="text" name="Year" value="YY" required="">
<br><br>

Gender:<br>
Female
<input type="radio" name="Gender" value="Female" required=""><br>
Male
<input type="radio" name="Gender" value="Male" required=""><br>
Other/choose not to state
<input type="radio" name="Gender" value="Other" required=""><br>
<br>
Phone Number:
<select>
	<option>+254</option>
<option>+255</option>
<option>+256</option>
<option>+260</option>
<option>+237</option>
</select>
<input type="text" name="phone number" required="">
<br><br>
E-Mail:
<input type="text" name="E-Mail" required=""><br><br>
Password:
<input type="Password" name="Password" required=""><br><br>
Confirm Password:
<input type="Password" name="Password" required=""><br><br>
<button class="btn btn-danger" type="reset">Reset</button>
<button class="btn btn-Success" type="Submit">Submit</button><br>
	</form>
	<br><br>


</body>
</html>