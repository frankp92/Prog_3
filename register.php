<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Registrazione</title>

        <?php
            include 'html/head.php';
        ?>

    </head>
    <body>
        <?php
            include 'html/navbar.php';
            if (isset($_SESSION['logged_in']) == TRUE) {
                header("location: error.php");
            } else {
                include 'html/register_form.php';
            }
            include 'html/footer.php';

        ?>      

    </body>
</html>




