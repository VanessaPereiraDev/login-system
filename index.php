<?php 
    require "header.php"; 
?>

    <main class="d-flex justify-content-center mt-5">
        <div>
            <?php 
                if (isset($_SESSION['userId'])) {
                    echo '<h3>You are logged in!</h3>';
                }
                else {
                    echo '<h3>You are logged out!</h3>';
                }
            ?>  
        </div>
    </main>

<?php 
    require "footer.php"; 
?>
    
