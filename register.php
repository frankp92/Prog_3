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
            if (isset($_SESSION['logged_in']) == TRUE) {
                header("location: error.php");
            } else {
                include 'html/users/register_form.php';
            }
            include 'html/structure/footer.php';

        ?>      

    </body>
</html>




