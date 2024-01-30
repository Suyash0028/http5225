<!doctype html>
<html>
  <head>
    
    <title>PHP and Creating Output</title>
    
  </head>
  <body>
    <?php echo '<h1>PHP and Creating outputs </h1>';
    
    echo '<p>When creating output using echo and PHP, quotes can often cause problems. There are several solutions to using quotes within an echo statement:</p>
      <ol> 
        <li>Use HTML special characters</li>
        <li>Alternate between single and double quotes</li>
        <li>Use a backslash to escape quotes</li>
      </ol>'
    ?>
  
    <p>The PHP echo command can be used to create output.</p>

    <h2>More HTML to Convert</h2>

    <p>PHP says "Hello World!"</p>

    <?php echo '<p>Can you display a sentence with \' and "?</p>' ?>

    <img src="<?php echo 'php-logo.png' ?>" width="80px" height="60px">
    </br>
    <?php 
      $linkName = 'Codecademy';
      $linkURL = 'https://www.codecademy.com/';
      $linkImage = 'php-logo.png';
      $linkDescription = 'Learn to code interactively, for free.';
      
      echo '-----------------------------------------------------------';
      echo "<h2>Output from simple variables </h2>";
      echo '<h3>Link Name: '.$linkName.'</h3>';
      echo '<h3>Link URL: <a href='.$linkURL.'>'. $linkName .'</a></h3>';
      echo '<img src='.$linkImage.' width="80px" height="60px">';
      echo '<h3>Link Description: '.$linkDescription.'</h3>';
    ?>
    </br>

      <?php 

      $person['first'] = 'Suyash';
      $person['last'] = 'Kulkarni';
      $person['email'] = 'suyashkulkarni43@gmail.com';
      $person['age'] = 24;

      echo '-----------------------------------------------------------';
      echo "<h2>Output from array variables </h2>";

      echo '<b>First Name:</b> '.$person['first'].' </br> ';
      echo '<b>Last Name:</b> '.$person['last'].' </br>';
      echo '<b>Email:</b> '.$person['email'].'</br>';
      echo '<b>Age:</b> '.$person['age'].' </br>';

      $languages = array( 'PHP', 'HTML', 'JavaScript', 'CSS' );
      echo '<h2>Loop Values: </h2>';

      foreach($languages as $language){
        echo ''.$language.'</br>';
      }
      ?>
  </body>
</html>