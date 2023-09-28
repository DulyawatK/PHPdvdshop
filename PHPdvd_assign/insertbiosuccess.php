<?php
require 'conn.php';
$sql_update="INSERT INTO customer(sid,cname,clastname,address,telephone) VALUES ('$_POST[sid]','$_POST[cname]','$_POST[clastname]' ,'$_POST[address]' ,'$_POST[telephone]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Insert Success <br>";
header("refresh: 1; url=http://localhost/assign/mainmenu.php");
}

?>