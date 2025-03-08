<?php
session_start();

// Sample array of users with their credentials
$users = array(
    array("email" => "user1@example.com", "password" => "password1", "user_id" => 1),
    array("email" => "user2@example.com", "password" => "password2", "user_id" => 2),
    array("email" => "user3@example.com", "password" => "password3", "user_id" => 3)
);

// Check if user is already logged in
if(isset($_SESSION['user_id'])) {
    header("Location: homepage.php"); // Redirect if already logged in
    exit;
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process login form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Loop through the users array to check credentials
    foreach ($users as $user) {
        if ($user['email'] === $email && $user['password'] === $password) {
            // Set user_id in session
            $_SESSION['user_id'] = $user['user_id'];

            // Redirect to homepage after successful login
            header("Location: homepage.php");
            exit;
        }
    }

    // Display error message if authentication fails
    $error = "Invalid email or password";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Your CSS styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .header {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    width: 100px;
    height: auto;
}

h1 {
    margin: 0;
}

        h2 {
            text-align: center;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 20px auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="email"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
        .admin-btn {
    background-color: #dc3545;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
}

.admin-btn:hover {
    background-color: #c82333;
}
footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header class="header">
        <img src="logo.png" alt="Logo" class="logo">
        <h1>SAJILO SEWA</h1>
        <a href="admin_login.php" class="admin-btn">Admin</a>
    </header>
    <h2>Login</h2>
    <?php if(isset($error)) echo "<p class='error-message'>$error</p>"; ?>
    <form id="loginForm" method="POST" action="">
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
