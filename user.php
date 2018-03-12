<!DOCTYPE html>
<html>
<head>
	<title>Fetch</title>
</head>
<body>
	<table>
		<tr>
		<th>id</th>	
		<th>username</th>
		<th>password</th>
</tr>

<?php 
$conn=mysqli_connect('localhost','root','','laura');
$fetch=mysqli_query($conn,"SELECT * FROM ppeople");
while ($row=mysqli_fetch_assoc($fetch)) {
	# code...
	extract($row);
	echo "
	<tr>
<td>$id</td>
<td>$username</td>
<td><a href='delete.php?id=$id'>Delete</td>

</tr>";
}
 ?>
	</table>

</body>
</html>