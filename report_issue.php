<?php
// Include database connection file
include 'db_connection.php';

// Initialize a variable to store the submission status
$submission_message = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $issue_type = $_POST["issue_type"];
    $location = $_POST["location"];
    $description = $_POST["description"];

    // Insert the issue into the database
    $query = "INSERT INTO issues (issue_type, location, description) VALUES ('$issue_type', '$location', '$description')";
    if (mysqli_query($connection, $query)) {
        $submission_message = "Report submitted successfully.";
        // Clear form fields after successful submission
        $_POST = array();
        // Redirect to homepage after displaying message
        echo "<script>alert('$submission_message'); window.location.href = 'homepage.php';</script>";
        exit();
    } else {
        $submission_message = "Error submitting report. Please try again.";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>SajiloSewa - Report an Issue</title>
    <style>
        /* Your CSS styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        select, input[type="text"], textarea {
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
            font-size: 16px;
            transition: background 0.3s ease;
        }

        input[type="submit"]:hover {
            background: #0056b3;
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
<a href="homepage.php" class="back-btn">
        <span class="arrow">&#8592;</span> Back
    </a> 
    <h1>Report an Issue</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="issue_type">Issue Type:</label>
        <select name="issue_type" id="issue_type">
            <option value="road">Road Maintenance</option>
            <option value="waste">Waste Management</option>
            <option value="water">Water Supply</option>
            <option value="electricity">Electricity</option>
            <!-- Add more options as needed -->
        </select>

        <label for="location">Location:</label>
        <input type="text" name="location" id="location" value="<?php echo isset($_POST['location']) ? $_POST['location'] : ''; ?>">

        <label for="description">Description:</label>
        <textarea name="description" id="description" rows="4"><?php echo isset($_POST['description']) ? $_POST['description'] : ''; ?></textarea>

        <input type="submit" value="Submit">
    </form>
    <footer>
        &copy; 2024 SAJILOSEWA. All rights reserved.
    </footer>
</body>
</html>
