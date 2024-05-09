<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            margin-top: 100px;
        }

        h1 {
            color: #333;
        }

        /* Style for clickable buttons */
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            background-color: #007BFF;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Hover effect for buttons */
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Our Website</h1>

        <!-- Button for Next Appointment -->
        <a href="user-appt.html" class="button">Next Appointment</a>

        <!-- Button for Chat with Us -->
        <a href="user-chat.html" class="button">Chat with Us</a>
    </div>

    <script>
        // Check if this is the first time visiting the site
        if (localStorage.getItem('visitedBefore')) {
            document.querySelector('h1').textContent = "Welcome Back to Our Website";
        } else {
            localStorage.setItem('visitedBefore', true);
        }
    </script>
</body>
</html>










