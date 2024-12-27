<?php include "includes/header.php" ?>

<!-- Navbar -->
<?php include "includes/navigation.php" ?>

<div id="wrapper">

<!-- Sidebar -->
<?php include "includes/sidebar.php" ?>

<div id="content-wrapper">

    <div class="container-fluid">
        <!-- Page Content -->
        <!-- Page Content -->
        <?php

        if(isset($_GET['source'])){
          $source = $_GET['source'];
        
        }
        else{
          $source ='';
        }

        switch($source){
          case 'add_schedule';
          include "includes/add_schedule.php" ;    
          break;

          case 'update_schedule';
          include "includes/update_schedule.php" ;    
          break;
          
          default:
          include "includes/view_all_schedule.php" ;
          break;
        }
        ?>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<?php include "includes/footer.php" ?>