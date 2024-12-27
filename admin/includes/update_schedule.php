<h4>Edit Schedule</h4>
<hr>

<diV class="row" style="background-color:#181e22; color:white;" >
    <div class="col-sm-9">
    <form action="" method="POST" class="mt-9">
        <div class="row">
            <div class="col-md-3">&nbsp;
            </div>
        </div>
        <?php
            if(isset($_GET['edit'])){
                $sch_id = $_GET['edit'];
                $query = "SELECT * FROM schedule WHERE sch_id = {$sch_id}";
                $select_schedule_id = mysqli_query($connection,$query);

                while($row = mysqli_fetch_assoc($select_schedule_id)){
                    $sch_id = $row['sch_id'];
                    $sch_time = $row['sch_time'];    $sch_mon = $row['sch_mon'];
                    $sch_tue = $row['sch_tue'];      $sch_wed = $row['sch_wed'];
                    $sch_thu = $row['sch_thu'];      $sch_fri = $row['sch_fri'];
                    $sch_sat = $row['sch_sat'];      $sch_sun = $row['sch_sun'];
        ?>
                <div class="row">
                    <div class="col-md-3" style="background-color:#181e22; color:white;">
                        <label for="sch_time">Time</label>
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="sch_time" value="<?php if(isset($sch_time)){echo $sch_time;} ?>" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3" style="background-color:#181e22; color:white;">
                        <label for="sch_mon">Monday</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="sch_mon" value="<?php if(isset($sch_mon)){echo $sch_mon;} ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3" style="background-color:#181e22; color:white;">
                        <label for="sch_tue">Tuesday</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="sch_tue" value="<?php if(isset($sch_tue)){echo $sch_tue;} ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3" style="background-color:#181e22; color:white;">
                        <label for="sch_wed">Wednesday</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="sch_wed" value="<?php if(isset($sch_wed)){echo $sch_wed;} ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3" style="background-color:#181e22; color:white;">
                        <label for="sch_thu">Thusday</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="sch_thu" value="<?php if(isset($sch_thu)){echo $sch_thu;} ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3" style="background-color:#181e22; color:white;">
                        <label for="sch_fri">Friday</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="sch_fri" value="<?php if(isset($sch_fri)){echo $sch_fri;} ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3" style="background-color:#181e22; color:white;">
                        <label for="sch_sat">Saturday</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="sch_sat" value="<?php if(isset($sch_sat)){echo $sch_sat;} ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3" style="background-color:#181e22; color:white;">
                        <label for="sch_sun">Sunday</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="sch_sun" value="<?php if(isset($sch_sun)){echo $sch_sun;} ?>">
                    </div>
                </div>

        <?php
                }
            }
        ?>
    
        <?php           //update category
        if(isset($_POST['update_schedule'])){
            $sch_time = $_POST['sch_time'];        $sch_mon = $_POST['sch_mon'];
            $sch_tue = $_POST['sch_tue'];          $sch_wed = $_POST['sch_wed'];
            $sch_thu = $_POST['sch_thu'];          $sch_fri = $_POST['sch_fri'];
            $sch_sat = $_POST['sch_sat'];          $sch_sun = $_POST['sch_sun'];
            $query = "UPDATE schedule SET 
                        sch_time = '{$sch_time}', sch_mon = '{$sch_mon}',
                        sch_tue = '{$sch_tue}', sch_wed = '{$sch_wed}', sch_thu = '{$sch_thu}',
                        sch_fri = '{$sch_fri}', sch_sat = '{$sch_sat}', sch_sun = '{$sch_sun}'  
                        WHERE sch_id = {$sch_id}";
            $update_query = mysqli_query($connection, $query);
        
            if(!$update_query){
                die("QUERY FAILED". mysqli_error($connection));
            }
            header("location:schedule.php");
        }
        ?>

        <div class="row">
            <div class="form-group">
                <input type="submit" class="btn btn-secondary " name="update_schedule" value="UPDATE" >
            </div>
        </div>
    </form>
    </div>
</div>
