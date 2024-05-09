<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Create an account</title>    	
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
	
	<div class="container"
  
	<h1> Create an account:</h1>
	
	
	
	<form action="create.account.php" method="post">
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
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
    // Function to generate a random password
function generateRandomPassword(length) {
    // Define the character set for the password
    const charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-+={[}]|;<,>.?/~`'";
    // Initialize an empty string to store the generated password
    let password = "";
    // Loop to generate each character of the password
    for (let i = 0; i < length; i++) {
        // Generate a random index within the character set
        const randomIndex = Math.floor(Math.random() * charset.length);
        // Append the randomly selected character to the password
        password += charset.charAt(randomIndex);
    }
    // Return the generated password
    return password;
}
// Set the generated random password to the password field on page load
document.addEventListener("DOMContentLoaded", function () {
    // Get the password input field by its ID
    const passwordField = document.getElementById("exampleInputPassword1");
    // Check if the password field exists on the page
    if (passwordField) {
        // Set the value of the password field to the generated random password
        passwordField.value = generateRandomPassword(8); // adjust the length as needed
    }
});
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