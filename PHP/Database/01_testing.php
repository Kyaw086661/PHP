<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data base connection</h1>
    <!-- mysqli_connect(hostName,useName,password,dbName)'' -->
   <!-- $connection = mysqli_connect('localhost','root','','testing'); -->
   <?php
   $connection = mysqli_connect('localhost','root','','testing');

   if($connection){
    echo "connection success";
   }else{
    echo "connection fail". mysqli_connection_fail();
   }
   ?>
</body>
</html>