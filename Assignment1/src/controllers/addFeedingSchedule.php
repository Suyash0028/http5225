<?php
    if (isset($_POST['addFeedingSchedule']))
    {
        //Fetch the values passed from the form
        $animalId = $_POST['animalId'];
        $feedingTime = $_POST['feedingTime'];
        $quantity = $_POST['quantity'];
        $feedingFrequency = $_POST['feedingFrequency'];
        
        include('../../config/database.php');
        //Query to insert into feedingschedules table
        $query = "INSERT INTO FeedingSchedules (Animal_Id, Feeding_Time, Quantity, Feeding_Frequency) VALUES ('$animalId', '$feedingTime', '$quantity', '$feedingFrequency')";
        //Execute the query
        $schedule = mysqli_query($connect, $query);

        if ($schedule){
            echo "Success";
            header("Location: ../views/index.php");
        }else{
            echo "Failed: " . mysqli_connect_error($connect);
        }
    }
    else{
        echo "You should not be here!!";
    }
    // Close connection
    $connect->close();
?>