<?php
// Include database connection file
include 'db_connection.php';

// Check if issue ID is provided
if(isset($_POST['issue_id'])) {
    // Sanitize the input to prevent SQL injection
    $issue_id = mysqli_real_escape_string($connection, $_POST['issue_id']);
    
    // Construct the DELETE query
    $delete_query = "DELETE FROM issues WHERE id = '$issue_id'";
    
    // Execute the query
    if(mysqli_query($connection, $delete_query)) {
        // Issue deleted successfully
        header("Location: admin_panel.php"); // Redirect back to admin panel
        exit();
    } else {
        // Error occurred while deleting the issue
        echo "Error: " . mysqli_error($connection);
    }
} else {
    // Issue ID not provided, redirect back to admin panel
    header("Location: admin_panel.php");
    exit();
}
?>
