<?php
include 'settings.php';
include 'db.php';
if(isset($_POST['submit'])){
  $id = $_GET['id'];
  $dbc = new DB($dbHost , $dbUser , $dbPass , $dbName , $dbCharset);
  if($_POST['password'] == ''){
    $sql = "UPDATE user SET
            fullname = ?,
            username = ?,
            gender = ?
            WHERE id = ?";
    $result = $dbc -> query( $sql, $_POST['fullname'], $_POST['username'], $_POST['gender'], $_GET['id'] );
}
else{
$sql = "UPDATE user SET
       fullname = ?,
       username = ?,
       password = ?,
       gender = ? 
       WHERE id = ?";
        $result = $dbc -> query ($sql , $_POST['fullname'] , $_POST['username'] , $_POST['password'] , $_POST['gender'] , $_GET['id'] );
}
$dbc -> close();
echo 'با موفقیت ویرایش شد';
}
else{
  $dbc = new DB($dbHost , $dbUser , $dbPass , $dbName , $dbCharset);
$sql = "SELECT * FROM user
       WHERE id = ?";
      $result = $dbc -> query ($sql , $_GET['id'] );
      $row = $result -> fetchArray();
$dbc -> close();
    include 'edit_user.php';
}
?>
