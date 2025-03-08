<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sajilo Sewa</title>
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
            color: red;
            font-size: 32px;
            margin-bottom: 70px;
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

        .container {
            width: 80%;
            max-width: 600px;
            margin: 100px auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 5px;
        }

        .buttons-container {
            display: flex;
            justify-content: center;
            margin-top: 70px;
        }

        .btn {
            display: inline-block;
            width: 100%;
            max-width: 200px;
            background-color: #007bff; /* Default color */
            color: #fff;
            border: none;
            padding: 10px;
            margin: 10px;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0056b3; /* Hover color */
        }

       /* Footer styles */
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
    <header class="header">
        <img src="logo.png" alt="Logo" class="logo">
        <h1>SAJILO SEWA</h1>
        <a href="admin_login.php" class="admin-btn">Admin</a>
    </header>
    <div class="container">
        <h2>WELCOME TO SAJILO SEWA</h2>
        <div class="buttons-container">
            <a href="login.php" class="btn">Login</a>
            <a href="register.php" class="btn">Register</a>
        </div>
    </div>
    <footer>
        &copy; 2024 SAJILOSEWA. All rights reserved.
    </footer>
</body>
</html>
