
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disaster Volunteer Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        h1{
            text-align: justify;
            text-justify: inter-word;
            font-size:14px;
        }
        h2{
            color:#333;
            font-weight:bold;
        }
        label{
            text-align: justify;
            text-justify: inter-word;
            font-size:15px;
            font-weight:bold;
        }
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    margin: 0;
}

.header {
    font-weight:bold;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    background-color: #333;
    color: #fff;
    position: relative;
    width: 100%;
    z-index: 1000;
    
    
}

.logo {
    font-size: 1.5rem;
}

.nav {
    text-decoration:none;
    flex-grow: 1;
}

.nav-list {
    margin-top:11px;
    display: flex;
    justify-content: flex-end;
    list-style: none;
}

.nav-list li {
    text-decoration:none;
    margin-left: 1700px;
}

.nav-list a {
    color: #fff;
    text-decoration: none;
    font-size: 1rem;
}

.nav-list a:hover {
    text-decoration:none;
    color:red;
}

.content {
    padding: 20px;
    text-align: center;
}

/* Responsive design */
@media (max-width: 768px) {
    .header {
        flex-direction: column;
        text-align: center;
    }

    .nav-list {
        flex-direction: column;
        margin-top: 10px;
    }

    .nav-list li {
        margin: 10px ;
    }
}

@media (max-width: 480px) {
    .logo {
        font-size: 1.2rem;
    }

    .nav-list a {
        font-size: 0.9rem;
    }
}
    </style>

<header class="header">
        <div class="logo">MyLogo</div>
        <nav class="nav">
            <ul class="nav-list">
                <li><a href="index.php"></a></li>
                
            </ul>
        </nav>
    </header>
</head>
<body>
<div class="container">
    <div class="container mt-5">
        <h2 class="text-center">MDRRMO Kalayaan Volunteers Registration Form</h2>
        <br>
        <br>
        <br>
        <br>
        <form action="register_process.php" method="POST" id="volunteerForm">
            <!-- Basic Fields -->
            <div class="form-group">
                <label for="fullname">Full Name:</label>
                <input type="text" class="form-control" id="fullname" name="fullname" required>
            </div>

            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" class="form-control" id="age" name="age" required>
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>

            <div class="form-group">
                <label for="emergency_contact_name">Emergency Contact Person (Full Name):</label>
                <input type="text" class="form-control" id="emergency_contact_name" name="emergency_contact_name" required>
            </div>

            <div class="form-group">
                <label for="emergency_contact_phone">Mobile Number:</label>
                <input type="tel" class="form-control" id="emergency_contact_phone" name="emergency_contact_phone" required>
            </div>

            <!-- New Fields -->
            <!--<h4>Additional Information</h4>-->
            <div class="form-group">
                <label for="profession">What is your Profession?</label>
                <input type="text" class="form-control" id="profession" name="profession" required>
            </div>

            <div class="form-group">
                <label for="physician_care">Are you under a physician care or you have previous health issues?</label>
                <input type="text" class="form-control" id="physician_care" name="physician_care" required>
            </div>

            <div class="form-group">
                <label>Do you have medical insurance?</label>
                <div>
                    <label><input type="radio" name="medical_insurance" value="Yes" required> Yes</label>
                    <label><input type="radio" name="medical_insurance" value="No"> No</label>
                </div>
            </div>

            <div class="form-group">
                <label for="service_branch">Service Branch/First Responder Profession:</label>
                <select class="form-control" id="service_branch" name="service_branch" required>
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
                <label>Are you familiar with Basic Life Support (BLS) and First Aid?</label>
                <div>
                    <label><input type="radio" name="bls_familiarity" value="Yes" required> Yes</label>
                    <label><input type="radio" name="bls_familiarity" value="No"> No</label>
                </div>
            </div>

            <div class="form-group">
                <label for="training_attended">What kind of Health/disaster Training did you Attended? (Write N/A if none):</label>
                <textarea class="form-control" id="training_attended" name="training_attended" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label>Are you willing to participate in any kind of Health/Disaster Response training?</label>
                <div>
                    <label><input type="radio" name="willing_to_train" value="Yes" required> Yes</label>
                    <label><input type="radio" name="willing_to_train" value="No"> No</label>
                </div>

                <div class="form-group">
                <label for="tshirt_size">T-shirt Size:</label>
                <select class="form-control" id="tshirt_size" name="tshirt_size" required>
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
                <input type="text" class="form-control" id="pants_size" name="pants_size" required>
            </div>
            </div>

            <!-- Waiver Section -->
            <h5>WAIVER AND RELEASE OF LIABILITY</h5>

            <h1>I agree, understand that my participation as a volunteer responder in the MUNICIPAL DISASTER RISK REDUCTION AND MANAGEMENT OFFICE. I acknowledge and agree to the following:</h1>
            <br>
            <h1>1. Assumption of Risk: I understand that my role as a volunteer responder may involve certain risks, including physical injury/illness (during or after emergency operation), hospital and burial. I voluntarily accept and assume all risks associated with my participation.</h1>
            <br>  
            <h1>2. Release and Waiver: I, on behalf of myself, my heirs, executors, and administrators, hereby release and discharge MUNICIPAL DISASTER RISK REDUCTION AND MANAGEMENT OFFICE, its officers, employees from any claims, liabilities, and damages that may arise from my participation as a volunteer, including any injury, death, or property damage, except were caused by gross negligence or intentional misconduct.</h1>
            <br>  
            <h1>3. Indemnification: I agree to indemnify and hold harmless MUNICIPAL DISASTER RISK REDUCTION AND MANAGEMENT OFFICE from any claims or demands arising out of my participation as a volunteer.</h1>  
            <br>  
            <h1>4. Medical Treatment: I authorize MUNICIPAL DISASTER RISK REDUCTION AND MANAGEMENT OFFICE to provide or arrange for medical treatment in case of an emergency and agree to bear any costs associated with such treatment.</h1>  
            <br>  
            <h1>5. Confidentiality: I understand that as a volunteer responder, I may have access to confidential information, and I agree to maintain the confidentiality of such information during and after my volunteer service.</h1>  
            <br> 

            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="waiver" name="waiver" required>
                <label class="form-check-label" for="waiver"><h1>I read this waiver and fully understand its terms. I agree to this waiver voluntarily.</h1></label>
            </div>

            <button type="submit" class="btn btn-dark btn-block">Submit</button>
        </form>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
     </script>
</body>
</html>
<?php
include 'footer/footer.php';
?>
