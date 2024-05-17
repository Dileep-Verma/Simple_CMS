<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Block</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
</head>

<body>
    <header class="p-3 bg-dark text-center text-light">
        <a href="admin/index.php" class="text-decoration-none text-light" ><h1>  Simple Block</h1></a>
    </header>
    <div class="post-list m-5">
        <div class="container">
            <?php
            $id=$_GET['id'];
            if($id){
            
        include("admin/connection.php");

        $sqlselect="SELECT * FROM posts where id='$id'";
        $data=mysqli_query($conn,$sqlselect);

        while($result=mysqli_fetch_assoc($data)){
            ?>
              <div class="post bg-light p-4 mt-4" >
                <h1><?php echo $result['title'];?></h1>
                <p><?php echo $result['date'];?></p>
                <p><?php echo $result['content'];?></p>
              </div>

            <?php
        }
    }else{
         
        echo "No  post found";
    }
        
        ?>
        </div>
    </div>
    <div class="footer bg-dark p-4 mt-4">
        <a href="admin/index.php" class="text-light text-decoration-none" >Admin Pannel</a>

    </div>

</body>

</html>