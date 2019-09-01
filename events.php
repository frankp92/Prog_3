<?php
    session_start();
?>

<!DOCTYPE html>
    <html>
        <head>
            <title>Eventi</title>

            <?php
                include 'html/structure/head.php';
            ?>
         
        </head>
        <body>
            <?php
                include 'html/structure/navbar.php';
                include 'html/events/events_content.php';
                include 'html/structure/footer.php';
            ?>    

        </body>
    </html>