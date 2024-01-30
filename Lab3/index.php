<!doctype html>
<html>
    <head>
        <title>PHP If Statements</title> 
    </head>
    <body>

        <h1>PHP If Statements</h1> 

        <p>Use PHP echo and variables to output the following link information, use if statements to make sure everything outputs correctly:</p>

        <?php

        // **************************************************
        // Do not edit this code

        // Generate a random number (1, 2, or 3)
        $randomNumber = ceil(rand(1,3));

        // Display the random number
        echo '<p>The random number is '.$randomNumber.'.</p>';

        // Based on the random number PHP will define four variables and fill them with information about Codecademy, W3Schools, or MDN
        
        // The random number is 1, so use Codecademy
        if ($randomNumber == 1)
        {

            $linkName = 'Codecademy';
            $linkURL = 'https://www.codecademy.com/';
            $linkImage = 'codeadam.png';
            $linkDescription = 'Learn to code interactively, for free.';

        }

        // The random number is 2, so use W3Schools
        elseif ($randomNumber == 2)
        {

            $linkName = '';
            $linkURL = 'https://www.w3schools.com/';
            $linkImage = 'w3schools.jpeg';
            $linkDescription = 'W3Schools is optimized for learning, testing, and training.';

        }

        // The random number is 3, so use MDN
        else
        {

            $linkName = 'Mozilla Developer Network';
            $linkURL = 'https://www.codecademy.com/';
            $linkImage = 'mozilla.png';
            $linkDescription = 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.';

        }

        // **************************************************

        // Beginning of the exercise, place all of your PHP code here
        // Upload this page (or use your localhost) and refresh the page, the h2 below will change
       
        if($linkName != ''){
            echo '<h2>Link Name: '.$linkName.'</h2>';
            echo '<h4>Link Url: <a href='.$linkURL.'>'.$linkName.'</a></h4>';
        } 
        
            echo '<h4>Link Image: <img src='.$linkImage.' height="50px" width="50px" Alt="Link Image"></h4>';
            echo '<h4>Link Description: '.$linkDescription.'</h4>';
        
        
        echo "-----------------------------------------------------";
        $result = ceil(rand(0,100));
        echo '<h1>Your result is '.$result.'.</h1>';
        if($result < 60) {
            echo '<h3>Sorry!! You got F grade.</h3>';
        }
        elseif ($result >= 60 && $result <= 70) {
            echo '<h3>Congrats!! You got E grade.</h3>';
        }
        elseif ($result >= 71 && $result <= 75) {
            echo '<h3>Congrats!! You got D grade.</h3>';
        }
        elseif ($result >= 76 && $result <= 80) {
            echo '<h3>Congrats!! You got C grade.</h3>';
        }
        elseif ($result >= 81 && $result <= 85) {
            echo '<h3>Congrats!! You got B grade.</h3>';
        }
        elseif ($result >= 86 && $result <= 90) {
            echo '<h3>Congrats!! You got A grade.</h3>';
        }
        elseif ($result >= 91) {
            echo '<h3>Congrats!! You got A+ grade.</h3>';
        }

        echo "-----------------------------------------------------";
        $day = ceil(rand(1,7));
        echo '<h1>Current day of week - '.$day.'.</h1>';
        switch ($day) {
            case '1':
                echo '<h3>Monday</h3>';
                break;
            case '2':
                echo '<h3>Tuesday</h3>';
                break;
            case '3':
                echo '<h3>Wednesday</h3>';
                break;
            case '4':
                echo '<h3>Thursday</h3>';
                break;
            case '5':
                echo '<h3>Friday</h3>';
                break;
            case '6':
                echo '<h3>Saturday</h3>';
                break;
            case '7':
                echo '<h3>Sunday</h3>';
                break;
            default:
                echo '<h3>No day</h3>';
                break;
        }
        ?>

    </body>
</html>