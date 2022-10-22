<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="create.php">Creat Page</a>
    <h1>Tast List</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name </th>
                <th>Created_at</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <!-- <tr>
                <td>1</td>
                <td>Kyaw</td>
                <td>16.10.1250</td>
                <td>
                    <a href="">Update</a>|
                    <a href="">Delete</a>

                </td>
            </tr> -->
            <?php
            include_once("db_connection.php");
            $sql = "SELECT * FROM work";
            $query = mysqli_query($connection,$sql);
            $totalRow = mysqli_num_rows($query);
            // var_dump($row);
            // echo"<pre>";
            // var_dump(mysqli_fetch_assoc($query));
            while($row = mysqli_fetch_assoc($query)){
                $time = date('d/m/Y h:i a',strtotime($row['created_at']));
                echo"
                <tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                     <td>$time</td>
                    <td>
                    <a href='update.php?id={$row['id']}'>Update</a>|
                    <a href='delete.php?id={$row['id']}'>Delete</a>

                    </td>
            </tr> 
                
                
                ";
            }

            
            ?>
        </tbody>
    </table>
</body>
</html>