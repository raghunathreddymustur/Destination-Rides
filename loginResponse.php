<?php
include("connection.php");
session_start();

if($_POST["login"] == "admin")
{
$email = $_POST["email"];
$password = $_POST["password"];
$_SESSION["admin_email"] = $email;
$_SESSION["admin_password"] = $password;

$query = "SELECT  `name`,`admin_name`, `admin_password` FROM `admin`";
		$result = mysqli_query($connection, $query);
		if($row = mysqli_fetch_array($result))
		{
			$_SESSION["name"] = $row['name'];
			if($row['admin_name'] == $email && $row['admin_password'] == $password)
			{
				echo "admin";
			}

			else
		{
			echo "Please Enter Correct Password";
		}
		}
		else
		{
			echo "Please Enter Correct Email Id";
		}
		
}
		
else if($_POST["login"] == "user")
{		
		$email = $_POST["email"];
$password = $_POST["password"];
$_SESSION["user_email"] = $email;
$_SESSION["user_password"] = $password;

$query = "SELECT `user_email`, `user_password`, `user_name`, `rid`, `user_contact` FROM `user` WHERE `user_email` = '".$email ."'";
		$result = mysqli_query($connection, $query);
		if($row = mysqli_fetch_array($result))
		{
			$_SESSION["user_name"] = $row['user_name'];
			$_SESSION["rid"] = $row['rid'];
			$_SESSION["user_contact"] = $row['user_contact'];
			
			if($row['user_email'] == $email && $row['user_password'] == $password)
			{
				echo "user";
			}
			else
			{
				echo "Please Enter Correct Password";
			}
			
			
		
		
		}
			else
		{
			echo "Please Enter Correct User Email Id";
		}
		
}
		
else
{		
		$email = $_POST["email"];
$password = $_POST["password"];
$_SESSION["vendor_email"] = $email;
$_SESSION["vendor_password"] = $password;

$query = "SELECT `vname`, `email`, `password` FROM `vendor` WHERE `email` = '".$email ."'";
		$result = mysqli_query($connection, $query);
		if($row = mysqli_fetch_array($result))
		{
			$_SESSION["vendor_name"] = $row['vname'];
			
			if($row['email'] == $email && $row['password'] == $password)
			{
				echo "vendor";
				}

			else
		{
			echo "Please Enter Correct Password";
		}
		
		}
					else
		{
			echo "Please Enter Correct Email Id";
		}
		
}
?>