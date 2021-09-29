<?php

session_start();
// uncomment bellow line inn production
// error_reporting(0);

// Include config file

require_once "connection.php";

$name = $email = $msg = "";

// extract value from api 
function get_value($key)
{
	if (isset($_POST[$key])) {
		return trim($_POST[$key]);
	}
	return "";
}

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Validate name
	$name =	get_value("name");
	$email =	get_value("emali");
	$msg = get_value("message");

	// verify for not null values 
	if ($name == "" || $email == "") {
		echo json_encode(array(
			'status' => false,
			'message' => 'Please provide vavlid name and email.'
		));
	}

	// Check input errors before inserting in database
	$sql = "INSERT INTO contactus ( name, email, message) VALUES ('" . $name . "','" . $email . "','" . $msg . "')";

	$pdo_statement = $conn->prepare($sql);

	$result = $pdo_statement->execute();

	if (!$result) {
		$_SESSION['status'] = "Something went wrong! Please try after sometime";
			header("Location: ../contactus.php?status=error");
	} else {
			$_SESSION['status'] = "Your Detais Submitted Successfully";
			header("Location: ../contactus.php");
	}

	// echo json_encode($response);
}

?>