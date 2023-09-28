<?php
require 'conn.php';
$sql_update="UPDATE movie SET mname='$_POST[mname]',detail='$_POST[detail]' ,duration='$_POST[duration]' ,releasedate='$_POST[releasedate]' WHERE movie_id='$_POST[movie_id]' ";
$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Edit Success <br>";
header("refresh: 1; url=http://localhost/assign/mainmenu.php");
}

?>