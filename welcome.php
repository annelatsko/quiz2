<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quiz2</title>

	<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

	<?php
	  if(!isset($_COOKIE["firstNameCookie"])) {
	?>
		<h3>Sign up for Taking Quiz 2 (creative, I know)</h3>
		<form action="php/register.php" method="post" name="formSubmission">
	    Enter your first name: <br><input type="text" name="fname"></input><br>
	    Enter your last name: <br><input type="text" name="lname"></input><br>
	    Enter your email address: <br><input type="text" name="email"></input><br>
	    <input type="submit" value="Submit">
	  </form>
	<?php
		}
		else {
			echo "<p>Hello " . $_COOKIE['firstNameCookie'] . ", you recently signed up with email address " . $_COOKIE['emailCookie'] . ". Thank you!</p>";
		}
	?>  

	
</body>
</html>