<!DOCTYPE html>
<html>
<head>
    <title>SajiloSewa - Find Service</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4; /* Added background color */
        }
        .header {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative; /* Added position relative */
        }
        .logo {
            width: 100px;
            height: auto;
        }
        h1 {
            margin: 0;
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
            max-width: 800px;
            margin: 20px auto; /* Added margin for gap between header and container */
            padding: 20px;
            background-color: #fff; /* Added background color */
            border-radius: 8px; /* Added border radius */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Added box shadow */
            position: relative; /* Added position relative */
        }
        .service-item {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .service-item h3 {
            margin-top: 0;
            color: #333; /* Changed text color */
        }
        .service-item p {
            margin-bottom: 0;
            color: #666; /* Changed text color */
        }
        .back-btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-flex; /* Added to enable flexbox */
            align-items: center; /* Center align items */
            transition: background-color 0.3s ease;
            position: absolute; /* Changed position to absolute */
            top: 150px; /* Positioned above the header with a margin */
            left: 200px; /* Adjusted left position */
        }
        .back-btn:hover {
            background-color: #0056b3;
        }
        .back-btn .arrow {
            margin-right: 5px; /* Add space between arrow and text */
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
    <div class="header">
        <img src="logo.png" alt="Logo" class="logo">
        <h1>Find Service</h1>
        <a href="admin_login.php" class="admin-btn">Admin</a> <!-- Added admin button -->
    </div>
    <a href="homepage.php" class="back-btn">
        <span class="arrow">&#8592;</span> Back
    </a> <!-- Moved back button outside container and header -->
    <div class="container">
        <div class="service-item">
            <h3>Department of Transportation</h3>
            <p>Contact: 01-598356</p>
            <p>Description: Responsible for road maintenance, traffic management, and public transportation.</p>
        </div>
        <div class="service-item">
            <h3>Department of Public Health</h3>
            <p>Contact: 01-9448378</p>
            <p>Description: Provides healthcare services, disease prevention, and public health education.</p>
        </div>
        <div class="service-item">
            <h3>Department of Education</h3>
            <p>Contact: 01-37898738</p>
            <p>Description: Oversees public education, curriculum development, and student welfare.</p>
        </div>
        <div class="service-item" >
            <h3>Department of Social Services</h3>
            <p>Contact: 01-4731287</p>
            <p>Description: Offers social welfare programs, assistance for the needy, and family support services.</p>
        </div>
    </div>
    <footer>
        &copy; 2024 SAJILOSEWA. All rights reserved.
    </footer>
</body>
</html>
