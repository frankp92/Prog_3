<?php
    require('php/db_conn.php');
    if(isset($_SESSION['logged_in']) == TRUE){
      $sql = "SELECT Email 
              FROM utente
              WHERE IDutente = '$_SESSION[UId]'
              ";

      $result = $conn->query($sql);
      $email = $result->fetch_assoc();

    }

    $conn->close();
?>

<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <?php print_r($email['Email']) ?>
    </button>
    
    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
      <a class="dropdown-item" href="html/users/logout.php">Logout</a>
    </div>
</div>