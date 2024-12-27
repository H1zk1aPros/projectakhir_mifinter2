
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <a class="navbar-brand mr-1" href="index.php">
    <img src="../asset/logowhite.png" alt="Jember Combat Club" width='130'>
    <?php
      echo '<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
                <i class="fas fa-bars"></i>
              </button>';
      ?>
    </a>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link" href="">Users Online: <?php echo users_online(); ?>
            </a>
          </li>  

          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user-circle fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="profile.php">
                <i class="fas fa-fw fa-user-circle"></i>Profile
              </a>
              <a class="dropdown-item" href="password.php">            
                <i class="fas fa-fw fa-key"></i>Change Password
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../includes/logout.php"><i class="fas fa-power-off"></i> Logout</a>
            </div>
          </li> 
      </ul>
    </div>
</nav> 