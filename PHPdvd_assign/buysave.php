<?php
require 'conn.php';
$sql_update="INSERT INTO customer_movie(sid,movie_id) VALUES ('$_POST[sid]','$_POST[movie_id]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Insert Success <br>";
header("refresh: 1; url=http://localhost/assign/mainmenu.php");
}

?>