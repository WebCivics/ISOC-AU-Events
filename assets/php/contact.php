<?php

	$form_data = [];

	$fname        	= $_POST['fname'];
	$lname        	= $_POST['lname'];
	$email        	= $_POST['email'];
	$mobile        	= $_POST['mobile'];
	$profession    	= $_POST['profession'];
	$age      			= $_POST['age'];
	$talent        	= $_POST['talent'];
	$context      	= $_POST['context'];

	$message     	= "First Name: $fname, \nLast Name: $lname, \nEmail: $email, \nMobile: $mobile, \nProfession: $profession, \nAge: $age, \nTalent: $talent, \nContext: $context.";

	if(mail('timothy.holborn@gmail.com', "Test Sub", $message))
		$form_data['success'] = true;
	else
		$form_data['success'] = false;

	echo json_encode($form_data);
	return;
?>
