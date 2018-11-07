

<?php

//require_once ('connect.php');

session_start();

if (!isset($_SESSION['userid'])) {
    if (!isset($_COOKIE['userid'])) {
        header('Location: logout.php');
    } else {
        require ('cookiecheck.php');
        $_SESSION['userid'] = $_COOKIE['userid'];
        $_SESSION['hash'] = $_COOKIE['hash'];
    }
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
     <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400;300' rel='stylesheet' type='text/css'>
</head>
<body class="homepage_l">
<div class="wrapper">


  <div class="menu">
    
    <!-- Menu icon -->
    <div class="icon-close">
      <img src="http://s3.amazonaws.com/codecademy-content/courses/ltp2/img/uber/close.png">
    </div>

    <!-- Menu -->
    <ul>
      <li><a href="#">About</a></li>
      <li><a href="#">Blog</a></li>
      <li><a href="#">Help</a></li>
      <li><a href="#">Contact</a></li>
    </ul>

  </div>

    <!-- Main body -->
    <div class="jumbotron">

      <div class="icon-menu">
        <i class="fa fa-bars"></i>
        Menu
      </div>
    </div>
    
    
    <script type="text/javascript">
      var main = function() {
        /* Push the body and the nav over by 285px over */
        $('.icon-menu').click(function() {
          $('.menu').animate({
            left: "0px"
          }, 200);

          $('body').animate({
            left: "285px"
          }, 200);
        });

        /* Then push them back */
        $('.icon-close').click(function() {
          $('.menu').animate({
            left: "-285px"
          }, 200);

          $('body').animate({
            left: "0px"
          }, 200);
        });
      };


      $(document).ready(main);
    </script>
         

    <div class="navbar">
        <h1 class="title">The Wall</h1>
        <form action="logout.php" method="post">
        <input type="submit" id="logout_submit" value="Logout" name="submit_logout">
        </form>
        <a href="#menu" id="toggle"><span></span></a>
        <div id="menu">
            <ul>
                <li><a href="homepage_logged.php">Home</a></li>
                <li><a href="image_upload.php">About</a></li>
                <li><a href="profile.php">Contact</a></li>
                <li><a href="aboutus.php">About Us </a></li>
            </ul>
        </div>
    </div>
    <div class="homewall">
        <div class="rij">

            <div class="wall">
                <?php
                echo $location;
                //require_once ('private/connectvars.php');
                require_once ('connect.php');

                $query = "SELECT location, title, description FROM images ORDER BY image_id DESC";
                $stmt = $mysqli->prepare($query) or die ('Error preparing.');
                $stmt->bind_result($location,$title,$description) or die ('Error.');
                $stmt->execute() or die ('Error.');
                //$stmt->fetch() or die ('Error');

                while ($success = $stmt->fetch() ) {
                    echo '<a title="' . $title .'" class="grouped_elements" rel="group1" href="' . $location . '"><img src="' . $location . '" /></a>';
                    echo 'Description: ' . $description . '<br>';
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
                'titleShow' :   'true',
                'titlePosition' : 'inside',
            });


        });
    </script>
    <script type="text/javascript" src="script/script.js"></script>
</footer>
</body>
</html>
