<?php
// call file connection
$id=$_GET['clientId'];
//validation ID
$link=mysql_connect("localhost","root","");
mysql_select_db("proclient");
$sql="SELECT clientProfile from client WHERE clientID=$id";
$result=mysql_query("$sql");
$row=mysql_fetch_assoc($result);
mysql_close($link);
header("Content-type image/jpeg");
echo $row['clientProfile'];
?>
