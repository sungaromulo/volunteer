<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_login.php");
    exit();
}

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "volunteer_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Get volunteer ID from the URL
$volunteer_id = $_GET['id'];

// Delete volunteer from the database
$sql = "DELETE FROM volunteers WHERE id = $volunteer_id";

if ($conn->query($sql) === TRUE) {
    echo "<script>
        alert('Volunteer deleted successfully!');
        window.location.href = 'manage_volunteers.php';
        </script>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
