<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
            background-image: url("logout.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 80vh; 
        }
        .message {
            font-size: 100px;
            font-weight: bold;
            color: green;
        }
        a {
            color:rgb(0, 0, 0);
            text-decoration: none;
            font-weight: bold;
            font-size: 50px;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <p class="message">Thank you for visiting!</p>
    <p><a href="login.php">Click here to login again</a></p>
</body>
</html>
