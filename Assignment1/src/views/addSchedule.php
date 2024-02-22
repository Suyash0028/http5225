<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styles.css"></link>
    <title>Animal - Add Feeding Schedule</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php 
        include('../../includes/navBar.php');
    ?>
    <div class="content">
        <!-- Back button -->
        <form class="mt-5" action="index.php">
            <button type="submit" class="btn btn-dark m-2">Back</button>
        </form>
        <div class="container mt-5">
            <div class="col-md-5">
                <h2 class="mb-4">Add Feeding Schedule</h2>
                <form action="../controllers/addFeedingSchedule.php" method="post">
                    <div class="form-group m-3">
                        <label for="animalId">Animal:</label>
                        <select class="form-control" id="animalId" name="animalId" required>
                            <option value="#" selected disabled>---Select Animal---</option>
                            <?php 
                                include("../../config/database.php");
                                $sqlQuery = "SELECT * FROM Animals";
                                $allAnimals = mysqli_query($connect, $sqlQuery);

                                // Loop Through Data
                                if ($allAnimals->num_rows > 0) {
                                    // Output data of each row
                                    foreach($allAnimals as $row){
                                        echo '<option value="'.$row["Animal_Id"].'">'.$row["Animal_Name"].'</option>';
                                    }
                                } else {
                                    echo "0 results";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group m-3">
                        <label for="feedingTime">Feeding Time:</label>
                        <input type="time" class="form-control" id="feedingTime" name="feedingTime" required>
                    </div>
                    <div class="form-group m-3">
                        <label for="quantity">Quantity:</label>
                        <input type="number" class="form-control" id="quantity" name="quantity">
                    </div>
                    <div class="form-group m-3">
                    <label for="feedingFrequency">Feeding Frequency:</label>
                        <select class="form-control" id="feedingFrequency" name="feedingFrequency" required>
                            <option value="#" selected disabled>---Select Frequency---</option>
                            <option value="Once a day">Once a day</option>
                            <option value="Twice a day">Twice a day</option>
                            <option value="Three times a day">Three times a day</option>
                            <option value="Every other day">Every other day</option>
                            <option value="Weekly">Weekly</option>
                            <option value="Varies">Varies</option>
                            <option value="Custom">Custom</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="addFeedingSchedule">Add Schedule</button>
                </form>
            </div>
        </div>
    </div>
    <?php 
        include('../../includes/footer.php');
    ?>
</body>
</html>