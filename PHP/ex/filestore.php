<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>File Store</h1>
    <form action="" method="post" enctype="multipart/form-data">
        Image
    <input type="file" name="userProfile" id=""> <br>
    <input type="submit" name="storeProfile" value="save" id="">
   </form>
   <?php
//   if(isset($_POST['storeProfile'])){
//     echo "<pre>";
//     print_r($_FILES);
//     $imageName = $_FILES['userProfile']['name'];
//     $tempName = $_FILES['userProfile']['tmp_name'];
    // print_r($imageName);
    // print_r($tempName);
//     $target_file = "image/".$imageName;
//     move_uploaded_file($tempName,$target_file);
//     echo "success";

//   }
    if(isset($_POST['storeProfile'])){
        echo "<pre>";
        print_r($_FILES);
        $imgName = $_FILES['userProfile']['name'];
        $tempName = $_FILES['userProfile']['tmp_name'];
        $target_file = "image/".$imgName;
        move_uploaded_file($tempName,$target_file);
    }
   
   ?>
</body>
</html>