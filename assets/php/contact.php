<?php

	$form_data = [];

	$fname        	= $_POST['fname'];
	$lname        	= $_POST['lname'];
	$email        	= $_POST['email'];
	$mobile        	= $_POST['mobile'];
	$address      	= $_POST['address'];
	$postcode      	= $_POST['postcode'];
	$city         	= $_POST['city'];
	$context      	= $_POST['context'];

	$message     	= "First Name: $fname, \nLast Name: $lname, \nEmail: $email, \nCell: $mobile, \nAddress: $address, \nZip Code: $postcode, \nCity: $city, \nContext: $context.";

	if(mail('timothy.holborn@gmail.com', "Test Sub", $message))
		$form_data['success'] = true;
	else
		$form_data['success'] = false;

	echo json_encode($form_data);
	return;
?>
