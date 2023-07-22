<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

    <nav class="navbar background h-nav">
        <ul class="nav-list v-class">
            <div class="logo"><img src="logo.jpg" alt="#logo"></div>
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="about.php">About</a></li>
        </ul>

        <div class="rightNav  v-class">
            <a href="http://localhost/Website/index.php">
                <button class="btn btn-sm">Logout</button>
            </a>
        </div>

    </nav>

    <div class="first">
        <h2>Room Information</h2>
    </div>

    


<?php
// Connecting to the database

$servername = "localhost";
$username = "root";
$password = "";
$database = "hostel";

$conn =  mysqli_connect($servername , $username , $password , $database);

if(!$conn){
    die("Sorry we failed to connect:" .mysqli_connect_error());
}


$sql = "SELECT * FROM room ";
$result = mysqli_query($conn , $sql);
?>



<table class = "table" >
    <tr>
        <th>Room_id</th>
        <th>Hostel_id</th>
        <th>Room_type</th>
        <th>Capacity_Occupied</th>
        <th>First Student</th>
        <th>Second Student</th>
    </tr>

            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows = mysqli_fetch_assoc($result))
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['room_id'];?></td>
                <td><?php echo $rows['hostel_id'];?></td>
                <td><?php echo $rows['room_type'];?></td>
                <td><?php echo $rows['cap_occupied'];?></td>
                <td><?php echo $rows['student_1'];?></td>
                <td><?php echo $rows['student_2'];?></td>
            </tr>
            <?php
                }
             ?>
        </table> 
        
        <section class = "extra">
    <div class="e-but">
            <a href="http://localhost/Website/student.php">
                <button class="button">Students Information</button>
            </a>
    </div>

    <div class="e-but">
            <a href="http://localhost/Website/main.php">
                <button class="button">Hostel Information</button>
            </a>
    </div>
    </section>
    </section> 
</body>
</html>