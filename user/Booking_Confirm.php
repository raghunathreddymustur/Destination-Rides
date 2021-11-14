<?php
session_start();
$tid = $_GET['tid'];
if(isset($tid)){
?>

<!doctype html>

<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="../css/bootstrap.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>

	<link rel="stylesheet" href="../css/style.css">

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

	<title>Booking Confirm</title>

	<style>
		html, body{
		height: 100%;
		background-color: #fafafa;
		}
		.container
		{
		height: 100%;
		width: 90%;
		display: table;
		}
		.main
		{
		display: table-cell;
		height: 100%;
		vertical-align: middle;
		}
		.booking{
		padding: 20px;
		border: 1px solid;
		background-color: white;
		border-radius: 12px;
		text-align: center;
		}
	</style>

</head>

<body>

	<div class="container">

		<div class="main">

			<div class="row">

				<div class="col-lg-4">
				</div>

				<div class="col-lg-4 booking">
				<form action="Booking_History.php" method="post">
				<img src="../img/success.png" class="img-responsive" width="85" height="85" style="margin-left: auto; margin-right: auto;"/>
				<h1>Booking Confirmed</h1>
				<label style="font-size: 25px;">Booking Id :</label> <span style="font-size: 25px;"><?php echo $tid; ?></span>
				<br/>
				<br/>
				<input type="submit" name="submit" id="action" class="btn btn-success" value="View Booking Details" />
				</form>
				</div>

				<div class="col-lg-4">
				</div>

			</div>

		</div>
		
	</div>
<?php
}
else{
	echo "<script>window.location.href = 'CheckInOut.php';</script>";
}
?>

<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script> 

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</body>
</html>

