<?php
session_start();

// Check if user is already logged in
if(isset($_SESSION['user_id'])) {
    header("Location: homepage.php"); // Redirect if already logged in
    exit;
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];

    // Here you need to include your registration logic
    // For simplicity, let's assume registration is successful
    // You should insert the user data into your database or perform any other necessary actions

    // After successful registration, set a message and redirect to login page
    $registration_message = "Registered successfully!";
    // Redirect to login page after successful registration
    header("refresh:3;url=login.php"); // Redirect after 3 seconds
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        /* Your CSS styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 350px;
            max-width: 90%;
        }

        h2 {
            margin-top: 0;
            margin-bottom: 30px;
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #007bff;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 18px;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .registration-message {
            color: green;
            margin-top: 20px;
            text-align: center;
        }

        .logo {
            display: block;
            margin: 0 auto 20px;
            width: 100px;
            height: auto;
        }

        /* Responsive Styles */
        @media (max-width: 480px) {
            .form-container {
                width: 90%;
            }
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
    <div class="form-container">
        <img src="logo.png" alt="Logo" class="logo">
        <h2>Register</h2>
        <?php if(isset($registration_message)) echo "<p class='registration-message'>$registration_message</p>"; ?>
        <form method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>

            <label for="contact">Contact:</label>
            <input type="text" id="contact" name="contact" required>

            <input type="submit" value="Register">
        </form>
    </div>
    <footer>
        &copy; 2024 SAJILOSEWA. All rights reserved.
    </footer>
</body>
</html>
