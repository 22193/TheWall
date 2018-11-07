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

<!doctype html>
<html lang="en">
<head>
    <?php
    include ('head.php');
    ?>

    <link type="text/css" rel="stylesheet" href="css/main.css">
    <link type="text/css" rel="stylesheet" href="css/util.css">
</head>
<body>
<div class="wrapper">
    <?php
        include ('sidenav.php');
    ?>
    <div class="uploader">
        <!--        <form id="form-uploader" method="post" action="process_upload.php" enctype="multipart/form-data">-->
        <!--          <label class="uploader-fileuploader"><input type="file" id="imgInp" name="uploaded_image"></label>-->
        <!--          <label class="uploader-title">Title<input name="title"></label>-->
        <!--          <label class="uploader-desc">Description<input name="description"></label>-->
        <!--          <input type="submit" name="submit_u" class="contact100-form-btn" id="submit_upload" value="Upload">-->
        <!--        </form>-->

        <form class="contact100-form validate-form form-upload-form" method="post" action="process_upload.php" enctype="multipart/form-data">
<span class="contact100-form-title">
Upload your image
</span>
            <div class="iWrapper">
                <img id="blah" src="#" alt="uploaded-preview-image" />
            </div>
            <label class="uploader-fileuploader"><input type="file" class="foo" id="imgInp" name="uploaded_image"></label>

            <div class="wrap-input100 validate-input" data-validate="Name is required">
                <span class="label-input100">Title</span>
                <input class="input100" type="text" name="title" placeholder="Enter a title">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz ">
                <span class="label-input100">Description</span>
                <input class="input100" type="text" name="description" placeholder="Enter your description">
                <span class="focus-input100"></span>
            </div>

            <div class="container-contact100-form-btn">
                <input type="submit" name="submit_u" class="contact100-form-btn" id="submit_upload" value="Upload">
                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
            </div>
        </form>
    </div>
</div>
</body>
<script src="script/main.js"></script>
</html>