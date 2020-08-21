<?php
	/**
	* 
	*/
	class  Model
	{
		
		function __construct()
		{
			mysql_connect("localhost","root","") or die(mysql_error());
			mysql_select_db("mvc") or die(mysql_error()); 
		}
		function select_data()
		{
			return mysql_query("select * from user") ;
		}
		function insert_data($uname,$pwd)
		{
			$sql="insert into user(uname,pwd) values('$uname','$pwd')";
			mysql_query($sql) or die(mysql_error());
		}
		function insert_file_data($imgname)
		{
			$sql="insert into user(img) values('$imgname')";
			mysql_query($sql) or die(mysql_error());
		}
		function deleterow($uid='')
		{
			return mysql_query("delete  from user where uid='$uid'") ;
		}
		function select_row($uid) 	
		{
			 $res=mysql_query("select * from user") ;
			 return mysql_fetch_assoc($res);
		}
		function update_data($uid,$uname,$pwd)
		{
			//echo $uid.'/'.$uname.'/'.$pwd;exit();
			$sql="update user set uname='$uname',pwd='$pwd' where uid='$uid'";
			 mysql_query($sql);	
			 //mysql_last_query();exit();
		}
	}
?>