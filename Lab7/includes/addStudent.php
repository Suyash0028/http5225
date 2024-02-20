<?php
    if(isset($_POST['addGrade'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $marks = $_POST['marks'];
        $imageURL = $_POST['imageURL'];

        include('./reusable/connect.php');

        $query = "INSERT INTO  students(first_name, last_name, marks, imageURL)
                VALUES (
                    '". mysqli_real_escape_string($connect, $fname) ."',
                    '". mysqli_real_escape_string($connect, $lname) ."',
                    '". mysqli_real_escape_string($connect, $marks) ."',
                    '". mysqli_real_escape_string($connect, $imageURL) ."',
                )";
        $student = mysqli_query($connect, $query);

        if($student){
            header('Location: ../index.php');
        }
        else{
            echo mysqli_error($connect);
        }
    }
    else{
        echo "You should not be here";
    }
?>