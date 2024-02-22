<?php
    if (isset($_POST['addAnimal']))
    {
        //Fetch the values passed from the form
        $animalName = $_POST['animalName'];
        $species = $_POST['species'];
        $joinDate = $_POST['joinDate'];

        include('../../config/database.php');
        // Query to insert the record in animals table
        $query = "INSERT INTO Animals (Animal_Name ,Species, Join_date) VALUES ('$animalName', '$species', '$joinDate')";
        //Execute the query
        $animal = mysqli_query($connect, $query);

        if ($animal){
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