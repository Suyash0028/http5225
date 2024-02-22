<?php
    
    //Query to fetch the records from the animals table
    $sqlQuery = "SELECT * FROM Animals";
    //Execute the query
    $allAnimals = mysqli_query($connect, $sqlQuery);
    
    // Loop Through Data
    if ($allAnimals->num_rows > 0) {
        // Output data of each row
        foreach($allAnimals as $row){
            
            echo '
                <div class="card m-3" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title">' .$row["Animal_Name"]. '</h5>
                        <h6 class="card-subtitle mb-2 text-muted"><strong>Join Date:</strong> "' . $row["Join_Date"] . '"</h6>
                        <p class="card-text"><strong>Species:</strong> "' . $row["Species"] . '"</p>
                        <div class="d-flex justify-content-between">
                            <form method="GET" action="schedule.php?id='.$row['Animal_Id'].'">
                                <input type="hidden" name="id" value="'.$row['Animal_Id'].'">
                                <button type="submit" name="feedingSchedule" class="btn btn-warning">Get Feeding Schedule</button>
                            </form>
                            <form method="GET" action="edit.php?id='.$row['Animal_Id'].'">
                                <input type="hidden" name="id" value="'.$row['Animal_Id'].'">
                                <button type="submit" name="edit" class="btn btn-primary">Edit</button>
                            </form>
                        </div>
                        <form method="GET" action="../controllers/deleteAnimal.php?id='.$row['Animal_Id'].'">
                            <input type="hidden" name="id" value="'.$row['Animal_Id'].'">
                            <button type="submit" class="trash-icon btn btn-white" name="delete" onclick="return confirm(\'Are you sure you want to delete this record?\')"><i class="fas fa-trash text-danger"></i></button>
                        </form>
                    </div>
                </div>';
        }
    } else {
        echo "0 results";
    }
    
    // Close connection
    $connect->close();
?>