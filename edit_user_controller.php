<?php
include 'settings.php';
if(isset($_POST['submit'])){
  $id = $_GET['id'];
$dbc = new mysqli('localhost','root','','computer');
$dbc -> set_charset('utf8_mb4');
$sql = "UPDATE user SET
       fullname = '{$_POST['fullname']}',
       username = '{$_POST['username']}',
       password =  '{$_POST['password']}'
       WHERE id = {$_GET['id']}";
          $result = $dbc -> query ($sql);
$dbc -> close();
echo 'با موفقیت درج شد';
}
else{
    include 'edit_user.php';
}
?>