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
else{
    echo "Connection was succesful <br>";
}

$sql = "SELECT * FROM hostel ";
$result = mysqli_query($conn , $sql);

// find the number of records returned

$num = mysqli_num_rows($result);
echo $num;
echo "<br>";


if($num > 0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    //we can fetch in a better way using the while loop

    while($row = mysqli_fetch_assoc($result)){
        echo var_dump($row);
        echo "<br>";
    }
}
?>