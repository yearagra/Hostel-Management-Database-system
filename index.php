<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-hostel - Hostel Management System</title>
    <link rel="stylesheet" href="css/stylesheet.css">


</head>

<body>
        <?php
        /*
        This file contains database configuration assuming you are running mysql using user "root" and password ""
        */
        
        define('DB_SERVER', 'localhost');
        define('DB_USERNAME', 'root');
        define('DB_PASSWORD', '');
        define('DB_NAME', 'login');
        
        // Try connecting to the Database
        $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
        
        //Check the connection
        if($conn == false){
            dir('Error: Cannot connect');
        }
        
        ?>
    
    <nav class="navbar background h-nav">
        <ul class="nav-list v-class">
            <div class="logo"><img src="logo.jpg" alt="#logo"></div>
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="about.php">About</a></li>
        </ul>

        <div class="rightNav  v-class">
            <a href="http://localhost/Website/login/login.php">
                <button class="btn btn-sm">Login/SignUp</button>
            </a>

        </div>
    </nav>

    <section class="background firstSection">
        <div class="box-main">
            <div class="firsthalf">
                <p class="text-big">The hostel is in your hand</p>
                <p class="text-small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quos voluptas
                    expedita molestias obcaecati maxime? Vero, voluptatem ipsam deleniti aliquam porro omnis, non sint
                    illum debitis officia quasi molestiae assumenda!</p>

                <div class="buttons">
                    <button class="btn">Subscribe</button>
                </div>
            </div>

            <div class="secondhalf">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, error?
            </div>
        </div>
    </section>

    <footer class="background">
        <p class="text-footer">Copyright &copy; 2022 JK Lakshmipat University - All rights reserved</p>
    </footer>
    <script src="js.resp.js"></script>
</body>

</html>