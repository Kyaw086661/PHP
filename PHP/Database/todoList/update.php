<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <?php
        include("db_connection.php");
        $id = $_GET['id'];
        $sql = "SELECT * FROM work WHERE id='$id'";
        $query = mysqli_query($connection,$sql);
        // echo "<pre>";
        // print_r(mysqli_fetch_assoc($query));
        $data= mysqli_fetch_assoc($query);//get data


        if(isset($_GET['updateBtn'])){
            $id = $_GET['taskId'];
            $taskName =$_GET['taskName'];
            
                $updateSql = "UPDATE work SET name = '$taskName' WHERE id= '$id'";
                if(mysqli_query($connection,$updateSql)){
                    header("location:read.php");
                }else{
                    echo "update error..";
                }
            
        }
        ?>

    <a href="read.php">List Page</a>
    <form action="" method="GET">
        Test 
        <input type="hidden" value="<?php echo $data['id'] ?>" name="taskId" id="" required>
        <input type="text" name="taskName" value="<?php echo $data['name'] ?>" id="" required>
        <button type="submit" name="updateBtn">Update</button>
    </form>
</body>
</html>
