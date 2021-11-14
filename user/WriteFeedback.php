<?php
include('UserHeader.php');
session_start();
if(isset($_SESSION["user_email"])){
?>

<div class="container">

	<div class="col-lg-3">
	</div>

	<div class="col-lg-6">
		<form method="post" action="feedback_response.php"> 
			<div class="panel panel-default">

				<div class="panel-heading">Feedback Form</div>

				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<label>Name: </label> <?php echo $_SESSION["user_name"] ?>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label>Message: </label>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<label> <textarea rows="4" cols="40" name="feedback" required></textarea> </label>
						</div>
					</div>
				</div>
				<div class="panel-footer text-center">
				<input type="submit" class="btn btn-secondary btn-raised" value="Submit" name="submit">
				</div>

			</div>
		</form>
	</div>

	<div class="col-lg-3">
	</div>

</div>
<br><br><br><br><br><br><br><br><br><br>

<?php
}
else{
	echo "<script>window.location.href = '../index.php';</script>";
}
?>


<script src="../js/jquery.min.js"></script>
 <script src="../js/bootstrap.min.js"></script> 
 
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
 
 <script type="text/javascript" language="javascript" >
 
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
