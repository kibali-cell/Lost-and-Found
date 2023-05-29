<?php
	include('config.php');
	session_start();
	$user_check=$_SESSION['login_user'];
	
	$ses_sql=mysqli_query($con, "select * from usermaster where EmailID='$user_check' ");
	
	$row=mysqli_fetch_array($ses_sql);
	
	$login_session=$row['EmailID'];
	
	if(!isset($login_session))
	{
		header("Location: userlogin.php");
		
	}
?>