<?php  include "includes/header.php"; ?>

<!-- Navigation -->
<?php include "includes/navigation.php"; ?>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">

        <?php 
            if(isset($_GET['p_id'])){
               $the_post_id = $_GET['p_id'];
            }
            $query = "SELECT * FROM posts WHERE post_id = {$the_post_id} ";
            $select_all_posts_query = mysqli_query($connection,$query);
            while($row = mysqli_fetch_assoc($select_all_posts_query)){
               $post_title = $row['post_title'];
               $post_user = $row['post_user'];
               $post_date = $row['post_date'];
               $post_image = $row['post_image'];
               $post_content = $row['post_content'];
        ?>

                
        <!--first Blog Post -->
        <h2> 
          &nbsp;
        </h2>
        <h2> 
          <a href=""><?php echo $post_title; ?></a>
        </h2>
        <hr>
        <a href="post.php?p_id='<?php echo $post_id; ?>'">
        <img class="img-fluid" src="images/<?php echo imagePlaceholder($post_image);?>" alt="img">
        </a>
        <hr>  
        <p><?php echo $post_content; ?></p>
        <hr>     
           
        <?php } ?>


        <!-- Blog Comments -->
        <?php

        if(isset($_POST['create_comment'])){
            $the_post_id = $_GET['p_id'];
            $comment_author = $_POST['comment_author'];
            $comment_email = $_POST['comment_email'];
            $comment_content = $_POST['comment_content'];

            if(!empty($comment_author) && !empty($comment_email) && !empty($comment_content)){
                $query = "INSERT INTO comments(comment_post_id,comment_author,comment_email,
                        comment_content,comment_status,comment_date) ";
                $query .= "VALUES ( $the_post_id,'{$comment_author}','{$comment_email}',
                        '{$comment_content}','show', NOW() )";
                
                $create_comment_query = mysqli_query($connection,$query);
                
                confirm_query($create_comment_query);
                
            }else{
                echo "<script>alert('fields cannot be empty')</script>";
            }          

        }
        ?>


        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<?php  include "includes/footer.php"; ?>