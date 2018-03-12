<?php 

if (isset($_POST['username'])); {
	# code...
	//this is used to get the values passed from the user input
	$username=$_POST['username'];
	$password=$_POST['pass'];
	//adding this next line to  help prevent mysql injection
	$username=stripcslashes($username);
	$password=stripcslashes($password);
	$username=mysql_real_escape_string($username);
	$password=mysql_escape_string($password);
	//connection to server and database
	mysql_connect("localhost","root","");
	mysql_select_db("Amasa");
	//querying our database
	$result=mysql_query("select * from student where username='$username' and password='$password'") or die ("connection failed" . mysqli_connect_error());
	//fetch the queried data
	if ($row['username']==$username && $row['password']) {
		echo "loginSuccessful" . $row['username'];
		# code...
	}else{
		echo "LogIn Failed";
	}
}

 ?>