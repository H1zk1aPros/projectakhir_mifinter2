<div class="text-center">
    <h4>MEMBERS</h4>
    <h6>List Of All Members</h6>
    <hr>
    <diV class="row" style="background-color:#181e22; color:white;" >
        <div class="col-md-6 text-left">
        </div>
        <div class="col-md-6 text-right">
                <form action="" method="POST" class="mt-6">
                    <div class="row">
                      <div class="col-md-3">
                        Search 
                      </div>
                      <div class="col-md-6">
                        <input type="text" class="form-control" name="search" >
                      </div>
                      <div class="col-md-2">
                        <input type="submit" class="btn btn-secondary " name="submit" value="Search" >
                      </div>
                    </div>
                </form>
        </div>
    </div>

    <table class="table table-hover table-dark table-bordered">
        <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">ID.</th>
              <th scope="col">Name.</th>
              <th scope="col">Sex.</th>
              <th scope="col">Member.</th>
              <th scope="col">Group.</th>
              <th scope="col">Trainer.</th>
              <th scope="col">Action.</th>
            </tr>
        </thead>
        <tbody>

        <?php
        $per_page =50;

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

        if(isset($_POST['submit'])){
          $search = $_POST['search'];
          $post_query_count = "SELECT * FROM members WHERE mem_name LIKE '%$search%'";
        } else {
          $post_query_count = "SELECT * FROM members";
        }

        $find_count = mysqli_query($connection,$post_query_count);
        $count = mysqli_num_rows($find_count);
        $count = ceil($count/$per_page);


        $serial=0;
          if(isset($_POST['submit'])){
            $search = $_POST['search'];
            $query = "SELECT * FROM members WHERE mem_name LIKE '%$search%' LIMIT $page_1 ,$per_page";
          } else {
            $query = "SELECT * FROM members  LIMIT $page_1 ,$per_page";
          }
            $select_all_users_query = mysqli_query($connection,$query);
            while($row = mysqli_fetch_assoc($select_all_users_query)){
               $mem_id = $row['mem_id'];
               $mem_name = $row['mem_name'];
               $mem_gender = $row['mem_gender'];
               $mem_birth = $row['mem_birth'];
               $mem_card = $row['mem_card'];
               $mem_group_fav = $row['mem_group_fav'];
               $mem_trainer_name = $row['mem_trainer_name'];

                echo "<tr>";
                $serial=$serial+1;
                echo "<th scope='row'>$serial</th>";
                $no_of_digit = 4;
                $i=0;
                $number=$mem_id;
                //$usia = date('Y-m-d') - $mem_birth;
                $length = strlen((string)$number);
                for($i = $length;$i<$no_of_digit;$i++)
                {
                    $number = '0'.$number;
                }                
                echo "<td>$number</td>";
                echo "<td>$mem_name</td>";
                if ($mem_gender == 'Male'){
                  echo "<td><i class='fas fa-mars'></i></td>";
                }else{
                  echo "<td><i class='fas fa-venus'></i></td>";
                }
                echo "<td></td>";
                echo "<td>$mem_card</td>";
                echo "<td>$mem_group_fav</td>";
                echo "<td>$mem_trainer_name</td>";
                echo "<td><a href='members.php?edit={$mem_id}'>Edit</a> &nbsp;/&nbsp;&nbsp;<a onClick=\"javascript: return confirm('Are you sure you want to delete?'); \" href='members.php?delete=$mem_id'>Del</td>";
                echo "</tr>";
            }
          //delete comments
          if(isset($_GET['delete'])){
            $the_user_id = $_GET['delete'];

            $query = "DELETE FROM members WHERE mem_id = {$the_user_id}";
            $delete_query = mysqli_query($connection,$query);
            header("Location:members.php");

          }
          if(isset($_GET['edit'])){
          $mem_id = $_GET['edit'];
          header("Location:./members.php?source=update_members&edit={$mem_id}");
//          include "includes/update_member.php";
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
          echo "<li class='page-item'><a class='page-link' href='members.php?page={$pre}'>Previous</a></li>";
        }
      }

      for($i=1;$i<=$count;$i++){
        if($i == $page){
          echo "<li class='page-item active'><a class='page-link' href='members.php?page={$i}'>{$i}</a></li>";
        }else{
          echo "<li class='page-item'><a class='page-link' href='members.php?page={$i}'>{$i}</a></li>";
        }
      }

      if(empty($_GET['page'])){
        echo "<li class='page-item'><a class='page-link' href='members.php?page=2'>Next</a></li>";
      }

      if(isset($_GET['page'])){
        $pagination = $_GET['page'];

        if($pagination!=$count){
          $next = $pagination+1;
          echo "<li class='page-item'><a class='page-link' href='members.php?page={$next}'>Next</a></li>";
        }
      }

    ?>
  </ul>
</nav>
<?php                          


?>