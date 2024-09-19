
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css">

    <style>
        /* General styling */

body {
    background-color: #f5f5f5;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Centered login container */
.login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    max-width: 600px;
}

.login-box {
    background-color: #fff;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.login-box h2 {
    font-size: 24px;
    margin-bottom: 15px;
    color: #333;
}

/* Styling for input fields and labels */
.input-group {
    margin-bottom: 20px;
    text-align: left;
}

.input-group label {
    font-size: 14px;
    font-weight: bold;
    margin-bottom: 5px;
    color: #555;
}

.input-group input[type="text"],
.input-group input[type="password"] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    box-sizing: border-box;
    transition: border-color 0.3s;
}

.input-group input[type="text"]:focus,
.input-group input[type="password"]:focus {
    border-color: #007bff;
    outline: none;
}

/* Button styling */
.btn-group input[type="submit"] {
    width: 100%;
    padding: 12px;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn-group input[type="submit"]:hover {
    background-color: #3333;
}

/* Responsive design for smaller screens */
@media (max-width: 600px) {
    .login-box {
        padding: 20px;
    }
}

        </style>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Admin Login</h2>
            <form action="admin_login.php" method="POST">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <div class="btn-group">
                    <input type="submit" value="Login">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
