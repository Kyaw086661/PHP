
    <?php
    $connection = mysqli_connect('localhost','root','','todo_list');
    
    if(!$connection){
        echo "not connected".mysqli_connection_error();
    }
    ?>