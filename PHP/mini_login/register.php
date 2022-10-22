<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Login Project</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body >
    <div class="container p-5 mt-4 bg-secondary">
        <div class="row ">
            <div class="col-4">
                <div class="">
                <a href="login.php">
                    <button class="btn-dark btn text-white form-control mb-3">Login</button>
                </a>
                </div>
                <div class="">
                <a href="logout.php">
                    <button class="btn-danger btn text-white form-control mb-3">LogOut</button>
                </a>
                </div>
                <div class="">
                <a href="register.php">
                    <button class="btn-success btn text-white form-control mb-3">Register</button>
                </a>
                </div>
            </div>
            <div class="card col-6 offset-1">
                <div class="card-title mt-3">
                    <h3>Register</h3>
                </div>
            <div class="p-3 card-body">
                <form action="" method="post">
                    <div class="mb-2">
                        <label for="name">Name</label>
                        <input type="text" name="userName" placeholder="enter name" class="form-control" id="">
                    </div>
                    <div class="mb-2">
                        <label for="email">Email</label>
                        <input type="email" name="userEmail" placeholder="enter email" class="form-control mb-3" id="">
                    </div>
                    <div class="mb-2">
                        <label for="password">Password</label>
                        <input type="text" name="password" placeholder="enter password" class="form-control" id="">
                    </div>
                    <div class="mb-2">
                        <label for="password">Confirm Password</label>
                        <input type="text" name="confirmPassword" placeholder="enter password" class="form-control" id="">
                    </div>
                    <button type="submit" name="register" class="btn mt-3 float-end btn-dark">Register</button>
                </form>
            </div>
            </div>
        </div>
    </div>
    <?php
    function checkStrongPassword($pass){
        $upperStatus = false;
        $lowerStatus = false;
        $numberStatus = false;
        $specialStatus = false;

        if(preg_match('/[A-Z]/',$pass)){
            $upperStatus = true;
        }
        if(preg_match('/[a-z]/',$pass)){
            $lowerStatus = true;
        }
        if(preg_match('/[0-9]/',$pass)){
            $numberStatus = true;
        }
        if(preg_match('/[!@#%&]/',$pass)){
            $specialStatus = true;
        }
        if($upperStatus && $lowerStatus && $numberStatus && $specialStatus){
            // echo "strong password";
            return true;
        }
        else{
            // echo "weak password";
            return false;
        }
    }
    // checkStrongPassword("Hello123#");
    session_start();
    if(isset($_POST['register'])){
        $name = $_POST['userName'];
        $email = $_POST['userEmail'];
        $password= $_POST['password'];
        $confirmPassword=$_POST['confirmPassword'];
        // echo strlen($password);
        if($name != "" && $email !="" && $password != "" && $confirmPassword !=""){
            if(strlen($password )>=6 && strlen($confirmPassword)>=6){
                if($password==$confirmPassword){
                   $status =  checkStrongPassword($password);
                //    var_dump($status);
                if($status){
                    $_SESSION['email']=$email;
                    $_SESSION['password'] = password_hash($password,PASSWORD_BCRYPT);
                    echo "register success";
                }
                else{
                    echo "your password is not a strong password";
                }
                }else{
                    echo "pass word must be same";
                }
                }else{
                echo "Password must be greather than 6";
                }
             }
             else{
                echo "You need to fill";
            }
        }
    ?>
</body>
</html>