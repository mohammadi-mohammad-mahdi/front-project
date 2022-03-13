<?php
include 'settings.php';
if(isset($_POST['submit'])){
$dbc = new mysqli('localhost','root','','computer');
 $dbc -> set_charset('utf8_mb4');
$sql = "INSERT INTO user (fullname,username,password)
        VALUES('{$_POST['fullname']}','{$_POST['username']}','{$_POST['password']}')";
          $result = $dbc -> query ($sql);
$dbc -> close();
echo 'با موفقیت درج شد';
}
else{
    include 'add_user.php';
}
?>