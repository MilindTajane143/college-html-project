<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
if(!$conn)
{
die('could not connect'.mysql_error());
}
echo"SUCCESSFULLY CONECTION";
mysql_select_db('firstpage');
echo"TABLE CREATE SUCCESSFULLY";
mysql_close($conn);
?>