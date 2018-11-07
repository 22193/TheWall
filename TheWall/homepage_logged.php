<?php
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
<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/html">
<head>
<?php
    include ('head.php');
?>
</head>
<body class="homepage_l">
<div class="wrapper">
    <?php
    include ('sidenav.php');
    ?>
    <div class="homewall">
        <div class="rij">

            <div class="wall">
                <?php
                echo $location;
                //require_once ('private/connectvars.php');
                require_once ('../../../../../../private/connectvars.php');

                $query = "SELECT location, title, description FROM images ORDER BY image_id DESC";
                $stmt = $mysqli->prepare($query) or die ('Error preparing.');
                $stmt->bind_result($location,$title,$description) or die ('Error binding results.');
                $stmt->execute() or die ('Error executing.');

                while ($success = $stmt->fetch() ) {

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
