<h4>Update Member</h4>
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
                $mem_id = $_GET['edit'];
                $query = "SELECT * FROM members WHERE mem_id = {$mem_id}";
                $select_member_id = mysqli_query($connection,$query);

            while($row = mysqli_fetch_assoc($select_member_id)){
                $mem_id = $row['mem_id'];
                $mem_name = $row['mem_name'];
                $mem_gender = $row['mem_gender'];
                $mem_birth = $row['mem_birth'];
                $mem_card = $row['mem_card'];
                $mem_group = $row['mem_group'];
                $mem_trainer = $row['mem_trainer'];
            ?>

            <div class="col-sm-12">
            <div class="row">
                <div class="col-md-3">&nbsp;
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="mem_name">Name</label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="mem_name" value="<?php if(isset($mem_name)){echo $mem_name;} ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="mem_gender">Sex</label>
                </div>
                <div class="col-md-6">
                    <select name="mem_gender" id="mem_gender">    
                    <option value="Male" <?php if($mem_gender=="Male"){echo " selected";} ?>>Male</option>
                    <option value="Female" <?php if($mem_gender=="Female"){echo " selected";} ?>>Female</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="mem_birth">Birthday</label>
                </div>
                <div class="col-md-6">
                    <input type="date" class="form-control" name="mem_birth" value="<?php if(isset($mem_birth)){echo $mem_birth;} ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="mem_card">Member Type</label><br>
                </div>
                <div class="col-md-6">
                    <select name="mem_card" id="mem_card">    
                    <option value="Standard" <?php if($mem_card=="Standard"){echo " selected";} ?>>Stadard</option>
                    <option value="Premium" <?php if($mem_card=="Premium"){echo " selected";} ?>>Premium</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="mem_group">Ikut Group</label><br>
                </div>
                <div class="col-md-6">
                    <select name="mem_group" id="mem_group">    
                    <option value="FALSE" <?php if($mem_group=="FALSE"){echo " selected";} ?>>Tidak Ada</option>
                    <option value="TRUE" <?php if($mem_group=="TRUE"){echo " selected";} ?>>Ada</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="mem_trainer">Trainer</label><br>
                </div>
                <div class="col-md-6">
                    <select name="mem_trainer" id="mem_trainer">    
                    <option value="FALSE" <?php if($mem_trainer=="FALSE"){echo " selected";} ?>>Tidak Ada</option>
                    <option value="TRUE" <?php if($mem_trainer=="TRUE"){echo " selected";} ?>>Ada</option>
                    </select>
                    </div>
            </div>
            <?php
            }}
            ?>
        </div>
    
        <?php   
        if(isset($_POST['update_member'])){
            $mem_name = $_POST['mem_name'];
            $mem_gender = $_POST['mem_gender'];
            $mem_birth = $_POST['mem_birth'];
            $mem_card = $_POST['mem_card'];
            $mem_group = $_POST['mem_group'];
            $mem_trainer = $_POST['mem_trainer'];
                    $query = "UPDATE members SET 
                        mem_name = '{$mem_name}', mem_gender = '{$mem_gender}',
                        mem_birth = '{$mem_birth}', mem_card = '{$mem_card}', mem_group = '{$mem_group}',
                        mem_trainer = '{$mem_trainer}'  
                        WHERE mem_id = {$mem_id}";
            $update_query = mysqli_query($connection, $query);
        
            if(!$update_query){
                die("QUERY FAILED". mysqli_error($connection));
            }
            header("location:members.php");
        }
        ?>

        <div class="row">
            <div class="form-group">
                <input type="submit" class="btn btn-secondary " name="update_member" value="UPDATE" >
            </div>
        </div>
    </form>
    </div>
</div>
