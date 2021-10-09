<?php

session_start();

require_once "connection.php";

$user_firstName = $user_lastName =$user_email = $user_mobile = $user_password = "";

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
	$user_firstName =	get_value("user_firstName");
	$user_lastName =	get_value("user_lastName");
	$user_email = get_value("user_email");
	$user_mobile = get_value("user_mobile");
	$user_password = get_value("user_password");
	$user_password_hash = password_hash($user_password, PASSWORD_BCRYPT);


	// login
	$user_email_login = $_POST['user'];


	// verify for not null values 
	if ($user_mobile == "" || $user_email == "") {
		echo json_encode(array(
			'status' => false,
			'message' => 'Please provide vavlid name and email.'
		));
	}

	// login verify

	$pass_check = password_verify($user_password_login, $user_password_hash);

	// Check input errors before inserting in database
	$sql = "INSERT INTO user ( user_firstName, user_lastName, user_email, user_mobile, user_password ) VALUES ('" . $user_firstName . "','" . $user_lastName . "','" . $user_email . "', '" . $user_mobile . "', '" . $user_password_hash . "')";

	$pdo_statement = $conn->prepare($sql);

	$result = $pdo_statement->execute();

	if (!$result) {
			header("Location: ../index.html");
	} else {
			header("Location: ../index.html?status=register successfully");
	}


	


}

?>