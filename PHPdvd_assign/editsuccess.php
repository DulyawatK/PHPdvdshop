<?php
require 'conn.php';
$sql_update="UPDATE customer SET cname='$_POST[cname]',clastname='$_POST[clastname]' ,address='$_POST[address]' ,telephone='$_POST[telephone]' WHERE sid='$_POST[sid]' ";
$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Edit Success <br>";
header("refresh: 1; url=http://localhost/assign/mainmenu.php");
}

?>