<?php 
    include('../../config/database.php');

    $id = $_GET['id']; 
    
    $query= "SELECT * from Animals WHERE `Animal_Id` = '$id'";
    $animal = mysqli_query($connect, $query);

    $result = $animal -> fetch_assoc();

    //Check if the post updateAnimal is called
    if (isset($_POST['updateAnimal']))
    {
        //Fetch values passed from the form
        $animalName = $_POST['animalName'];
        $species = $_POST['species'];
        $joinDate = $_POST['joinDate'];

        include('../../config/database.php');
        //Query to update the specific record based on animal id
        $query = "UPDATE Animals SET Animal_Name='$animalName', Species='$species', Join_date='$joinDate' WHERE Animal_Id=$id" ;
        //Execute the query
        $animal = mysqli_query($connect, $query);

        if ($animal){
            echo "Success";
            header("Location: ../views/index.php");
        }else{
            echo "Failed: " . mysqli_error($connect);
        }
    }
    // Close connection
    $connect->close();
?>