<?php
//require_once ('private/connectvars.php');
require_once ('../../../../../../private/connectvars.php');

if (isset($_POST['submit_u'])) {
    $description = mysqli_real_escape_string(trim($_POST['description']));
    $target = 'images/' . time() . $_FILES['image']['name'];
    $temp = $_FILES['image']['tmp_name'];
    if (!empty($description)){
        if (move_uploaded_file($temp,$target)) {
            header('Location: homepage_logged.php');
            header('Location: homepage.php');
        }
    }
}
