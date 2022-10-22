<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <?php
    $errorName=$errorEmail=$errorPhone=$errorAddress="";
    $name=$email=$phone=$address="";
    if(isset($_POST['saveBtn'])){
        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $userPhone = $_POST['phone'];
        $userAddress = $_POST['address'];

        if($userName =="" && $userName == null && empty($userName)){
        $errorName = "Please fill your Name";
        }else{
            $name = $userName;
        }
        if($userEmail =="" && $userEmail == null && empty($userEmail)){
            $errorEmail = "Please fill your Email";
        }else{
            $email = $userEmail;
        }

        if($userPhone =="" && $userPhone == null && empty($userPhone)){
            $errorPhone = "Please fill your Phone";
        }else{
            $phone = $userPhone;
        }

        if($userAddress =="" && $userAddress == null && empty($userAddress)){
            $errorAddress = "Please fill your Address";
        }else{
            $address = $userAddress;
        }

        if($name!= "" && $email != "" && $phone != "" && $address != ""){
            echo $name."<br>";
            echo $email."<br>";
            echo $phone."<br>";
            echo $address."<br>";

        }

        // $errorName = "Please fill your Name";
        // $errorEmail = "Please fill your Email";
        // $errorPhone = "Please fill your Phone";
        // $errorAddress = "Please fill your Address";

    }
    ?>
    <div class="container my-5">
        <div class="row">
            <div class="col-6 offset-3 border shadow">
                <form action="" method="POST">
                    <div class="my-3 px-5">
                        <label for="name">Name</label>
                        <input type="text" name="name" placeholder="Enter Your Name" class="form-control">
                        <small class="text-danger"><?php echo $errorName;?></small>
                    </div>
                    <div class="my-3 px-5">
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Enter Your Email" class="form-control">
                        <small class="text-danger"><?php echo $errorEmail;?></small>
                    </div>
                    <div class="my-3 px-5">
                        <label for="phone">Phone</label>
                        <input type="number" name="phone" placeholder="Enter Your Phone" class="form-control">
                        <small class="text-danger"><?php echo $errorPhone;?></small>
                    </div>
                    <div class="my-3 px-5">
                        <label for="address">Address</label>
                        <textarea name="address" class="form-control" id="" cols="30" rows="5"></textarea>
                        <small class="text-danger"><?php echo $errorAddress;?></small>
                    </div>
                    <div class="my-3 px-5 float-end">
                        <input type="submit" value="Save" name="saveBtn" class="btn btn-dark text-white">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>