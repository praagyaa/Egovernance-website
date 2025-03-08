<?php
// Check if admin is logged in, if not redirect to login page
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: admin_login.php");
    exit();
}

// Include database connection file
include 'db_connection.php';

// Fetch reported issues from the database
$issue_query = "SELECT * FROM issues";
$issue_result = mysqli_query($connection, $issue_query);

// Check for database query error
if (!$issue_result) {
    die("Error: " . mysqli_error($connection));
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Manage Issues</title>
    <style>
        /* CSS Styles for Admin Panel */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px; /* Added padding to push content down slightly */
        }
        .container {
            max-width: 800px;
            margin: 0 auto; /* Removed top margin for better positioning */
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-top: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn-back {
            display: block;
            text-align: center;
            margin-top: 20px;
        }
        .btn-delete, .btn-logout {
            background-color: #ff5555;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
        }
        .btn-delete:hover, .btn-logout:hover {
            background-color: #ff0000;
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
<div class="container">
    <h2>Admin Panel</h2>
    <h3>Manage Reported Issues</h3>

    <table>
        <tr>
            <th>Issue Type</th>
            <th>Location</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        <?php
        if (mysqli_num_rows($issue_result) > 0) {
            while ($row = mysqli_fetch_assoc($issue_result)) {
                echo "<tr>";
                // Modify issue type to display appropriate text
                echo "<td>" . str_replace(array('water', 'road','waste'), array('Water Management', 'Road Maintenance','Waste Management'), $row['issue_type']) . "</td>";
                echo "<td>" . $row['location'] . "</td>";
                echo "<td>" . $row['description'] . "</td>";
                echo "<td>"; // Action column
                echo "<form method='post' action='delete_issue.php'>";
                echo "<input type='hidden' name='issue_id' value='" . $row['id'] . "'>";
                echo "<button type='submit' class='btn-delete' onclick=\"return confirm('Are you sure you want to delete this issue?');\">Delete</button>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No issues found.</td></tr>";
        }
        ?>
    </table>

    <form method="post" action="logout.php">
        <button type="submit" class="btn-logout">Logout</button>
    </form>
    <footer>
        &copy; 2024 SAJILOSEWA. All rights reserved.
    </footer>
</div>
</body>
</html>
