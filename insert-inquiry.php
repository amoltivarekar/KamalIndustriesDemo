<?php
	include_once 'connection.php';
	$description = $_POST['description'];
	$email = $_POST['email'];
	$mobile_no = "+91".$_POST['mobile_no'];

	$sql = "INSERT into inquiry(inquiry_description, email_address, mobile_number) value('$description', '$email', '$mobile_no')";

	if(mysqli_query($conn, $sql)) {
		echo 'success';
	} else{
		echo 'error';
	}
	// Close connection
	mysqli_close($conn);					
?>