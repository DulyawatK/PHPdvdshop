<?php
require 'conn.php';
$sql_update="INSERT INTO movie(movie_id,mname,detail,duration,releasedate) VALUES ('$_POST[movie_id]','$_POST[mname]','$_POST[detail]' ,'$_POST[duration]' ,'$_POST[releasedate]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Insert Success <br>";
header("refresh: 1; url=http://localhost/assign/mainmenu.php");
}

?>