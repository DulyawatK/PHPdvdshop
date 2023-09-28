<?php
require 'conn.php';
$sql_update="UPDATE actor SET aname='$_POST[aname]',alastname='$_POST[alastname]' ,gender='$_POST[gender]' ,birthdate='$_POST[birthdate]' WHERE actor_id='$_POST[actor_id]' ";
$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Edit Success <br>";
header("refresh: 1; url=http://localhost/assign/mainmenu.php");
}

?>