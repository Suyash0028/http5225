<?php
    if (isset($_POST['grades']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $marks = $_POST['marks'];
        $imageURL = $_POST['imageURL'];

        include('../reusables/connect.php');
        $query = "INSERT INTO students(first_name ,last_name, marks, imageURL) VALUES ('$fname', '$lname', '$marks', '$imageURL')";
        $student = mysqli_query($connect, $query);
        if ($student){
            echo "Success";
        }else{
            echo "Failed: " . mysqli_connect_error($connect);
        }
    }
    else{
        echo "You should not be here!!";
    }
    
?>