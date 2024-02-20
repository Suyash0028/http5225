<?php
    $connect = mysqli_connect('localhost', 'root', 'root', 'Http5225');

    if(!$connect){
        die("Connection Failed: " . mysqli_connect_error());
    }
?>
