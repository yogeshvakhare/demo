<?php
	include('Controller.php');
	$obj = new Controller();
	//$obj->update();
	$row=$obj->edit();
	//print_r($row);exit();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ajax</title>	 	 
</head>
<body>
<center>
<div id="box">
	<h1>Update User</h1>

	<form method="post">
	<input type="hidden" name="id" value="<?php echo $row['uid']?>">
	<table>
		<tr>
			<th>UserName</th><td><input type="text" name="username" value="<?php echo $row['uname']?>"></td>
		</tr>
		<tr>
			<th>Password</th><td><input type="text" name="password" value="<?php echo $row['pwd']?>"></td>
		</tr>
		<tr>
			<th></th><td><input type="submit"    name="submit" value="update"></td>
		</tr>
	</table>	
	<div id="result1"></div>	
	</form>
	
</div>
</center>
</body>
</html>
