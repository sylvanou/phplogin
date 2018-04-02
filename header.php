<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <div class="main-wrapper">
                <ul>
                    <li><a class="homebtn" href="index.php">Home</a></li>   
                </ul>
                <div class="nav-login">
                    <?php
                    if (isset($_SESSION['u_id'])) {
                        echo '<form action="includes/logout.inc.php" method="POST">
                                    <button type="submit" name="submit">Logout</button>
                                 </form>';
                    } else {
                        echo '<form action="includes/login.inc.php" method="POST">
                                    <input type="text" name="uid" placeholder="username/e-mail">
                                    <input type="password" name="pwd" placeholder="password">
                                    <button type="submit" name="submit">Login</button>
                                 </form>
                                 <a class="signupbtn" href="signup.php">Sign Up</a>';
                    }
                    ?>

                </div>
            </div>
        </nav>
    </header>