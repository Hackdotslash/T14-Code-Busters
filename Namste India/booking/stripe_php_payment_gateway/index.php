<?php
      session_start();
?>
	<?php
require('config.php');
require_once '../dbh.inc.php';

	$payId = $_GET["id"];
	$userId = $_SESSION["uid"];
	
	$qu = mysqli_query($conn,"SELECT * FROM booked WHERE payId = '$payId'");
	$r = mysqli_fetch_assoc($qu);
	$totalPay = $r["totlaFare"] *100;
	require_once '../config.php';
	$query = mysqli_query($conn,"SELECT * FROM users WHERE id = '$userId'");
	$row = mysqli_fetch_assoc($query);
	$email = $row["email"];
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
		data-email="<?php echo $email;?>"
	>
	</script>

</form>