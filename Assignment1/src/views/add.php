<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styles.css"></link>
    <title>Animal - Add</title>
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
                <h2 class="mb-4">Add Animal</h2>
                <form action="../controllers/addAnimal.php" method="post">
                    <div class="form-group m-3">
                        <label for="animalName">Animal Name</label>
                        <input type="text" class="form-control" id="animalName" name="animalName" required>
                    </div>
                    <div class="form-group m-3">
                        <label for="species">Species:</label>
                        <select class="form-control" id="species" name="species" required>
                            <option value="#" selected disabled>---Select Species---</option>
                            <option value="Mammals">Mammals</option>
                            <option value="Birds">Birds</option>
                            <option value="Reptiles">Reptiles</option>
                            <option value="Fish">Fish</option>
                            <option value="Amphibians">Amphibians</option>
                            <option value="Insects">Insects</option>
                        </select>
                    </div>
                    <div class="form-group m-3">
                        <label for="joinDate">Join Date</label>
                        <input type="date" class="form-control" id="joinDate" name="joinDate" required>
                    </div>
                    <button type="submit" name="addAnimal" class="btn btn-primary">Add Animal</button>
                </form>
            </div>
        </div>
    </div>
    <?php 
            include('../../includes/footer.php');
    ?>
</body>
</html>