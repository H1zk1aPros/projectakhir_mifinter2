<h2>Create New Post</h2>
<hr>

<?php
if(isset($_POST['create_post'])){
    $post_title = escape($_POST['post_title']);
    $post_category_id = escape($_POST['post_category_id']);
    $post_status = escape($_POST['post_status']);
    $post_user = escape($_SESSION['username']);

    $post_image = $_FILES['post_image']['name'];
    $post_temp_image = $_FILES['post_image']['tmp_name'];
    
    $post_tags = $_POST['post_tags'];
    $post_content = $_POST['post_content'];
    // $post_comment_count = 4;
    $post_date = date('d-m-y');

    $location = "../images/$post_image";
    move_uploaded_file($post_temp_image,$location);

    // $query = "INSERT INTO posts(post_title,post_category_id,post_author,post_status,post_image,post_tags,
    // post_content,post_date) ";
    // $query .= "VALUES( '{$post_title}','{$post_category_id}','{$post_author}','{$post_status}','{$post_image}','{$post_tags}',
    // '{$post_content}', NOW() )";

    // $create_post_query = mysqli_query($connection,$query);

    // confirm_query($create_post_query);

    $query = "INSERT INTO posts(post_title,post_category_id,post_status,post_user,post_image,post_tags,post_content,post_date) ";
    $query .= "VALUES(?,?,?,?,?,?,?, NOW() )";

    $stmt_create_post_query = mysqli_prepare($connection,$query);
    mysqli_stmt_bind_param($stmt_create_post_query,"sssssss",$post_title,$post_category_id,$post_status,$post_user,$post_image,$post_tags,$post_content);
    mysqli_stmt_execute($stmt_create_post_query);
    mysqli_stmt_close($stmt_create_post_query);

    confirm_query($stmt_create_post_query);

    header("location:posts.php");

}

?>

<diV class="row" style="background-color:#181e22;" >
<form action="" method="POST" enctype="multipart/form-data" class="mt-8">
    <div class="row">
        <div class="col-md-3">&nbsp;
        </div>
    </div>
    <div class="row">
        <div class="col-md-3" style="background-color:#181e22; color:white;">
            <label for="post_title">Post title</label>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" name="post_title" >
        </div>
    </div>

    <div class="row">
        <div class="col-md-3" style="background-color:#181e22; color:white;">
            <label for="post_category_id">Post Category ID</label><br>
        </div>
        <div class="col-md-6">
            <select name="post_category_id" id="">   
            <?php   
            $query = "SELECT * FROM categories";
            $select_category = mysqli_query($connection,$query);

            confirm_query($select_category);
            while($row = mysqli_fetch_assoc($select_category)){
            $cat_id = $row['cat_id'];
            $cat_title = $row['cat_title'];

            echo "<option value='$cat_id'>{$cat_title}</option>";
            
            }
            ?>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3" style="background-color:#181e22; color:white;">
            <label for="post_status">Post Status</label><br>
        </div>
        <div class="col-md-6">
            <select name="post_status" id="">
                <option value="draft">draft</option>
                <option value="published">published</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3" style="background-color:#181e22; color:white;">
            <label for="post_image">Post Image</label>
        </div>
        <div class="col-md-6" style="background-color:#181e22; color:white;">
            <input type="file" class="form-control-file" name="post_image">
        </div>
    </div>

    <div class="row">
        <div class="col-md-3" style="background-color:#181e22; color:white;">
            <label for="post_tags">Post Tags</label>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" name="post_tags" >
        </div>
    </div>

    <div class="row">
        <div class="col-md-3" style="background-color:#181e22; color:white;">
            <label for="post_content">Post Content</label>
        </div>
        <div class="col-md-9">
            <textarea class="form-control" id="editor" name="post_content" rows="10"  style="background-color: #b6b7b4;"></textarea>
        </div>
    </div>

    <div class="form-group col-sm">
        <input type="submit" class="btn btn-secondary " name="create_post" value="Publish Post" >
    </div>
</form>
        </div>