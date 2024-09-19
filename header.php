<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Resizable Header</title>
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
</head>
<body>
    <header class="header">
        <div class="logo">MyLogo</div>
        <nav class="nav">
            <ul class="nav-list">
                <li><a href="index.php">Logout</a></li>
                
            </ul>
        </nav>
    </header>
    <!--<main>
        <section class="content">
            <h1>Welcome to Our Website</h1>
            <p>This is a sample content area to showcase the header layout.</p>
        </section>
    </main>-->
</body>
</html>
