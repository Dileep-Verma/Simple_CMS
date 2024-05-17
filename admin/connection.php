<?php
error_reporting(0);
$servername = "localhost";
$username="root";
$password= "";
$dbname = "cms_table";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn){

   //echo "connection is successfully";

}else{

   echo"connection is not successfully";
}



?>

