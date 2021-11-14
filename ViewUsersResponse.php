<?php

include("connection.php");
$query = '';
$data = array();


	$query1 = "SELECT * FROM `user`";
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

?>
