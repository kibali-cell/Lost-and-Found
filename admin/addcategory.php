<?php

			include('loginvarifier.php');
	
	include('config.php');
	if(!isset($_POST['txtCategory']) or $_POST['txtCategory']==NULL)
	{
		echo "<script>alert('Please Provide Data in TextBox')</script>";
		header( "refresh:0; url=Setting.php" );
	}
	else
	{
		$query="insert into categorymaster(CategoryName) values('".$_POST['txtCategory']."')";
		$result=mysqli_query($con,$query) or die(mysqli_error());
		if($result)
		{
			
			echo "<script>alert('Successfully Added');</script>";
			header( "refresh:0; url=Setting.php" );			
		}		
	}
	
?>