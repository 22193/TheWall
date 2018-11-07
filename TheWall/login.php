<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href=" https://use.fontawesome.com/releases/v5.0.10/css/all.css " integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <title>Login</title>
</head>
<body class="login">
    <div class="wrapper">
        <div class="backbutton">
            <a class="b-button" href="homepage.php"><i class="fas fa-arrow-left"></i>Go back</a>
        </div>
         <div class="login_form">
            <form class="login-form" action="login_action.php" method="post">
                <label for="username" id="username_label">Username</label> <br>
                <input type="text" id="username" name="username"  autofocus> <br>
                <label for="password" id="password_label">Password</label> <br>
                <input type="password" id="password" name="password"> <br> <br>
                <input type="submit" name="submit_login" id="submit" value="Login">
            </form>
            <a href="forgot_password.php">Forgot password?</a>
            <p>Not on The Wall yet? <a href="register.php">Sign up!</a> </p>

        </div>
    </div>
</body>
</html>
