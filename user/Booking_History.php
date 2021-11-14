<?php
include('UserHeader.php');
session_start();
if(isset($_SESSION["user_email"])){
?>

<div class="container box">

	<h1 align="center">View Booking</h1>
	<br />
	
	<div class="table-responsive">
		<table id="bike_data" class="table table-bordered table-striped">
			<thead>
				<tr>
				<th data-column-id="tid" data-type="numeric">Transaction Id</th>
				<th data-column-id="city">Location (Pickup)</th>
				<th data-column-id="vname">Vendor (Pickup)</th>
				<th data-column-id="from_date">From Date</th>
				<th data-column-id="city2">Location (Drop)</th>
				<th data-column-id="vname2">Vendor (Drop)</th>
				<th data-column-id="to_date">To Date</th>
				<th data-column-id="total_days">Total Days</th>
				<th data-column-id="rent">Rent</th>
				<th data-column-id="bid">bid</th>
				</tr>
			</thead>
		</table>
	</div>
	
	

	
		<div id="bikeModal" class="modal fade">
			<div class="modal-dialog">
			
				<div class="col-lg-2">
				</div>
			
				<div class="col-lg-8">
				<form method="post" id="bike_form">
					<div class="modal-content">

						<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3 class="modal-title" style="font-weight: bold;">Vehicle Details</h3>
						</div>

						<div class="modal-body">
							<img src="" class="img-responsive" width="100" height="100" id="bike_image" style="margin-left: auto; margin-right: auto;"/>
							<br/>
							<label style="font-size: 22px;">Company Name :</label> <span style="font-size: 22px;" id="cname"></span>
							<br/>
							<label style="font-size: 22px;">Model Number :</label> <span style="font-size: 22px;" id="mnumber"></span>
							<br/>
							<label style="font-size: 22px;">Vehical Number :</label> <span style="font-size: 22px;" id="vnumber"></span>
							<br/>
						</div>
					</div>
				</form>
				</div>
				
				<div class="col-lg-2">
				</div>
				
			</div>
		</div>
	
	
	
	
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
}
else{
	echo "<script>window.location.href = '../index.php';</script>";
}
?>

<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.js"></script>  

<script type="text/javascript" language="javascript" >
$(document).ready(function(){

	var productTable = $('#bike_data').bootgrid({
		ajax: true,
		rowSelect: true,
		post: function()
		{
		return{
		id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
		};
		},
		url: "BookingHistoryResponse.php",
		formatters: {
		"commands": function(column, row)
		{
		return "<button type='button' class='btn btn-secondary btn-xs update' data-row-id='"+row.bid+"'>View Vehicle Details</button>";
		}
		}
	});
	
	$(document).on("loaded.rs.jquery.bootgrid", function()
	{
		productTable.find(".update").on("click", function(event)
		{
			 
		var bid = $(this).data("row-id");
		var edit = 0;
		$.ajax({
		
		url:"BookingHistoryResponse.php",
		method:"POST",
		data:{bid:bid, edit:edit},
		dataType:"json",
		success:function(data)
		{
			
		$('#bikeModal').modal('show');
		
		$('#cname').text(data.company_name);
		$('#mnumber').text(data.model_no);
		$('#vnumber').text(data.vehical_no);
		$('#bike_image').attr('src', '../upload/'+data.image);
		}
		});
		});
	});
	
});

</script>

<footer>
		<div class="row" id="policy" style="padding-bottom: 9px;">
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
