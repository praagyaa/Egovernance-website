<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Calendar</title>
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
            margin: 20px auto;
            padding: 0 20px;
        }
        .event {
            background-color: #f9f9f9;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
        }
        .event h3 {
            margin-top: 0;
        }
        .event p {
            margin-bottom: 5px;
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
    <a href="homepage.php" class="back-btn">
        <span class="arrow">&#8592;</span> Back
    </a>
    <img src="logo.png" alt="Logo" class="logo">
    <h1> Event Calendar</h1>
    <a href="admin_login.php" class="admin-btn">Admin</a>
</div>

<div class="container">
    <div class="event">
        <h3>Healthcare Awareness Campaign</h3>
        <p>Date: April 10, 2024</p>
        <p>Time: 9:00 AM - 3:00 PM</p>
        <p>Location: Kathmandu</p>
        <p>Description: Join us for a healthcare awareness campaign aimed at promoting healthy living habits.</p>
    </div>
    <div class="event">
        <h3>Educational Seminar: Education Reform</h3>
        <p>Date: April 15, 2024</p>
        <p>Time: 10:00 AM - 1:00 PM</p>
        <p>Location: Pokhara</p>
        <p>Description: Discussing proposed reforms in the education sector and gathering public feedback.</p>
    </div>
    
</div>
<footer>
        &copy; 2024 SAJILOSEWA. All rights reserved.
    </footer>
</body>
</html>
