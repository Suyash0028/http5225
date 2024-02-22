<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styles.css"></link>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <title>Animal - List</title>
</head>
<body>
    <?php 
        include("../../config/database.php");
        include("../../includes/navBar.php");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            header("Location: add.php");
            exit; 
        }
    ?>
    <div class="content">
        <div class="container-fluid  mt-5">
            <div class="row">
                <?php include("../controllers/showAnimals.php");?>
            </div>
        </div>
    </div>
    <?php 
        include('../../includes/footer.php');
    ?>
</body>
</html>