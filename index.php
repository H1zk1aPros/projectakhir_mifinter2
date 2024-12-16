<?php  include "includes/header.php"; ?>

<!-- Navigation -->
<?php include "includes/navigation.php"; ?>

  <!-- Page Content -->
    
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="">
            <img src="asset/aseoooyy.png" width="100%" alt="Akira" class="img-fluid">
        </div>
        <div class="container">
            <h1>Combat Sports Gym pertama di Jember</h1>
            <p>Di Jember Combat Club, kami menghadirkan pengalaman berlatih olahraga bela diri yang terintegrasi dengan pendekatan teknis dan disiplin. Dalam suasana yang ramah dan mendukung. Setiap praktisi dari pemula hingga ahli, dapat mengembangkan kemampuan mereka secara efektif dan bertahap.</p>
        </div>
    </section>

    <!-- Image Slider -->
    <section class="image-slider">
    <div class="row justify-content-center">
    <div id="carouselExampleControls" class="carousel slide col-md-8" data-ride="carousel">
        <div class="carousel-inner">
        <?php 
            $no = 0;
            $query = "SELECT * FROM posts where post_category_id=1";
           $select_all_categories_query = mysqli_query($connection,$query);
           while($row = mysqli_fetch_assoc($select_all_categories_query)){
               $post_image = $row['post_image'];
                if ($no==0) {
                    echo "<div class='carousel-item active'>";
                }else{
                    echo "<div class='carousel-item'>";
                }
                $no=$no+1;
                   echo "<img class='d-block w-100' src='images/"; echo $post_image; echo "'>
                     </div>";
           }        
        ?> 
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <h2></h2>
    </div>
    </section>

<!-- Services Section -->
<section class="services-section text-white" style="background-color: #b60000;">
    <div class="container text-center">
        <h2>Our Services</h2>
        <div class="row justify-content-center">
        <?php 
            $query = "SELECT * FROM posts where post_category_id=3";
           $select_all_categories_query = mysqli_query($connection,$query);
           while($row = mysqli_fetch_assoc($select_all_categories_query)){
                $post_id = $row['post_id'];
                $post_title = $row['post_title'];
                $post_user = $row['post_user'];
                $post_date = $row['post_date'];
                $post_image = $row['post_image'];
                $post_content = $row['post_content'];
                    echo "<div class='col-md-2'>";                
                    echo "<a href='post.php?p_id=$post_id'>";
                    echo "<img class='d-block w-100' src='asset/"; echo $post_image; echo "'>
                    </a> </div>";
           }        
        ?> 
        <a href='service.php' class="btn btn-red">Learn About our services</a>
        </div>
    </div>
</section>


    <!-- Coaches Section -->
    <section class="coaches-section">
        <div class="container text-center">
            <h2>Meet Our Coaches</h2>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="coach-card">
                        <img src="asset/akira.png" alt="Akira" class="img-fluid">
                        <h3>AKIRA</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="coach-card">
                        <img src="asset/satria.png" alt="Satria" class="img-fluid">
                        <h3>SATRIA</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="coach-card">
                        <img src="asset/nyo.png" alt="Nyo" class="img-fluid">
                        <h3>NYO</h3>
                    </div>
                </div>
            </div><br>
                    <a href='coach.php' class="btn btn-red">Learn About our Coaches</a>
        </div>
    </section>

    <!-- Schedule Section -->
    <section class="schedule-section">
        <div class="container">
            <h2 class="text-center">Class Schedule</h2>
            <div class="table-responsive schedule-table">
                <table class="table" border="2">
                    <thead class="schedule-title">
                        <tr>
                            <th width='100'>Time</th>
                            <th width='120'>Monday</th>
                            <th width='120'>Tuesday</th>
                            <th width='120'>Wednesday</th>
                            <th width='120'>Thursday</th>
                            <th width='120'>Friday</th>
                            <th width='120'>Saturday</th>
                            <th width='120'>Sunday</th>
                        </tr>
                    </thead>
                    <?php 
                        $query = "SELECT * FROM schedule";
                        $select_all_categories_query = mysqli_query($connection,$query);
                        while($row = mysqli_fetch_assoc($select_all_categories_query)){
                            $sch_time = $row['sch_time'];
                            $sch_mon  = $row['sch_mon']; 
                            $sch_tue  = $row['sch_tue'];
                            $sch_wed  = $row['sch_wed'];
                            $sch_thu  = $row['sch_thu'];
                            $sch_fri  = $row['sch_fri'];
                            $sch_sat  = $row['sch_sat'];
                            $sch_sun  = $row['sch_sun'];
                            if($sch_mon <> '' ){ $c_mon = '#f2d9d9';} else {$c_mon = '#ffffff';}
                            if($sch_tue <> '' ){ $c_tue = '#f2d9d9';} else {$c_tue = '#ffffff';}
                            if($sch_wed <> '' ){ $c_wed = '#f2d9d9';} else {$c_wed = '#ffffff';}
                            if($sch_thu <> '' ){ $c_thu = '#f2d9d9';} else {$c_thu = '#ffffff';}
                            if($sch_fri <> '' ){ $c_fri = '#f2d9d9';} else {$c_fri = '#ffffff';}
                            if($sch_sat <> '' ){ $c_sat = '#f2d9d9';} else {$c_sat = '#ffffff';}
                            if($sch_sun <> '' ){ $c_sun = '#f2d9d9';} else {$c_sun = '#ffffff';}
                            echo "<tbody>";
                            echo "  <tr>";
                            echo "      <td>$sch_time</td>";
                            echo "      <td bgcolor='$c_mon'>$sch_mon</td>";
                            echo "      <td bgcolor='$c_tue'>$sch_tue</td>";
                            echo "      <td bgcolor='$c_wed'>$sch_wed</td>";
                            echo "      <td bgcolor='$c_thu'>$sch_thu</td>";
                            echo "      <td bgcolor='$c_fri'>$sch_fri</td>";
                            echo "      <td bgcolor='$c_sat'>$sch_sat</td>";
                            echo "      <td bgcolor='$c_sun'>$sch_sun</td>";
                            echo "  </tr>";
                            echo "</tbody>";
                        }        
                    ?> 
                </table>
            </div>    
            <p>
            <h1></h1>
            </p>
        </div>
    </section>

<?php  include "includes/footer.php"; ?>