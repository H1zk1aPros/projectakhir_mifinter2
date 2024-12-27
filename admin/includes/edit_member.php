<h2>EDIT MEMBER</h2>
<hr>

<?php
if(isset($_POST['edit_member'])){
    $mem_name = $_POST['mem_name'];
    $mem_gender = $_POST['mem_gender'];
    $mem_birth = $_POST['mem_birth'];
    $mem_card = $_POST['mem_card'];
    $mem_group = $_POST['mem_group'];
    $mem_trainer = $_POST['mem_trainer'];


    // $post_image = $_FILES['post_image']['name'];
    // $post_temp_image = $_FILES['post_image']['tmp_name'];
    
    // $location = "../images/$post_image";
    // move_uploaded_file($post_temp_image,$location);

    $mem_name = mysqli_real_escape_string($connection,$mem_name);
    $mem_gender = mysqli_real_escape_string($connection,$mem_gender);
    $mem_birth = mysqli_real_escape_string($connection,$mem_birth);
    $mem_card = mysqli_real_escape_string($connection,$mem_card);
    $mem_group = mysqli_real_escape_string($connection,$mem_group);
    $mem_trainer = mysqli_real_escape_string($connection,$mem_trainer);


     $query = "INSERT INTO members(mem_name,mem_gender,mem_birth,mem_card,mem_group,mem_trainer) ";
     $query .= "VALUES( '{$mem_name}','{$mem_gender}','{$mem_birth}','{$mem_card}','{$mem_group}','{$mem_trainer}' )";

     $create_member_query = mysqli_query($connection,$query);

     confirm_query($create_member_query);

//    $query = "INSERT INTO users(user_firstname,user_lastname,user_role,username,user_email,user_password) ";
//    $query .= "VALUES(?,?,?,?,?,?)";

//    $query = "INSERT INTO users(user_firstname,user_lastname,user_addr,user_sex,user_birth,user_place,user_role,username,user_email,user_password) ";
//    $query .= "VALUES(?,?,?,?,?,?,?,?,?,?)";


//    $stmt_create_user_query = mysqli_prepare($connection,$query);
//    mysqli_stmt_bind_param($stmt_create_user_query,"ssssss",$user_firstname,$user_lastname,$user_addr,$user_sex,$user_birth,$user_place,$user_role,$username,$user_email,$user_password);

//    mysqli_stmt_execute($stmt_create_user_query);
//    mysqli_stmt_close($stmt_create_user_query);

//    confirm_query($stmt_create_user_query);

    header("location:members.php");

}

?>
    <table class="table table-hover table-dark table-bordered">
    <diV class="row" style="background-color:#181e22; color:white;" >
<div class="col-sm-5">
    <form action="" method="POST" enctype="multipart/form-data" class="mt-4">
        <div class="form-group">
            <label for="mem_name">Name</label>
            <input type="text" class="form-control" name="mem_name" >
        </div>
        <div class="form-group">
            <label for="mem_gender">Sex</label><br>
            <select name="mem_gender" id="">    
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            </select>
        </div>
        <div class="form-group">
            <label for="mem_birth">Birthday</label>
            <input type="date" class="form-control" name="mem_birth" >
        </div>
        <div class="form-group">
            <label for="mem_card">Member Type</label><br>
            <select name="mem_card" id="">    
            <option value="Standard">Stadard</option>
            <option value="Premium">Premium</option>
            </select>
        </div>
        <div class="form-group">
            <label for="mem_group">Ikut Group</label><br>
            <select name="mem_group" id="">    
            <option value="FALSE">Tidak Ada</option>
            <option value="TRUE">Ada</option>
            </select>
        </div>
        <div class="form-group">
            <label for="mem_trainer">Trainer</label><br>
            <select name="mem_trainer" id="">    
            <option value="FALSE">Tidak Ada</option>
            <option value="TRUE">Ada</option>
            </select>
        </div>

        <!-- <div class="form-group">
            <label for="mem_image">Image</label>
            <input type="file" class="form-control-file" name="mem_image">
        </div> -->
        <div class="form-group">
            <input type="submit" class="btn btn-primary " name="edit_member" value="Edit Member" >
        </div>
    </form>
</div>
</div>
</table>