<!-- phpconnect -->
<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "medicorner";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Your code for handling form submissions or database queries can go here

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Poetsen+One&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <style>
        .service-section {
            background-color: #ffffff;
            padding: 20px;
            max-width: 800px;
            margin: 20px auto;
            border-radius: 10px;
            box-shadow: 0 4px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .service {
            margin-bottom: 20px;
        }

        .service h2 {
            color: #DB4C00;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .service p {
            font-size: 16px;
            color: #333333;
            line-height: 1.6;
        }

        .anton-regular {
            font-family: "Anton", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .navbar_start {
            color: #d91e36;
            text-decoration: none;
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-around;
            background-color: #f8edeb;
            height: 60px;
            margin: 30px, 60px;
            border-radius: 5px;
        }

        .navbar_menu {
            display: flex;
            gap: 10px;
            list-style: none;
            margin-left: 10px;
        }

        .navbar_item {
            margin-left: 30px;
        }

        .nav_link {
            color: #000;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <a href="#" class="navbar_start anton-regular">Medicorner</a>
        <ul class="navbar_menu">
            <li class="navbar_item"><a href="index.php" class="nav_link">Home</a></li>
            <li class="navbar_item"><a href="services.php" class="nav_link">Services</a></li>
            <li class="navbar_item"><a href="resources.php" class="nav_link">Resources</a></li>
            <li class="navbar_item"><a href="contact.php" class="nav_link">Contact</a></li>
            <li class="navbar_item"><a href="admin.php" class="nav_link">Admin</a></li>
        </ul>
    </div>

    <div class="service-section">
        <div class="service">
            <h2 class="heading">Our Services</h2>
            <p>We offer a range of services to support healthcare management and patient care. These include:</p>
            <ul>
                <li>Telemedicine Consultations</li>
                <li>Medication Management</li>
                <li>Health Monitoring Tools</li>
                <li>Community Support Forums</li>
            </ul>
        </div>
    </div>
</body>

</html>
