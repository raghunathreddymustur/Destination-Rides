<?php
include('UserHeader.php');
session_start();
if(isset($_SESSION["user_email"])){
?>

<div class="container">

	<div class="col-lg-2">
	</div>

	<div class="col-lg-8">
		<form method="post" id="registration_form"> 
			<div class="panel panel-default">

				<div class="panel-heading">Check In & Checkout</div>

				<div class="panel-body">

					<div class="col-lg-6">

						<h3 class="text-center">Pick up </h3>

						<label>Location</label>
						<select name="location" id="location" class="form-control">
						<option value="" selected="true" disabled="disabled">Select Location</option>
						<?php
						include("../connection.php");
						$query = "SELECT DISTINCT `city` FROM `vendor`";
						$result = mysqli_query($connection, $query);
						while($row = mysqli_fetch_array($result))
						{ ?>
						<option value="<?php echo  $row["city"]?>"><?php echo  $row["city"]?></option>
						<?php }
						?>
						</select>
						
						

						<div id="vendor_list"></div>
						
						
						
						<button id="map" type="button" onclick="response()" value="" style="margin-top: 11px;">Map</button><br/>

						<br/>
						<label>From Date</label>
						<input type="text" style="background-color: white;" name="from_date" id="from_date" class="form-control" readonly/>
						
					
						

					</div>

					<div class="col-lg-6">

						<h3 class="text-center">Drop</h3>

						<div id="location_list">
						<label>Location</label>
						<select name="drop_location" id="drop_location" class="form-control">
						<option value="" selected="true" disabled="disabled">Select Location</option>
						<?php
						include("../connection.php");
						$query = "SELECT DISTINCT `city` FROM `vendor`";
						$result = mysqli_query($connection, $query);
						while($row = mysqli_fetch_array($result))
						{ ?>
						<option value="<?php echo  $row["city"]?>"><?php echo  $row["city"]?></option>
						<?php }
						?>
						</select>
						</div>
						
						<div id="location_list1">
						<br/>
						<label>Location:</label>
						<input type="text" name="locationn" id="locationn" readonly class="form-control">
						</div>

						<div id="dropvendor_list"></div>
						
						<div id="dropvendor_list1">
						<br/>
						<label>Vendor:</label>
						<input type="text" name="vendorr" id="vendorr" readonly class="form-control">
						</div>
						
						
						<button id="map1" type="button" onclick="response1()" value="" style="margin-top: 11px;">Map</button><br/>

						<br/>
						<label>To Date</label>
						<input style="background-color: white;" type="text" name="to_date" id="to_date" class="form-control" readonly/>

					</div>
					
					<div class="clearfix"></div>
					<div class="col-lg-6 days_details">
					<br/>
						<span>Total Number Of Days</span>
						<input type="text" name="days" id="days" class="form-control " readonly/>
						<br/>
						<input type="button" name="filter" id="filter" class="btn btn-secondary" value="Vehicle Availability" />
					</div>

					<div class="clearfix"></div>

					<div id="bike_details">

					</div>

				</div>

				<div class="panel-footer">
					<input type="text"  id="for_drop" class="hide"/>
				</div>

			</div>
		</form>
	</div>

	<div class="col-lg-2">
	</div>

</div>

<br><br><br><br><br><br><br><br>

<?php
}
else{
	echo "<script>window.location.href = '../index.php';</script>";
}
?>


