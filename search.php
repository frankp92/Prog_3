<?php
    session_start();
?>

<!DOCTYPE html>
    <html>
        <head>
            <title>Smartlab</title>

            <?php
                include 'html/structure/head.php';
            ?>

         
        </head>
        <body class="bg-aldo">
  
            <?php

                include 'html/structure/navbar.php';
                include 'html/structure/footer.php';
                include 'html/events/events_content.php';
                include 'html/projects/project_content.php';
            
            ?>
        </body>
    </html>