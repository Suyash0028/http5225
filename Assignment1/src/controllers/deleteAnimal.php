<?php 
    include('../../config/database.php');

    // Check if the ID of the record to delete is provided
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        //Execute SQL DELETE query
        $query = "DELETE FROM Animals WHERE `Animal_Id` = '$id'";

        if ($connect->query($query) === TRUE) {
            echo "Record deleted successfully";
            header("Location: ../views/index.php");
        } else {
            echo "Error deleting record: " . $connect->error;
        }
    }
    // Close connection
    $connect->close();
?>