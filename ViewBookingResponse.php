<?php
session_start();
include("connection.php");
$query = '';
$data = array();

if(isset($_POST["edit"]))
{
	
	$query = "SELECT * FROM `vehicle` WHERE bid = '".$_POST["bid"]."'";
	$result = mysqli_query($connection, $query);
	while($row = mysqli_fetch_array($result))
	{
		$output["company_name"] = $row["company_name"];
		$output["model_no"] = $row["model_no"];
		$output["vehical_no"] = $row["vehical_no"];
		$output["image"] = $row["image"];
	//	$output["image"] = $row["image"];
	}
	echo json_encode($output);
}
else
{
	
	$query1 = "SELECT * FROM `booking` ORDER BY `tid` DESC";
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


