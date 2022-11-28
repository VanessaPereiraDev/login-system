<?php 
    require "header.php"; 
?>

    <main class="d-flex justify-content-center mt-5">
        <div>
            <h1 class="text-center">Sign Up</h1>
            <?php 
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "emptyfields") {
                        echo '<p class="text-danger text-center">Fill in all fields!</p>';
                    }
                    elseif ($_GET['error'] == "invaliduidmail") {
                        echo '<p class="text-danger text-center">Invalid username and email!</p>';
                    }
                    elseif ($_GET['error'] == "invaliduid") {
                        echo '<p class="text-danger text-center">Invalid username!</p>';
                    }
                    elseif ($_GET['error'] == "invalidemail") {
                        echo '<p class="text-danger text-center">Invalid email!</p>';
                    }
                    elseif ($_GET['error'] == "passwordcheck") {
                        echo '<p class="text-danger text-center">Your passwords do not match!</p>';
                    }
                    elseif ($_GET['error'] == "usertaken") {
                        echo '<p class="text-danger text-center">Username is already taken!</p>';
                    }
                }
                elseif (isset($_GET['signup'])) {
                    if ($_GET['signup'] == "success") {
                        echo '<p class="text-success text-center">Signup successful!</p>';
                    }
                }
            ?>
            <form action="includes/signup.inc.php" method="post">
                <div class="form-group">
                    <input type="text" name="uid" placeholder="Username" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="email" placeholder="Email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="pwd" placeholder="Password" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="pwd-repeat" placeholder="Repeat password" class="form-control">
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" name="signup-submit" class="btn btn-success">Sign up</button>
                </div>
            </form>
        </div>
    </main>


<?php 
    require "footer.php"; 
?>
    
