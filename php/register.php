<?php
	$first = $_POST['fname'];
	$last = $_POST['lname'];
	$email = $_POST['email'];

	setcookie("firstNameCookie", $first,time()+3600*24, '/');
	setcookie("lastNameCookie", $last,time()+3600*24, '/');
	setcookie("emailCookie", $email,time()+3600*24, '/');
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quiz 2: Registration Handling</title>

	<link type="text/css" rel="stylesheet" href="../css/main.css" />

</head>
<body>
	<h3>Cookie has been set!</h3>
	<h4>Thank you for signing up!</h4>
</body>
</html>