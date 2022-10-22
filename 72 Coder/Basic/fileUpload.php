<?php
if(isset($_POST['submit'])){
    echo "<pre> ";
    print_r($_FILES['file']);
    move_uploaded_file($_FILES['file']['tmp_name'],"upload/".$_FILES['file']['name']);
    echo "upload success";

}
?>
<form action="<?php $_PHP_SELF ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="file" id="">
    <button type="submit" name="submit">Upload</button>
</form>