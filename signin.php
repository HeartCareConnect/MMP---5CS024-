<?php
	session_start();
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	
	

	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		// An email has been created.
				
		if (isset($_POST['userEmail']) && isset($_POST['userPassword'])) {
			// This retrieves the users data from the database in mysql
			$userEmail = $_POST['userEmail'];
			$userPassword = $_POST['userPassword'];

			$hashedPassword = hash('sha256', $userPassword);

			// This connects to my mysql database 
			$mysqli = mysqli_connect("****", "****", "****", "****");
			if ($mysqli->connect_errno) {
				print "Failed to connect to MySQL: " . $mysqli->connect_error;
				exit();
			}

			// This checks is the email exists
			$checkexistinguser = "SELECT * FROM users WHERE user_email = '$userEmail' AND user_pass = '$hashedPassword'";
			$result = mysqli_query($mysqli, $checkexistinguser);

			if (mysqli_num_rows($result) > 0) {
				// The email does exist.
				$_SESSION['userEmail'] = $userEmail;
				

				// This takes you to a page where only users who have created an account and signed in can access
				header("Location: after.php");
				exit();
			} else {
				// This is for when the email or password does not match or exist.
				print "The email or password does not match. Please try again.";
			}

			mysqli_close($mysqli);
		} else {
			print "Invalid .";
		}
	}
	?>


<!DOCTYPE html>

<html lang="en">
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Exisiting User</title>    	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	
	
	<style>
            body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
			font-size: 25px;
        }

        .container {
            text-align: center;
            padding: 30px;
        }
		
		
	
    </style>

	</head>
	<body>
	<div class="container">
	<form action="signin.php" method="post">
	  <h1>Login</h1>
	  <br>
	  <div class="mb-3">
		<label for="exampleInputEmail1" class="form-label">Email address</label>
		<input type="email" class="form-control" name="userEmail" id="exampleInputEmail1" aria-describedby="emailHelp">
		<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
	  </div>

	  <div class="mb-3">
		<label for="exampleInputPassword1" class="form-label">Password</label>
		<input type="password" class="form-control" name="userPassword" id="exampleInputPassword1">
		<input type="checkbox" onclick="myFunction()"> Show Password
	  </div>
	  
	  <button type="submit" class="btn btn-primary">Enter</button>
	  
	</form>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	  <script >
	  function myFunction() {
		var x = document.getElementById("exampleInputPassword1");
		if (x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
	}
	  </script>
  </body>
</html>
	

  