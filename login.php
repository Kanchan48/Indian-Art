<?php
session_start();

// Hardcoded usernames and passwords
$valid_users = [
    "Robo001" => "Teja01@",
    "TEJA001" => "Robo001@"
];

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($valid_users[$username]) && $valid_users[$username] === $password) {
        $_SESSION['username'] = $username;
        header("Location: home.php"); // Redirect to home page
        exit();
    } else {
        $message = "Invalid username or password!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            background-image: url("first.jpg"); /* Change to a valid image URL */
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
        }
        .login-container {
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            text-align: center;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="post" action="">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" value="Login">
        </form>
        <p class="error"><?php echo $message; ?></p>
    </div>
</body>
</html>
