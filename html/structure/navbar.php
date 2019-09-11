<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Smartlab</a>
    <button class="navbar-toggler" type="button"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="navbar-nav">

            <?php
            if (isset($_SESSION['logged_in']) == TRUE){
                 echo '<a class="nav-item nav-link" href="events.php">Eventi</a>';
                 echo '<a class="nav-item nav-link" href="project.php">Progetti</a>';
                 include 'logout_button.php';
            } else {
                 echo '<a class="nav-item nav-link" href="events.php">Eventi</a>';
                 echo '<a class="nav-item nav-link" href="project.php">Progetti</a>';
                 echo '<a class="nav-item nav-link" href="login.php">Login</a>';
                 echo '<a class="nav-item nav-link" href="register.php">Registrati</a>';
            }
            
            include 'search_button.php';
            ?>

          <a class="brand" id="logo" href='index.php'>
          <img src="logo.png" width="100" height="100" alt="">
          </a>

        </nav>
      </div> 
    </div>