<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Client Page</h1>
    <!-- get method  -->
    <a href="server.php?name=kyawthu&job=developer">Server</a>

    <!-- post methods  -->
    <form action="server.php" method="post" enctype="multipart/form-data">
        <input type="text" name="firstName" placeholder="enter name" required id=""> <br><br>
        <input type="text" name="secName" placeholder="enter name" required id=""><br><br>
        <hr>
        <select name="gender" id="">
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select>
        <br> <br>
        <input type="file" name="image" id=""> <br><br>
        <input type="submit" value="click to send">
    </form>
</body>
</html>