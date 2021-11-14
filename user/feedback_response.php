<?php
session_start();
include("../connection.php");
date_default_timezone_set('Asia/Kolkata');
$date = date('d-m-Y H:i');
if(isset($_POST['submit']))
{
	$rid = $_SESSION["rid"];
	$feedback = $_POST['feedback'];
	$query1 = "INSERT INTO `feedback`(`rid`, `message`, `date_time`) VALUES ('".$rid."', '".$feedback."', '".$date."')";
		if(mysqli_query($connection, $query1))
		{
		echo "<script>alert('Thank you for your Feedback!');</script>";
		echo "<script>window.location.href = 'WriteFeedback.php';</script>";
		}
		
	
}
?>