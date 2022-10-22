<?php
if(isset($_POST['register'])){
    // echo "helo";
    echo "<pre>";
    echo $_POST['userName']."<br>";
    echo $_POST['userEmail']."<br>";
    echo $_POST['userPassword']."<br>";
    echo $_POST['gender']."<br>";

    $subjects = $_POST['subjects'];
    foreach($subjects as $subject ){
        echo $subject ."<br>";
    }


    print_r($_FILES['file']);
    foreach($_FILES['file']['name'] as $key=>$value ){
        echo $_FILES['file']['name'][$key]."<br>";
        echo $_FILES['file']['tmp_name'][$key]."<br>";

    }

}
?>
<form action="<?php $_PHP_SELF ?>" method="POST" enctype="multipart/form-data">

Name : <input type="text" name="userName" id=""> <br><br>
Mail : <input type="text" name="userEmail" id=""> <br><br>
Pass : <input type="text" name="userPassword" id=""> <br>
<h1>Choose Gender</h1>
<!-- <input type="radio" name="male" value="male" id=""> Male <br><br> -->
<!-- <input type="radio" name="female" value="female" id=""> Female <br> -->
<input type="radio" name="gender" value="male" id=""> Male
<input type="radio" name="gender" value="female" id=""> Female <br> <br>

<h1>Choose Subject</h1>
<input type="checkbox" name="subjects[]" value="PHP" id=""> PHP <br><br>
<input type="checkbox" name="subjects[]" value="Laravel" id=""> Laravel <br><br>
<input type="checkbox" name="subjects[]" value="JavaScript" id=""> JavaScript <br><br>
<input type="checkbox" name="subjects[]" value="MySQL" id=""> MySQL <br><br>
<input type="checkbox" name="subjects[]" value="Python" id=""> Python <br><br>
<input type="file" name="file[]"  multiple id=""><br><br>
<button type="submit" name="register">Register</button>

</form>