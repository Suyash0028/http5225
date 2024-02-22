<?php 
    include('../../config/database.php');

    $id = $_GET['id']; 
    //Query to fetch all the records from feeding schedule and animals table
    $query= "SELECT FeedingSchedules.*, Animals.*
            FROM FeedingSchedules
            JOIN Animals ON FeedingSchedules.Animal_id = Animals.Animal_Id
            WHERE FeedingSchedules.Animal_Id = '$id'";

    //Execute the query
    $feedingSchedule = mysqli_query($connect, $query);

    
    if ($feedingSchedule->num_rows > 0) {
        // Output data of each row
        foreach($feedingSchedule as $row){
            echo '<div class="card m-3" style="width:20rem">';
            echo '<div class="card-header"><strong>' . $row['Animal_Name'] . '</strong></div>';
            echo '<div class="card-body">';
            echo '<p class="card-text">Animal Type: ' . $row['Species'] . '</p>';
            echo '<p class="card-text">Feeding Time: ' . $row['Feeding_Time'] . '</p>';
            echo '<p class="card-text">Quantity: ' . $row['Quantity'] . '</p>';
            echo '<p class="card-text">Feeding Frequecy: ' . $row['Feeding_Frequency'] . '</p>';
            echo '</div>';
            echo '</div>';
        }
    }
    else{
        echo "No feeding schedule";
    }
    // Close connection
    $connect->close();
?>