<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Footer</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        /* Basic reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

/* Main content area for demonstration */
.content {
    padding: 20px;
    text-align: center;
}

/* Footer styling */
.footer {

    background-color: #333;
    color: #fff;
    margin-top:85px;
    padding-top: 20px;
    display: flex;
    flex-direction: column;
}

.footer-content {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.footer-section {
    flex: 1;
    margin: 10px;
    min-width: 200px; /* Ensure a minimum width for each section */
}

.footer-section h3 {
    margin-bottom: 10px;
    font-size: 1.2rem;
}

.footer-section p {
    margin-bottom: 10px;
}

.footer-section a {
    color: #fff;
    text-decoration: none;
}

.footer-section a:hover {
    text-decoration: underline;
}

.footer-bottom {
    text-align: center;
    margin-top: 20px;
    border-top: 1px solid #444;
    padding-top: 10px;
}

@media (max-width: 768px) {
    .footer-content {
        flex-direction: column;
        align-items: center;
    }
    
    .footer-section {
        margin: 10px 0;
        text-align: center;
    }
}

@media (max-width: 480px) {
    .footer-section h3 {
        font-size: 1rem;
    }
    
    .footer-section p, .footer-section a {
        font-size: 0.9rem;
    }
}

        </style>
</head>
<body>
    <main>
       <!-- <section class="content">
            <h1>Welcome to Our Website</h1>
            <p>This is a sample content area to showcase the footer layout.</p>
        </section>-->
    </main>
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Contact Us</h3>
                <p><strong>Address:</strong> Suisse Space Rental Building, Bgy. San Jose, Puerto Princesa City</p>
                <p><strong>Landline:</strong> 048-7269417</p>
                <p><strong>Phone:</strong> TNT: 09510965520/TM: 09532844053</p>
                <p><strong>Email:</strong> mdrrmlgukalayaan@gmail.com</p>
            </div>
           
            <div class="footer-section">
                <h3>Follow Us</h3>
                <p><a href="#">Facebook</a></p>
                <p><a href="#">Twitter</a></p>
                <p><a href="#">Instagram</a></p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 MDRRMO Kalayaan. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
