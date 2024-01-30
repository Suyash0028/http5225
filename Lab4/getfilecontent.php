<!doctype html>
<html>
<head>
   <title>Get File Content</title> 
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    
    <h1>Get File Content</h1> 

    <?php

        function getUsers(){
            $url = "https://jsonplaceholder.typicode.com/users";
            $data = file_get_contents($url);
            return json_decode($data, true);
        }
        
        $users = getUsers();
        echo '<div class="row">';

            for ($i=0; $i < count($users); $i++) { 
                echo '
                <div class="col-md-3">
                    <div class="card m-2" style="width: 18rem;">
                        <div class="card-body">
                            <h6 class="card-title">User Name: '.$users[$i]["username"].'</h6>
                            <h6 class="card-title">Email: '.$users[$i]["email"].'</h6>
                            <h6 class="card-title">Phone: '.$users[$i]["phone"].'</h6>
                            <a href='.$users[$i]["website"].' class="btn btn-primary">'.$users[$i]["website"].'</a>
                        </div>
                    </div>
                </div>
                ';
            }

        echo "</div>";
        
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>