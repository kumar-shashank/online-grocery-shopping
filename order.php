<<?php
require_once"dbconfig.php";
if(isset($_SESSION['login']))
{
	
}
else
{
	header("location:ragister.php");
}
	
	?>
<div class="content">
	<div class="wrap">
		<div class="content-top">
				<div class="section group">
					<div class="about span_1_of_2">	
						<h3>BOOKINGS</h3>
						<?php include('msgbox.php');?>
						<?php
				$bk=mysqli_query($con,"select * from cart where userid='".$_SESSION['login']."'");
				if(mysqli_num_rows($bk))
				{
					?>
					<table class="table table-bordered">
						<thead>
						<th>Booking Id</th>
						<th>Item Name</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Total</th>
						
						<th></th>
						</thead>
						<tbody>
						<?php
						while($bkg=mysqli_fetch_array($bk))
						{
							$m=mysqli_query($con,"select * from item where itemid=(select itemid from item where Title='".$bkg['Title']."')");
							$mov=mysqli_fetch_array($m);
							
							$tt=mysqli_query($con,"select * from item where price='".$bkg['price']."'");
							$thr=mysqli_fetch_array($tt);
							
							?>
							<tr>
								<td>
									<?php echo $bkg['itemid'];?>
								</td>
								<td>
									<?php echo $mov['Title'];?>
								</td>
								<td>
									<?php echo $thr['price'];?>
								</td>
								
								
								?>
									<a href="cancel.php?id=<?php echo $bkg['book_id'];?>">Cancel</a>
									<?php
									
									?>
								</td>
							</tr>
							<?php
						}
						?></tbody>
					</table>
					<?php
				}
				else
				{
					?>
					<h3>No Previous Bookings</h3>
					<?php
				}
				?>
					
				<div class="clear"></div>		
			</div>
	</div>
</div>

<script type="text/javascript">
	$('#seats').change(function(){
		var charge=<?php echo $screen['charge'];?>;
		amount=charge*$(this).val();
		$('#amount').html("Rs "+amount);
		$('#hm').val(amount);
	});
</script>