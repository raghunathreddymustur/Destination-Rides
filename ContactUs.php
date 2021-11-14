<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<title> Destination Rides </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Courgette|Gentona">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

	<p onclick="topFunction()" id="myBtn" title="Go to top"> <i class="far fa-arrow-alt-circle-up" style="font-size: 28px"></i> </p>
	
	<nav class="navbar navbar-expand-md bg-light navbar-light fixed-top">
		<a class="navbar-brand" href="#"> <img src="img/logo.png"> </a>
		<a class="navbar-brand d-none d-lg-block" href="#"> <h3 class="title">Destination Rides</h3> </a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
		    <ul class="navbar-nav">
			    <li class="nav-item">
		   			<a class="nav-link" href="index.php"> <i class='fas fa-home'></i> Home </a>
		      	</li>
			    <li class="nav-item">
			        <a class="nav-link" href="#policy"> <i class="fas fa-pencil-alt"></i> Policy </a>
			    </li>
		    </ul>
		</div>  
	</nav>

	<p class="divider"></p>
		
	<div class="container-fluid">
		<h1 class="title text-center" id="contactus"> <u> Contact Us </u>  </h1> 
		<div class="row contact">
			<div class="col-md-12">
				<br>
				<form class="needs-validation" id="contactForm" novalidate>
					<div class="row">
					    <div class="col-md-6">
					    	<label for="FistName">Enter your First Name:</label>
					    	<input type="text" class="form-control" name="fistName" placeholder="First Name" required>
					    	<small class="form-text text-muted"> This field is mandatory <span class="star"> * </span> </small>
					    
					    </div>
					    <div class="col-md-6">
							<label for="LastName">Enter your Last Name:</label>
							<input type="text" class="form-control" id="lastName" placeholder="Last Name" required>
					    	<small class="form-text text-muted"> This field is mandatory <span class="star"> * </span> </small>
					    </div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-6 form-group">
						    <label for="emailId">Enter your Email-Id:</label>
						    <input type="email" class="form-control" id="emailId" aria-describedby="emailHelp" placeholder="Email-Id" required>
						    <small class="form-text text-muted"> This field is mandatory <span class="star"> * </span> </small>	 
						 </div>
						 <div class="col-md-6 form-group">
						 	<label for="tel-input">Mobile:</label>
							<input class="form-control" type="tel" step min pattern="[0-9]*" maxlength="14" placeholder="+91-9999 999 999" id="tel-input" required>
							<small class="form-text text-muted"> This field is mandatory <span class="star"> * </span> </small>
			
						  </div>
					</div>
					<div class="row">
						<div class="col-md-12 form-group">
							<label for="textArea">Description:</label>
							<textarea class="form-control" id="textArea" rows="2" placeholder="Description"></textarea>
							<small class="form-text text-muted"> This field is optional <span class="star"> * </span> </small>
						</div>
					</div>
					<p class="button"> <button type="submit" class="btn btn-light"> Log Request </button> </p>
				</form>	 
				<br>
			</div>
		</div>
	</div>	

	<p class="divider"></p>
		
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