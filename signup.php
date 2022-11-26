<?php 
    require "header.php"; 
?>

    <main class="d-flex justify-content-center mt-5">
        <div>
            <h1>Sign Up</h1>
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
                <button type="submit" name="signup-submit" class="btn btn-success">Sign up</button>
            </form>
        </div>
    </main>


<?php 
    require "footer.php"; 
?>
    
