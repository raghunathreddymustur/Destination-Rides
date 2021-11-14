<?php

session_start();

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
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Courgette|Gentona">
 
	<title>Registration</title>

	<style>
		html, body{
		height: 100%;
		background-color: #fafafa;
		font-size: 1rem;
		}
		.container
		{
		height: 100%;
		width: 100%;
		display: table;
		}
		.main
		{
		display: table-cell;
		height: 100%;
		vertical-align: middle;
		}
		.booking{
		
		border: 1px solid;
		
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

</head>

<body>

	<nav class="navbar navbar-expand-md bg-light navbar-light fixed-top">
		<a class="navbar-brand" href="#"> <img src="../img/logo.png"> </a>
		<a class="navbar-brand d-none d-lg-block" href="#"> <h3 class="title">Destination Rides</h3> </a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
		    <ul class="navbar-nav">
			    <li class="nav-item">
			        <a class="nav-link" href="../login.php?login=user"> 
			        	<i class="fas fa-arrow-circle-left"></i> Back 
				    </a>
			    </li>
			    <li class="nav-item">
		   			<a class="nav-link" href="../index.php"> <i class='fas fa-home'></i> Home </a>
		      	</li>
			    <li class="nav-item">
			        <a class="nav-link" href="../ContactUs.php"> <i class="fas fa-phone"></i> Contact Us </a>
			    </li>
			    <li class="nav-item">
			        <a class="nav-link" href="#policy"> <i class="fas fa-pencil-alt"></i> Policy </a>
			    </li>
		    </ul>
		</div>  
	</nav>

	<p onclick="topFunction()" id="myBtn" title="Go to top"> <i class="far fa-arrow-alt-circle-up" style="font-size: 28px"></i> </p>

<div class="container registration_container">
	<div class="main">

	<div class="col-lg-3">
	</div>

	<div class="col-lg-6">
		<div class="panel panel-default booking">
		<div class="panel-heading">Registration Form</div>
			
		<form method="post" id="registration_form"> 
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-6">
					<label>Enter User Name</label>
					<input type="text" name="name" id="name" class="form-control" required/>
					</div>
					<div class="col-lg-6">
					<label>Enter Contact Number</label>
					<input type="number" name="cnumber" id="cnumber" class="form-control" required/>
					</div>
					<div class="col-lg-6">
					<label>Enter Email</label>
					<input type="email" name="email" id="email" class="form-control" required/>
					</div>
					<div class="col-lg-6">
					<label>Enter Age</label>
					<input type="number" name="age" id="age" class="form-control" required/>
					</div>
					<div class="col-lg-6">
					<label>License Number</label>
					<input type="text" name="lnumber" id="lnumber" class="form-control" required/>
					</div>
					<div class="col-lg-6">
					<label>City</label>
					<input type="text" name="city" id="city" class="form-control" required/>
					</div>
					<div class="col-lg-6">
					<label>Address</label>
					<input type="text" name="address" id="address" class="form-control" required/>
					</div>
					<div class="col-lg-6">
					<label>Password</label>
					<input type="password" name="password" id="password" class="form-control" required/>
					</div>
				</div>
			</div>
			
			<div class="panel-footer">	
				<div class="row">
					<div class="col-lg-12 text-center">
						<input type="submit" name="action" id="action" class="btn btn-secondary btn-raised" value="Submit" />
					</div>
				</div>
			</div>
		</form>
		</div>
	</div>
	  
	<div class="col-lg-3">
	</div>
	  
	</div>
</div>


	<script src="../js/jquery.min.js"></script>
	 <script src="../js/bootstrap.min.js"></script> 
	 
	<script type="text/javascript" language="javascript" >
	 $(document).ready(function(){

		$(document).on('submit', '#registration_form', function(event){
			event.preventDefault();
			var name = $('#name').val();
			var cnumber = $('#cnumber').val();
			var email = $('#email').val();
			var age = $('#age').val();
			var lnumber = $('#lnumber').val();
			var city = $('#city').val();
			var address = $('#address').val();
			var password = $('#password').val();
			var form_data = $(this).serialize();
			if(name != '' && cnumber != '' && email != '' && age != '' && lnumber != '' && city != '' && address != '' && password != '')
			{
			$.ajax({
			url:"UserRegistrationResponse.php",
			method:"POST",
			data:form_data,
			success:function(data)
			{
				if(data == "no")
				{
					alert("This user has been already registered");
				}
				else
				{
			alert(data);
			window.location.href = '../login.php?login=user';
				}
			}
			});
			}
			else
			{
			alert("All Fields are Required");
			}
		});
	 });
	</script>

	<footer>
		<div class="row" id="policy">
			<div class="col-md-4 text-center"> <br>	
				<p> © 2019-2020 Company, Inc. </p>
			</div>
			<div class="col-md-4 text-center"> <br>	
				<a href="#" class="terms"> Terms and Conditions </a>
			</div>
			<div class="col-md-4 text-center"> <br>			
				<a href="#" class="facebook"> <i class="fa fa-facebook"></i> </a>
				<a href="#" class="instagram"> <i class="fa fa-instagram"></i> </a>
				<a href="#" class="twitter"> <i class="fa fa-twitter"></i> </a>
				<br> <br>
			</div>
		</div>
	</footer>

	<script>

		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
  
  			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    			
    			document.getElementById("myBtn").style.display = "block";
  			} 
  			else {
    
    			document.getElementById("myBtn").style.display = "none";
  			}
		
		}

		function topFunction() {
  		
  			document.body.scrollTop = 0;
  			document.documentElement.scrollTop = 0;
		}

	</script>

</body>

</html>
