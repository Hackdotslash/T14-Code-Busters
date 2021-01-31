<?php
	session_start();
	$payId = $_GET["id"];

	require_once '../dbh.inc.php';
	$query = mysqli_query($conn,"SELECT * FROM booked WHERE payId = '$payId'");
	$row = mysqli_fetch_assoc($query);
	$totalPay = $row["totlaFare"] *100;
?>

<?php
require('config.php');
if(isset($_POST['stripeToken'])){
	\Stripe\Stripe::setVerifySslCerts(false);

	$token=$_POST['stripeToken'];

	$data=\Stripe\Charge::create(array(
		"amount"=>$totalPay,
		"currency"=>"inr",
		"description"=>"Plan Booking",
		"source"=>$token,
	));

	echo "payment success";
	
}
?>