<?php
include('Controller.php');
$obj = new Controller();
$obj->fileinsert(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>File Uplod</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
<table>
	<tr>
		<th>File Upload</th><td><input type="file" name="img"></td>
		<th></th><td><input type="submit" name="submit" value="submit" ></td>
	</tr>
</table>
</form>
</body>
</html>