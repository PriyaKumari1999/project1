<?php
include_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!--Links-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/login.css">

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" style="font-family: Montserrat;" href="index.php">Home</a>
    </nav>
    <div class="signup-form">

        <div class="signup-form-form">
            <form class="form form-control" action="includes/login.inc.php" method="post">
                <h2 style="padding:4vh; font-size: max(1vw,4vh); text-align: center;">Log In</h2>
                <input class="form-control" type="text" name="uid" placeholder="UserName"><br>
                <input class="form-control" type="password" name="pwd" placeholder="Password"><br>
                <button class="btn btn-success " type="submit" name="submit">Log In</button><br>
                <h3 style="text-align: center; padding:2vh; font-size: max(1vw,2vh);">or</h3>
                <a class="btn btn-dark" href="signup.php">Sign Up</a>
            </form>
        </div>
    </div>
</body>

</html>