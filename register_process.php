<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "volunteer_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$fullname = $_POST['fullname'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$tshirt_size = $_POST['tshirt_size'];
$pants_size = $_POST['pants_size'];
$emergency_contact_name = $_POST['emergency_contact_name'];
$emergency_contact_phone = $_POST['emergency_contact_phone'];
$profession = $_POST['profession']; // New field
$medical_insurance = $_POST['medical_insurance']; // New field
$physician_care = $_POST['physician_care']; // New field
$service_branch = $_POST['service_branch']; // New field
$bls_familiarity = $_POST['bls_familiarity']; // New field
$training_attended = $_POST['training_attended'];
$willing_to_train = $_POST['willing_to_train']; // New field
$waiver = isset($_POST['waiver']) ? 1 : 0; // Checkbox for waiver

// Insert data into the database
$sql = "INSERT INTO volunteers (
    fullname, age, gender, address, tshirt_size, pants_size, 
    emergency_contact_name, emergency_contact_phone, profession, medical_insurance, 
    physician_care, service_branch, bls_familiarity, training_attended, willing_to_train, waiver_agreement) 
VALUES (
    '$fullname', $age, '$gender', '$address', '$tshirt_size', '$pants_size', 
    '$emergency_contact_name', '$emergency_contact_phone', '$profession', '$medical_insurance', 
    '$physician_care', '$service_branch', '$bls_familiarity', '$training_attended', '$willing_to_train', $waiver)";

if ($conn->query($sql) === TRUE) {
    echo "<script>
        alert('Volunteer successfully registered!');
        window.location.href = 'index.php';
        </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
