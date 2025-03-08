<?php
session_start();

// Define array of users with their credentials
$users = array(
    1 => array('email' => 'user1@example.com', 'password' => 'password1', 'user_id' => 1, 'name' => 'User 1'),
    2 => array('email' => 'user2@example.com', 'password' => 'password2', 'user_id' => 2, 'name' => 'User 2'),
    3 => array('email' => 'user3@example.com', 'password' => 'password3', 'user_id' => 3, 'name' => 'User 3')
);

// Check if user is logged in
if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Retrieve the logged-in user's information
$user_id = $_SESSION['user_id'];

// Check if the user ID exists in the $users array
if (!array_key_exists($user_id, $users)) {
    // Redirect to login page if user ID is not found
    header("Location: login.php");
    exit;
}

// Get user info from the $users array
$user_info = $users[$user_id];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Sajilo Sewa</title>
    <style>
        /* Your CSS styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            width: 90%;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            box-sizing: border-box;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
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
            width: 80px;
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

        .user-info {
            position: relative;
        }

        .user-btn {
            background-color: transparent;
            color: #fff;
            border: none;
            cursor: pointer;
            position: relative;
        }

        .user-btn::after {
            content: '\25BE';
            margin-left: 5px;
        }

        .dropdown {
            position: absolute;
            top: calc(100% + 5px);
            right: 0;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: none;
        }

        .user-info:hover .dropdown {
            display: block;
        }

        .dropdown-item {
            padding: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            color: #333;
            text-decoration: none;
            display: block;
        }

        .dropdown-item:hover {
            background-color: #f0f0f0;
        }

        .content {
            padding: 20px;
        }

        p {
            margin-bottom: 20px;
        }

        .map-container {
            margin: 20px auto;
            max-width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .map {
            display: block;
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .button-container a {
            text-decoration: none;
        }

        .button-container button {
            width: 200px;
            padding: 15px;
            margin: 10px;
            border: none;
            border-radius: 8px;
            background-color: #007bff;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button-container button:hover {
            background-color: #0056b3;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .container {
                width: 90%;
                max-width: 400px;
            }

            .logo {
                width: 60px;
            }
        }
        footer {
  width: 100%;
  height: 270px;
  background: #000000;
  margin-top: 40px;
  color: #ffffff;
}

footer h2 {
  font-weight: bold;
  text-transform: uppercase;
  font-size: 18px;
  margin-bottom: 20px;
}

.main {
  display: flex;
  justify-content: space-between;
}

.left {
  width: 33%;
  margin: 30px 0 0 20px;
}

.mid {
  width: 33%;
  margin: 30px 0 0 20px;
}

.right {
  width: 33%;
  margin: 30px 0 0 20px;

}

.left .social ul li {
  display: inline-flex;
  margin: 20px 0 0 0;
}

.left .social a {
  padding: 0 2px;
}

.left .social a i {
  height: 40px;
  width: 40px;
  background: #1a1a1a;
  line-height: 40px;
  text-align: center;
  font-size: 18px;
  border-radius: 5px;
  color: #ffffff;
}

.left .social a i:hover {
  background: #ffffff;
  color: #000000;
}

.left p {
  text-align: justify;
}

.mid .fas {
  font-size: 25px;
  background: #1a1a1a;
  height: 35px;
  width: 35px;
  line-height: 35px;
  text-align: center;
  border-radius: 50%;
  transition: 0.3s;
}

.mid .fas:hover {
  background: #ffffff;
  color: #000000;
}

.mid .text {
  padding: 20px;
  font-size: 17px;
  font-weight: 500;
}

.mid .phone {
  margin: 15px 0;
}

.mid {
  margin-left: 100px;
}

.right form .txt {
  font-size: px;
  color: #ffffff;
  margin-top: 2px;
}

.right form .msg {
  margin-top: 10px;
  color: #ffffff;
}

.right form input[type="email"],
.right form input[type="textarea"]
 {
  font-size: 17px;
  background: #151515;
  border: 1px solid #222222;
  color: #ffffff;
  width: 80%;
  height: 30px;
}

.btn {
  border: none;
  outline: none;
  background: #656565;
  font-size: 17px;
  font-weight: 500;
  cursor: pointer;
  transition: 0.3s;
  color: #ffffff;
  width: 80%;
  height: 30px;
}

.btn:hover {
  background: #ffffff;
  color: #000000;
}
    </style>
</head>
<body>
    <header class="header">
        <img src="logo.png" alt="Logo" class="logo">
        <h1>SAJILO SEWA</h1>
        <?php if(isset($user_info)) : ?>
        <div class="user-info">
            <button class="user-btn"><?php echo $user_info['name']; ?></button>
            <div class="dropdown">
            <a href="logout.php" class="dropdown-item">Logout</a>
            </div>
        </div>
        <?php endif; ?>
        <a href="admin_login.php" class="admin-btn">Admin</a>
    </header>

    <!-- Nepal Map -->
    <div class="content">
        <div class="map-container">
            <img src="nepal.png" alt="Nepal Map" class="map">
        </div>
    </div>

    <!-- Center aligned button container -->
    <div class="button-container">
        <a href="find_service.php"><button>Find a Service</button></a>
        <a href="report_issue.php"><button>Report an Issue</button></a>
        <a href="event_calendar.php"><button>Event Calendar</button></a>
    </div>
    <footer>
<div class="main">
    <div class="left">
      <h2>About us</h2>
      <p>Sajilo Sewa is your convenient hub for accessing essential government services effortlessly.
         Our platform simplifies the process of finding information, submitting applications, and tracking requests, 
         ensuring that citizens can easily access public health, education, transportation, and social welfare services. 
         We're dedicated to empowering citizens by providing a user-friendly and transparent interface, making government 
         services more accessible to everyone.
          </p>
         </div>
    <div class="mid">
      <h2>Address</h2>
      <ul>
        <li><i class="fas fa-map-marker-alt"></i><span class="text">Kathmandu,Nepal</span></li>
        <div class="phone">
          <li><i class="fas fa-phone-alt"></i><span class="text">+977 98668812085</span></li>
        </div>
        <li><i class="fas fa-envelope-square"></i><span class="text">sajilosewa@gmail.com</span></li>
      </ul>
    </div>
    <div class="right">
      <h2>Contact us</h2>
      <form method="POST">
        <div class="txt"><span>Email:</span></div>
        <input type="email" name="email" required /><br>
        <div class="msg"><span>Message:</span></div>
        <input type="textarea" name="message" required /><br><br>
        <button class="btn" type="submit" name="send">Send</button>
      </form>
    </div> 
  </div>
</footer>
</body>
</html>
