<?php
require 'common.php';

$cust_id = mysqli_real_escape_string($con, $_POST['name']);

$user_registration_query = "INSERT INTO waiting(cust_id)

VALUES('$cust_id')";

$sql_submit = mysqli_query($con,$user_registration_query) or die (mysqli_error($con));

header('location:customer.php');


 ?>