<?php 
	 /**
	 * 
	 */
	 include('Model.php');
	 class Controller  
	 {	 	 
	 	function select()
	 	{
	 		$obj = new Model();  
	 		return $obj->select_data(); 
	 	}
	 	function insert()
	 	{
	 		//echo $ins;
	 		if(isset($_POST["submit"]))
	 		{
	 		  $username = $_POST["username"];
	 		  $pwd = $_POST["password"];
	 		  $obj = new Model();  
	 		  $obj->insert_data($username,$pwd); 
	 		}

	 	}
	 	function fileinsert()
	 	{
	 		if(isset($_POST['submit']))
	 		{
	 			if(isset($_FILES['img']))
	 			{
	 				//print_r($_FILES['img']);exit();
	 				if($_FILES['img']['type']=="image/jpg" || $_FILES['img']['type']=="image/jpeg" || $_FILES['img']['type']=="image/png" || $_FILES['img']['type']=="image/gif")
	 				{
	 					//move_uploaded_file($_FILES['img']['temp_name'],"uploads/".time().".jpg");
	 					$imgname="uploads/".time().".jpg";
	 					move_uploaded_file($_FILES["img"]["tmp_name"],$imgname);
	 					$obj = new Model();  
	 		  			$obj->insert_file_data($imgname); 
	 				}	
	 				//echo $img;exit();
	 			}

	 		}
	 	}


	 	function delete()
	 	{
	 		if(isset($_GET['uid']))
	 		{
	 			 $uid=$_GET['uid']; 
	 			 
	 			$obj = new Model();  
	 			$res=$obj->select_row($uid);
	 			//print_r($res);exit();
	 			//unlink($res['img']) 	
	 		  	$obj->deleterow($uid); 	
	 		  	header("location:index.php");
	 		}
			//header("location:index.php");
	 	}
	 	function edit()
	 	{
	 		$obj = new Model();  	 		
	 		if(isset($_POST["submit"]))
	 		{
	 		   $uname = $_POST["username"];
	 		   $pwd = $_POST["password"];
	 		   $uid=$_POST['id'];//exit();	 		       
	 		   $obj->update_data($uid,$uname,$pwd); 
	 		   header("location:index.php");
	 		}
	 		if(isset($_GET['uid']))
	 		{
	 			$uid=$_GET['uid'];	 			
	 		  	return $obj->select_row($uid); 	
	 		}
			 
	 	}

	 }	 	 
?>