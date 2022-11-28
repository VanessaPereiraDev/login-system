<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <header>
        <!--<nav>
            <a href="index.php">HOME</a>
            <a href="#">PORTFOLIO</a>
            <a href="#">ABOUT ME</a>
            <a href="#">CONTACT</a>
            <div id="indicator"></div>
        </nav>-->
        <div class="gray asap m-l3 mt-5">
            <?php 
                if (isset($_SESSION['userId'])) {
                    echo '<form action="includes/logout.inc.php" method="post" class="form-inline d-flex justify-content-end my-lg-0 mr-5">
                            <button type="submit" name="logout-submit" class="btn btn-success my-sm-0">Logout</button>
                          </form>';
                }
                else {
                    echo '<form action="includes/login.inc.php" method="post" class="form-inline my-2 my-lg-0">
                            <div class="flex flex-column md-flex-row max-w-90pc mx-auto">
                                <input type="text" name="mailuid" class="form-control mr-sm-2" placeholder="Username/Email...">
                                <input type="password" name="psw" class="form-control mr-sm-2" placeholder="Password...">
                                <button type="submit" name="login-submit" class="btn btn-success my-2 my-sm-0">Login</button>
                            </div>
                         </form>
                         <div class="d-flex justify-content-center mt-5">
                            <button class="btn btn-success my-2 my-sm-0"><a href="signup.php" class="text-white">Signup</a></button>
                         </div>';
                }
            ?>
        </div>
    </header>
    
 
    