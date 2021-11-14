<?php
include('header.php');
session_start();
if(isset($_SESSION["admin_email"])){
?>

<div class="container box">

	<h1 align="center">View Booking</h1>
	<br />
	
	<div class="table-responsive">
		<table id="bike_data" class="table table-bordered table-striped">
			<thead>
				<tr>
				<th data-column-id="tid" data-type="numeric">Transaction Id</th>
				<th data-column-id="user_name">User Name</th>
				<th data-column-id="city">Location (Pickup)</th>
				<th data-column-id="vname">Vendor (Pickup)</th>
				<th data-column-id="from_date">From Date</th>
				<th data-column-id="city2">Location (Drop)</th>
				<th data-column-id="vname2">Vendor (Drop)</th>
				<th data-column-id="to_date">To Date</th>
				<th data-column-id="total_days">Total Days</th>
				<th data-column-id="rent">Rent</th>
				<th data-column-id="bid">bid</th>
				<th data-column-id="commands" data-formatter="commands" data-sortable="false">Commands</th>
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
							<label style="font-size: 19px;">Company Name :</label> <span style="font-size: 19px;" id="cname"></span>
							<br/>
							<label style="font-size: 19px;">Model Number :</label> <span style="font-size: 19px;" id="mnumber"></span>
							<br/>
							<label style="font-size: 19px;">Vehical Number :</label> <span style="font-size: 19px;" id="vnumber"></span>
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
<?php
}
else{
	echo "<script>window.location.href = '../index.php';</script>";
}
?>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
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
		url: "ViewBookingResponse.php",
		formatters: {
		"commands": function(column, row)
		{
		return "<button type='button' class='btn btn-warning btn-xs update' data-row-id='"+row.bid+"'>View Vehicle Details</button>";
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
		
		url:"ViewBookingResponse.php",
		method:"POST",
		data:{bid:bid, edit:edit},
		dataType:"json",
		success:function(data)
		{
			
		$('#bikeModal').modal('show');
		$('#cname').text(data.company_name);
		$('#mnumber').text(data.model_no);
		$('#vnumber').text(data.vehical_no);
		$('#bike_image').attr('src', 'upload/'+data.image);
		}
		});
		});
	});
	
});

</script>

</body>

</html>
