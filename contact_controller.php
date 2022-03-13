
<?php
$dbc = new mysqli('localhost','root','','computer');

$sql = "INSERT INTO message (name,email,textt)
        VALUES('{$_POST['name']}','{$_POST['email']}','{$_POST['textt']}')";

$result = $dbc -> query ($sql);

$dbc -> close();
echo('Thank you');

?>
