<?php 
include("connection.php");

if(isset($_POST["login"])){

    $username = $_POST["name"];
    $password = $_POST["pass"];

    if($username=="dileep" && $password== "verma"){
        session_start();
        $_SESSION["user"] = "admin";
        header("location:index.php");
    }else{
       

 echo "<script> alert('failed login') </script>";
       // die(");
      // header("location:login.php");
     
    }

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            body{
                margin: 0px;
                padding: 0%;
                
                background-color: aquamarine;
            }
            .header{
                border: 2px solid silver;
                background-color: red   ;
                padding: 20px;
                
                border-radius: 5px;
            }
            .container{
                border: 5px solid pink;
                border-radius: 5px;
                background-color: white;
              
            }
            .container h2{
                text-align: center;
                padding: 10px 0px;
                text-decoration: underline;
                color: green;
            }
            .form-control{
                border: 2px solid  aquamarine;
                font-size: 18px;
                border-radius: 50px;
                
            }
            .login-form{
                margin: 20px;
            }

            @media(max-width:470px){
                .container{
                    width: 80%;
                }

            }
         
        </style>
</head>
</head>
<body>
    <div class="header">
       <h1>Simple CMS</h1>
    </div>
    <div class="container mt-5" style="max-width: 500px;">
    <h2>Login Page</h2>
        <div class="login-form">
            <form action="login.php" method="post">
                <div class="form-field mb-4">
                    <input type="text" name="name" id="" placeholder="Username" class="form-control" >
                </div>
                <div class="form-field mb-4">
                    <input type="password" name="pass" id="" placeholder="Password" class="form-control">
                </div>
                <div class="form-field mb-4">
                    <input  class="btn btn-info" type="submit" name="login"  value="Login" class="form-control" >
                </div>
            </form>
        </div>
    </div>
    <script>
        function failed(){
            alert("failed login");
        }
    </script>
    
</body>
</html>
