<?php 
$target_dir="upload/";
$target_file=$target_dir . basename($_FILES["fileToUpload"]["name"]);
if (move_uploaded_file($FILES["fileToUpload"]["tmp_name"], $target_file)) {
	# code...
	echo "The file has been uploaded" . basename(($_FILES["fileToUpload"]["name"]));
}
else {
	echo "can not upload file";
}






 ?>