<?php

session_start();

$day = $_POST['total_days'];
$fdate = $_POST['from_date'];
$edate = $_POST['to_date'];
$rent = $_POST['rent'];
$total_days = $_POST['total_days'];
$total_rent = ($rent * $total_days);
$location1 = $_POST['location1'];
$vendor1 = $_POST['vendor1'];
$location2 = $_POST['location2'];
$vendor2 = $_POST['vendor2'];
$bike_id = $_POST['bike_id'];

include('UserHeader.php');
if($fdate != "")
{
?>

<div class="container box">

<div class="col-lg-3">
</div>

<div class="col-lg-6">
	<div class="panel panel-default">
		<div class="panel-heading">Insert Card Details</div>
		
		<form method="post" action="payment_response.php" id="myform"> 
		<div class="panel-body">
			<div class="row">
				<div class="col-lg-12">
				<label>Total Rent</label>
				<input type="text" name="rent" id="rent" class="form-control" value="<?php echo $total_rent?>" readonly/>
				</div>
				<div class="col-lg-12">
				<label>Card Name</label>
				<input type="text" name="card_name" id="card_name" class="form-control" required/>
				</div>
				<div class="col-lg-12">
				<label>Card Number</label>
				<input type="text" name="card_number" id="card_number" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control" required/>
				</div>
				<div class="col-lg-12">
				<label>CVV Code</label>
				<input type="text" name="code" id="code" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control" required/>
				</div>
				<div class="col-lg-12">
				<label>Expairy Date</label>
				<input type="text" name="expairy_date" id="expairy_date" class="form-control" required/>
				</div>
				
				<input type="text" name="pickup_location" id="pickup_location" class="form-control hide" value="<?php echo $location1?>"/>
				<input type="text" name="vendor1" id="vendor1" class="form-control hide" value="<?php echo $vendor1?>"/>
				<input type="text" name="from_date" id="from_date" class="form-control hide" value="<?php echo $fdate?>"/>
				<input type="text" name="drop_location" id="drop_location" class="form-control hide" value="<?php echo $location2?>"/>
				<input type="text" name="vendor2" id="vendor2" class="form-control hide" value="<?php echo $vendor2?>"/>
				<input type="text" name="to_date" id="to_date" class="form-control hide" value="<?php echo $edate?>"/>
				<input type="text" name="total_days" id="total_days" class="form-control hide" value="<?php echo $total_days?>"/>
				<input type="text" name="bike_id" id="bike_id" class="form-control hide" value="<?php echo $bike_id?>"/>
				
			</div>
		</div>
		
		<div class="panel-footer text-center">
			<input type="submit" name="submit" id="action" class="btn btn-secondary" value="Proceed To Pay" />
		</div>
		</form>
	</div>
	</div>
 
<div class="col-lg-3">
</div>
 
</div>

<br><br>
<?php
}
else{
	echo "<script> alert('Please Select From date'); ";
	echo "location.href='CheckInOut.php'; </script>";
        exit;
}
?>

<script src="../js/jquery.min.js"></script>
 <script src="../js/bootstrap.min.js"></script> 
 
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
 
<script type="text/javascript" language="javascript" >
 $(document).ready(function(){

 $( "#expairy_date" ).datepicker({
minDate: 0,
 	 
 dateFormat: 'mm/yy',
changeMonth: true,
      changeYear: true 
 });
 
 });
 
 $( "#myform" ).validate({
  rules: {
    code: {
      required: true,
      minlength: 3,
	  maxlength: 3
    },
	card_number: {
		required: true,
      minlength: 16,
	  maxlength: 16
	}
  }
});


</script>

	<footer style="padding-bottom: 11px;padding-top: 10px">
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
