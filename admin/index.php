<?php
       include("templates/header.php");
      ?>
<div class="post-list w-100 p-5 ">
    <?php
    if(isset($_SESSION["create"])){
        ?>
        <div class="alert alert-success">
            <?php
              echo $_SESSION["create"];
            ?>
        </div>
        <?php
        unset($_SESSION["create"]);
    }
    
    ?>
     <?php
    if(isset($_SESSION["update"])){
        ?>
        <div class="alert alert-info">
            <?php
              echo $_SESSION["update"];
            ?>
        </div>
        <?php
        unset($_SESSION["update"]);
    }
    
    ?>
     <?php
    if(isset($_SESSION["delete"])){
        ?>
        <div class="alert alert-success">
            <?php
              echo $_SESSION["delete"];
            ?>
        </div>
        <?php
        unset($_SESSION["delete"]);
    }
    
    ?>

    <table class="table tabled-border">
        <thead>
            <tr>
                <th style="width:15%;">Publication Date</th>
                <th style="width:15%;">Title</th>
                <th style="width:45%;">Article</th>
               
                <th style="width:25%;">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                include("connection.php");
               $id= $_GET["id"];

                $sql="SELECT * FROM posts";

                $data=mysqli_query( $conn, $sql );

               $count= mysqli_num_rows($data);
               if($count> 0){
                while($result=mysqli_fetch_assoc($data)){
                    ?>
            <tr>
            <td > <?php echo $result['date'] ?></td>
            <td> <?php echo $result['title'] ?></td>
            <td><?php echo $result['summary'] ?></td>
            <td>
                <a class="btn btn-info" href="view.php?id=<?php echo $result['id'] ?>">View</a>
                <a class="btn btn-warning" href="edit.php?id=<?php echo $result['id'] ?>">Edit</a>
                <a class="btn btn-danger" href="delete.php?id=<?php echo $result['id'] ?>">Delete</a>

            </td>
            </tr>

            <?php
               }
            }else{
                echo "data not fount";
            }
                
                ?>

        </tbody>
    </table>
</div>


<?php
       include("templates/footer.php");
      ?>