<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicorner Resources</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Poetsen+One&display=swap" rel="stylesheet">
    <style>
        /* Universal CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .navbar_start {
            color: #d91e36;
            text-decoration: none;
            margin-left: 50px;
        }
        .anton-regular {
            font-family: "Anton", sans-serif;
            font-weight: 400;
        }
        body {
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
        }
        .navbar {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: #f8edeb;
            height: 60px;
            margin: 30px 60px;
            border-radius: 20px;
        }
        .navbar_menu {
            display: flex;
            gap: 5px;
            list-style: none;
            margin-left: 100px;
        }
        .container {
            width: 100%;
        }
        .navbar-item {
            margin-left: 40px;
        }
        .navbar-link {
            color: #011627;
            text-decoration: none;
        }
        .navbar-link:hover {
            color: #d91e36;
        }
        .resources-section {
            background-color: #ffffff;
            padding: 20px;
            max-width: 800px;
            margin: 20px auto;
            border-radius: 10px;
            box-shadow: 0 4px 4px rgba(0, 0, 0, 0.1);
        }
        .resources {
            margin-bottom: 20px;
        }
        .resources h2 {
            color: #DB4C00;
            font-size: 24px;
            margin-bottom: 10px;
        }
        .resources p {
            font-size: 16px;
            color: #333333;
            line-height: 1.6;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="navbar">
            <a href="#" class="navbar_start anton-regular">Medicorner</a>
            <ul class="navbar_menu">
                <li class="navbar-item"><a href="index.php" class="navbar-link">Home</a></li>
                <li class="navbar-item"><a href="services.php" class="navbar-link">Services</a></li>
                <li class="navbar-item"><a href="resources.php" class="navbar-link">Resources</a></li>
                <li class="navbar-item"><a href="contact.php" class="navbar-link">Contact</a></li>
                <li class="navbar-item"><a href="admin.php" class="navbar-link">Admin</a></li>
            </ul>
        </div>

        <!-- Resources Section -->
        <div class="resources-section">
            <div class="resources">
                <h2>Our Resources</h2>
                <p>Explore our collection of resources aimed at providing valuable information and support for your healthcare needs:</p>
                <ul>
                    <li>Health Tips and Guidelines</li>
                    <li>Medication Information</li>
                    <li>Articles on Various Health Conditions</li>
                    <li>Healthy Living Blogs</li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
