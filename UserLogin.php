<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<title> User Login </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Courgette|Gentona">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
	
<body>
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
			        <a class="nav-link" href="#whyus"> <i class="fas fa-question-circle"></i> Why Us</a>
			    </li>
			    <li class="nav-item">
			        <a class="nav-link" href="#team"> <i class="fas fa-users"></i> Team </a>
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

	<div class="LoginLogo">
		<div class="container-fluid">
			<div class="main text-center">
				<span> Choose your Login </span>
				<hr>
				<div class="row">			
					<div class="col-lg-12">
						<a href="login.php?login=user">
							<i class="fas fa-users" style="font-size:48px;"></i>
							<h2>User</h2>
						</a>
					</div>
				</div>	
			</div>
		</div>
	</div>

	<p class="divider"></p>

	<!-- Why ride with us -->
 
	<h1 class="title text-center" id="whyus"> <u> Why ride with us? </u>  </h1> 
	
	<p class="divider"></p>
	
	<div class="row feature">	
		<div class="col-md-7 description1">		
			<h1 class="title"> Budget Friendly </h1>
			<blockquote class="blockquote">
  				<p class="mb-0">				
  					Our motive is to provide transportation at very low cost. Which suits every pocket and we stand on it.				
  				</p>			
			</blockquote>
		</div>
		<div class="col-md-5 float-right">		
			<img src="img/budget.jpg" class="img-responsive img-thumbnail">
		</div>
	</div>
	
	<p class="divider"></p>
	
	<div class="row feature">
		<div class="col-md-5 float-left">		
			<img src="img/entertainment.jpg" class="img-responsive img-thumbnail">
		</div>	
		<div class="col-md-7 description2">
			<h1 class="title"> Full-on Entertainment </h1>
			<blockquote class="blockquote">
  				<p class="mb-0">
  					Play music, watch videos and a lot more during your journey! Have fun even if you are travelling through poor network areas.
  				</p>
			</blockquote>
		</div>
	</div>

	<p class="divider"></p>
	
	<div class="row feature">		
		<div class="col-md-7 description1">			
			<h1 class="title"> Secure Rides </h1>
			<blockquote class="blockquote">
  				<p class="mb-0">
  					Your security is our utmost priority. It's our responsibility to secure your belongings till you reach your destination.
  				</p>
			</blockquote>
		</div>
		<div class="col-md-5 float-right">
			<img src="img/secured.jpg" class="img-responsive img-thumbnail">
		</div>
	</div>
	
	<p class="divider"></p>

	<!-- Our Team -->

	<h1 class="title text-center" id="team"> <u> Our Team </u>  </h1> 
	
	<p class="divider"></p>

	<div class="row text-center about1">	
		<div class="col-md-6 person1"> <br>	
			<blockquote class="blockquote">
  				<p class="mb-0">
  					It never gets easier, you just go faster
  				</p>
			</blockquote>
			<cite title="Source Title"> - Mustur Raghunath Reddy </cite>
			<br> <br>
		</div>
		<div class="col-md-6 person2"> <br>
			<blockquote class="blockquote">
  				<p class="mb-0">  				
  					A bicycle ride around the world begins with a single pedal stroke
  				</p>
			</blockquote>
			<cite title="Source Title"> - Putluri Trinath Reddy</cite>
		</div>
	</div> 

	<br>
	
	<div class="row text-center about2">	
		<div class="col-md-6 person3"> <br>
			<blockquote class="blockquote">
  				<p class="mb-0">
  					Bikers see considerably more of this beautiful world than any other class of citizens
  				</p>
			</blockquote>
  				<cite title="Source Title"> - Naganandi Somasekhar</cite>
  				<br> <br>
		</div>
		<div class="col-md-6 person4"> <br>
			<blockquote class="blockquote">
  				<p class="mb-0">
  					Fear is a powerful beast. But we can learn to ride it
  				</p>
			</blockquote>
  				<cite title="Source Title"> - Surabathuni Prasad</cite>
		</div>
	</div> 

	<br>

	<div class="row text-center about3">
		<div class="col-md-12 person5"> <br>
			<blockquote class="blockquote">
  				<p class="mb-0">
  					Chasing is part of ride as crying is part of love
  				</p>
  			</blockquote>

  		<cite title="Source Title"> - Manchala Paavamaani </cite>
		<br> <br>
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