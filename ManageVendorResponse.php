<?php

include("connection.php");
$query = '';
$data = array();

if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		$name = $_POST["name"];
		$phone = $_POST["phone"];
		
		$email = $_POST["email"];
		$city = $_POST["city"];
		$address = $_POST["address"];
		$latitude = $_POST["latitude"];
		$password = $_POST["password"];
		$query2 = "INSERT INTO `vendor`(`vname`, `contact`, `email`, `city`, `address`, `lat_long`, `password`) VALUES ('".$name."', '".$phone."', '".$email."', '".$city."', '".$address."', '".$latitude."', '".$password."')";
		if(mysqli_query($connection, $query2))
		{
		echo 'Vendors Details Inserted Successfully';
		}
	}

	if($_POST["operation"] == "Edit")
	{
		$id = $_POST["id"];
		$name = $_POST["name"];
		$phone =  $_POST["phone"];
		echo "<script>console.log('".$phone."');</script>";
		$email =  $_POST["email"];
		$city =  $_POST["city"];
		$address =  $_POST["address"];
		$latitude = $_POST["latitude"];
		$query = "UPDATE `vendor` SET `vid`='".$id."', `vname`='".$name."', `contact`='".$phone."', `email`='".$email."', `city`='".$city."', `address`='".$address."', `lat_long`='".$latitude."' WHERE vid = '".$_POST["id"]."'";
		if(mysqli_query($connection, $query))
		{
			echo 'Vendor Details Updated Successfully';
		}
	} 
}

else if(isset($_POST["edit"]))
{
	$query = "SELECT * FROM vendor WHERE vid = '".$_POST["v_id"]."'";
	$result = mysqli_query($connection, $query);
	while($row = mysqli_fetch_array($result))
	{
		$output["vid"] = $row["vid"];
		$output["vname"] = $row["vname"];
		$output["contact"] = $row["contact"];
		$output["email"] = $row["email"];
		$output["city"] = $row["city"];
		$output["address"] = $row["address"];
		$output["lat_long"] = $row["lat_long"];
	}
	echo json_encode($output);
}

else if(isset($_POST["del"]))
{
	$query = "DELETE FROM vendor WHERE vid = '".$_POST["vid"]."'";
	if(mysqli_query($connection, $query))
	{
		echo 'Data Deleted Successfully';
	}
}

else
{
	$query1 = "SELECT `vid`, `vname`, `contact`, `email`, `city`, `address`, `lat_long` FROM `vendor`";
	$result1 = mysqli_query($connection, $query1);
	$total_records = mysqli_num_rows($result1);
	while($row1 = mysqli_fetch_assoc($result1))
	{
		$data[] = $row1;
	}
	$output = array(
	'total'   => intval($total_records),
	'rows'   => $data
	);
	echo json_encode($output);
}
?>
