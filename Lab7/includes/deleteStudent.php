<?php
    if (isset($_GET['delete']))
    {
        $id = $_GET['id'];

        include('../reusables/connect.php');
        $query = "DELETE FROM students where `student_id` = '$id'";
        $student = mysqli_query($connect, $query);
        if ($student){
            header("Location: ../index.php");
        }else{
            echo "Failed: " . mysqli_connect_error($connect);
        }
    }
    else{
        echo "You should not be here!!";
    }
 
?>