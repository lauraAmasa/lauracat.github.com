<!DOCTYPE html>
<html>
<head>
	<title></title>
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<script type="bootstrap/js/bootstrap.min.js"></script>
<script type="bootstrap/js/jquery.min.js"></script>
<style type="text/css">
	ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
.tb
{width: 500px;
margin-left: 250px;



}



</style>
</head>
<body style="background-color: lightblue;">
<div>
			<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>
	<h3 style="color: kinnari;"><B><i>WELCOME DOCTOR!</i></B></h3>
</div>
<img src="pics/doc1.jpeg">
<br>
<br>

  <table border="1px" class="tb">
    <tr>
    <th>id</th> 
    <th>patient</th>
    <th>Regno</th>
    <th>symp</th>
</tr>

<?php 
$conn=mysqli_connect('localhost','root','','hospital');
$fetch=mysqli_query($conn,"SELECT * FROM patients");
while ($row=mysqli_fetch_assoc($fetch)) {
  # code...
  extract($row);
  echo "
  <tr>
<td>$id</td>
<td>$patientnames</td>
<td>$regno</td>
<td>$symptoms</td>
<td><a href='delete.php?id=$id'>Delete</td>
</tr>";
}
 ?>
  </table>
</body>
</html>