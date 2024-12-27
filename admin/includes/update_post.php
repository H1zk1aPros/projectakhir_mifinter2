<diV class="row" style="background-color:#181e22; ">
    <div class="col-sm-12">
    <form action="" method="POST" class="mt-4">
        <div class="form-group">
            <label for="mem_id">Update Post</label>
            <?php
            if(isset($_GET['edit'])){
            $post_id = $_GET['edit'];
            $query = "SELECT * FROM posts WHERE post_id = {$post_id}";
            $select_post_id = mysqli_query($connection,$query);

            while($row = mysqli_fetch_assoc($select_post_id)){
                $post_id = $row['post_id'];
                $post_title = $row['post_title'];
                $post_category_id = $row['post_category_id'];
                $post_status = $row['post_status'];
                $post_image = $row['post_image'];
                $post_tags = $row['post_tags'];
                $post_content = $row['post_content'];
                $post_date = $row['post_date'];
                     ?>

            <div class="col-sm-8">
                <div class="form-group">
                    <img class="img-fluid" src="../images/<?php echo imagePlaceholder($post_image);?>" alt="img" width="200">
                </div>
                <div class="form-group col-sm-5" style="background-color:#181e22; color:white;">
                    <label for="post_title">Title</label>
                    <input type="text" class="form-control" name="post_title" value="<?php if(isset($post_title)){echo $post_title;} ?>">
                </div>
                <div class="form-group col-sm-12" style="background-color:#181e22; color:white;">
                    <label for="post_category_id">Category</label>
                    </div>
                <div class="form-group col-sm-12" style="background-color:#181e22; color:white;">
                    <select name="post_category_id" id="">   
                        <?php   
                        $query = "SELECT * FROM categories";
                        $select_category = mysqli_query($connection,$query);

                        confirm_query($select_category);
                        while($row = mysqli_fetch_assoc($select_category)){
                        $cat_id = $row['cat_id'];
                        $cat_title = $row['cat_title'];

                            if($cat_id=="$post_category_id"){
                                echo "<option value='$cat_id' selected>{$cat_title}</option>";
                            } else{
                                echo "<option value='$cat_id'>{$cat_title}</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group col-sm-12" style="background-color:#181e22; color:white;">
                    <label for="post_status">Status</label>
                    </div>
                <div class="form-group col-sm-12" style="background-color:#181e22; color:white;">
                    <select name="post_status" id="post_status">    
                    <option value="draft" <?php if($post_status=="draft"){echo " selected";} ?>>Draft</option>
                    <option value="published" <?php if($post_status=="published"){echo " selected";} ?>>Published</option>
                    </select>
                </div>
                <div class="form-group col-sm-12" style="background-color:#181e22; color:white;">
                    <label for="post_tags">Post Tags</label>
                    <input type="text" class="form-control" name="post_tags" value="<?php if(isset($post_tags)){echo $post_tags;} ?>">
                </div>
                <div class="form-group col-sm-12" style="background-color:#181e22; color:white;" >
                    <label for="post_content">Post Content</label>
                </div>
                <div class="form-group col-sm-12" >
                    <textarea class="form-control" id="editor" name="post_content" rows="20" >"<?php if(isset($post_content)){echo $post_content;} ?>"</textarea>
                </div>
            </div>
            <?php
            }}
            ?>
    
        <?php           //update post
        if(isset($_POST['update_post'])){
            $post_title = escape($_POST['post_title']);
            $post_category_id = escape($_POST['post_category_id']);
            $post_status = escape($_POST['post_status']);
            $post_user = escape($_SESSION['username']);
        
            
            $post_tags = $_POST['post_tags'];
            $post_content = $_POST['post_content'];

            $query = "UPDATE posts SET 
                    post_title = '{$post_title}', post_category_id = '{$post_category_id}',
                    post_status = '{$post_status}',  post_tags = '{$post_tags}',
                    post_content = '{$post_content}'  
                    WHERE post_id = {$post_id}";
            $update_query = mysqli_query($connection, $query);
        
            if(!$update_query){
                die("QUERY FAILED". mysqli_error($connection));
            }
            header("location:posts.php");
        }
        ?>

        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-secondary " name="update_post" value="UPDATE" >
        </div>
    </form>