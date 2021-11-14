<?php
include("../connection.php");

/* Select vendor on Location Click */ 
if(isset($_POST["location"]))
{
	$location = $_POST["location"];
	
	echo "<br/>";
	echo "<label>Vendor:</label>";
	echo "<select class='form-control' name='vendor' id='vendor'>";
	echo "<option selected='true' disabled='disabled'>Select Vendor</option>";
		$query = "SELECT `vname` FROM `vendor` WHERE `city` = '".$location ."'";
		$result = mysqli_query($connection, $query);
	while($row = mysqli_fetch_array($result))
	{ 
		echo "<option>". $row['vname'] . "</option>";
	}
	echo "</select>";
}

/* Select Drop vendor on Drop Location Click */ 
if(isset($_POST["droplocation"]))
{
	$droplocation = $_POST["droplocation"];
	
	echo "<br/>";
	echo "<label>Vendor:</label>";
	echo "<select class='form-control' name='drop_vendor' id='drop_vendor'>";
	echo "<option selected='true' disabled='disabled'>Select Vendor</option>";
		$query = "SELECT `vname` FROM `vendor` WHERE `city` = '".$droplocation ."'";
		$result = mysqli_query($connection, $query);
	while($row = mysqli_fetch_array($result))
	{ 
		echo "<option>". $row['vname'] . "</option>";
	}
	echo "</select>";
}

/* Select Latitude on Vendor Click */ 
if(isset($_POST["vendor"]))
{
	$vendor = $_POST["vendor"];
	
    $query1 = "SELECT  `lat_long`, `city` FROM `vendor` WHERE `vname` = '".$vendor ."'";
	$result1 = mysqli_query($connection, $query1);
	$row1 = mysqli_fetch_array($result1);
	
	$query = "SELECT * FROM `vehicle` WHERE `vendor` = '".$vendor ."' AND `availability` != 'no'";
	$result = mysqli_query($connection, $query);
	while($row = mysqli_fetch_array($result))
	{ ?>
		<form method="post" action="payment.php" name="<?php echo $row["bid"] ?> ">
			<div class="row">
				<div class="col-lg-9">
					<div class="col-lg-6 bike_img">	
						<img src="../upload/<?php echo  $row["image"] ?> " width="120px" height="120px">
					</div>
					<div class="col-lg-6 bike_list">
						<span style="font-weight: bold;">Company Name:</span> 
						<span><?php echo  $row["company_name"] ?></span>
						<input type="text" value="<?php echo $row["company_name"] ?>" class="hide" name="company_name"/>
						<br/>
						<span style="font-weight: bold;">Model No:</span> 
						<span><?php echo  $row["model_no"] ?></span>
						<input type="text" value="<?php echo $row["model_no"] ?>" class="hide" name="model_no"/>
						<br/>
						<span style="font-weight: bold;">Vehical No:</span> 
						<span><?php echo  $row["vehical_no"] ?></span>
						<input type="text" value="<?php echo $row["vehical_no"] ?>" class="hide" name="vehical_no"/>
						<input type="text" value="<?php echo $row1["lat_long"] ?>" class="hide" id="pickup" />
						<br/>
						<br/>
					</div>
				</div>
				<div class="col-lg-3 bike_list">
					<span style="font-weight: bold;">Rent (Per Day):</span>
					<span><?php echo  $row["rent"] ?></span>
					<br/>
					<input type="text" value="<?php echo $row1['lat_long'] ?>" id="for_pickup"  class="hide"/>
				</div>
			</div>
		</form>
	<?php	
	}
}

/* Select Latitude on Drop Vendor Click */ 
if(isset($_POST["dropvendor"]))
{
	$dropvendor = $_POST["dropvendor"];
    $query1 = "SELECT  `lat_long` FROM `vendor` WHERE `vname` = '".$dropvendor ."'";
	$result1 = mysqli_query($connection, $query1);
	$row1 = mysqli_fetch_array($result1);
	$output = $row1["lat_long"];
	echo $output;
}


