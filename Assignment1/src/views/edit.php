<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styles.css"></link>
    <title>Animal - Edit</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php 
        include('../../includes/navBar.php');
        include('../controllers/editAnimal.php');
    ?>
    <div class="content">
        <!-- Back button -->
        <form class="mt-5" action="index.php">
            <button type="submit" class="btn btn-dark m-2">Back</button>
        </form>
        <div class="container mt-5">
            <div class="col-md-5">
                <h2 class="mb-4">Edit Animal</h2>
                <form method="post">
                    <input type="hidden" name="id" value="<?php echo $result['Animal_Id']?>">
                    <div class="form-group m-3">
                        <label for="animalName">Animal Name</label>
                        <input type="text" class="form-control" id="animalName" name="animalName" value="<?php echo $result['Animal_Name']?>">
                    </div>
                    <div class="form-group m-3">
                        <label for="species">Species</label>
                        <input type="text" class="form-control" id="species" name="species" value="<?php echo $result['Species']?>">
                    </div>
                    <div class="form-group m-3">
                        <label for="joinDate">Join Date</label>
                        <input type="date" class="form-control" id="joinDate" name="joinDate" value="<?php echo $result['Join_Date']?>">
                    </div>
                    <button type="submit" name="updateAnimal" class="btn btn-primary">Update Animal</button>
                </form>
            </div>
        </div>
    </div>
    <?php 
        include('../../includes/footer.php');
    ?>
</body>
</html>