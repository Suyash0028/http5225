<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <?php include('reusables/nav.php') ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="display-5 mt-4 m-4">Student catalog</h3>
            </div>
        </div>
        <?php
            include('reusables/connect.php');
            $query='SELECT * from students';
            $students=mysqli_query($connect, $query);
            if(mysqli_connect_error()){
                die("Connection error: ". mysqli_connect_error());
            }
        ?>
        <div class="container">
            <div class="row">
                <?php
                foreach($students as $student){
                    if($student['marks'] < 50){
                        $bgclass='bg-danger';
                    }else{
                        $bgclass='bg-success';
                    }
                    echo'<div class="col-md-4">
                        <div class="card m-3 '.$bgclass.'" style="width: 18rem;">
                    <img class="card-img-top" src="' .$student['imageURL'].'" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">'.$student['first_name'].' '.$student['last_name'].'</h5>
                        Marks: '.$student['marks'].' 
                        Grade: '.$student['grade'].'
                    </div>
                    <form method="GET" action="update.php?id='.$student['student_id'].'">
                        <input type="hidden" name="id" value="'.$student['student_id'].'">
                        <button type="submit" name="edit" class="btn btn-sm btn-info">Edit</button>
                    </form>
                    <form method="GET" action="includes/deleteStudent.php">
                        <input type="hidden" name="id" value="'.$student['student_id'].'">
                        <button type="submit" name="delete" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                    </div>
                    </div>';
                    }                
                ?>
            </div>
            </div>
        </div>
    </div>
</body>
</html>