<script src="../js/jquery.min.js"></script>
 <script src="../js/bootstrap.min.js"></script> 
 
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
<script type="text/javascript" language="javascript" >
$(document).ready(function(){
	
	/* On Location Change */
    $("select#location").change(function(){
	   $("#from_date").val('');
	   $("#to_date").val('');
	   $(".days_details").hide();
	   $(".from_date1").val('');
		$(".to_date1").val('');
		$(".total_days1").val('');
	   $("#vendor").val('');
	   
	   $("#bike_details").html('');
        var selectedLocation = $("#location option:selected").val();
		$(".vendor1").val('');
        $.ajax({
            type: "POST",
            url: "InOutResponse.php",
            data: {location:selectedLocation },
			success:function(data)
			{
				//alert(data);
				$("#vendor_list").html('');
				$("#vendor_list").html(data);
			}				
        });
    });
	
	/* On Drop Location Change */
	 $("select#drop_location").change(function(){
		
        var selectedDropLocation = $("#drop_location option:selected").val();
		$(".location2").val(selectedDropLocation);
		$(".vendor2").val('');
		
		
        $.ajax({
            type: "POST",
            url: "InOutResponse.php",
            data: {droplocation:selectedDropLocation },
			success:function(data)
			{
				$("#dropvendor_list").html(data);
			}				 
        });
    });
	
	/* On Vendor Change */
	$(document).on('change', '#vendor', function() {
		$("#from_date").val('');
	   $("#to_date").val('');
	   $(".days_details").hide();
	  
		var selectedVendor = $("#vendor option:selected").val();
        $.ajax({
            type: "POST",
            url: "InOutResponse.php",
            data: {vendor:selectedVendor},
			success:function(data)
			{
				$("#bike_details").html('');
				$("#bike_details").append(data);
				$("#map").show();
			}				 
        });
	});
	
	/* On Drop Vendor Change */
	$(document).on('change', '#drop_vendor', function() {
		
		var selectedDropVendor = $("#drop_vendor option:selected").val();
		$(".vendor2").val(selectedDropVendor);
        $.ajax({
            type: "POST",
            url: "InOutResponse.php",
            data: {dropvendor:selectedDropVendor},
			success:function(data)
			{
					$("#map1").show();
				var s = data;
				//alert(data);
				$("#for_drop").val(s);
			}				 
        });
	});
	
	/* On From DatePicker Change */
	$( "#from_date" ).datepicker({
		minDate: 0,
		dateFormat: 'yy-mm-dd'
	});
	
	/* On To DatePicker Change */
	$( "#to_date" ).datepicker({
		minDate: 0,
		dateFormat: 'yy-mm-dd'
	});
	
	/* On From Date Change */
	$(document).on('change', '#from_date', function() {
		var from_date = $("#from_date").datepicker("getDate");
		var to_date = $("#to_date").datepicker("getDate");
		$("#bike_details").html('');
		
		if(from_date != null)
		{
			$(".days_details").show();
			$("#days").val("1");
			$(".total_days1").val("1");
			var f = $("#from_date").val();
			$(".from_date1").val(f);
		}
		
		if(to_date != null && from_date != null)
		{
			if(from_date <= to_date)
			{
				$('input#from_date1').val(f);
				$(".days_details").show();
				var days = 1;
				var start= $("#from_date").datepicker("getDate");
				var end= $("#to_date").datepicker("getDate");
				days = days + ((end- start) / (1000 * 60 * 60 * 24));
				$("#days").val((Math.round(days)));
				$("#total_days1").val((Math.round(days)));
			}
			else
			{
				$from_date = $("#from_date").val();
				$("#to_date").focus();
				$("#to_date").val($from_date);
				$(".from_date1").val($from_date);
				$(".to_date1").val($from_date);
			}
		}
	});
	
	/* On To Date Change */
	$(document).on('change', '#to_date', function() {
			var from_date = $("#from_date").datepicker("getDate");
			var to_date = $("#to_date").datepicker("getDate");
			$("#bike_details").html('');
			
			if(to_date != null)
			{
				var e = $("#to_date").val();
				$(".to_date1").val(e);
			}
			
			if(from_date != null)
			{
				if (to_date >= from_date) 
				{
					$(".days_details").show();
					var days = 1;
					var start= $("#from_date").datepicker("getDate");
					var end= $("#to_date").datepicker("getDate");
					days = days + ((end- start) / (1000 * 60 * 60 * 24));
					$("#days").val((Math.round(days)));
					$(".total_days1").val((Math.round(days)));
				} 
				else
				{
					$to_date = $("#to_date").val();
					$("#from_date").val($to_date);
					$(".from_date1").val($to_date);
					$(".to_date1").val($to_date);
					$("#from_date").focus();
				}
			}
			else
			{
				alert("Please select From Date");
				document.getElementById("to_date").value = "";
				$('#from_date').focus();
				$(".to_date1").val('');
			} 
		});
		
});

function response()
	{
		var latLong = document.getElementById("pickup").value;
		//alert(latLong);
		var a = document.createElement("a");
            a.target = "_blank";
            a.href = "https://maps.google.com/?q=" + latLong;
            a.click();
            return false;
	}
	
function response1()
	{
		var latLong = $("#for_drop").val();
		var a = document.createElement("a");
            a.target = "_blank";
            a.href = "https://www.google.com/maps/@" + latLong + "";
            a.click();
            return false;
	}
	
$("#filter").click(function(){
	var selectedVendor = $("#vendor option:selected").val();
	var from_date = document.getElementById("from_date").value;
	var days= document.getElementById("days").value;
	var to_date = document.getElementById("to_date").value;
	var selectedDropLocation = $("#drop_location option:selected").val();
	var selectedDropVendor = $("#drop_vendor option:selected").val();

	if(selectedDropLocation)
	{
		var dropLocation = document.getElementById("drop_location").value;
		var dropVendor = document.getElementById("drop_vendor").value;
		
	}
	else
	{
		var dropLocation = document.getElementById("location").value;
		var dropVendor = document.getElementById("vendor").value;
		$("#drop_location").val(dropLocation);
		
		
		
        $.ajax({
            type: "POST",
            url: "InOutResponse.php",
            data: {droplocation:dropLocation },
			success:function(data)
			{
				$("#dropvendor_list").html(data);
				
				$("#drop_vendor").val(dropVendor);
			}				 
        });
		
	}

	if(to_date)
	{
		var to_date = document.getElementById("to_date").value;
	}
	else
	{
		var to_date = document.getElementById("from_date").value;
		$("#to_date").val(to_date);
	}
	
	$.ajax({
		type: "POST",
		url: "InOutResponse.php",
		data: {filter:selectedVendor, from_date:from_date, dropLocation:dropLocation, dropVendor:dropVendor, days:days, to_date:to_date},
		success:function(data)
		{
			$("#bike_details").html('');
			$("#bike_details").append(data);
		}				 
	});
});
</script>

	<footer style="padding-bottom: 13px;">
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
