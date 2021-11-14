<?php

include("../connection.php");
$query = '';
$data = array();
session_start();
$email = $_SESSION["vendor_name"];

if(isset($_POST["operation"]))
{
	 if($_POST["operation"] == "Edit")
	{
			
			$id = mysqli_real_escape_string($connection, $_POST["id"]);
			$cname = mysqli_real_escape_string($connection, $_POST["cname"]);
			$mnumber = mysqli_real_escape_string($connection, $_POST["mnumber"]);
			$vnumber = mysqli_real_escape_string($connection, $_POST["vnumber"]);
			$rent = mysqli_real_escape_string($connection, $_POST["rent"]);
			$availability = mysqli_real_escape_string($connection, $_POST["availability"]);
			
			$query = "UPDATE `vehicle` SET `bid`='".$id."', `company_name`='".$cname."', `model_no`='".$mnumber."', `vehical_no`='".$vnumber."', `rent`='".$rent."', `availability`='".$availability."' WHERE bid = '".$_POST["id"]."'";
			if(mysqli_query($connection, $query))
			{
				echo 'Vehicle Details Updated Successfully';
			}
	}  
}

 else if(isset($_POST["edit"]))
{
	
	$query = "SELECT * FROM `Vehicle` WHERE bid = '".$_POST["b_id"]."'";
	$result = mysqli_query($connection, $query);
	while($row = mysqli_fetch_array($result))
	{
		$output["b_id"] = $row["bid"];
		$output["company_name"] = $row["company_name"];
		$output["model_no"] = $row["model_no"];
		$output["vehical_no"] = $row["vehical_no"];
		$output["vendor"] = $row["vendor"];
		$output["rent"] = $row["rent"];
		$output["availability"] = $row["availability"];
	//	$output["image"] = $row["image"];
	}
	echo json_encode($output);
}

 else if(isset($_POST["del"]))
{
	$query = "DELETE FROM vehicle WHERE bid = '".$_POST["bid"]."'";
	if(mysqli_query($connection, $query))
	{
		echo 'Data Deleted Successfully';
	}
} 

else
{
	
	$query1 = "SELECT * FROM `vehicle` WHERE `vendor` = '".$email."'";
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


