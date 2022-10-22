<?php
if(isset($_POST['choose'])){
    $color = $_POST['myRadio'];
    echo "your color is " .$color;
}
?>
<form action="<?php $_PHP_SELF ?>" method="post">
    <input type="radio" name="myRadio" value="red" id=""> Red <br> <br>
    <input type="radio" name="myRadio" value="green" id=""> green <br> <br>
    <input type="radio" name="myRadio" value="blue" id=""> blue <br> <br>
    <input type="radio" name="myRadio" value="white" id=""> white <br> <br>
    <input type="radio" name="myRadio" value="yellow" id=""> yellow <br> <br>
    <input type="radio" name="myRadio" value="gray" id=""> gray <br> <br>
    <button type="submit" name="choose" value="submit">Choose</button>

</form>