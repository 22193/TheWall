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
<html lang="en" dir="ltr">
<head>
<?php
include ('head.php');
?>
</head>

  <body class="profile">
        <?php
        include ('sidenav.php');
        ?>
  <div class="profile-wrapper clearfix">
      <div class="left">
          <div class="left-wrapper">
          <img src="images/person.png" alt="person">
          <h3>John</h3>
          </div>
          <a href="settings.php" class="options_button">
                Settings
          </a>
          <a href="edit.php" class="edit_button">
            Edit Profile
          </a>
          <form action="logout.php" method="post">
          <input class="logout_button" type="submit" value="Logout" name="submit_logout">
          </form>
      </div>
      <div class="right">
          <h1 class=""> My Wall </h1>
          <div class="wall">
              <div class="tile-wrapper"><a title="test  -  juhuh" class="grouped_elements" rel="group1" href="images/821618950galaxy-wallpapers-22-1.jpg"><img src="images/821618950galaxy-wallpapers-22-1.jpg"></a>test - juhuh</div>
              <div class="tile-wrapper"><a title="test  -  juhuh" class="grouped_elements" rel="group1" href="images/821618950galaxy-wallpapers-22-1.jpg"><img src="images/821618950galaxy-wallpapers-22-1.jpg"></a>test - juhuh</div>
              <div class="tile-wrapper"><a title="test  -  juhuh" class="grouped_elements" rel="group1" href="images/821618950galaxy-wallpapers-22-1.jpg"><img src="images/821618950galaxy-wallpapers-22-1.jpg"></a>test - juhuh</div>
              <div class="tile-wrapper"><a title="test  -  juhuh" class="grouped_elements" rel="group1" href="images/821618950galaxy-wallpapers-22-1.jpg"><img src="images/821618950galaxy-wallpapers-22-1.jpg"></a>test - juhuh</div>
              <div class="tile-wrapper"><a title="test  -  juhuh" class="grouped_elements" rel="group1" href="images/821618950galaxy-wallpapers-22-1.jpg"><img src="images/821618950galaxy-wallpapers-22-1.jpg"></a>test - juhuh</div>
              <div class="tile-wrapper"><a title="test  -  juhuh" class="grouped_elements" rel="group1" href="images/821618950galaxy-wallpapers-22-1.jpg"><img src="images/821618950galaxy-wallpapers-22-1.jpg"></a>test - juhuh</div>
              <div class="tile-wrapper"><a title="test  -  juhuh" class="grouped_elements" rel="group1" href="images/821618950galaxy-wallpapers-22-1.jpg"><img src="images/821618950galaxy-wallpapers-22-1.jpg"></a>test - juhuh</div>
              <div class="tile-wrapper"><a title="test  -  juhuh" class="grouped_elements" rel="group1" href="images/821618950galaxy-wallpapers-22-1.jpg"><img src="images/821618950galaxy-wallpapers-22-1.jpg"></a>test - juhuh</div>
              <div class="tile-wrapper"><a title="test  -  juhuh" class="grouped_elements" rel="group1" href="images/821618950galaxy-wallpapers-22-1.jpg"><img src="images/821618950galaxy-wallpapers-22-1.jpg"></a>test - juhuh</div>
          </div>
          <div class="wall-profile">
              <h1> About Me </h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat feugiat erat. Sed congue orci at elit ultricies molestie. Aliquam facilisis pharetra nisi, eu congue est rutrum a. Maecenas vitae accumsan nisi. Praesent vestibulum ut tortor at hendrerit. Suspendisse euismod ligula eget rhoncus lobortis. Proin mollis, urna at interdum vulputate, neque nisi molestie massa, vitae placerat ligula neque eget augue. Sed quam metus, rhoncus eget hendrerit aliquet, suscipit non ante. Integer ac mollis leo. Proin et lorem in orci rutrum mollis sit amet id ipsum. Fusce sapien est, semper vitae efficitur vitae, commodo nec nisi. Ut sed pulvinar arcu. Ut consequat eu orci at lobortis. </p>
          </div>
     </div>
  </div>
  </body>
</html>
