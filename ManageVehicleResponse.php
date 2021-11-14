<?php

include("connection.php");
$query = '';
$data = array();

if(isset($_POST["operation"]))
{
	
	if($_POST["operation"] == "Add")
	{
		
		$valid_extensions = array('jpeg', 'jpg', 'png');
		$path = 'upload/'; // upload directory
		$img = $_FILES['image']['name'];
		$tmp = $_FILES['image']['tmp_name'];

		// get uploaded file's extension
		$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

		if(in_array($ext, $valid_extensions)) 
		{ 
			$path = $path.strtolower($img);
			move_uploaded_file($tmp,$path);
			
			$cname = mysqli_real_escape_string($connection, $_POST["cname"]);
			$mnumber = mysqli_real_escape_string($connection, $_POST["mnumber"]);
			$vnumber = mysqli_real_escape_string($connection, $_POST["vnumber"]);
			$vendor = mysqli_real_escape_string($connection, $_POST["vendor"]);
			$rent = mysqli_real_escape_string($connection, $_POST["rent"]);
			$availability = mysqli_real_escape_string($connection, $_POST["availability"]);
			$query2 = "INSERT INTO `vehicle`(`company_name`, `model_no`, `vehical_no`, `vendor`, `rent`, `availability`, `image`) VALUES ('".$cname."','".$mnumber."','".$vnumber."','".$vendor."','".$rent."','".$availability."','".$img."')";
			if(mysqli_query($connection, $query2))
			{
			echo 'Vehicle Details Inserted Successfully';
			}
		}
		else 
		{
			echo 'invalid file extension';
		} 

		
	}

	 if($_POST["operation"] == "Edit")
	{
			
			$id = mysqli_real_escape_string($connection, $_POST["id"]);
			$cname = mysqli_real_escape_string($connection, $_POST["cname"]);
			$mnumber = mysqli_real_escape_string($connection, $_POST["mnumber"]);
			$vnumber = mysqli_real_escape_string($connection, $_POST["vnumber"]);
			$vendor = mysqli_real_escape_string($connection, $_POST["vendor"]);
			$rent = mysqli_real_escape_string($connection, $_POST["rent"]);
			$availability = mysqli_real_escape_string($connection, $_POST["availability"]);
			
			$query = "UPDATE `vehicle` SET `bid`='".$id."', `company_name`='".$cname."', `model_no`='".$mnumber."', `vehical_no`='".$vnumber."', `vendor`='".$vendor."', `rent`='".$rent."', `availability`='".$availability."' WHERE bid = '".$_POST["id"]."'";
			if(mysqli_query($connection, $query))
			{
				echo 'Vehicle Details Updated Successfully';
			}
	}  
}

 else if(isset($_POST["edit"]))
{
	
	$query = "SELECT * FROM `vehicle` WHERE bid = '".$_POST["b_id"]."'";
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
	
	$query1 = "SELECT * FROM `vehicle`";
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


