<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Account Created</title>    	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	</head>
	</body>
	<div class="container">
	<style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', 'Bold','Italic', sans-serif;
			font-size: 25px;
        }

        .container {
            text-align: center;
            padding: 30px;
        }
		
	
    </style>
	
	
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
		 
<?php

	// This gets input from the creating account form.
	$userEmail=$_POST['userEmail'];
	$userPassword = hash('sha256', $_POST['userPassword']);
	
	// Connect to server/database
	$mysqli = mysqli_connect("****", "****", "****", "****");
	if ($mysqli -> connect_errno) {
	  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
	  exit();
	}  
 $sql = "INSERT INTO users(user_name, user_email, user_pass)
					 values('$userEmail','$userEmail', '$userPassword')";

	 
	
	$checkEmailExists = "SELECT user_email FROM users WHERE user_email = '$userEmail'";
	$result = mysqli_query($mysqli, $checkEmailExists);
	
	if (mysqli_num_rows($result) > 0) {
    // Email already exists, display a message
    echo "This email already exist. Please choose a different email. Thank you";
} else {
    // Make sure the email is unique
    $sql = "INSERT INTO users (user_name, user_email, user_pass) VALUES ('$userEmail', '$userEmail', '$userPassword')";
    mysqli_query($mysqli, $sql);
	print "Thank you for creating an account!.";
	print "Your account has been created !.";
    echo '<br><a href="signin.php" class="btn btn-primary">Sign In</a>';
}
	
	
?>


