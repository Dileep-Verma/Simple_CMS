<?php
include("connection.php");

if(isset($_POST['create'])){

    $title=$_POST['title'];
    $summary=$_POST['summary'];
    $content=$_POST['content'];
    $date=$_POST['date'];

    // $title=mysqli_real_escape_string($conn,$_POST['title']);

    // $summary=mysqli_real_escape_string($conn,$_POST['summary']);

    // $content=mysqli_real_escape_string($conn,$_POST['content']);

    // $date=mysqli_real_escape_string($conn,$_POST['date']);
   

   

   

    //  echo $title;
    // echo $summary;
    //  echo $content;
    //  echo $date;

    $sql="INSERT INTO posts (date,title,summary,content) VALUES ('$date','$title','$summary','$content')";

    $result=mysqli_query($conn,$sql);

    if($result){

        session_start();
        $_SESSION["create"] = "Post added successfully";

        header("location:index.php");
       
    }else{

        echo "data is not insert into database";
    }



}

?>

<?php 
        
       

        if(isset($_POST['update'])){
            include("connection.php");

        
            $title=$_POST['title'];
            $summary=$_POST['summary'];
            $content=$_POST['content'];
            $date=$_POST['date'];
            $id=$_POST['id'];
        
            $sqlupdate="UPDATE posts SET title='$title',summary='$summary',content='$content', date='$date' WHERE id='$id' ";
        
            $result=mysqli_query($conn,$sqlupdate);
        
            if($result){

                session_start();
                $_SESSION["update"] = "Post update successfully";

                header('location:index.php');
            }else{
        
                die("Data not Updated!!!");
            }
        
        
        
        }
        
                
                ?>