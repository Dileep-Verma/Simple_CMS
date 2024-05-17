<?php
include("templates/header.php");
include("connection.php");
?> 
<?php
$id=$_GET['id'];

if($id){
    $sqledit= "SELECT * FROM posts WHERE id='$id'";
    $data=mysqli_query($conn,$sqledit);
   
   

}else{
    echo "Post is not found";
}


?>
        <div class="create-form w-100 mx-auto p-4" style="max-width: 700px;" >
        <form action="process.php" method="post">
            <?php
            while( $result=mysqli_fetch_assoc($data)){
            
            ?>
            <div class="form-field mb-4">
            <input type="text" class="form-control" name="title"  placeholder="Enter title:"value="<?php  echo $result['title']; ?>" >
            </div>
            <div class="form-field mb-4">
                <textarea name="summary" class="form-control" placeholder="Enter summary:"
                 cols="30" rows="10" id="" ><?php  echo $result['summary']; ?></textarea>
            </div>
            <div class="form-field mb-4">
            <textarea name="content"  class="form-control" placeholder="Enter post:" cols="30" rows="10" id=""><?php  echo $result['summary']; ?></textarea>
            </div>
            <input type="hidden" name="date" value="<?php echo date('y/m/d');?>" >

            <input type="hidden" name="id" value="<?php echo $id;?>" >
            <div class="form-field ">
                <input type="submit" class="btn btn-primary" value="update" name="update">
            </div>
            <?php
            } 
            ?>
        </form>
        </div>
       

        <?php
       include("templates/footer.php");
      ?> 