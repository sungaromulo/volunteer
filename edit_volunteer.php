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

// Fetch volunteer data based on ID
$sql = "SELECT * FROM volunteers WHERE id = $volunteer_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $volunteer = $result->fetch_assoc();
} else {
    echo "No volunteer found!";
    exit();
}

// Update volunteer data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
    $waiver = isset($_POST['waiver']) ? 1 : 0;

    $sql = "UPDATE volunteers SET 
            fullname = '$fullname',
            age = $age,
            gender = '$gender',
            address = '$address',
            emergency_contact_name = '$emergency_contact_name',
            emergency_contact_phone = '$emergency_contact_phone',
            profession = '$profession',
            medical_insurance = '$medical_insurance',
            physician_care = '$physician_care',
            service_branch = '$service_branch',
            bls_familiarity = '$bls_familiarity',
            training_attended = '$training_attended',
            willing_to_train = '$willing_to_train',
            tshirt_size = '$tshirt_size',
            pants_size = '$pants_size',
            waiver_agreement = $waiver
            WHERE id = $volunteer_id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            alert('Volunteer details updated successfully!');
            window.location.href = 'manage_volunteers.php';
        </script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Volunteer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Volunteer Details</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="fullname">Full Name:</label>
                <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $volunteer['fullname']; ?>" required>
            </div>

            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" class="form-control" id="age" name="age" value="<?php echo $volunteer['age']; ?>" required>
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="Male" <?php if($volunteer['gender'] == "Male") echo "selected"; ?>>Male</option>
                    <option value="Female" <?php if($volunteer['gender'] == "Female") echo "selected"; ?>>Female</option>
                </select>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address" value="<?php echo $volunteer['address']; ?>" required>
            </div>

            <div class="form-group">
                <label for="emergency_contact_name">Emergency Contact Person (Name):</label>
                <input type="text" class="form-control" id="emergency_contact_name" name="emergency_contact_name" value="<?php echo $volunteer['emergency_contact_name']; ?>" required>
            </div>

            <div class="form-group">
                <label for="emergency_contact_phone">Emergency Contact Phone:</label>
                <input type="tel" class="form-control" id="emergency_contact_phone" name="emergency_contact_phone" value="<?php echo $volunteer['emergency_contact_phone']; ?>" required>
            </div>

            <div class="form-group">
                <label for="profession">Profession:</label>
                <textarea class="form-control" id="profession" name="profession" rows="3" required><?php echo $volunteer['profession']; ?></textarea>
            </div>

            <div class="form-group">
                <label for="medical_insurance">Medical_insurance:</label>
                <div>
                    <label><input type="radio" name="medical_insurance" value="Yes" required> Yes</label>
                    <label><input type="radio" name="medical_insurance" value="No"> No</label>
                </div>
             </div>

            <div class="form-group">
                <label for="physician_care">Physician_care:</label>
                <textarea class="form-control" id="physician_care" name="physician_care" rows="3" required><?php echo $volunteer['physician_care']; ?></textarea>
            </div>

            <div class="form-group">
                <label for="service_branch">Service_branch:</label>
                <select class="form-control" id="service_branch" name="service_branch" rows="3" required><?php echo $volunteer['service_branch']; ?></textarea>
                <option value="">Select Branch</option>
                    <option value="PNP">PNP</option>
                    <option value="PCG">PCG</option>
                    <option value="BFP">BFP</option>
                    <option value="Navy">Navy</option>
                    <option value="Airforce">Airforce</option>
                    <option value="Marines">Marines</option>
                    <option value="CSO's">CSO's</option>
                    <option value="Civilian">Civilian</option>
                </select>
            </div>

            <div class="form-group">
                <label for="bls_familiarity">Bls_familiarity:</label>
                <textarea class="form-control" id="bls_familiarity" name="bls_familiarity" rows="3" required><?php echo $volunteer['bls_familiarity']; ?></textarea>
            </div>

            <div class="form-group">
                <label for="training_attended">Training Attended:</label>
                <textarea class="form-control" id="training_attended" name="training_attended" rows="3" required><?php echo $volunteer['training_attended']; ?></textarea>
            </div>

            <!--<div class="form-group">
                <label for="willing_to_train">Willing_to_train:</label>
                <textarea class="form-control" id="willing_to_train" name="willing_to_train" rows="3" required><?php echo $volunteer['willing_to_train']; ?></textarea>
            </div>-->

            <div class="form-group">
                <label for="willing_to_train">Are you willing to participate in any kind of Health/Disaster Response training?</label>
                <div>
                    <label><input type="radio" name="willing_to_train" rows="3" value="Yes" required> Yes</label>
                    <label><input type="radio" name="willing_to_train" rows="3" value="No"> No</label>
                </div>

            <div class="form-group">
                <label for="tshirt_size">T-shirt Size:</label>
                <select class="form-control" id="tshirt_size" name="tshirt_size" value="<?php echo $volunteer['tshirt_size']; ?>" required>
                <option value="">Select Size</option>
                    <option value="SMALL">SMALL</option>
                    <option value="MEDIUM">MEDIUM</option>
                    <option value="LARGE">LARGE</option>
                    <option value="X-LARGE">X-LARGE</option>
                    <option value="DOUBLE XL">DOUBLE XL</option>
                    <option value="TRIPLE XL">TRIPLE XL</option>
                </select>
            </div>

            <div class="form-group">
                <label for="pants_size">Pants Size:</label>
                <input type="text" class="form-control" id="pants_size" name="pants_size" value="<?php echo $volunteer['pants_size']; ?>" required>
            </div>

            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="waiver" name="waiver" <?php if($volunteer['waiver_agreement']) echo "checked"; ?>>
                <label class="form-check-label" for="waiver">I agree to the waiver agreement</label>
            </div>

            <button type="submit" class="btn btn-primary">Update Volunteer</button>
            <a href="manage_volunteers.php" class="btn btn-secondary">Back</a>
        </form>
    </div>
</body>
</html>
