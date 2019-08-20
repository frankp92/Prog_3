<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Smartlab</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
            <?php
            if (isset($_SESSION['logged_in']) == TRUE) 
            {
                echo '<a class="nav-item nav-link" href="events.php">Eventi</a>';
                echo '<a class="nav-item nav-link" href="#">Progetti</a>';
                echo '<a class="nav-item nav-link" href="html/logout.php">Logout</a>';
            } else {
                echo '<a class="nav-item nav-link" href="events.php">Eventi</a>';
                echo '<a class="nav-item nav-link" href="#">Progetti</a>';
                echo '<a class="nav-item nav-link" href="login.php">Login</a>';
                echo '<a class="nav-item nav-link" href="register.php">Registrati</a>';
            }  

            ?>            
          </div>
        </div>
      </nav>