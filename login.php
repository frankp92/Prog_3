<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>

        <?php
            include 'html/structure/head.php';
        ?>

    </head>

    <body>

        <?php
            include 'html/structure/navbar.php';
        ?>
        <div class="container"id="page-container_login">
        <div id="content-wrap_login">
        <?php
            if (isset($_SESSION['logged_in']) == TRUE) {
                header("location: error.php");    
            } else {
                include 'html/users/login_form.php';
            }
        ?>
        </div></div>
        <?php
            include 'html/structure/footer.php';
        ?>

    </body>
</html>