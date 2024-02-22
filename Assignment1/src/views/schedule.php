<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styles.css"></link>
    <title>Animal - Feeding Schedule</title>
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
        
        <div class="container-fluid  mt-5">
            <h2 class="mb-4">Feeding Schedule</h2>
            <div class="row">
                <?php include('../controllers/feedingSchedule.php');?>
            </div>
        </div>
    </div>
    <?php 
        include('../../includes/footer.php');
    ?>
</body>
</html>