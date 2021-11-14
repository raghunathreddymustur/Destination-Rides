<?php
include('header.php');
session_start();
if(isset($_SESSION["admin_email"])){
?>


<div class="container box">

	<h1 align="center">User Details</h1>
	<br />
	
	<div class="table-responsive">
		<table id="bike_data" class="table table-bordered table-striped">
			<thead>
				<tr>
				<th data-column-id="bid" data-type="numeric" data-visible="false">ID</th>
				<th data-column-id="user_name">User Name</th>
				<th data-column-id="user_contact">Contact No</th>
				<th data-column-id="user_email">Email</th>
				<th data-column-id="user_age">Age</th>
				<th data-column-id="user_license_no">License No</th>
				<th data-column-id="user_city">City</th>
				<th data-column-id="user_address">Address</th>
				</tr>
			</thead>
		</table>
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

	var productTable = $('#bike_data').bootgrid({
		ajax: true,
		rowSelect: true,
		post: function()
		{
		return{
		id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
		};
		},
		url: "ViewUsersResponse.php"
	});
});
</script>

</body>

</html>
