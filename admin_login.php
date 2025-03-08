<?php
session_start();

// Include database connection file
include 'db_connection.php';

// Check if admin is already logged in, redirect to admin panel if logged in
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header("Location: admin_panel.php");
    exit();
}

// Check if login form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['admin_login'])) {
    // Validate admin credentials (replace with actual validation logic)
    $admin_username = "admin1";
    $admin_password = "miska1263";

    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    if ($input_username === $admin_username && $input_password === $admin_password) {
        // Admin login successful, set session variables
        $_SESSION['admin_logged_in'] = true;
        header("Location: admin_panel.php");
        exit();
    } else {
        // Admin login failed, display error message
        $error_message = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        /* CSS Styles for Admin Login Form */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        h2 {
            text-align: center;
            margin-top: 50px;
        }
        form {
            max-width: 300px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            background: #007bff;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #0056b3;
        }
        p.error {
            color: red;
            text-align: center;
            margin-top: 10px;
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
        .copyright {
  text-align: center;
  margin-top: 20px;
}
    </style>
</head>
<body>

<h2>Admin Login</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br>

    <input type="submit" name="admin_login" value="Login">
</form>

<?php
// Display error message if login failed
if (isset($error_message)) {
    echo "<p class='error'>$error_message</p>";
}
?>
<footer>
        &copy; 2024 SAJILOSEWA. All rights reserved.
    </footer>

</body>
</html>
