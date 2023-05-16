<?php include 'session.php'; ?>

<?php
	
	if(isset($_SESSION['user'])){
	
	$key = "6CSWBIWr";
	$salt = "Eu1cfXYPIP";
	$txn = "Kmart_ ".rand(10000,99999).rand(10000,99999);
	$fname = "".$user['firstname'];
	$email =  "".$user['email'];
	$phone = "".$user['contact_info'];
	$hash = hash('sha512',$key.$salt.$txn.$fname.$email.$phone);
	
	//echo $key.$salt.$txn.$fname.$email.$phone;
	
	}
	
	
?>