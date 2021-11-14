<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
		<link rel="stylesheet" href="../css/index.css">
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.css" />
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Courgette|Gentona">
		<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>

	<style type="text/css">
		
		.panel-heading {

			margin-top: 13%;

		}

		html, body{
			height: 100%;
			background-color: #fafafa;
			font-size: 1rem;
		}

		th{

			background-color: white;
			color: black;
			font-weight: bold;

		}
		
		td {

			background-color: white;
			color: black;


		}

		@media(max-width: 600px) {
			.navbar-brand {

				margin-right: 9rem;

			}
			.container {

				margin-top: 25%;
			}
		}

	</style>
	
	<body style="background-image: url('../img/user.jpg');">

	<nav class="navbar navbar-expand-md bg-light navbar-light fixed-top">
		<a class="navbar-brand" href="#"> <img src="../img/logo.png"> </a>
		<a class="navbar-brand d-none d-lg-block" href="#"> <h3 class="title">Destination Rides</h3> </a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
		    <ul class="navbar-nav">
		    	<li class="nav-item">
		   			<a class="nav-link" href="../index.php"> <i class='fas fa-home'></i> Home </a>
		      	</li>
				<li class="nav-item">
					<a class="nav-link" href="CheckInOut.php"><i class='fas fa-sign-in-alt'></i> Check In & Checkout</a>
				</li>  
				<li class="nav-item">
					<a class="nav-link" href="Booking_History.php"><i class="fa fa-history"></i> Booking History</a>
				</li> 
				<li class="nav-item">
					<a class="nav-link" href="WriteFeedback.php"><i class='fas fa-edit'></i> Write Feedback</a>
				</li> 
				<li class="nav-item">
					<a class="nav-link" href="../logout.php"><i class='fas fa-sign-in-alt'></i> Log Out</a>
				</li>
				<li class="nav-item">
				    <a class="nav-link" href="#policy"> <i class="fas fa-pencil-alt"></i> Policy </a>
				</li>
		    </ul>
		</div>  
	</nav>

	<p onclick="topFunction()" id="myBtn" title="Go to top"> <i class="far fa-arrow-alt-circle-up" style="font-size: 28px"></i> </p>
	