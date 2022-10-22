<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Form</h1>
    <form method="POST">
        email : <input type="email" required name="userEmail" id=""><br>
        password : <input type="number"  required name="userPassword"> <br>
        <input type="submit" name="loginBtn" value="longin" id="">
    </form>
    <?php
    $email = "admin@gmail.com";
    $password = '$2y$10$j5KJh1Q1FcSb3gZt7y7EbedAL3xFX/9aTaf.k7Zfvv87K1TOyhAXy';
    // $hashPassword = password_hash($password,PASSWORD_BCRYPT);
    // echo $hashPassword . "<br>";
    // var_dump(password_verify($password,$hashPassword));
    
    if(isset($_POST['loginBtn'])){
        $userEmail = $_POST['userEmail'];
        $userPassword = $_POST['userPassword'];
        if($email == $userEmail && password_verify($userPassword,$password)){
            echo "login success";
        }else{
            echo "login fail ";
        }
    }
    ?>
</body>
</html>