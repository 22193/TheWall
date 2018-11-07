<?php
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

<!doctype html>
<html lang="en">
<head>
    <?php
        include ('head.php');
    ?>
</head>
<body class="profile_1">
<?php
    include ('sidenav.php');
?>
<div class="settings-wrapper">
    <div class="left">
        <div class="left-wrapper">
            <img src="images/person.png" alt="person">
            <h3>John</h3>
        </div>
        <a href="profile.php" class="options_button">
            Profile
        </a>
        <a href="edit.php" class="edit_button">
            Edit Profile
        </a>
    </div>
    <div class="right">
        <h1 class="settings">Settings</h1>
        <div class="forms-wrapper clearfix">
        <div class="form-1">
        <form class="form-u" action="" method="post">
            <label for="username" id="c-username_label">Change Username</label>
            <input type="text" id="c-username" name="username"  autofocus>
            <label for="password" id="c-c_label">Confirm Change</label>
            <input type="password" id="c-change" name="password">
            <input type="submit" name="submit_c" id="cu-submit" value="Apply Changes">
        </div>
        <div class="form-2">
        </form>
            <form class="form-p" action="" method="post">
            <label for="username" id="c-password_label">Change Password</label>
            <input type="text" id="c-password" name="username"  autofocus>
            <label for="password" id="c-c-password_label">Confirm Change</label>
            <input type="password" id="c-password-2" name="c-password">
            <input type="submit" name="c-submit" id="c-submit" value="Apply Changes">
        </form>
    </div>
        </div>
</div>
</body>
</html>