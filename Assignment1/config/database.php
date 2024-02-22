<?php 
    $servername = "localhost"; // Change if your MySQL server is hosted elsewhere
    $username = "root"; // Your MySQL username
    $password = "root"; // Your MySQL password
    $database = "Animal_Sanctuary"; // Your MySQL database name

    // Create connection
    $connect = mysqli_connect($servername, $username, $password, $database);
     // Check connection
     if(mysqli_connect_error()){
        die("Connection error:".mysqli_connect_error());
    }
?>