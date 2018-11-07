<?php
session_start();

if (isset($_COOKIE['userid']) OR isset($_SESSION['userid'])) {
    header('Location: homepage_logged.php');
}


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Homepage</title>
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
      <script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
      <link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
  </head>
  <body class="homepage">
    <div class="wrapper">
      <div class="navbar">
        <h1 class="title">The Wall</h1>
        <button type="button" class="navbutton"><a href="login.php">Login</a></button>
        <button type="button" class="navbutton"><a href="register.php">Sign up</a></button>
      </div>
        <div class="homewall">
            <div class="rij">

                <div class="wall">
                    <?php
                    //require_once ('private/connectvars.php');
                    require_once ('../../../../../../private/connectvars.php');

                    $query = "SELECT location, title, description FROM images ORDER BY image_id DESC";
                    $stmt = $mysqli->prepare($query) or die ('Error preparing.');
                    $stmt->bind_result($location,$title,$description) or die ('Error binding results.');
                    $stmt->execute() or die ('Error executing.');

                        while ($success = $stmt->fetch()) {
                          
                          echo '<div class="tile-wrapper">';
                          echo '<a title="' . $title . '  -  ' . $description .'" class="grouped_elements" rel="group1" href="' . $location . '"><img src="' . $location . '" /></a>';
                          echo  $title . ' - ' . $description;
                          echo '</div>';
                        }

                    ?>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <script>
            $(document).ready(function() {

                $("a.grouped_elements").fancybox({
                    'titleShow'	:	'true',
                    'titlePosition' : 'inside',
                });



            });
        </script>
    </footer>
  </body>
</html>
