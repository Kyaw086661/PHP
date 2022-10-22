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
    // encription
    $name = "kyaw thu lin";
    $encname = md5($name);
    echo $encname;
    echo "<br>";
    $secName = sha1($name);
    echo $secName;
    echo "<br>";
    $thirdName = crypt($name,"ktl");
    echo $thirdName;
    ?>
    <hr>
    <?php
    // password hash 
    $password = "maykyithant";
    $hashPassword = password_hash($password,PASSWORD_BCRYPT);
   echo password_verify($password,$hashPassword)? "corret password": "wrong password";
   echo "<br>";
    echo $password;
    echo "<br>";
    echo $hashPassword;




    ?>
</body>
</html>