<?php
require 'conn.php';
$sql_update="INSERT INTO actor(actor_id,aname,alastname,gender,birthdate) VALUES ('$_POST[actor_id]','$_POST[aname]','$_POST[alastname]' ,'$_POST[gender]' ,'$_POST[birthdate]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Insert Success <br>";
header("refresh: 1; url=http://localhost/assign/mainmenu.php");
}

?>