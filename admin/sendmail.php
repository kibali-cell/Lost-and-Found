<?php  
		include('loginvarifier.php');
if((isset($_POST['txtTo'])) and (isset($_POST['txtMessage'])) and (isset($_POST['txtFrom'])))
{
		$to = $_POST['txtTo'];
		$from=$_POST['txtFrom'];
		$subject = 'Replay from Lost And Found';  
		$message = $_POST['txtMessage'];  
		mail($to, $subject, $message);  
		echo "Send Sucessfully";
		include('config.php');
		$query="Insert into replaymaster(MessageTo,MessageFrom,Message) values('{$to}','{$from}','{$message}')";
		$result=mysqli_query($con,$query) or die(mysqli_error());
		header('location:messages.php');
}
else
{
		echo "Something was missing";	
		header('location:messages.php');	
}
?>   
