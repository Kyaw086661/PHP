<?php
    if(isset($_POST['submit'])){
        if(isset($_POST['color'])){
        $colors = $_POST['color'];
        foreach($colors as $color){
            echo $color ."<br>";
        }
    }
    }

?>
<form action="<?php $_PHP_SELF ?>" method = "post">
    <input type="checkbox" name="color[]" value="red" checked id=""> red <br> <br>
    <input type="checkbox" name="color[]" value="green" id=""> green <br> <br>
    <input type="checkbox" name="color[]" value="blue" id=""> blue <br> <br>
    <input type="checkbox" name="color[]" value="yellow" id=""> yellow <br> <br>
    <input type="checkbox" name="color[]" value="gray" id=""> gray <br> <br>
    <input type="submit" name="submit" value="choose" id="">


</form>