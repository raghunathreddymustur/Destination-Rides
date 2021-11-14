<?php
include('header.php');
session_start();
if(isset($_SESSION["admin_email"])){
?>

<div class="container box">

	<h1 align="center">Manage Vehicle Details</h1>
	<br />
	
	<div align="right">
		<button type="button" id="add_button" data-toggle="modal" data-target="#bikeModal" class="btn btn-info btn-lg">Add</button>
	</div>
	
	<div class="table-responsive">
		<table id="bike_data" class="table table-bordered table-striped">
			<thead>
				<tr>
				<th data-column-id="bid" data-type="numeric">ID</th>
				<th data-column-id="company_name">Company Name</th>
				<th data-column-id="model_no">Model No</th>
				<th data-column-id="vehical_no">Vehical No</th>
				<th data-column-id="vendor">Vendor</th>
				<th data-column-id="rent">Rent</th>
				<th data-column-id="availability">Availability</th>
				<th data-column-id="image" data-formatter="image1" data-sortable="false">Image</th>
				<th data-column-id="commands" data-formatter="commands" data-sortable="false">Commands</th>
				</tr>
			</thead>
		</table>
	</div>

	<div id="bikeModal" class="modal fade">
		<div class="modal-dialog">
			<form method="post" id="bike_form">
				<div class="modal-content">
				
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Add Vehicle Details</h4>
					</div>
					
					<div class="modal-body">
						<input type="text" name="id" id="id" class="form-control hide" />
						<label>Enter Company Name</label>
						<input type="text" name="cname" id="cname" class="form-control" />
						<label>Enter Model Number</label>
						<input type="text" name="mnumber" id="mnumber" class="form-control" />
						<label>Enter Vehical Number</label>
						<input type="text" name="vnumber" id="vnumber" class="form-control" />
						<label>Select Vendor</label>
						<select name="vendor" id="vendor" class="form-control">
						<?php
						include("connection.php");
						$query = "SELECT `vname` FROM `vendor`";
						$result = mysqli_query($connection, $query);
						while($row = mysqli_fetch_array($result))
						{ ?>
						<option value="<?php echo  $row["vname"]?>"><?php echo  $row["vname"]?></option>
						<?php }
						?>
						</select>
						<label>Enter Rent Amount</label>
						<input type="text" name="rent" id="rent" class="form-control" />
						<label>Select Availability</label>
						<select name="availability" id="availability" class="form-control">
						<option value="yes">Yes</option>
						<option value="no">No</option>
						</select>
						<label id="label_image">Image</label>
						<input type="file" name="image" id="image"/>
					</div>
					
					<div class="modal-footer">
						<input type="hidden" name="product_id" id="product_id" />
						<input type="hidden" name="operation" id="operation" />
						<input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
					</div>
				
				</div>
			</form>
		</div>
	</div>

</div>
<?php
}
else{
	echo "<script>window.location.href = 'index.php';</script>";
}
?>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.js"></script>  

<script type="text/javascript" language="javascript" >
$(document).ready(function(){

	$('#add_button').click(function(){
		$('#bike_form')[0].reset();
		$('.modal-title').text("Add Vehicle Details");
		$('#action').val("Add");
		$('#operation').val("Add");
		$('#image').show();
		$('#label_image').show();
	});

	var productTable = $('#bike_data').bootgrid({
		ajax: true,
		rowSelect: true,
		post: function()
		{
		return{
		id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
		};
		},
		url: "ManageVehicleResponse.php",
		formatters: {
		"commands": function(column, row)
		{
		return "<button type='button' class='btn btn-warning btn-xs update' data-row-id='"+row.bid+"'>Edit</button>" + 
		"&nbsp; <button type='button' class='btn btn-danger btn-xs delete' data-row-id='"+row.bid+"'>Delete</button>";
		},
		"image1": function(column, row)
		{
			return "<img src='upload/"+row.image+" ' width='150px' height='150px'>";
		}
		}
	});


	$(document).on('submit', '#bike_form', function(event){
		event.preventDefault();

		var cname = $('#cname').val();
		var mnumber = $('#mnumber').val();
		var vnumber = $('#vnumber').val();
		var vendor = $('#vendor').val();
		var rent = $('#rent').val();
		var availability = $('#availability').val();
		
		var operation = $('#operation').val();
		if(operation == "Add")
		{
			var image = $('#image').val();
			
			if(cname != '' && mnumber != '' && vnumber != '' && vendor != '' && rent != '' && availability != '' && image != '')
			{
				
			$.ajax({
			url:"ManageVehicleResponse.php",
			method:"POST",
			data:new FormData(this),
			contentType: false,
			cache: false,
			processData:false,
			success:function(data)
			{
			alert(data);
			$('#bike_form')[0].reset();
			$('#bikeModal').modal('hide');
			$('#bike_data').bootgrid('reload');
			}
			});
			}
			else
			{
			alert("All Fields are Required");
			}
		}
		else{
	
			
			if(cname != '' && mnumber != '' && vnumber != '' && vendor != '' && rent != '' && availability != '')
			{
				
			$.ajax({
			url:"ManageVehicleResponse.php",
			method:"POST",
			data:new FormData(this),
			contentType: false,
			cache: false,
			processData:false,
			success:function(data)
			{
			alert(data);
			$('#bike_form')[0].reset();
			$('#bikeModal').modal('hide');
			$('#bike_data').bootgrid('reload');
			}
			});
			}
			else
			{
			alert("All Fields are Required");
			}
		}
	});

	$(document).on("loaded.rs.jquery.bootgrid", function()
	{
		productTable.find(".update").on("click", function(event)
		{
			 
		var b_id = $(this).data("row-id");
		var edit = 0;
		$.ajax({
		
		url:"ManageVehicleResponse.php",
		method:"POST",
		data:{b_id:b_id, edit:edit},
		dataType:"json",
		success:function(data)
		{
			
		$('#bikeModal').modal('show');
		$('#id').val(data.b_id);
		$('#cname').val(data.company_name);
		$('#mnumber').val(data.model_no);
		$('#vnumber').val(data.vehical_no);
		$('#vendor').val(data.vendor);
		$('#rent').val(data.rent);
		$('#availability').val(data.availability);
		$('#image').hide();
		$('#label_image').hide();
		
		$('.modal-title').text("Edit Vehicle Details");

		$('#action').val("Edit");
		$('#operation').val("Edit");
		}
		});
		});
	});

	$(document).on("loaded.rs.jquery.bootgrid", function()
	{
		productTable.find(".delete").on("click", function(event)
		{
		if(confirm("Are you sure you want to delete this?"))
		{
		var bid = $(this).data("row-id");
		var del = 0;
		$.ajax({
		url:"ManageVehicleResponse.php",
		method:"POST",
		data:{bid:bid, del:del},
		success:function(data)
		{
		alert(data);
		$('#bike_data').bootgrid('reload');
		}
		})
		}
		else{
		return false;
		}
		});
	});  

});
</script>

</body>

</html>
