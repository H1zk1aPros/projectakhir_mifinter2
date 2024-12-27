<?php include "includes/header.php" ?>

<!-- Navbar -->
<?php include "includes/navigation.php" ?>

<div id="wrapper">

<!-- Sidebar -->
<?php include "includes/sidebar.php" ?>

  <div id="content-wrapper">
    <div class="container-fluid">
      <!-- Page Content -->
      <h2>Dashboard</h2>
      <hr>

      <!-- /.row -->
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <i class="fas fa-file-alt fa-5x"></i>
                </div>
                <div class="col-sm-9 text-right">
                    <?php
                    $query = "SELECT * FROM posts";
                    $select_all_post = mysqli_query($connection,$query);
                    $post_count = mysqli_num_rows($select_all_post);
                    echo "<div>{$post_count}</div>";
                    ?>
                    <div>Posts</div>
                </div>
              </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="posts.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fas fa-arrow-circle-right"></i>
              </span>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <i class="fa fa-comments fa-5x"></i>
                </div>
                <div class="col-sm-9 text-right">
                    <?php
                    $query = "SELECT * FROM schedule";
                    $select_all_schedule = mysqli_query($connection,$query);
                    $schedule_count = mysqli_num_rows($select_all_schedule);
                    echo "<div>{$schedule_count}</div>";
                    ?>
                    <div>Schedule</div>
                </div>
              </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="schedule.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fas fa-arrow-circle-right"></i>
              </span>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <i class="fa fa-user fa-5x"></i>
                </div>
                <div class="col-sm-9 text-right">
                    <?php
                    $query = "SELECT * FROM members";
                    $select_all_members = mysqli_query($connection,$query);
                    $mem_count = mysqli_num_rows($select_all_members);
                    echo "<div>{$mem_count}</div>";
                    ?>
                    <div> Members</div>
                </div>
              </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="members.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fas fa-arrow-circle-right"></i>
              </span>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <i class="fa fa-list fa-5x"></i>
                </div>
                <div class="col-sm-9 text-right">              
                    <?php
                    $query = "SELECT * FROM categories";
                    $select_all_categories = mysqli_query($connection,$query);
                    $category_count = mysqli_num_rows($select_all_categories);
                    echo "<div>{$category_count}</div>";
                    ?>
                    <div>Categories</div>
                </div>
              </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="category.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fas fa-arrow-circle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <!-- /.row -->
      <hr>

      <iframe title="membership_gym" width="1080" height="760" src="https://app.powerbi.com/view?r=eyJrIjoiM2Q5ZWI4ODctOTM1Yi00YjU1LWFjNDAtYWQ3NTZlNmMxZDVlIiwidCI6IjUyNjNjYzgxLTU5MTItNDJjNC1hYmMxLWQwZjFiNjY4YjUzMCIsImMiOjEwfQ%3D%3D" frameborder="0" allowFullScreen="true">

        </iframe>

<?php
/*
      
      $query = "SELECT * FROM posts WHERE post_status = 'published' ";
      $select_all_published_posts = mysqli_query($connection,$query);
      $post_published_count = mysqli_num_rows($select_all_published_posts);
                    
      $query = "SELECT * FROM posts WHERE post_status = 'draft' ";
      $select_all_draft_posts = mysqli_query($connection,$query);
      $post_draft_count = mysqli_num_rows($select_all_draft_posts);
                    
      $query = "SELECT * FROM members WHERE mem_gender = 'Female' ";
      $mem_female_query = mysqli_query($connection,$query);
      $mem_female_count = mysqli_num_rows($mem_female_query);
                    
      $query = "SELECT * FROM members WHERE mem_gender = 'Male' ";
      $mem_male_query = mysqli_query($connection,$query);
      $mem_male_count = mysqli_num_rows($mem_male_query);
                    
      $query = "SELECT * FROM members WHERE mem_card = 'Premium' ";
      $mem_pre_query = mysqli_query($connection,$query);
      $mem_pre_count = mysqli_num_rows($mem_pre_query);
                    
      $query = "SELECT * FROM members WHERE mem_card = 'Standard' ";
      $mem_std_query = mysqli_query($connection,$query);
      $mem_std_count = mysqli_num_rows($mem_std_query);
                    
      $query = "SELECT * FROM members WHERE mem_trainer = 'TRUE' ";
      $mem_trainer_query = mysqli_query($connection,$query);
      $mem_trainer_count = mysqli_num_rows($mem_trainer_query);
                    
      <div class="row">
        <script type="text/javascript">
          google.charts.load('current', {'packages':['bar']});
          google.charts.setOnLoadCallback(drawChart);
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Data', 'Count'],
            
              <?php
              $element_text = ['All Posts', 'Active Posts', 'Draft Post', 'Trainer', 'Female', 'Male', 'Premium', 'Standard'];
              $element_count = [$post_count, $post_published_count, $post_draft_count, $mem_trainer_count, $mem_female_count, $mem_male_count, $mem_pre_count, $mem_std_count];
              for($i=0;$i<8;$i++){
                echo "['{$element_text[$i]}'" . "," . "{$element_count[$i]}],";
              }
              ?>
            
            ]);
            var options = {
              chart: {
                title: '',
                subtitle: '',
              }
            };

            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
            chart.draw(data, google.charts.Bar.convertOptions(options));
          }
        </script>
        <div class="ml-3 mt-4 mr-3" id="columnchart_material" style="width: 1400px; height: 500px;"></div>
        
      </div>
*/
?>


    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<?php include "includes/footer.php" ?>