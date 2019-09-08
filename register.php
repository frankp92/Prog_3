<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Registrazione</title>

        <?php
            include 'html/structure/head.php';
        ?>

    </head>
    <body>
        <?php
            include 'html/structure/navbar.php';
        ?>
        <div class="container"id="page-container">
        <div id="content-wrap">
        <?php
            if (isset($_SESSION['logged_in']) == TRUE) {
                header("location: error.php");
            } else {
                include 'html/users/register_form.php';
            }
        ?> 
        </div></div>
        <?php
            include 'html/structure/footer.php';
        
        ?>      

    </body>
</html>




