<?php
include_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</head>

<body>
    <link rel="stylesheet" href="css/login.css">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" style="font-family: Montserrat;" href="index.php">Home</a>
    </nav>

    <section class="signup-form">
        <h2>Sign Up</h2>
        <div class="signup-form-form">
            <form class="form form-control" action="includes/signup.inc.php" method="post">
                <input class="form-control" type="text" name="name" placeholder="Full Name">
                <input class="form-control" type="text" name="email" placeholder="Email">
                <input class="form-control" type="text" name="uid" placeholder="Username">
                <input class="form-control" type="password" name="pwd" placeholder="Password">
                <input class="form-control" type="password" name="pwdrepeat" placeholder="Repeat Password"><br>
                <button class="btn btn-dark" type="submit" name="submit">Sign Up</button>
            </form>
        </div>
        <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill all fields</p>";
        } else if ($_GET["error"] == "invaliduid") {
            echo "<p>Choose a proper username!</p>";
        } else if ($_GET["error"] == "invalidemail") {
            echo "<p>Choose a proper email!</p>";
        } else if ($_GET["error"] == "passworddontmatch") {
            echo "<p>Password doesn't match!</p>";
        } else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong, try again!</p>";
        } else if ($_GET["error"] == "usernametaken") {
            echo "<p>Username or Email already taken!</p>";
        } else {
            echo '<p style="color:green;">Successfully Signed Up!</p>';
            echo '<a href="login.php">Go Back</a>';
            
        }
    }
    ?>
    </section>
</body>

</html>