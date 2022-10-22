<?php
if(isset($_POST['submit'])){
    echo "<pre> ";
    // print_r($_FILES['file']);
    foreach($_FILES['file']['name'] as $key=>$value){
        echo $_FILES['file']['name'][$key]."<br>";
        echo $_FILES['file']['tmp_name'][$key] . "<br>";
        echo $_FILES['file']['size'][$key] . "<br>";
        echo $_FILES['file']['type'][$key] . "<br>";

        move_uploaded_file($_FILES['file']['tmp_name'][$key],"upload/".$_FILES['file']["name"][$key]);
        echo "file upload success";

    }
}
?>
<form action="<?php $_PHP_SELF ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="file[]" multiple id="">
    <button type="submit" name="submit">Upload</button>

</form>