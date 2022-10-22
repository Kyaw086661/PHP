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
            <div class="col-4 text-center px-5">
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
                    <h3>Login</h3>
                </div>
            <div class="p-3 card-body">
                <form action="" method="post">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="enter email" class="form-control mb-3" id="">
                    <label for="password">Password</label>
                    <input type="text" name="password" placeholder="enter password" class="form-control" id="">
                    <button type="submit" name="loginBtn" class="btn mt-3 float-end btn-dark">Login</button>
                </form>
            </div>
            </div>
        </div>
    </div>
    <?php
    session_start();
    if(isset($_POST['loginBtn'])){
        $userEmail = $_POST['email'];
        $userPassword = $_POST['password'];
        if($userEmail != "" && $userPassword!=""){
            if($userEmail == $_SESSION['email'] && password_verify($userPassword,$_SESSION['password'])){
                echo "login success";
            }else{
                echo "login fail";
            }
        }else{
            echo "need to fill";
        }
    }
    ?>
</body>
</html>