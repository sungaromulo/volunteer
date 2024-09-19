<?php
include 'header/header.php';
?>
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

// Fetch all volunteers
$sql = "SELECT * FROM volunteers";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Volunteers</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        /* Auto-fit the table size */
        .table {
            width: 100%;
            table-layout: auto;
            border-collapse: collapse;
        }
        
        /* Optional: Styling for table borders */
        .table, .table th, .table td {
            border: 1px solid black;
        }

        /* Make sure the table headers and cells have padding for better visibility */
        .table th, .table td {
            padding: 10px;
            text-align: center;
        }

        /* Dark header styling */
        .thead-dark th {
            background-color: #343a40;
            color: white;
        }

        /* Hover effect */
        .table-hover tbody tr:hover {
            background-color: #f5f5f5;
        }

        /* Responsive design for smaller screens */
        @media (max-width: 768px) {
            .table thead {
                display: none;
            }
            .table, .table tbody, .table tr, .table td {
                display: block;
                width: 100%;
            }
            .table tr {
                margin-bottom: 15px;
            }
            .table td {
                text-align: right;
                padding-left: 50%;
                position: relative;
            }
            .table td::before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 50%;
                padding-left: 10px;
                font-weight: bold;
                text-align: left;
            }
        }
        .container {
            max-width: 600px;
            height: 100%;
            display: flex;
            justify-content: center;
           
        }
    </style>
</head>
<body>
    <br>
<h2 class="text-center">MDRRMO Kalayaan Volunteers List</h2>

<div class="d-flex justify-content-center mt-5">
    <div class="container">
        

        <!-- Download Button for PDF -->
        <div class="text-left mb-3">
            <button onclick="downloadPDF()" class="btn btn-danger">Download list</button>
        </div>

        <?php if ($result->num_rows > 0): ?>
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Fullname</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Emergency Contact</th>
                        <th>Profession</th>
                        <th>Medical Insurance</th>
                        <th>Physician Care</th>
                        <th>Service Branch</th>
                        <th>Training Familiarity</th>
                        <th>Training Attended</th>
                        <th>Willing to Train</th>
                        <th>T-shirt Size</th>
                        <th>Pants Size</th>
                        <th>Waiver Agreement</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['fullname']; ?></td>
                            <td><?php echo $row['age']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['emergency_contact_name'] . " (" . $row['emergency_contact_phone'] . ")"; ?></td>
                            <td><?php echo $row['profession']; ?></td>
                            <td><?php echo $row['medical_insurance']; ?></td>
                            <td><?php echo $row['physician_care']; ?></td>
                            <td><?php echo $row['service_branch']; ?></td>
                            <td><?php echo $row['bls_familiarity']; ?></td>
                            <td><?php echo $row['training_attended']; ?></td>
                            <td><?php echo $row['willing_to_train']; ?></td>
                            <td><?php echo $row['tshirt_size']; ?></td>
                            <td><?php echo $row['pants_size']; ?></td>
                            <td><?php echo $row['waiver_agreement'] ? "Yes" : "No"; ?></td>
                            <td>
                                <center>
                                <a href="edit_volunteer.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="delete_volunteer.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete?');">Delete</a>
                    </center>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No volunteers found.</p>
        <?php endif; ?>

       <!-- <a href="index.php" class="btn btn-danger btn-block">Logout</a>-->
    </div>
        </div>
    <br>
    <br>
</body>
</html>

<?php $conn->close(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.19/jspdf.plugin.autotable.min.js"></script>

<script>
    function downloadPDF() {
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF({
            orientation: "landscape",
            unit: "pt",
            format: "legal" // Legal size (8.5 x 14 inches)
        });

        doc.setFontSize(18);
        doc.text("MDRRMO Kalayaan Volunteer List", doc.internal.pageSize.width / 2, 40, { align: "center" });

        // Define table columns and data
        const columns = [
            { header: "ID", dataKey: "id" },
            { header: "Fullname", dataKey: "fullname" },
            { header: "Age", dataKey: "age" },
            { header: "Gender", dataKey: "gender" },
            { header: "Address", dataKey: "address" },
            { header: "Emergency Contact", dataKey: "emergency_contact" },
            { header: "Profession", dataKey: "profession" },
            { header: "Medical_insurance", dataKey: "medical_insurance" },
            { header: "Physician_care", dataKey: "physician_care" },
            { header: "Service_branch", dataKey: "service_branch" },
            { header: "Bls_familiarity", dataKey: "bls_familiarity" },
            { header: "Training_attended", dataKey: "training_attended" },
            { header: "Willing_to_train", dataKey: "willing_to_train" },
            { header: "T-shirt Size", dataKey: "tshirt_size" },
            { header: "Pants Size", dataKey: "pants_size" },
            { header: "Waiver Agreement", dataKey: "waiver_agreement" }
        ];

        // Extract table data from the webpage
        const table = document.querySelector("tbody").children;
        const data = [];
        for (let i = 0; i < table.length; i++) {
            const row = table[i].children;
            data.push({
                id: row[0].innerText,
                fullname: row[1].innerText,
                age: row[2].innerText,
                gender: row[3].innerText,
                address: row[4].innerText,
                emergency_contact:row[5].innerText,
                profession: row[6].innerText,
                medical_insurance: row[7].innerText,
                physician_care: row[8].innerText,
                service_branch: row[9].innerText,
                bls_familiarity: row[10].innerText,
                training_attended: row[11].innerText,
                willing_to_train: row[12].innerText,
                tshirt_size: row[13].innerText,
                pants_size: row[14].innerText,
                waiver_agreement: row[15].innerText ? "Yes" : "No"
            });
        }

        // Add table to PDF with autoTable plugin
        doc.autoTable({
            columns: columns,
            body: data,
            startY: 70,
            theme: 'grid', // Add borders to cells
            margin: { horizontal: 20 }, // Margins to fit the content
            styles: {
                cellPadding: 4,
                fontSize: 10,
                overflow: 'linebreak', // Wrap text in cells
                minCellHeight: 20
            },
            headStyles: {
                fillColor: [40, 40, 40], // Dark header background
                textColor: [255, 255, 255] // White text
            },
            didDrawPage: function (data) {
                // Add a title on each page
                doc.setFontSize(18);
                doc.text("MDRRMO Kalayaan Volunteer List", doc.internal.pageSize.width / 2, 40, { align: "center" });
            }
        });

        // Save the PDF
        doc.save("volunteer_list_legal.pdf");
    }
</script>
<?php
include 'footer/footer.php';
?>