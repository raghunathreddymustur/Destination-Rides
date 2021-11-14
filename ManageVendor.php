<?php
include('header.php');
session_start();
if(isset($_SESSION["admin_email"])){
?>

<div class="container box">


	<h1 align="center">Manage Vendor Details</h1>
	<br />
	
	<div align="right">
		<button type="button" id="add_button" data-toggle="modal" data-target="#vendorModal" class="btn btn-info btn-lg">Add</button>
	</div>
	
	<div class="table-responsive">
		<table id="vendor_data" class="table table-bordered table-striped">
			<thead>
				<tr>
				<th data-column-id="vid" data-type="numeric">ID</th>
				<th data-column-id="vname">Vendor Name</th>
				<th data-column-id="contact">Contact No</th>
				<th data-column-id="email">Email</th>
				<th data-column-id="city">City</th>
				<th data-column-id="address">Address</th>
				<th data-column-id="lat_long" data-formatter="lat_long">Location</th>
				<th data-column-id="commands" data-formatter="commands" data-sortable="false">Commands</th>
				</tr>
			</thead>
		</table>
	</div>

	<div id="vendorModal" class="modal fade">
		<div class="modal-dialog">
			<form method="post" id="vendor_form">
				<div class="modal-content">
				
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Add Vendor</h4>
					</div>
					
					<div class="modal-body">
						<input type="text" name="id" id="id" class="form-control hide" />
						<label>Enter Vendor Name</label>
						<input type="text" name="name" id="name" class="form-control" />
						<br/>
						<label>Enter Contact Number</label>
						<input type="number" name="phone" id="phone" class="form-control" />
						<br/>
						<label>Enter Email</label>
						<input type="email" name="email" id="email" class="form-control" />
						<br/>
						<label>Enter City</label>
						<input type="text" name="city" id="city" class="form-control" />
						<br/>
						<label>Enter Address</label>
						<input type="text" name="address" id="address" class="form-control" />
						<br/>
						<label>Enter Lat-Long</label>
						<input type="text" name="latitude" id="latitude" class="form-control" />
						<br/>
						<label id="label_password">Password</label>
						<?php
						$length = 6;
						$str = "";
						$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
						$max = count($characters) - 1;
						for ($i = 0; $i < $length; $i++) {
						$rand = mt_rand(0, $max);
						$str .= $characters[$rand];
						}
						?>
						<input type="text" name="password" id="password" class="form-control" value="<?php echo $str?>" readonly/>
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
		$('#vendor_form')[0].reset();
		$('.modal-title').text("Add Vendor");
		$('#action').val("Add");
		$('#operation').val("Add");
		$('#password').show();
		$('#label_password').show();
	});

	var productTable = $('#vendor_data').bootgrid({
		ajax: true,
		rowSelect: true,
		post: function()
		{
		return{
		id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
		};
		},
		url: "ManageVendorResponse.php",
		formatters: {
		"commands": function(column, row)
		{
		return "<button type='button' class='btn btn-warning btn-xs update' data-row-id='"+row.vid+"'>Edit</button>" + 
		"&nbsp; <button type='button' class='btn btn-danger btn-xs delete' data-row-id='"+row.vid+"'>Delete</button>";
		},
		"lat_long": function(column, row)
		{
		return "<button type='button' class='btn btn-success btn-xs map_view' data-row-id='"+row.lat_long+"' data-row-class='"+row.address+"'>Map View</button>";
		}
		}
	});


	$(document).on('submit', '#vendor_form', function(event){
		event.preventDefault();

		var vname = $('#name').val();
		var vphone = $('#phone').val();
		var vemail = $('#email').val();
		var vcity = $('#city').val();
		var vaddress = $('#address').val();
		var vlatitude = $('#latitude').val();
		var form_data = $(this).serialize();
		if(vname != '' && vphone != '' && vemail != '' && vcity != '' && vaddress != '' && vlatitude != '')
		{
		$.ajax({
		url:"ManageVendorResponse.php",
		method:"POST",
		data:form_data,
		success:function(data)
		{
		alert(data);
		$('#vendor_form')[0].reset();
		$('#vendorModal').modal('hide');
		window.location.href = 'ManageVendor.php';
		}
		});
		}
		else
		{
		alert("All Fields are Required");
		}
	});

	$(document).on("loaded.rs.jquery.bootgrid", function()
	{
		productTable.find(".update").on("click", function(event)
		{
		var v_id = $(this).data("row-id");
		var edit = 0;
		
		$.ajax({
		url:"ManageVendorResponse.php",
		method:"POST",
		data:{v_id:v_id, edit:edit},
		dataType:"json",
		success:function(data)
		{
		$('#vendorModal').modal('show');
		$('#id').val(data.vid);
		$('#name').val(data.vname);
		$('#phone').val(data.contact);
		$('#email').val(data.email);
		$('#city').val(data.city);
		$('#address').val(data.address);
		$('#latitude').val(data.lat_long);
		$('#password').hide();
		$('#label_password').hide();
		$('.modal-title').text("Edit Vendor");

		$('#action').val("Edit");
		$('#operation').val("Edit");
		}
		});
		});
	});
	
		$(document).on("loaded.rs.jquery.bootgrid", function()
	{
		productTable.find(".map_view").on("click", function(event)
		{
		var v_id = $(this).data("row-id");
		var address = $(this).data("row-class");
		console.log(address);
		var a = document.createElement("a");
            a.target = "_blank";
            a.href = "https://maps.google.com/?q=" + v_id;
            a.click();
            return false;
		
	
		});
	});

	$(document).on("loaded.rs.jquery.bootgrid", function()
	{
		productTable.find(".delete").on("click", function(event)
		{
		if(confirm("Are you sure you want to delete this?"))
		{
		var vid = $(this).data("row-id");
		var del = 0;
		$.ajax({
		url:"ManageVendorResponse.php",
		method:"POST",
		data:{vid:vid, del:del},
		success:function(data)
		{
		alert(data);
		$('#vendor_data').bootgrid('reload');
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
