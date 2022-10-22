<?php
if(isset($_GET['submit'])){
    echo $_GET['userName'];
    echo "<br>";
    echo $_GET['password'];
    echo "<br>";

}
?>
<form action="<?php $_PHP_SELF ?>" method="GET">
    Name : <input type="text" name="userName" id=""> <br>
   Password : <input type="text" name="password" id=""> <br>
   <button type="submit" name="submit">Register</button>
</form>