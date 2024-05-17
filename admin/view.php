<?php
       include("templates/header.php");
       
     ?>
    <div class="post w-100 bg-light p-5">
       <?php
        $id=$_GET['id'];
      

        if($id){
            include("connection.php");
            //code
            $sql= "SELECT * FROM posts WHERE id ='$id'";

            $data=mysqli_query($conn,$sql);

           while($result=mysqli_fetch_assoc($data)){
           ?>
           <h1><?php echo $result['title'] ;?></h1>
           <p><?php echo $result['date'] ;?></p>
           <p><?php echo $result['content'] ;?></p>
           <?php
           }
        }else{
           echo " Post not found ";
        }
       
       
       ?>
    </div>





<?php
       include("templates/footer.php");
     ?>