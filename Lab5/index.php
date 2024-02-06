<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lab 5</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-5 mt-4 mb-4">Student Catalog</h1>
            </div>
        </div>
        <?php 
            $db_host = 'localhost';
            $db_user = 'root';
            $db_password = 'root';
            $db_db = 'Http5225';
           
            $connect = mysqli_connect($db_host, $db_user, $db_password, $db_db);
            $query = 'SELECT * FROM students';
            

            $students = mysqli_query($connect, $query);

            if(mysqli_connect_error()){
                die("Connection error:".mysqli_connect_error());
            }

        ?>
        <div class="container">
            <div class="row">
                <?php
                    foreach($students as $student){
                        if($student['marks'] < 50){
                            $bgclass = "bg-danger";
                        }
                        else{
                            $bgclass = "bg-success";
                        }
                        echo '
                                <div class="card m-3 '.$bgclass.'" style="width: 18rem;">
                                    <img src="'.$student['image'].'" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">'.$student['first_name'].' '.$student['last_name'].'</h5>
                                        <p class="card-text">Marks: '.$student['marks'].'</p>
                                        <p class="card-text">Grades: '.$student['grade'].'</p>
                                        <p class="card-text">Age: '.$student['age'].'</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>   
                            ';
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>