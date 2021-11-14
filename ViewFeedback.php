<?php
include('header.php');
session_start();
if(isset($_SESSION["admin_email"])){
?>

<div class="container box">

	<div class="col-lg-3">
			</div>

			<div class="col-lg-6">
	<div class="panel panel-default booking">
		<div class="panel-heading">Feedback List</div>
		

		<div class="panel-body">
		
		<?php
		include("connection.php");
		
		$query = "SELECT feedback.rid, feedback.date_time, feedback.message, user.user_name, user.rid FROM feedback INNER JOIN user ON feedback.rid = user.rid";
	$result = mysqli_query($connection, $query);
	while($row = mysqli_fetch_assoc($result))
	{?>
		
				<div class="col-lg-6">
				<i class="fa fa-user" style="font-size: 24px;"></i> <label> <?php echo $row['user_name']?></label>
				</div>
				<div class="col-lg-6">
				<label><?php echo $row['date_time']?></label>
				</div>
				<div class="clearfix"></div>
				<div class="col-lg-6">
				<span><?php echo $row['message']?></span>
				</div>
				
			<div class="clearfix"></div>
			<hr/>
	<?php }
		?>
		
			</div>
		</div>
	</div>
  </div>
  
  <div class="col-lg-3">
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

</script>

</body>

</html>
