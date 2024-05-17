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
        //include("connection.php");
        include("admin/connection.php");

        $sqlselect="SELECT * FROM posts";
        $data=mysqli_query($conn,$sqlselect);

        while($result=mysqli_fetch_array($data)){
            ?>
            <div class="row mb-4 p-5 bg-light">
                <div class="col-sm-2">
                    <?php echo $result['date'] ?>
                </div>
                <div class="col-sm-2">
                    <h2><?php echo $result['title'] ?></h2>
                </div>
                <div class="col-sm-5">
                    <?php echo $result['content'] ?>
                </div>
                <div class="col-sm-2">
                    <a href="view.php?id=<?php echo $result['id'] ;?>" class="btn btn-primary ">Read More</a>
                </div>
            </div>

            <?php
        }
        
        ?>
        </div>
    </div>
    <div class="footer bg-dark p-4 mt-4">
        <a href="admin/index.php" class="text-light text-decoration-none" >Admin Pannel</a>

    </div>

</body>

</html>