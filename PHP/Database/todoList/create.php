<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Todo List</h1>
    <form action="" method="post">
        <label for="name">Task Name</label>
        <input type="text" name="taskName" id="name" placeholder="enter your tast name">
        <button type="submit" name="addBtn">Add</button>
    </form>
    <a href="read.php">Read Page</a>
    <?php
    include_once('db_connection.php');
    if(isset($_POST['addBtn'])){
        $taskName =  $_POST['taskName'];
        if($taskName == "" || $taskName == null){
            echo"<small style='color:red'>Messagr is required...</small>";
        }else{
        $sql = "INSERT INTO work (name) VALUES ('$taskName')";
        if(mysqli_query($connection,$sql)){
            header("location:read.php");
        }else{
            echo"insert fail";
        }
        }
    }
    ?>
</body>
</html>