<?php
require('config.php');
?>
<form action="submit.php" method="post">
	<script
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="<?php echo $publishableKey?>"
		data-amount="1000"
		data-name="You are all set"
		data-description="Pay Now"
		data-image="https://www.logostack.com/wp-content/uploads/designers/eclipse42/small-panda-01-600x420.jpg"
		data-currency="inr"
		data-email="namaste-india@gmail.com"
	>
	</script>

</form>