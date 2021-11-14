<?php
session_start();
$login = $_GET['login'];
if($login != "")
{
?>
<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Courgette|Gentona">
	
    <title>Log In</title>
	
	<style>
	html, body{
		height: 100%;
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
	.login{
		padding: 20px;
	    border: 1px solid;
	    background-color: white;
	    border-radius: 12px;
	}
	</style>
  </head>
  
  <body style="background-image: url('img/login.jpg');">

  	<nav class="navbar navbar-expand-md bg-light navbar-light fixed-top">
		<a class="navbar-brand" href="#"> <img src="img/logo.png"> </a>
		<a class="navbar-brand d-none d-lg-block" href="#"> <h3 class="title">Destination Rides</h3> </a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
		    <ul class="navbar-nav">
			    <li class="nav-item">
			    	<?php
						if($login == "admin" || $login == "vendor")
						{
					?>
				        <a class="nav-link" href="AdminVendorLogin.php"> 
				        	<i class="fas fa-arrow-circle-left"></i> Back 
				        </a>
				    <?php
						}
						else if($login == "user")
						{
					?>
							<a class="nav-link" href="UserLogin.php"> 
				        		<i class="fas fa-arrow-circle-left"></i> Back 
				        	</a>
				        <?php
							}
						?>
			    </li>
		    	<?php
					if($login == "user")
					{
				?>
				    <li class="nav-item">
				        <a class="nav-link" href="user/UserRegistration.php"> 
				        	Create an Account <i class="fas fa-sign-in-alt"></i>
				        </a>
				    </li>
				<?php
					}
				?>
				<li class="nav-item">
		   			<a class="nav-link" href="index.php"> <i class='fas fa-home'></i> Home </a>
		      	</li>
			    <li class="nav-item">
			        <a class="nav-link" href="ContactUs.php"> <i class="fas fa-phone"></i> Contact Us </a>
			    </li>
			    <li class="nav-item">
			        <a class="nav-link" href="#policy"> <i class="fas fa-pencil-alt"></i> Policy </a>
			    </li>
		    </ul>
		</div>  
	</nav>
  
  	<p onclick="topFunction()" id="myBtn" title="Go to top"> <i class="far fa-arrow-alt-circle-up" style="font-size: 28px"></i> </p>

<div class="container">

	<div class="main">
	
	<?php
	if($login == "admin")
	{
	?>
	
		<div class="row">
		
			<div class="col-lg-3">
			</div>
			
			<div class="col-lg-6 login">
			<h2 class="text-center">Admin Login</h2>
				<form id="admin_login">
					<div class="form-group">
						<i class="mdi mdi-email"></i> <label for="admin_email" class="bmd-label-floating">Email address</label>
						<input type="email" class="form-control" id="admin_email" required>
						<span class="bmd-help">We'll never share your email with anyone else.</span>
					</div>
					<div class="form-group">
						<label for="admin_password" class="bmd-label-floating">Password</label>
						<input type="password" class="form-control" id="admin_password" required>
					</div>
					<div class="row">
					<div class="col-lg-12 text-center">
						<input type="submit" class="btn btn-secondary btn-raised" value="Sign in"/>
					</div>
					</div>
				</form>
			</div>
			<div class="col-lg-3">
			</div>
		</div>
		
		<?php
			}
			else if($login == "user")
			{
				?>
				<div class="row">
		
			<div class="col-lg-3">
			</div>
			
			<div class="col-lg-6 login">
			<h2 class="text-center">User Login</h2>
				<form id="user_login">
					<div class="form-group">
						<i class="mdi mdi-email"></i> 
						<label for="user_email" class="bmd-label-floating">Email address</label>
						<input type="email" class="form-control" id="user_email" required>
						<span class="bmd-help">We'll never share your email with anyone else.</span>
					</div>
					<div class="form-group">
						<label for="user_password" class="bmd-label-floating">Password</label>
						<input type="password" class="form-control" id="user_password" required>
					</div>
					<div class="row">
						<div class="col-lg-12 text-center">
							<input type="submit" class="btn btn-secondary btn-raised" value="Sign in"/>
						</div>
					</div>				
				</form>
			</div>

			<div class="col-lg-3">
			</div>
			
		</div>
		<?php	
		}
		else
		{
			?>
			<div class="row">
		
			<div class="col-lg-3">
			</div>
			
			<div class="col-lg-6 login">
			<h2 class="text-center">Vendor Login</h2>
				<form id="vendor_login">
					<div class="form-group">
						<i class="mdi mdi-email"></i> <label for="vendor_email" class="bmd-label-floating">Email address</label>
						<input type="email" class="form-control" id="vendor_email" required>
						<span class="bmd-help">We'll never share your email with anyone else.</span>
					</div>
					<div class="form-group">
						<label for="vendor_password" class="bmd-label-floating">Password</label>
						<input type="password" class="form-control" id="vendor_password" required>
					</div>
					<div class="row">
						<div class="col-lg-12 text-center">
						<input type="submit" class="btn btn-secondary btn-raised" value="Sign in"/>
						</div>
					</div>
				</form>
			</div>

			<div class="col-lg-3">
			</div>
			
		</div>
		<?php
		}
		?>
		
	</div>

</div>

<?php
}
else
{
	echo "<script>window.location.href = 'index.php';</script>";
}
?>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery.min.js"></script>
	<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
	
	<script>
	$( "#admin_login" ).submit(function( event ) {
		
var email = $("#admin_email").val();
var password = $("#admin_password").val();
var login = "admin";
event.preventDefault();
$.ajax({
            type: "POST",
            url: "loginResponse.php",
            data: {email:email, password:password, login:login},
			success:function(data)
			{
				if(data == "admin")
				{
				
				window.location.href = "ManageVehicle.php";
				}
				else
				{
					alert(data);
				}
			}				
        });
});

$( "#user_login" ).submit(function( event ) {
		
var email = $("#user_email").val();
var password = $("#user_password").val();
var login = "user";
event.preventDefault();
$.ajax({
            type: "POST",
            url: "loginResponse.php",
            data: {email:email, password:password, login:login},
			success:function(data)
			{
				if(data == "user")
				{
					
				window.location.href = "user/CheckInOut.php";
				}
				else
				{
					
					alert(data);
				}
			}				
        });
});

$( "#vendor_login" ).submit(function( event ) {
		
var email = $("#vendor_email").val();
var password = $("#vendor_password").val();
var login = "vendor";
event.preventDefault();
$.ajax({
            type: "POST",
            url: "loginResponse.php",
            data: {email:email, password:password, login:login},
			success:function(data)
			{
				
				if(data == "vendor")
				{
				
				window.location.href = "vendor/ManageVehicle.php";
				}
				else
				{
					alert(data);
				}
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
				<a href="#" class="terms" style="color: #007bff;"> Terms and Conditions </a>
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