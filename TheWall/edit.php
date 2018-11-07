<?php
//require_once ('private/connectvars.php');
require ('../../../../../../private/connectvars.php');
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
  <body class="profile_e">
  <?php
    include ('sidenav.php');
  ?>
  <div class="profile-wrapper clearfix">
      <div class="left">
          <div class="left-wrapper">
              <img src="images/person.png" alt="person">
              <h3>John</h3>
          </div>
          <a href="profile.php" class="edit_button">
              Profile
          </a>
          <a href="settings.php" class="options_button">
              Settings
          </a>
      </div>
      <div class="right">
          <h1 class="edit-p">Edit Profile</h1>
          <div class="forms-wrapper forms-wrapper-edit">
              </form>
              <form class="form-e" action="" method="post">
                  <div class="form-rfl">
                    <label for="residence" id="residence_l">Residence</label>
                    <input type="text" id="residence_c" name="residence"  autofocus>
                    <label for="name" id="name_l">First Name</label>
                    <input type="text" id="name_c" name="name">
                     <label for="lastname" id="lastname_l">Last Name</label>
                     <input type="text" id="lastname_c" name="lastname">
                  </div>
                  <div class="wall-profile">
                      <h1> About Me </h1>
                      <textarea class="form-textarea" rows="4" cols="50" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat feugiat erat. Sed congue orci at elit ultricies molestie. Aliquam facilisis pharetra nisi, eu congue est rutrum a. Maecenas vitae accumsan nisi. Praesent vestibulum ut tortor at hendrerit. Suspendisse euismod ligula eget rhoncus lobortis. Proin mollis, urna at interdum vulputate, neque nisi molestie massa, vitae placerat ligula neque eget augue. Sed quam metus, rhoncus eget hendrerit aliquet, suscipit non ante. Integer ac mollis leo. Proin et lorem in orci rutrum mollis sit amet id ipsum. Fusce sapien est, semper vitae efficitur vitae, commodo nec nisi. Ut sed pulvinar arcu. Ut consequat eu orci at lobortis."></textarea></div>
                  <input type="submit" name="i-submit" id="i-submit" value="Apply Changes">
              </form>
          </div>
      </div>
  </div>
  </body>
</html>
