<div class="text-center">
    <h4>ALL POSTS</h4>
    <h6>You can manage posts as your wish.</h6>
    <hr>

    <table class="table table-hover table-dark table-bordered">
        <thead>
            <tr>
              <th scope="col" width='50'>S.No.</th>
              <th scope="col" width='150'>TITLE</th>
              <th scope="col" width='100'>CATEGORY</th>
              <th scope="col" width='100'>IMAGE</th>
              <th scope="col">CONTENT</th>
              <th scope="col" width='50'>ACTION</th>
            </tr>
        </thead>
        <tbody>

        <?php
                $per_page =5;
        
                if(isset($_GET['page'])){
                  $page = $_GET['page'];
                }else{
                  $page = "";
                }
        
                if($page == 1 || $page == ""){
                  $page_1 = 0;
                }else{
                  $page_1 = ($page * $per_page) -$per_page;
                }
        
                $post_query_count = "SELECT * FROM posts";
                $find_count = mysqli_query($connection,$post_query_count);
                $count = mysqli_num_rows($find_count);
                $count = ceil($count/$per_page);
        
            $serial=0;
            $query = "SELECT * FROM posts LIMIT $page_1 ,$per_page";
            $select_all_posts_query = mysqli_query($connection,$query);
            while($row = mysqli_fetch_assoc($select_all_posts_query)){
               $post_id = $row['post_id'];
               $post_title = $row['post_title'];
               $post_category_id = $row['post_category_id'];
               $post_status = $row['post_status'];
               $post_image = $row['post_image'];
               $post_content = $row['post_content'];
               $post_date = $row['post_date'];

              echo "<tr>";
              $serial=$serial+1;
              echo "<th scope='row'>$serial</th>";
              echo "<td>$post_title</td>";

              $query = "SELECT * FROM categories WHERE cat_id = {$post_category_id}";
              $select_categories_id = mysqli_query($connection,$query);
            
              while($row = mysqli_fetch_assoc($select_categories_id)){
              $cat_id = $row['cat_id'];
              $cat_title = $row['cat_title'];
              echo "<td>$cat_title</td>";
              }
          
          
              $image = imagePlaceholder($post_image);
              echo "<td><img width='100' class='img-fluid' src='../images/$image' alt='img'></td>";
              $strcount = str_word_count("$post_content");
              if ($strcount>=20) {
                  $klm=substr($post_content,0,100)." ... ";
                  echo "<td>$klm</td>";
                }else{
                  echo "<td>$post_content</td>";
              }
              echo "<td><a href='../post.php?p_id={$post_id}'>View</a>&nbsp;/&nbsp;
                    <a href='posts.php?edit={$post_id}'>Edit</a>&nbsp;/&nbsp;
                    <a onClick=\"javascript: return confirm('Are you sure you want to delete?'); \" href='posts.php?delete={$post_id}'>Del</a></td>";
              echo "</tr>";
            }
            if(isset($_GET['delete'])){
                $the_post_id = $_GET['delete'];
            
                $query = "DELETE FROM posts WHERE post_id = {$the_post_id}";
                $delete_query = mysqli_query($connection,$query);
            
                header("Location:posts.php");
            
            }
            if(isset($_GET['edit'])){
                $the_post_id = $_GET['edit'];
                include "includes/update_post.php";
                }
                  
        ?>

        </tbody>
    </table>
</div>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <?php
      if(isset($_GET['page'])){
        $pagination = $_GET['page'];
        
        if($pagination!=1){
          $pre = $pagination-1;
          echo "<li class='page-item'><a class='page-link' href='posts.php?page={$pre}'>Previous</a></li>";
        }
      }

      for($i=1;$i<=$count;$i++){
        if($i == $page){
          echo "<li class='page-item active'><a class='page-link' href='posts.php?page={$i}'>{$i}</a></li>";
        }else{
          echo "<li class='page-item'><a class='page-link' href='posts.php?page={$i}'>{$i}</a></li>";
        }
      }

      if(empty($_GET['page'])){
        echo "<li class='page-item'><a class='page-link' href='posts.php?page=2'>Next</a></li>";
      }

      if(isset($_GET['page'])){
        $pagination = $_GET['page'];

        if($pagination!=$count){
          $next = $pagination+1;
          echo "<li class='page-item'><a class='page-link' href='posts.php?page={$next}'>Next</a></li>";
        }
      }

    ?>
  </ul>
</nav>
<?php                                    //delete posts
?>