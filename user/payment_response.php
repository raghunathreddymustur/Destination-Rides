<?php

if(isset($_POST['submit']))
{
	include("../connection.php");
	session_start();
	$rid = $_SESSION["rid"];
	$user_contact = $_SESSION["user_contact"];
	$user_name = $_SESSION["user_name"];
	$email = $_SESSION["user_email"];
	$pickup_location = $_POST['pickup_location'];
	$vendor1 = $_POST['vendor1'];
	$from_date = $_POST['from_date'];
	$drop_location = $_POST['drop_location'];
	$vendor2 = $_POST['vendor2'];
	$to_date = $_POST['to_date'];
	$total_days = $_POST['total_days'];
	$bike_id = $_POST['bike_id'];
	$rent = $_POST['rent'];
	
	
	$query = "SELECT `tid` FROM `booking`";
	$result = mysqli_query($connection, $query);
	$row = mysqli_fetch_array($result);
	
		if($row['tid'] == '')
		{
			$tid = "1";
			$query1 = "INSERT INTO `booking`(`tid`, `rid`, `user_name`, `user_contact`, `user_email`, `city`, `vname`, `from_date`, `city2`, `vname2`, `to_date`, `total_days`, `bid`, `rent`, `status`) VALUES ('". $tid ."', '". $rid ."', '". $user_name ."', '". $user_contact ."', '". $email ."', '". $pickup_location ."', '". $vendor1 ."', '". $from_date ."', '". $drop_location ."', '". $vendor2 ."', '". $to_date ."', '". $total_days ."', '". $bike_id ."', '". $rent ."', 'Booked')";
			if($result1 = mysqli_query($connection, $query1))
			{
				echo "<script>alert('Your Payment is Done')</script>"; 
			echo "<script>window.location.href = 'Booking_Confirm.php?tid=".$tid."';</script>";
			}
			
		}
		else
		{
			$inc = "1";
			$query1 = "SELECT `tid` FROM `booking` ORDER BY tid DESC LIMIT 1";
			$result1 = mysqli_query($connection, $query1);
			$row1 = mysqli_fetch_array($result1);
			$trans = $row1['tid'];
			$tid = ($trans + $inc);
			$query2 = "INSERT INTO `booking`(`tid`, `rid`, `user_name`, `user_contact`, `user_email`, `city`, `vname`, `from_date`, `city2`, `vname2`, `to_date`, `total_days`, `bid`, `rent`, `status`) VALUES ('". $tid ."', '". $rid ."', '". $user_name ."', '". $user_contact ."', '". $email ."', '". $pickup_location ."', '". $vendor1 ."', '". $from_date ."', '". $drop_location ."', '". $vendor2 ."', '". $to_date ."', '". $total_days ."', '". $bike_id ."', '". $rent ."', 'Booked')";
			if($result2 = mysqli_query($connection, $query2))
			{
				echo "<script>alert('Your Payment is Done')</script>"; 
			echo "<script>window.location.href = 'Booking_Confirm.php?tid=".$tid."';</script>";
			}
		}
		
}

?>