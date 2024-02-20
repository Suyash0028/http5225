<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Student</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    </head>
    <body>
        <?php 
            include('reusables/nav.php');
            
        
            $id = $_GET['id']; 
            $connect = mysqli_connect('localhost', 'root', 'root', 'Http5225');
            $query= "SELECT * from students WHERE `student_id` = '$id'";
            $student = mysqli_query($connect, $query);

            $result = $student -> fetch_assoc();
            //header("Location: ./index.php");
        ?>
        <form action="includes/addGrades.php" method="POST">
            <input type="hidden" value="<?php echo $result['student_id']?>">
            <div class="row">
                <div class="col">
                    <h2>Update Student</h2>
                    <div class="mb-3">
                        <label for="fname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="fname" name="fname" aria-describedby="First name" value="<?php echo $result['first_name']?>">
                    </div>
                    <div class="mb-3">
                        <label for="lname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lname" name="lname" aria-describedby="Last name" value="<?php echo $result['last_name']?>">
                    </div>
                    <div class="mb-3">
                        <label for="marks" class="form-label">Marks</label>
                        <input type="number" class="form-control" id="marks" name="marks" aria-describedby="Enter Marks" value="<?php echo $result['marks']?>">
                    </div>
                    <div class="mb-3">
                        <label for="imageURL" class="form-label">Image URL</label>
                        <input type="text" class="form-control" id="imageURL" name="imageURL" aria-describedby="Enter Image URL" value="<?php echo $result['imageURL']?>">
                    </div>  

                    <button type="submit" name="grades" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </body>
</html>