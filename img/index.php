<!DOCTYPE html>

<html>

<head>

	<meta charset="utf-8">
	<title> Destination Rides </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Courgette|Gentona">
	<link rel="stylesheet" type="text/css" href="index-style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
</head>

<body>

	<!-- wrapper -->

		<nav class="navbar navbar-expand-md bg-light navbar-light fixed-top">
			 
			<a class="navbar-brand" href="#"> <img src="logo.png"> </a>
			<a class="navbar-brand d-none d-lg-block" href="#"> <h3 class="title">Destination Rides</h3> </a>
			 
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			 
			<div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
			 
			    <ul class="navbar-nav">
			 
			    	<li class="nav-item">
			   			<a class="nav-link" href="index.php"><i class='fas fa-home'></i> Home </a>
			      	</li>
			 
				    <li class="nav-item">
				        <a class="nav-link" href="#whyus"> Why Us?</a>
				    </li>
				 
				    <li class="nav-item">
				        <a class="nav-link" href="#team"> Team </a>
				    </li>

				    <li class="nav-item">
				        <a class="nav-link" href="#contactus"> Contact Us </a>
				    </li>

				    <li class="nav-item">
				        <a class="nav-link" href="#policy"> Policy </a>
				    </li>
			 
			    </ul>
			 
			</div>  
			
		</nav>

		<div class="bar"></div>

		<p onclick="topFunction()" id="myBtn" title="Go to top"> <img src="top.png"> </p>

		<!-- Slider -->

		<div class="wrapper">

		<div class="bd-example">
  
  			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  
			    <ol class="carousel-indicators">
			     
			 		<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			    	<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			    	<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
			    
			    </ol>

			    <div class="carousel-inner active">

			    	<div class="carousel-item active" style="height:500px;">
				        
				        <div class="carousel-caption">
				         
				        	<h1 class="title"> Destination Rides </h1>			       
				        
				    	</div>

				    </div>
			      
				    <div class="carousel-item">
				        
				        <div class="carousel-caption">
				         
				        	<h5 class="SignUp">Not a Member yet?</h5>
				        
				        	<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#ModalSignIn">
 								
 								 Sign Up
							
							</button>
				        
				        </div>
				      
				    </div>
  
			        <div class="carousel-item">
			        
			        	<div class="carousel-caption">
			          
			          		<h5 class="Login">Already a Member?</h5>
			          		
			          		<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#ModalLogin">
						    	
						    	Login
						    
						    </button>
			        
			        	</div>
			      
			      	</div>

			      	<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
           
            			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
            			<span class="sr-only">Previous</span>
          
          			</a>

			        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			            
			            <span class="carousel-control-next-icon" aria-hidden="true"></span>
			            <span class="sr-only">Next</span>
			        
			        </a>
			    
			    </div>

  			</div>
		
		</div>	

	</div>

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
			
			<img src="budget.jpg" class="img-responsive img-thumbnail">

		</div>

	</div>

	<p class="divider"></p>

	<div class="row feature">

		<div class="col-md-5 float-left">
			
			<img src="entertainment.jpg" class="img-responsive img-thumbnail">

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
			
			<img src="secured.jpg" class="img-responsive img-thumbnail">

		</div>

	</div>

	<p class="divider"></p>

	<!-- Our Team -->

	<h1 class="title text-center" id="team"> <u> Our Team </u>  </h1> 

	<p class="divider"></p>

	<div class="row text-center about1">
		
		<div class="col-md-6 person1"> <br>
			
			<img src="entertainment.jpg" class="rounded-circle">

			<blockquote class="blockquote">
  
  				<p class="mb-0">
  				
  					Play music, watch videos and a lot more during your journey! Have fun even if you are travelling through poor network areas.
  				
  				</p>
			
			</blockquote>

			<cite title="Source Title"> - Moluguri Vinay Kumar </cite>

			<br> <br>

		</div>

		<div class="col-md-6 person2"> <br>
			
			<img src="entertainment.jpg" class="rounded-circle">

			<blockquote class="blockquote">
  
  				<p class="mb-0">
  				
  					Play music, watch videos and a lot more during your journey! Have fun even if you are travelling through poor network areas.
  				
  				</p>
			
			</blockquote>

			<cite title="Source Title"> - Putluri Trinath Reddy</cite>
			
		</div>

	</div> 

	<br>

	<div class="row text-center about2">
		
		<div class="col-md-6 person3"> <br>
			
			<img src="entertainment.jpg" class="rounded-circle">

			<blockquote class="blockquote">
  
  				<p class="mb-0">
  				
  					Play music, watch videos and a lot more during your journey! Have fun even if you are travelling through poor network areas.
  				
  				</p>
			
			</blockquote>

  				<cite title="Source Title"> - Naganandi Somasekhar</cite>

  				<br> <br>

		</div>

		<div class="col-md-6 person4"> <br>
			
			<img src="entertainment.jpg" class="rounded-circle">

			<blockquote class="blockquote">
  
  				<p class="mb-0">
  				
  					Play music, watch videos and a lot more during your journey! Have fun even if you are travelling through poor network areas.
  				
  				</p>
			
			</blockquote>

  				<cite title="Source Title"> - Surabathuni Prasad</cite>

		</div>

	</div> 

	<br>

	<div class="row text-center about3">
		
		<div class="col-md-12 person5"> <br>
			
			<img src="entertainment.jpg" class="rounded-circle">

			<blockquote class="blockquote">
  
  				<p class="mb-0">
  				
  					Play music, watch videos and a lot more during your journey! Have fun even if you are travelling through poor network areas.
  				
  				</p>
			
			</blockquote>

  				<cite title="Source Title"> - Manchala Paavamaani </cite>

  				<br> <br>

		</div>

	</div>

	<p class="divider"></p>

	<!-- Contact Us -->

	<h1 class="title text-center" id="contactus"> <u> Contact Us </u>  </h1> 

	<p class="divider"></p>

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

	<p class="divider"></p>

	<footer>
		
		<div class="row" id="policy">
		
			<div class="col-md-4 text-center"> <br>
				
				<p> &copy; 2019-2020 Company, Inc. </p>

			</div>

			<div class="col-md-4 text-center"> <br>
				
				<a href="#" class="privacy"> Privacy </a>
				<a href="#" class="terms"> Terms and Conditions </a>

			</div>

			<div class="col-md-4 text-center"> <br>
					
				<a href="#" class="facebook"> <img src="facebook.png"> </a>
				<a href="#" class="instagram"> <img src="instagram.png"> </a>
				<a href="#" class="twitter"> <img src="twitter.png"> </a>

				<br> <br>

			</div>

		</div>

	</footer>

	<div class="modal fade" id="ModalSignIn" tabindex="-1" date-keyboard="false" data-backdrop="static" role="dialog" aria-labelledby="SignInTitle" aria-hidden="true">
  	
  		<div class="modal-dialog modal-dialog-centered" role="document">
    		
    		<div class="modal-content">
      			
      			<div class="modal-header">
        		
        			<h5 class="title" id="SignInTitle"> Welcome to Sign Up </h5>
        
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				        	
				       	<span aria-hidden="true">&times;</span>
				        
			    	</button>
				      
				</div>
      
		      	<div class="modal-body">

		      		<form class="needs-validation" id="signupForm" method="post" novalidate>

			      		<div class="row">
			        
				        	<div class="col-md-12">
						    	
						    	<label for="FistName">Enter your First Name:</label>
						    	<input type="text" class="form-control" id="fistName" placeholder="First Name" required>
						    	<small class="form-text text-muted"> This field is mandatory <span class="star"> * </span> </small>
						    
						    </div>
					  
						</div>

						<br>

						<div class="row">
							
							<div class="col-md-12">
						    
								<label for="LastName">Enter your Last Name:</label>
								<input type="text" class="form-control" id="lastName" placeholder="Last Name" required>
						    	<small class="form-text text-muted"> This field is mandatory <span class="star"> * </span> </small>

							</div>

						</div>

						<br>

						<div class="row">
						
							<div class="col-md-12 form-group">
							  
							    <label for="emailId">Enter your Email-Id:</label>
							    <input type="email" class="form-control" id="emailId" aria-describedby="emailHelp" placeholder="Email-Id" required>
							    <small class="form-text text-muted"> This field is mandatory <span class="star"> * </span> </small>
							 
							 </div>

						</div>

						<div class="row">
						
							<div class="col-md-6 form-group">
							
							    <label for="exampleInputPassword1"> Enter Password: </label>
							    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
								<small class="form-text text-muted"> This field is mandatory <span class="star"> * </span> </small>

							</div>

							<div class="col-md-6 form-group">
							
							    <label for="exampleInputPassword1"> Confirm Password: </label>
							    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
								<small class="form-text text-muted"> This field is mandatory <span class="star"> * </span> </small>

							</div>

						</div>
			      	
				</div>
	      
					      	<div class="modal-footer justify-content-center">
					        	
					        	<p class="button"> <button type="submit" class="btn btn-dark" id="signupbtn"> Sign Up </button> </p>
					      
							</div>

					</form>

				<p class="form-text text-center small"> Already a Member? Try to Login </p> <br>
    
    		</div>
		
		</div>
	
	</div>

	<div class="modal fade" id="ModalLogin" tabindex="-1" date-keyboard="false" data-backdrop="static" role="dialog" aria-labelledby="LoginTitle" aria-hidden="true">
  	
  		<div class="modal-dialog modal-dialog-centered" role="document">
    		
    		<div class="modal-content">
      			
      			<div class="modal-header">
        		
        			<h5 class="title" id="LoginTitle"> Welcome Back </h5>
        
        				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				        	
				        	<span aria-hidden="true">&times;</span>
				        
				        </button>
				      
				</div>
      
		      	<div class="modal-body">

		      		<form class="needs-validation" id="loginForm" method="post" novalidate>
		        
			        	<div class="row">
						
							<div class="col-md-12 form-group">
							  
							    <label for="emailId">Enter your Email-Id:</label>
							    <input type="email" class="form-control" id="emailId" aria-describedby="emailHelp" placeholder="Email-Id" required>
							    <small class="form-text text-muted"> This field is mandatory <span class="star"> * </span> </small>
							 
							 </div>

						</div>

						<div class="row">
						
							<div class="col-md-12 form-group">
							
							    <label for="exampleInputPassword1"> Enter Password: </label>
							    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
								<small class="form-text text-muted"> This field is mandatory <span class="star"> * </span> </small>

							</div>

						</div>
			      	
				</div>
	      
					      	<div class="modal-footer justify-content-center">
					        	
					        	<p class="button"> <button type="submit" class="btn btn-dark" id="loginbtn"> Login </button> </p>
					      
							</div>

					</form>

				<p class="form-text text-center small"> Not a Member? Try to Sign Up </p> <br>
    
    		</div>
		
		</div>
	
	</div>

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

	<script>

		(function() {
  
  			'use strict';
  			window.addEventListener('load', function() {
    		
    			var forms = document.getElementsByClassName('needs-validation');
    			
    			var validation = Array.prototype.filter.call(forms, function(form) {
      			
      				form.addEventListener('submit', function(event) {
				        if (form.checkValidity() === false) {
				         
				          event.preventDefault();
				          event.stopPropagation();
				        
				        }
				        form.classList.add('was-validated');
				      
				      }, false);
				   
				    });
				  
				  }, false);
				
				})();

	</script>

</body>

</html>