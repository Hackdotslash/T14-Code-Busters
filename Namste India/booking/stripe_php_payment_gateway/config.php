<?php
require('stripe-php-master/init.php');

$publishableKey="pk_test_51IFMpMKxWAvVu7PYAkzrmTbTdYAiAEDbKNwlJmztGbnO5iLfYfuovp0m93d6PjeZ6fKfogyincaEOcoxw5D1lE8M00oFV5jEoy";

$secretKey="sk_test_51IFMpMKxWAvVu7PYOVQqGT2VsbQSzJq68H88rh1pO3JEKV0W3AswqG1xkUgF5k5lEW2oQLJ88OWfAvguk5GmZBLQ00MGtFsEO4";

\Stripe\Stripe::setApiKey($secretKey);
?>