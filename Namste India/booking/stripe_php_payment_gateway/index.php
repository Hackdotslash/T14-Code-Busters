<?php
      session_start();
	?>
	<?php
require('config.php');
require_once '../dbh.inc.php';
	$payId = $_GET["id"];


	$query = mysqli_query($conn,"SELECT * FROM booked WHERE payId = '$payId'");
	$row = mysqli_fetch_assoc($query);
	$totalPay = $row["totlaFare"] *100;
?>
<form action="<?php echo "submit.php?id=$payId"?>" method="post">
	<script
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="<?php echo $publishableKey?>"
		data-amount="<?php echo $totalPay?>"
		data-name="You are all set"
		data-description="Pay Now"
		data-image="https://www.logostack.com/wp-content/uploads/designers/eclipse42/small-panda-01-600x420.jpg"
		data-currency="inr"
		data-email="<?php echo $_SESSION['username'];?>"
	>
	</script>

</form>