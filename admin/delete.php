<?php 
include("connection.php") ;


$id=$_GET['id'];

$sqldelete="DELETE FROM posts WHERE id='$id'";
$data=mysqli_query($conn,$sqldelete) or die(mysqli_error($conn));

if($data){

    session_start();
    $_SESSION["delete"] = "Post delete successfully";
    header("location:index.php");

}else{
     die("Data is not delete");
}

?>