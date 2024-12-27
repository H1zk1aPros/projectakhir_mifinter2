<h2>REGISTER A NEW USER</h2>
<hr>

<?php
if(isset($_POST['create_user'])){
    $user_firstname = $_POST['firstname'];
    $user_lastname = $_POST['lastname'];
    $user_addr = $_POST['user_addr'];
    $user_sex = $_POST['user_sex'];
    $user_birth = $_POST['user_birth'];
    $user_place = $_POST['user_place'];
    $user_role = $_POST['user_role'];
    $username = $_POST['username'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];


    // $post_image = $_FILES['post_image']['name'];
    // $post_temp_image = $_FILES['post_image']['tmp_name'];
    
    // $location = "../images/$post_image";
    // move_uploaded_file($post_temp_image,$location);

    $user_firstname = mysqli_real_escape_string($connection,$user_firstname);
    $user_lastname = mysqli_real_escape_string($connection,$user_lastname);
    $user_addr = mysqli_real_escape_string($connection,$user_addr);
    $user_sex = mysqli_real_escape_string($connection,$user_sex);
    $user_birth = mysqli_real_escape_string($connection,$user_birth);
    $user_place = mysqli_real_escape_string($connection,$user_place);
    $username = mysqli_real_escape_string($connection,$username);
    $user_email = mysqli_real_escape_string($connection,$user_email);
    $user_password = mysqli_real_escape_string($connection,$user_password);

    $user_password = password_hash($user_password, PASSWORD_BCRYPT, array('cost' => 12));

     $query = "INSERT INTO users(user_firstname,user_lastname,user_role,username,user_email,user_password,user_addr,user_sex,user_birth,user_place) ";
     $query .= "VALUES( '{$user_firstname}','{$user_lastname}','{$user_role}','{$username}','{$user_email}','{$user_password}','{$user_addr}','{$user_sex}','{$user_birth}','{$user_place}' )";

     $create_user_query = mysqli_query($connection,$query);

     confirm_query($create_user_query);

//    $query = "INSERT INTO users(user_firstname,user_lastname,user_role,username,user_email,user_password) ";
//    $query .= "VALUES(?,?,?,?,?,?)";

//    $query = "INSERT INTO users(user_firstname,user_lastname,user_addr,user_sex,user_birth,user_place,user_role,username,user_email,user_password) ";
//    $query .= "VALUES(?,?,?,?,?,?,?,?,?,?)";


//    $stmt_create_user_query = mysqli_prepare($connection,$query);
//    mysqli_stmt_bind_param($stmt_create_user_query,"ssssss",$user_firstname,$user_lastname,$user_addr,$user_sex,$user_birth,$user_place,$user_role,$username,$user_email,$user_password);

//    mysqli_stmt_execute($stmt_create_user_query);
//    mysqli_stmt_close($stmt_create_user_query);

//    confirm_query($stmt_create_user_query);

    header("location:users.php");

}

?>
    <table class="table table-hover table-dark table-bordered">
    <diV class="row" style="background-color:#181e22; color:white;" >
<div class="col-sm-5">
    <form action="" method="POST" enctype="multipart/form-data" class="mt-4">
        <div class="form-group">
            <label for="firstname">Firstname</label>
            <input type="text" class="form-control" name="firstname" >
        </div>
        
        <div class="form-group">
            <label for="lastname">Lastname</label>
            <input type="text" class="form-control" name="lastname" >
        </div>
        <div class="form-group">
            <label for="user_addr">Alamat</label>
            <input type="text" class="form-control" name="user_addr" >
        </div>
        <div class="form-group">
            <label for="user_sex">Jenis Kelamin</label><br>
            <select name="user_sex" id="d">    
            <option value="laki-laki">Laki - Laki</option>
            <option value="perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="user_birth">Tanggal Lahir</label>
            <input type="text" class="form-control" name="user_birth" >
        </div>
        <div class="form-group">
            <label for="user_place">Domisili</label>
            <input type="text" class="form-control" name="user_place" >
        </div>

        <div class="form-group">
            <label for="user_role">Role</label><br>
            <select name="user_role" id="">    
            <option value="subscriber">Subscriber</option>
            <option value="admin">Admin</option>
            </select>
        </div>

        <div class="form-group">
            <label for="username">username</label>
            <input type="text" class="form-control" name="username" >
        </div>
        <div class="form-group">
            <label for="user_email">Email</label>
            <input type="email" class="form-control" name="user_email" >
        </div>
        <!-- <div class="form-group">
            <label for="post_image">Post Image</label>
            <input type="file" class="form-control-file" name="post_image">
        </div> -->
        <div class="form-group">
            <label for="user_password">Password</label>
            <input type="password" class="form-control" name="user_password" >
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary " name="create_user" value="Add user" >
        </div>
    </form>
</div>
</div>
</table>