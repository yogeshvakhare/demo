<?php
	include('Controller.php');
	$obj = new Controller();
	$obj->insert();
	$obj->delete();
	$res=$obj->select();
	//print_r($res);exit();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ajax</title>	 
	<script type="text/javascript">
		function  deleteRecord(id='')
		{
			//alert(id);
			ch = confirm('Are you sure !');
			if(ch)
			{
				window.location="index.php?uid="+id;
			}
		}
		function  editRecord(id='')
		{
			//alert(id);
			 
				window.location="edit.php?uid="+id;
			 
		}
	</script>
</head>
<body>
<center>
<div id="box">
	<h1>Insert User</h1>

	<form method="post">
	<table>
		<tr>
			<th>UserName</th><td><input type="text" name="username"></td>
		</tr>
		<tr>
			<th>Password</th><td><input type="text" name="password"></td>
		</tr>
		<tr>
			<th></th><td><input type="submit"    name="submit" value="Insert"></td>
		</tr>
	</table>	
	<div id="result1"></div>	
	</form>
	
</div>
<table border="2" cellpadding="8" cellspacing="3">
	<tr>
		<th>Sr No</th>
		<th>User Name</th>
		<th>PWD</th>
		<th>Action</th>
	</tr>
	<?php
		$cnt=1;
		while ($row=mysql_fetch_assoc($res)) 
		{
	?>
	
	<tr>
		 <td><?php echo $cnt;?></td>
		 <td><?php echo $row['uname'];?></td>
		 <td><?php echo $row['pwd'];?></td>
		 <td>
		 <a href="javascript::void(0)" onclick="deleteRecord(<?php echo $row['uid'];?>)">Delete</a>
		 <a href="javascript::void(0)" onclick="editRecord(<?php echo $row['uid'];?>)">Edit</a>
		 </td>
	</tr>
	<?php
		$cnt++;		 
		}

		?>
</table>
</center>
</body>
</html>