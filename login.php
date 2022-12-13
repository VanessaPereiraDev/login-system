<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Sign up</title>
    <link rel="stylesheet" href="css/login-signup.css">
</head>
<body>
    <?php 
        // Error | Success messages
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfields") {
                echo '<p style="color: red; display: flex; justify-content: center;">Fill in all fields!</p>';
            }
            elseif ($_GET['error'] == "invalidemailuid") {
                echo '<p style="color: red; display: flex; justify-content: center;">Invalid username and email!</p>';
            }
            elseif ($_GET['error'] == "invaliduid") {
                echo '<p style="color: red; display: flex; justify-content: center;">Invalid username!</p>';
            }
            elseif ($_GET['error'] == "invalidemail") {
                echo '<p style="color: red; display: flex; justify-content: center;">Invalid email!</p>';
            }
            elseif ($_GET['error'] == "passwordcheck") {
                echo '<p style="color: red; display: flex; justify-content: center;">Your passwords do not match!</p>';
            }
            elseif ($_GET['error'] == "usertaken") {
                echo '<p style="color: red; display: flex; justify-content: center;">Username is already taken!</p>';
            }
        }
        elseif (isset($_GET['signup'])) {
            if ($_GET['signup'] == "success") {
                echo '<p style="color: green; display: flex; justify-content: center;">Signup successful!</p>';
            }
        }
        elseif (isset($_GET["newpwd"])) {
            if ($_GET["newpwd"] == "passwordupdated") {
                echo '<p style="color: green;">Your password has been reset!</p>';
            }
        }


        // Sign in vs Sign up
        if (isset($_SESSION['userId'])) {
            echo '<div style="display: flex; justify-content: center; align-items: center;">
                    <div>
                        <h3>You are logged in!</h3>
                        <div style="display: flex; justify-content: center;">
                            <form action="includes/logout.inc.php" method="post">
                                <button type="submit" name="logout-submit" style="background: rgba(59,93,80); color: #fff; border: none; width: 100px; padding: 12px 18px; cursor: pointer;">Logout</button>
                            </form>
                        </div>
                    </div>
                  </div> ';
        }
        else {
            echo '
                <div class="login-wrap">
                    <div class="login-html">
                        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
                        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                        <div class="login-form">

                            <form action="includes/login.inc.php" method="post">
                                <div class="sign-in-htm">
                                    <div class="group">
                                        <label for="mailuid" class="label">Username</label>
                                        <input name="mailuid" id="mailuid" type="text" class="input">
                                    </div>
                                    <div class="group">
                                        <label for="psw" class="label">Password</label>
                                        <input name="psw" id="psw" type="password" class="input" data-type="password">
                                    </div>
                                    <div class="group">
                                        <input name="login-submit" type="submit" class="button" value="Sign In">
                                    </div>
                                    <div class="hr"></div>
                                    <div class="foot-lnk">
                                        <a href="forgot-psw.php">Forgot your password?</a>
                                    </div>
                                </div>
                            </form>

                            <form action="includes/signup.inc.php" method="post">
                                <div class="sign-up-htm">
                                    <div class="group">
                                        <label for="uid" class="label">Username</label>
                                        <input name="uid" id="uid" type="text" class="input">
                                    </div>
                                    <div class="group">
                                        <label for="email" class="label">Email Address</label>
                                        <input name="email" id="email" type="text" class="input">
                                    </div>
                                    <div class="group">
                                        <label for="pwd" class="label">Password</label>
                                        <input name="pwd" id="pwd" type="password" class="input" data-type="password">
                                    </div>
                                    <div class="group">
                                        <label for="pwd-repeat" class="label">Repeat Password</label>
                                        <input name="pwd-repeat" id="pwd-repeat" type="password" class="input" data-type="password">
                                    </div>
                                    <div class="group">
                                        <input name="signup-submit" type="submit" class="button" value="Sign Up">
                                    </div>
                                    <div class="hr"></div>
                                    <div class="foot-lnk">
                                        <label for="tab-1">Already Member?</a>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                ';
            } 
    ?>  
</body>
</html>