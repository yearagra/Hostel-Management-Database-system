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
        <h2>Student Information</h2>
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


$sql = "SELECT * FROM student ";
$result = mysqli_query($conn , $sql);
?>



<table class = "table" >
    <tr>
        <th>Student_id</th>
        <th>Student_name</th>
        <th>Batch</th>
        <th>Fee_status</th>
        <th>Stream</th>
        <th>Room_id</th>
        <th>Father_name</th>
        <th>Hostel_id</th>
        <th>Course</th>
        <th>Date of Birth</th>
    </tr>

            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows = mysqli_fetch_assoc($result))
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['student_id'];?></td>
                <td><?php echo $rows['student_name'];?></td>
                <td><?php echo $rows['Batch'];?></td>
                <td><?php echo $rows['fee_status'];?></td>
                <td><?php echo $rows['stream'];?></td>
                <td><?php echo $rows['room_id'];?></td>
                <td><?php echo $rows['father_name'];?></td>
                <td><?php echo $rows['hostel_id'];?></td>
                <td><?php echo $rows['course'];?></td>
                <td><?php echo $rows['DOB'];?></td>
            </tr>
            <?php
                }
             ?>
        </table> 
        
        <section class = "extra">
    <div class="e-but">
            <a href="http://localhost/Website/main.php">
                <button class="button">Hostel Information</button>
            </a>
    </div>

    <div class="e-but">
            <a href="http://localhost/Website/room.php">
                <button class="button">Rooms Information</button>
            </a>
    </div>
    </section>
    </section> 
</body>
</html>