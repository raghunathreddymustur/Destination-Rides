<?php

include("../connection.php");

$email = $_POST["email"];

$query = "SELECT `user_email` FROM `user` WHERE `user_email` = '".$email."'";
		$result = mysqli_query($connection, $query);
if($row = mysqli_fetch_array($result))
		{
			echo 'no';
			
		}
		
		else
		{
	$name = $_POST["name"];
		$cnumber = $_POST["cnumber"];
		
		$age = $_POST["age"];
		$lnumber = $_POST["lnumber"];
		$city = $_POST["city"];
		$address = $_POST["address"];
		$password = $_POST["password"];
		
		$query2 = "INSERT INTO `user`(`user_name`, `user_contact`, `user_email`, `user_age`, `user_license_no`, `user_city`, `user_address`, `user_password`) VALUES ('".$name."', '".$cnumber."', '".$email."', '".$age."', '".$lnumber."', '".$city."', '".$address."', '".$password."')";
		if(mysqli_query($connection, $query2))
		{
		echo 'User Details Submitted Successfully Now You can Sig-in';
		}
		else
		{
		echo 'No Data';
		}
		}
?>
