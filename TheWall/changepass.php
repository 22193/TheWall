<?php
//require ('private/connectvars.php');
require ('../../../../../../private/connectvars.php');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Document</title>
</head>
<body class="forgotpass">
<div class="wrapper">
    <div class="fp-form">
        <form action="changepass.php" method="post">
            <label for="passwordnew" id="password-1">New Password</label>
            <input type="password" name="passwordnew" id="passwordnew">
            <label for="password-new1" id="password-2">Confrim Change</label>
            <input type="password" name="password-new1">
            <input type="submit" name="submit_cp1" id="submit_cp2" value="Change Password">
        </form>
    </div>
</div>
</body>
</html>
