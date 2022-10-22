<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Server Page</h1>
    <?php
    echo "<pre>";
    // get methods 
    // var_dump($_REQUEST);
    // var_dump($_GET);
    // var_dump($_REQUEST["name"]);
    // var_dump($_REQUEST['job']);

    // post metods 
    var_dump($_POST);
    // var_dump($_REQUEST);
    var_dump($_POST['firstName']);
    echo "i am {$_POST['firstName']}";
    echo "<hr>";
    var_dump($_FILES);
    ?>
</body>
</html>