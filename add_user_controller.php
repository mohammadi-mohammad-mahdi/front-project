<?php
include 'settings.php';
include 'db.php';
if(isset($_POST['submit'])){
$dbc = new DB($dbHost , $dbUser , $dbPass , $dbName , $dbCharset);
$sql = "INSERT INTO user (fullname,username,password,gender)
        VALUES(? , ? , ? , ?)";
          $result = $dbc -> query ($sql , $_POST['fullname'] , $_POST['username'] , $_POST['password'] , $_POST['gender']);
$dbc -> close();
echo 'با موفقیت درج شد';
}
else{
    include 'add_user.php';
}
?>
