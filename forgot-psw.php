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
                            <h3><i class="fa fa-lock fa-4x"></i></h3>
                            <h2 class="text-center">Forgot Password?</h2>
                            <p>You can reset your password here.</p>
                            <div class="panel-body">
                                
                                <form action="includes/reset-request.inc.php" method="post" id="register-form" role="form" autocomplete="off" class="form">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <input type="text" id="email" name="email" placeholder="Enter your email address..." class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="reset-request-submit" class="btn btn-lg btn-success btn-block" value="Reset Password">
                                    </div>
                                    <input type="hidden" class="hide" name="token" id="token" value=""> 
                                </form>
                                <?php
                                    if (isset($_GET["reset"])) {
                                        if ($_GET["reset"] == "success") {
                                            echo '<p style="color: green;">Check your email!</p>';
                                        }
                                    }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>