<nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">            
          <img src="asset/logo.png" alt="Jember Combat Club" width='150'>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="" href="index.php">Home
              </a>
            </li>
            <?php
              if(!isset($_SESSION['user_role'])){
                echo '<li class="nav-item ">&nbsp;&nbsp;&nbsp;<a class="" href="login.php">Login</a></li>';
              }
            ?>
            <li class="nav-item ">
              <a class="" href="contact.php">&nbsp;&nbsp;&nbsp;Contact
              </a>
            </li>           
          </ul>
        </div>
      </div>
    </nav> 