if(isset($_POST["filter"]))
{
	$vendor = $_POST["filter"];
	$dropLocation = $_POST["dropLocation"];
	$dropVendor = $_POST["dropVendor"];
	$from_date = $_POST["from_date"];
	$days = $_POST["days"];

	$filter_query = "SELECT  `lat_long`, `city` FROM `vendor` WHERE `vname` = '".$vendor ."'";
	$filter_result = mysqli_query($connection, $filter_query);
	$filter_row = mysqli_fetch_array($filter_result);

	$to_date = $_POST['to_date'];
		
	$booking_query = "SELECT * from booking WHERE ((from_date BETWEEN '".$from_date."' AND '".$to_date."') OR (to_date BETWEEN '".$from_date."' AND '".$to_date."') OR (from_date <= '".$from_date."' AND to_date >= '".$to_date."')) AND `vname` = '".$vendor."'";
	
	$booking_result = mysqli_query($connection, $booking_query);
	if (mysqli_num_rows($booking_result) != "")
	{
		while($booking_row = mysqli_fetch_array($booking_result))
		{
			$bid[] = $booking_row['bid'];
		}	
		$bid1 = implode(',', $bid);
		$bike_query = "SELECT * FROM `vehicle` WHERE `bid` NOT IN ($bid1) and vendor='".$vendor."' AND `availability` != 'no'";
		$bike_result = mysqli_query($connection, $bike_query);
		if (mysqli_num_rows($bike_result) != "")
		{
			while($bike_row = mysqli_fetch_array($bike_result))
			{
			?>
				<form method="post" action="payment.php" name="<?php echo $bike_row["bid"] ?>">
					<div class="row">
						<div class="col-lg-9">
							<div class="col-lg-6 bike_img">	
								<img src="../upload/<?php echo $bike_row["image"] ?>" width="120px" height="120px">
							</div>
							<div class="col-lg-6 bike_list">
								<span style="font-weight: bold;">Company Name:</span> 
								<span><?php echo $bike_row["company_name"] ?></span>
								<input type="text" value="<?php echo $bike_row["company_name"] ?>" class="hide" name="company_name"/>
								<br/>
								<span style="font-weight: bold;">Model No:</span> 
								<span><?php echo $bike_row["model_no"] ?></span>
								<input type="text" value="<?php echo $bike_row["model_no"] ?>" class="hide" name="model_no"/>
								<br/>
								<span style="font-weight: bold;">Vehical No:</span> 
								<span><?php echo $bike_row["vehical_no"] ?></span>
								<input type="text" value="<?php echo $bike_row["vehical_no"] ?>" class="hide" name="vehical_no"/>
								<br/>
							</div>
						</div>
						<div class="col-lg-3 bike_list">
							<span style="font-weight: bold;">Rent (Per Day):</span>
							<span><?php echo $bike_row["rent"] ?></span>
							<input type="text" value="<?php echo $bike_row["rent"] ?>" class="hide" name="rent"/>
							<br/>
							<span id="lat_long" class="hide"><?php echo $filter_row["lat_long"] ?></span>
							<input type="text" name="from_date" class="from_date1 hide" value="<?php echo $from_date?>"/>
							<input type="text" name="to_date" class="to_date1 hide" value="<?php echo $to_date?>"/>
							<input type="text" name="total_days" class="total_days1 hide" value="<?php echo $days?>"/>
							<input type="text" name="location1" class="location1 hide" value="<?php echo $filter_row["city"] ?>" />
							<input type="text" name="vendor1" class="vendor1 hide" value="<?php echo $vendor ?>" />
							<input type="text" name="location2" class="location2 hide" value="<?php echo$dropLocation?>"/>
							<input type="text" name="vendor2" class="vendor2 hide" value="<?php echo$dropVendor?>" />
							<input type="text" name="bike_id" class="bike_id hide" value="<?php echo $bike_row["bid"] ?>" />
							<input type="submit" name="action" id="action" class="btn btn-secondary" value="Proceed" />
						</div>
					</div>
				</form>
			<?php 
			}
		}
		else
		{
		echo "<h2 class='text-center' style='margin: 40px'>No Vehicles Are Available</h2>";
		}
	}
	else
	{
		$query = "SELECT * FROM `vehicle` WHERE `vendor` = '".$vendor ."' AND `availability` != 'no'";
		$result = mysqli_query($connection, $query);
		while($row = mysqli_fetch_array($result))
		{?>
			<form method="post" action="payment.php" name="<?php echo $row["bid"] ?>">
				<div class="row">
					<div class="col-lg-9">
						<div class="col-lg-6 bike_img">	
							<img src="../upload/<?php echo $row["image"] ?>" width="120px" height="120px">
						</div>
						<div class="col-lg-6 bike_list">
							<span style="font-weight: bold;">Company Name:</span> 
							<span><?php echo $row["company_name"] ?></span>
							<input type="text" value="<?php echo $row["company_name"] ?>" class="hide" name="company_name"/>
							<br/>
							<span style="font-weight: bold;">Model No:</span> 
							<span><?php echo $row["model_no"] ?></span>
							<input type="text" value="<?php echo $row["model_no"] ?>" class="hide" name="model_no"/>
							<br/>
							<span style="font-weight: bold;">Vehical No:</span> 
							<span><?php echo $row["vehical_no"] ?></span>
							<input type="text" value="<?php echo $row["vehical_no"] ?>" class="hide" name="vehical_no"/>
							<br/>
						</div>
					</div>
					<div class="col-lg-3 bike_list">
						<span style="font-weight: bold;">Rent (Per Day):</span>
						<span><?php echo $row["rent"] ?></span>
						<input type="text" value="<?php echo $row["rent"] ?>" class="hide" name="rent"/>
						<br/>

						<span id="lat_long" class="hide"><?php echo $filter_row["lat_long"] ?></span>
						<input type="text" name="from_date" class="from_date1 hide" value="<?php echo$from_date?>"/>
						<input type="text" name="to_date" class="to_date1 hide" value="<?php echo $to_date?>"/>
						<input type="text" name="total_days" class="total_days1 hide" value="<?php echo $days?>"/>
						<input type="text" name="location1" class="location1 hide" value="<?php echo $filter_row["city"] ?>" />
						<input type="text" name="vendor1" class="vendor1 hide" value="<?php echo $vendor ?>" />
						<input type="text" name="location2" class="location2 hide" value="<?php echo$dropLocation?>"/>
						<input type="text" name="vendor2" class="vendor2 hide" value="<?php echo$dropVendor?>" />
						<input type="text" name="bike_id" class="bike_id hide" value="<?php echo $row["bid"] ?>" />

						<input type="submit" name="action" id="action" class="btn btn-secondary" value="Proceed" />
					</div>
				</div>
			</form>
		<?php 
		}
	}	
}
?>