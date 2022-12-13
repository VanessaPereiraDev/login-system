<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="form-gap" style="padding-top: 70px;"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">

                            <?php
                                $selector = $_GET["selector"];
                                $validator = $_GET["validator"];

                                if (empty($selector) || empty($validator)) {
                                    echo "Could not validate your request!";
                                }
                                else {
                                    if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {

                                        ?>

                                        <div class="panel-body">
                                            <form action="includes/reset-password.inc.php" method="post" id="register-form" role="form" autocomplete="off" class="form">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="hidden" name="selector" value="<?php echo $selector; ?>">
                                                        <input type="hidden" name="validator" value="<?php echo $validator; ?>">
                                                        <input type="password" id="pwd" name="pwd" placeholder="Enter a new password..." class="form-control">
                                                        <input type="password" id="pwd-repeat" name="pwd-repeat" placeholder="Repeat new password..." class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" name="reset-password-submit" class="btn btn-lg btn-success btn-block" value="Reset Password">
                                                </div>
                                                <input type="hidden" class="hide" name="token" id="token" value=""> 
                                            </form>
                                        </div>

                                        <?php

                                    }
                                }

                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>